class JobListController {
    constructor($rootScope, SharedData, SearchService, $stateParams) {
        'ngInject';
        this.SearchService = SearchService;
        this.SharedData = SharedData;
        // Set the view state
        this.SharedData.viewState = 'overview-closed';

        if ($stateParams.getHired) {
            this.SearchService.searchParams.getHired = true;
        }else {
            this.SearchService.searchParams.getHired = false;

            $rootScope.$on('$viewContentLoaded', function() {
               document.body.scrollTop = document.documentElement.scrollTop = jQuery('#main').offset().top || 0;
            });
        }
    }

    loadMoreData() {
        this.SearchService.searchParams.reloadAllData = false;
        this.SearchService.findJobs();
    }

    clearSearchParamsAndLoadData() {
        this.SearchService.helper.clearSearchParams();
        this.SearchService.searchParams.reloadAllData = true;
        this.SearchService.findJobs();
    }


}

export default JobListController;
