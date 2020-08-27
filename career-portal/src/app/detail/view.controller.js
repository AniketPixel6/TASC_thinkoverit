class JobViewController {
    /* jshint -W072 */
    constructor($rootScope, $window, $attrs, $location, $log, $stateParams, ShareService, SearchService, SharedData, configuration, VerifyLI, APPLIED_JOBS_KEY, MobileDetection) {
        'ngInject';
        // NG Dependencies
        this.$window = $window;
        this.$location = $location;
        this.$log = $log;

        // Dependencies
        this.SharedData = SharedData;
        this.ShareService = ShareService;
        this.SearchService = SearchService;

        this.configuration = configuration;

        // Variables
        this.isLinkedInEnabled = VerifyLI.verified && !(MobileDetection.browserData.os.ios && MobileDetection.browserData.browser.safari);
        this.email = '';
        this.relatedJobs = [];
        this.SharedData.viewState = 'overview-open';
        this.APPLIED_JOBS_KEY = APPLIED_JOBS_KEY;
        this.alreadyApplied = false;

        if ($attrs && $attrs.jobId) {
            this.jobId = $attrs.jobId;
        }else {
            this.jobId = $stateParams.id;
        }
        SearchService.loadJobData(this.jobId,  (job) => {
            console.log(job);
            // Unset details
            SearchService.currentDetailData = null;
            // Set details
            SearchService.currentDetailData = job;
            this.job = job;

        }, function () {
            
        });

        // Check session storage for already applied jobs
        this.checkSessionStorage();

        $rootScope.$on('$viewContentLoading', function() {
           document.body.scrollTop = document.documentElement.scrollTop = jQuery('#main').offset().top || 0;
        });
        // Listen for ModalSuccess
        $rootScope.$on('ModalSuccess', angular.bind(this, function () {
            this.checkSessionStorage();
        }));

    }

    checkSessionStorage() {
        // Check session storage to see if this job was already applied to for this session
        let alreadyAppliedJobs = sessionStorage.getItem(this.APPLIED_JOBS_KEY);
        if (alreadyAppliedJobs) {
            let alreadyAppliedJobsArray = JSON.parse(alreadyAppliedJobs);
            this.alreadyApplied = (alreadyAppliedJobsArray.indexOf(this.job.id) !== -1);
        }
    }

    shareFacebook() {
        this.ShareService.facebook(this.job);
    }

    shareTwitter() {
        this.ShareService.twitter(this.job);
    }

    shareLinkedin() {
        this.ShareService.linkedin(this.job);
    }

    emailLink() {
        return this.ShareService.emailLink(this.job);
    }

    print() {
        this.$window.print();
    }

    applyModal() {
        var details = document.getElementsByClassName('single-ind-wrapper');
        var desc = document.getElementsByClassName('job-description');
        
        if(details && details[0]){
            details[0].style.display = 'none';
        }
        if(desc && desc[0]){
            desc[0].style.display = 'none';
        }
        this.SharedData.modalState = 'open';
    }


    loadJobsWithCategory(categoryID) {
        this.SearchService.helper.emptyCurrentDataList();
        this.SearchService.helper.resetStartAndTotal();
        this.SearchService.helper.clearSearchParams();
        this.SearchService.searchParams.category.push(categoryID);
        this.SearchService.findJobs();
        this.$location.path('/jobs');
    }
}

export default JobViewController;
