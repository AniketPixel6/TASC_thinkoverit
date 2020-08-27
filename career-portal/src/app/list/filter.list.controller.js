class JobFilteredListController {
    constructor(SharedData, SearchService, $stateParams) {
        'ngInject';
        this.SearchService = SearchService;
        this.SharedData = SharedData;
        this.$stateParams = $stateParams;
        // Set the view state
        this.SharedData.viewState = 'overview-closed';
        this.loadRelatedJobs();
    }

    loadRelatedJobs() {
        if (!this.$stateParams.cat) {
            return;
        }
        this.SearchService.searchParams.category = [];
        this.SearchService.searchParams.category.push(this.$stateParams.cat);
        this.SearchService.searchParams.reloadAllData = true;
        this.SearchService.searchParams.filteredCategory = true;

        this.SearchService.findJobs();
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

export default JobFilteredListController;
