/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';

	var _index = __webpack_require__(1);

	var _index2 = _interopRequireDefault(_index);

	var _index3 = __webpack_require__(2);

	var _index4 = _interopRequireDefault(_index3);

	var _index5 = __webpack_require__(3);

	var _index6 = _interopRequireDefault(_index5);

	var _list = __webpack_require__(4);

	var _list2 = _interopRequireDefault(_list);

	var _filterList = __webpack_require__(5);

	var _filterList2 = _interopRequireDefault(_filterList);

	var _detail = __webpack_require__(6);

	var _detail2 = _interopRequireDefault(_detail);

	var _view = __webpack_require__(7);

	var _view2 = _interopRequireDefault(_view);

	var _modal = __webpack_require__(8);

	var _modal2 = _interopRequireDefault(_modal);

	var _sidebar = __webpack_require__(9);

	var _sidebar2 = _interopRequireDefault(_sidebar);

	var _main = __webpack_require__(10);

	var _main2 = _interopRequireDefault(_main);

	var _sidebar3 = __webpack_require__(11);

	var _sidebar4 = _interopRequireDefault(_sidebar3);

	var _header = __webpack_require__(12);

	var _header2 = _interopRequireDefault(_header);

	var _modal3 = __webpack_require__(13);

	var _modal4 = _interopRequireDefault(_modal3);

	var _search = __webpack_require__(14);

	var _search2 = _interopRequireDefault(_search);

	var _mobiledetection = __webpack_require__(15);

	var _mobiledetection2 = _interopRequireDefault(_mobiledetection);

	var _share = __webpack_require__(16);

	var _share2 = _interopRequireDefault(_share);

	var _apply = __webpack_require__(17);

	var _apply2 = _interopRequireDefault(_apply);

	var _shared = __webpack_require__(18);

	var _shared2 = _interopRequireDefault(_shared);

	var _linkedin = __webpack_require__(19);

	var _linkedin2 = _interopRequireDefault(_linkedin);

	var _verifyli = __webpack_require__(20);

	var _verifyli2 = _interopRequireDefault(_verifyli);

	var _cache = __webpack_require__(21);

	var _cache2 = _interopRequireDefault(_cache);

	var _eeoc = __webpack_require__(22);

	var _eeoc2 = _interopRequireDefault(_eeoc);

	var _striphtml = __webpack_require__(23);

	var _striphtml2 = _interopRequireDefault(_striphtml);

	var _omitfilters = __webpack_require__(24);

	var _omitfilters2 = _interopRequireDefault(_omitfilters);

	var _displayDate = __webpack_require__(25);

	var _displayDate2 = _interopRequireDefault(_displayDate);

	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

	angular.module('CareerPortal', ['ngAnimate', 'ngTouch', '720kb.datepicker', 'angular-loading-bar', 'ngSanitize', 'ui.select', 'ui.router', 'ngFileUpload', '720kb.tooltips', 'ng-fastclick', 'ngLocalize', 'ngLocalize.Config', 'ngLocalize.InstalledLanguages', 'ngLocalize.Events']).constant('moment', moment).constant('configuration', {}).constant('localeConf', {}).constant('localeSupported', []).constant('APPLIED_JOBS_KEY', 'APPLIED_JOBS_KEY').config(_index2.default).config(_index4.default).config(_index6.default).directive('main', function () {
	    return new _main2.default();
	}).directive('careerPortalSidebar', function () {
	    return new _sidebar4.default();
	}).directive('careerPortalHeader', function () {
	    return new _header2.default();
	}).directive('careerPortalModal', function () {
	    return new _modal4.default();
	}).controller('JobListController', _list2.default).controller('JobFilteredListController', _filterList2.default).controller('JobDetailController', _detail2.default).controller('JobViewController', _view2.default).controller('CareerPortalModalController', _modal2.default).controller('CareerPortalSidebarController', _sidebar2.default).filter('stripHtml', function () {
	    return new _striphtml2.default();
	}).filter('omitFilters', function () {
	    return new _omitfilters2.default();
	}).filter('displayDate', _displayDate2.default).factory('SharedData', function () {
	    return new _shared2.default();
	}).service('ShareService', _share2.default).service('ApplyService', _apply2.default).service('SearchService', _search2.default).service('LinkedInService', _linkedin2.default).service('MobileDetection', _mobiledetection2.default).service('VerifyLI', _verifyli2.default).service('CacheService', _cache2.default).service('EeocService', _eeoc2.default).config(['cfpLoadingBarProvider', function (cfpLoadingBarProvider) {
	    cfpLoadingBarProvider.parentSelector = '#loading-bar-container';
	    cfpLoadingBarProvider.spinnerTemplate = '<div class="loading-wrap">Loading...</div>';
	}]);

	// Deferring the bootstrap to make sure we have loaded the config from app.json
	/* moment:false */
	deferredBootstrapper.bootstrap({
	    element: document.body,
	    module: 'CareerPortal'
	});

/***/ }),
/* 1 */
/***/ (function(module, exports) {

	'use strict';

	routerConfig.$inject = ["$stateProvider"];
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	function routerConfig($stateProvider) {
	    'ngInject';

	    $stateProvider.state('jobs', {
	        url: '/jobs?getHired',
	        templateUrl: 'app/list/list.html',
	        controller: 'JobListController',
	        controllerAs: 'list'
	    }).state('filteredjobs', {
	        url: '/filteredjobs/:cat',
	        templateUrl: 'app/list/filter-list.html',
	        controller: 'JobFilteredListController',
	        controllerAs: 'list'
	    }).state('registercv', {
	        url: '/registercv',
	        templateUrl: 'app/modal/modal.html',
	        controller: 'CareerPortalModalController',
	        controllerAs: 'modal'
	    }).state('detail', {
	        url: '/jobs/:id',
	        templateUrl: 'app/detail/detail.html',
	        controller: 'JobDetailController',
	        controllerAs: 'detail'
	    });

	    //$urlRouterProvider.otherwise('/jobs');
	}

	exports.default = routerConfig;

/***/ }),
/* 2 */
/***/ (function(module, exports) {

	'use strict';

	localeConfig.$inject = ["configuration", "localeConf", "localeSupported"];
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	function localeConfig(configuration, localeConf, localeSupported) {
	    'ngInject';

	    localeConf.appBasePath = '/career-portal';
	    localeConf.basePath = localeConf.appBasePath + '/dist/res';
	    localeConf.defaultLocale = configuration.defaultLocale;
	    localeConf.sharedDictionary = 'common';
	    localeConf.fileExtension = '.json';
	    localeConf.persistSelection = true;
	    localeConf.cookieName = 'COOKIE_LOCALE_LANG';
	    localeConf.observableAttrs = new RegExp('^data-(?!ng-|i18n)');
	    localeConf.delimiter = '::';

	    localeSupported.concat(configuration.supportedLocales);
	}

	exports.default = localeConfig;

/***/ }),
/* 3 */
/***/ (function(module, exports) {

	'use strict';

	jsonConfiguration.$inject = ["configuration"];
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	function jsonConfiguration(configuration) {
	    'ngInject';

	    configuration.acceptedResumeTypes = ['html', 'text', 'txt', 'pdf', 'doc', 'docx', 'rtf', 'odt'];

	    configuration.companyName = 'TASCOUTSOURCING';
	    configuration.defaultLocale = 'en-US';
	    configuration.supportedLocales = ['en-US', 'fr-FR'];
	    configuration.minUploadSize = 4096;
	    configuration.maxRelatedJobs = 5;
	    configuration.maxUploadSize = 5242880;
	    configuration.service = {
	        batchSize: 500,
	        corpToken: '1K4U2S',
	        port: null,
	        swimlane: 22,
	        registerJobId: 3591
	    };

	    configuration.integrations = { linkedin: { clientId: '' } };
	    configuration.defaultGridState = 'list-view';
	    configuration.eeoc = {
	        genderRaceEthnicity: false,
	        veteran: false,
	        disability: false
	    };
	}

	exports.default = jsonConfiguration;

/***/ }),
/* 4 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var JobListController = function () {
	    JobListController.$inject = ["$rootScope", "SharedData", "SearchService", "$stateParams"];
	    function JobListController($rootScope, SharedData, SearchService, $stateParams) {
	        'ngInject';

	        _classCallCheck(this, JobListController);

	        this.SearchService = SearchService;
	        this.SharedData = SharedData;
	        // Set the view state
	        this.SharedData.viewState = 'overview-closed';

	        if ($stateParams.getHired) {
	            this.SearchService.searchParams.getHired = true;
	        } else {
	            this.SearchService.searchParams.getHired = false;

	            $rootScope.$on('$viewContentLoaded', function () {
	                document.body.scrollTop = document.documentElement.scrollTop = jQuery('#main').offset().top || 0;
	            });
	        }
	    }

	    _createClass(JobListController, [{
	        key: 'loadMoreData',
	        value: function loadMoreData() {
	            this.SearchService.searchParams.reloadAllData = false;
	            this.SearchService.findJobs();
	        }
	    }, {
	        key: 'clearSearchParamsAndLoadData',
	        value: function clearSearchParamsAndLoadData() {
	            this.SearchService.helper.clearSearchParams();
	            this.SearchService.searchParams.reloadAllData = true;
	            this.SearchService.findJobs();
	        }
	    }]);

	    return JobListController;
	}();

	exports.default = JobListController;

/***/ }),
/* 5 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var JobFilteredListController = function () {
	    JobFilteredListController.$inject = ["SharedData", "SearchService", "$stateParams"];
	    function JobFilteredListController(SharedData, SearchService, $stateParams) {
	        'ngInject';

	        _classCallCheck(this, JobFilteredListController);

	        this.SearchService = SearchService;
	        this.SharedData = SharedData;
	        this.$stateParams = $stateParams;
	        // Set the view state
	        this.SharedData.viewState = 'overview-closed';
	        this.loadRelatedJobs();
	    }

	    _createClass(JobFilteredListController, [{
	        key: 'loadRelatedJobs',
	        value: function loadRelatedJobs() {
	            if (!this.$stateParams.cat) {
	                return;
	            }
	            this.SearchService.searchParams.category = [];
	            this.SearchService.searchParams.category.push(this.$stateParams.cat);
	            this.SearchService.searchParams.reloadAllData = true;
	            this.SearchService.searchParams.filteredCategory = true;

	            this.SearchService.findJobs();
	        }
	    }, {
	        key: 'loadMoreData',
	        value: function loadMoreData() {
	            this.SearchService.searchParams.reloadAllData = false;
	            this.SearchService.findJobs();
	        }
	    }, {
	        key: 'clearSearchParamsAndLoadData',
	        value: function clearSearchParamsAndLoadData() {
	            this.SearchService.helper.clearSearchParams();
	            this.SearchService.searchParams.reloadAllData = true;
	            this.SearchService.findJobs();
	        }
	    }]);

	    return JobFilteredListController;
	}();

	exports.default = JobFilteredListController;

/***/ }),
/* 6 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var JobDetailController = function () {
	    /* jshint -W072 */
	    JobDetailController.$inject = ["$rootScope", "$window", "$location", "$log", "$stateParams", "ShareService", "SearchService", "SharedData", "configuration", "VerifyLI", "APPLIED_JOBS_KEY", "MobileDetection"];
	    function JobDetailController($rootScope, $window, $location, $log, $stateParams, ShareService, SearchService, SharedData, configuration, VerifyLI, APPLIED_JOBS_KEY, MobileDetection) {
	        'ngInject';
	        // NG Dependencies

	        var _this = this;

	        _classCallCheck(this, JobDetailController);

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

	        //if ($attrs && $attrs.jobId) {
	        //   this.jobId = $attrs.jobId;
	        //}else {
	        this.jobId = $stateParams.id;
	        //}
	        SearchService.loadJobData(this.jobId, function (job) {
	            console.log(job);
	            // Unset details
	            SearchService.currentDetailData = null;
	            // Set details
	            SearchService.currentDetailData = job;
	            _this.job = job;
	        }, function () {});

	        // Init functions
	        this.loadRelatedJobs();

	        // Check session storage for already applied jobs
	        this.checkSessionStorage();

	        $rootScope.$on('$viewContentLoading', function () {
	            document.body.scrollTop = document.documentElement.scrollTop = jQuery('#main').offset().top || 0;
	        });
	        // Listen for ModalSuccess
	        $rootScope.$on('ModalSuccess', angular.bind(this, function () {
	            this.checkSessionStorage();
	        }));
	    }

	    _createClass(JobDetailController, [{
	        key: 'checkSessionStorage',
	        value: function checkSessionStorage() {
	            // Check session storage to see if this job was already applied to for this session
	            var alreadyAppliedJobs = sessionStorage.getItem(this.APPLIED_JOBS_KEY);
	            if (alreadyAppliedJobs) {
	                var alreadyAppliedJobsArray = JSON.parse(alreadyAppliedJobs);
	                this.alreadyApplied = alreadyAppliedJobsArray.indexOf(this.job.id) !== -1;
	            }
	        }
	    }, {
	        key: 'shareFacebook',
	        value: function shareFacebook() {
	            this.ShareService.facebook(this.job);
	        }
	    }, {
	        key: 'shareTwitter',
	        value: function shareTwitter() {
	            this.ShareService.twitter(this.job);
	        }
	    }, {
	        key: 'shareLinkedin',
	        value: function shareLinkedin() {
	            this.ShareService.linkedin(this.job);
	        }
	    }, {
	        key: 'emailLink',
	        value: function emailLink() {
	            return this.ShareService.emailLink(this.job);
	        }
	    }, {
	        key: 'print',
	        value: function print() {
	            this.$window.print();
	        }
	    }, {
	        key: 'applyModal',
	        value: function applyModal() {
	            this.SharedData.modalState = 'open';
	        }
	    }, {
	        key: 'loadRelatedJobs',
	        value: function loadRelatedJobs() {
	            var _this2 = this;

	            var job = this.job || {},
	                category = job.publishedCategory || {},
	                categoryId = category.id ? category.id : '',
	                jobId = job.id;

	            if (categoryId || jobId) {
	                this.SearchService.loadJobDataByCategory(categoryId, jobId).then(function (data) {
	                    _this2.relatedJobs = data;
	                });
	            } else {
	                this.$log.error('No job or category was provided.');
	            }
	        }
	    }, {
	        key: 'loadJobsWithCategory',
	        value: function loadJobsWithCategory(categoryID) {
	            this.SearchService.helper.emptyCurrentDataList();
	            this.SearchService.helper.resetStartAndTotal();
	            this.SearchService.helper.clearSearchParams();
	            this.SearchService.searchParams.category.push(categoryID);
	            this.SearchService.findJobs();
	            this.$location.path('/jobs');
	        }
	    }]);

	    return JobDetailController;
	}();

	exports.default = JobDetailController;

/***/ }),
/* 7 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var JobViewController = function () {
	    /* jshint -W072 */
	    JobViewController.$inject = ["$rootScope", "$window", "$attrs", "$location", "$log", "$stateParams", "ShareService", "SearchService", "SharedData", "configuration", "VerifyLI", "APPLIED_JOBS_KEY", "MobileDetection"];
	    function JobViewController($rootScope, $window, $attrs, $location, $log, $stateParams, ShareService, SearchService, SharedData, configuration, VerifyLI, APPLIED_JOBS_KEY, MobileDetection) {
	        'ngInject';
	        // NG Dependencies

	        var _this = this;

	        _classCallCheck(this, JobViewController);

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
	        } else {
	            this.jobId = $stateParams.id;
	        }
	        SearchService.loadJobData(this.jobId, function (job) {
	            console.log(job);
	            // Unset details
	            SearchService.currentDetailData = null;
	            // Set details
	            SearchService.currentDetailData = job;
	            _this.job = job;
	        }, function () {});

	        // Check session storage for already applied jobs
	        this.checkSessionStorage();

	        $rootScope.$on('$viewContentLoading', function () {
	            document.body.scrollTop = document.documentElement.scrollTop = jQuery('#main').offset().top || 0;
	        });
	        // Listen for ModalSuccess
	        $rootScope.$on('ModalSuccess', angular.bind(this, function () {
	            this.checkSessionStorage();
	        }));
	    }

	    _createClass(JobViewController, [{
	        key: 'checkSessionStorage',
	        value: function checkSessionStorage() {
	            // Check session storage to see if this job was already applied to for this session
	            var alreadyAppliedJobs = sessionStorage.getItem(this.APPLIED_JOBS_KEY);
	            if (alreadyAppliedJobs) {
	                var alreadyAppliedJobsArray = JSON.parse(alreadyAppliedJobs);
	                this.alreadyApplied = alreadyAppliedJobsArray.indexOf(this.job.id) !== -1;
	            }
	        }
	    }, {
	        key: 'shareFacebook',
	        value: function shareFacebook() {
	            this.ShareService.facebook(this.job);
	        }
	    }, {
	        key: 'shareTwitter',
	        value: function shareTwitter() {
	            this.ShareService.twitter(this.job);
	        }
	    }, {
	        key: 'shareLinkedin',
	        value: function shareLinkedin() {
	            this.ShareService.linkedin(this.job);
	        }
	    }, {
	        key: 'emailLink',
	        value: function emailLink() {
	            return this.ShareService.emailLink(this.job);
	        }
	    }, {
	        key: 'print',
	        value: function print() {
	            this.$window.print();
	        }
	    }, {
	        key: 'applyModal',
	        value: function applyModal() {
	            var details = document.getElementsByClassName('single-ind-wrapper');
	            var desc = document.getElementsByClassName('job-description');

	            if (details && details[0]) {
	                details[0].style.display = 'none';
	            }
	            if (desc && desc[0]) {
	                desc[0].style.display = 'none';
	            }
	            this.SharedData.modalState = 'open';
	        }
	    }, {
	        key: 'loadJobsWithCategory',
	        value: function loadJobsWithCategory(categoryID) {
	            this.SearchService.helper.emptyCurrentDataList();
	            this.SearchService.helper.resetStartAndTotal();
	            this.SearchService.helper.clearSearchParams();
	            this.SearchService.searchParams.category.push(categoryID);
	            this.SearchService.findJobs();
	            this.$location.path('/jobs');
	        }
	    }]);

	    return JobViewController;
	}();

	exports.default = JobViewController;

/***/ }),
/* 8 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var CareerPortalModalController = function () {
	    /* jshint -W072 */
	    CareerPortalModalController.$inject = ["$rootScope", "$location", "$state", "$window", "$filter", "$log", "SharedData", "SearchService", "ApplyService", "configuration", "locale", "LinkedInService", "ShareService", "VerifyLI", "APPLIED_JOBS_KEY", "EeocService"];
	    function CareerPortalModalController($rootScope, $location, $state, $window, $filter, $log, SharedData, SearchService, ApplyService, configuration, locale, LinkedInService, ShareService, VerifyLI, APPLIED_JOBS_KEY, EeocService) {
	        'ngInject';
	        // NG Dependencies

	        _classCallCheck(this, CareerPortalModalController);

	        this.$location = $location;
	        this.$rootScope = $rootScope;
	        this.$window = $window;
	        this.$state = $state;
	        this.$filter = $filter;
	        this.$log = $log;

	        // Dependencies
	        this.configuration = configuration;
	        this.SharedData = SharedData;
	        this.SearchService = SearchService;
	        this.ShareService = ShareService;
	        this.ApplyService = ApplyService;
	        this.LinkedInService = LinkedInService;
	        this.EeocService = EeocService;
	        this.locale = locale;

	        // Variables
	        this.isToolTipHidden = true;
	        this.currentToolTip = 0;
	        this.APPLIED_JOBS_KEY = APPLIED_JOBS_KEY;
	        this.isLinkedInActive = VerifyLI.verified;
	        // Create a local variable to store user's email address for sendEmailLink
	        this.email = '';
	        // Boolean to indicate if the user has attempted to apply via LinkedIn
	        this.hasAttemptedLIApply = false;
	        // Resume object that contains the parsed LinkedIn data and the user's input
	        this.linkedInData = {
	            header: '',
	            resume: '',
	            footer: ''
	        };

	        this.successMessageKey = 'modal.successHeading';
	        // Load directive with modal closed by default
	        this.closeModal();
	    }

	    _createClass(CareerPortalModalController, [{
	        key: 'applyWithLinkedIn',
	        value: function applyWithLinkedIn() {
	            var _this = this;

	            this.hasAttemptedLIApply = true;
	            // this.SharedData.modalState = 'open';
	            this.LinkedInService.getUser().then(function (linkedInUser) {
	                _this.ApplyService.form.firstName = linkedInUser.firstName || '';
	                _this.ApplyService.form.lastName = linkedInUser.lastName || '';
	                _this.ApplyService.form.email = linkedInUser.emailAddress || '';
	                _this.ApplyService.form.phone = linkedInUser.phoneNumbers ? linkedInUser.phoneNumbers.values[0].phoneNumber : '';
	                _this.ApplyService.form.resumeInfo = _this.formatResume(linkedInUser);
	            });
	            if (this.LinkedInService.userIsLoaded === true) {
	                this.SharedData.modalState = 'open';
	            }
	        }
	    }, {
	        key: 'closeModal',
	        value: function closeModal(applyForm) {
	            this.SharedData.modalState = 'closed';
	            this.showForm = true;
	            this.hasAttemptedLIApply = false;
	            // Clear the errors if we have the form
	            var details = document.getElementsByClassName('single-ind-wrapper');
	            var desc = document.getElementsByClassName('job-description');

	            if (details && details[0]) {
	                details[0].style.display = 'block';
	            }
	            if (desc && desc[0]) {
	                desc[0].style.display = 'block';
	            }

	            if (applyForm) {
	                applyForm.$setPristine();
	            }
	            var modal = document.getElementById('modal-container');
	            if (modal) {
	                modal.scrollTop = 0;
	            }
	        }
	    }, {
	        key: 'validateResume',
	        value: function validateResume(file) {
	            if (!file || !file.name) {
	                this.updateUploadClass(false);
	                return false;
	            }

	            // First check the type
	            var fileArray = file.name.split('.'),
	                fileExtension = fileArray[fileArray.length - 1];

	            if (this.configuration.acceptedResumeTypes.indexOf((fileExtension || '').toLowerCase()) === -1) {
	                this.resumeUploadErrorMessage = (fileExtension || '').toUpperCase() + ' ' + this.$filter('i18n')('modal.resumeInvalidFormat');
	                this.updateUploadClass(false);
	                this.isSubmitting = false;
	                return false;
	            }

	            // Now check the size
	            if (file.size > this.configuration.maxUploadSize) {
	                this.resumeUploadErrorMessage = this.$filter('i18n')('modal.resumeToBig') + ' (' + this.$filter('i18n')('modal.maxLabel') + ': ' + this.configuration.maxUploadSize / (1024 * 1024) + 'MB)';
	                this.updateUploadClass(false);
	                this.isSubmitting = false;
	                return false;
	            } else if (file.size < this.configuration.minUploadSize) {
	                this.resumeUploadErrorMessage = this.$filter('i18n')('modal.resumeToSmall') + ' (' + this.$filter('i18n')('modal.minLabel') + ': ' + this.configuration.minUploadSize / 1024 + 'KB)';
	                this.updateUploadClass(false);
	                this.isSubmitting = false;
	                return false;
	            }

	            this.resumeUploadErrorMessage = null;
	            this.updateUploadClass(true);
	            return true;
	        }
	    }, {
	        key: 'updateUploadClass',
	        value: function updateUploadClass(valid) {
	            var $uploadContainer = document.querySelector('.upload-container');
	            if ($uploadContainer) {
	                $uploadContainer.classList.toggle('valid', valid);
	            }
	        }
	    }, {
	        key: 'enableSendButton',
	        value: function enableSendButton(isFormValid) {
	            var resume = this.ApplyService.form.resumeInfo;

	            if (isFormValid && (resume || this.linkedInData.resume)) {
	                if (this.linkedInData.resume.length !== 0 || resume.type) {
	                    return false;
	                }
	            } else if (this.email) {
	                return false;
	            }
	            return true;
	        }
	    }, {
	        key: 'showTooltip',
	        value: function showTooltip(toolTipType) {
	            // 0: FileTypes
	            // 1: EEOC Gender, Race, Ethnicity
	            // 2: EEOC  Race/Ethnicity
	            // 3: EEOC Veteran
	            // 4: EEOC Disability
	            if (toolTipType || toolTipType === 0) {
	                this.isToolTipHidden = false;
	                this.currentToolTip = toolTipType;
	            }
	        }
	    }, {
	        key: 'hideTooltip',
	        value: function hideTooltip() {
	            this.isToolTipHidden = true;
	        }
	    }, {
	        key: 'formatResume',
	        value: function formatResume(userProfile) {
	            var lineBreak = '\n',
	                hardBreak = '\n\n\n',
	                months = this.$filter('i18n')('modal.Months').split('_'),
	                today = new Date(),
	                friendlyDate = today.toLocaleDateString() + ' ' + this.$filter('i18n')('modal.at') + ' ' + today.toLocaleTimeString(),
	                legal = this.$filter('i18n')('modal.profileReceived') + ' ' + friendlyDate + '. \n\n' + this.$filter('i18n')('modal.legal') + '\n\n';

	            // First Name
	            this.linkedInData.header = (userProfile.formattedName || '') + lineBreak;
	            // Email Address
	            this.linkedInData.header += (userProfile.emailAddress || '') + lineBreak;
	            // Location
	            if (this.checkNested(userProfile, 'location', 'name')) {
	                this.linkedInData.header += (userProfile.location.name || '') + ', ';
	                if (userProfile.location.country) {
	                    this.linkedInData.header += (userProfile.location.country.code.toUpperCase() || '') + hardBreak;
	                }
	            }
	            // Clear Instance of resume
	            this.linkedInData.resume = '';
	            // Education
	            if (this.checkNested(userProfile, 'educations', 'values')) {
	                //if (userProfile.educations && userProfile.educations.values) {
	                var education = userProfile.educations.values;
	                this.linkedInData.resume += this.$filter('i18n')('modal.education') + lineBreak;
	                for (var i = 0; i < education.length; i++) {
	                    // Add Degree Type
	                    if (education[i].degree) {
	                        this.linkedInData.resume += education[i].degree + ' ';
	                    }
	                    // Add Field of Study Type
	                    if (education[i].fieldOfStudy) {
	                        this.linkedInData.resume += education[i].fieldOfStudy + ' ';
	                    }
	                    // Add line break
	                    if (education[i].degree || education[i].fieldOfStudy) {
	                        this.linkedInData.resume += lineBreak;
	                    }
	                    // Add School
	                    if (education[i].schoolName) {
	                        this.linkedInData.resume += education[i].schoolName + ' ';
	                    }
	                    // Add Start Date
	                    if (education[i].startDate) {
	                        this.linkedInData.resume += education[i].startDate.year + ' - ';
	                    }
	                    // Add End Date
	                    if (education[i].endDate) {
	                        this.linkedInData.resume += education[i].endDate.year + ' ';
	                    }
	                    // Add line break
	                    if ((education[i].schoolName || education[i].startDate || education[i].endDate) && education[i + 1]) {
	                        this.linkedInData.resume += lineBreak;
	                    }
	                }
	                // Add line break
	                this.linkedInData.resume += hardBreak;
	            }

	            // Work Experience Block
	            this.linkedInData.resume += this.$filter('i18n')('modal.workExperience') + lineBreak;
	            // Positions
	            if (this.checkNested(userProfile, 'positions', 'values')) {
	                for (var _i = 0; _i < userProfile.positions.values.length; _i++) {
	                    // Add Employee section header
	                    this.linkedInData.resume += ((userProfile.positions.values[_i].company || {}).name || '') + ' ';
	                    // Start Date
	                    if (userProfile.positions.values[_i].startDate) {
	                        this.linkedInData.resume += months[userProfile.positions.values[_i].startDate.month - 1] + ' ' + userProfile.positions.values[_i].startDate.year + ' - ' || '';
	                    }
	                    // End Date or 'Present'
	                    if (userProfile.positions.values[_i].endDate) {
	                        this.linkedInData.resume += months[userProfile.positions.values[_i].endDate.month - 1] + ' ' + userProfile.positions.values[_i].endDate.year || '';
	                    } else {
	                        if (userProfile.positions.values[_i].isCurrent) {
	                            // jshint ignore:line
	                            this.linkedInData.resume += this.$filter('i18n')('modal.present');
	                        }
	                    }
	                    this.linkedInData.resume += lineBreak;
	                    // Title
	                    this.linkedInData.resume += userProfile.positions.values[_i].title + lineBreak || '';
	                    // Industry
	                    this.linkedInData.resume += userProfile.positions.values[_i].company.industry ? userProfile.positions.values[_i].company.industry + lineBreak : '';
	                    if (userProfile.positions.values[_i].location && userProfile.positions.values[_i].location.name) {
	                        // Locale
	                        this.linkedInData.resume += userProfile.positions.values[_i].location.name + lineBreak || '';
	                    }
	                    // Summary
	                    if (userProfile.positions.values[_i].summary) {
	                        this.linkedInData.resume += userProfile.positions.values[_i].summary + lineBreak || '';
	                    }
	                    this.linkedInData.resume += hardBreak;
	                }
	            }

	            // Skills
	            if (this.checkNested(userProfile, 'skills', 'values')) {
	                this.linkedInData.resume += this.$filter('i18n')('modal.skillHeading') + lineBreak;
	                var skills = userProfile.skills.values;
	                for (var _i2 = 0; _i2 < skills.length; _i2++) {
	                    var newSkill = skills[_i2].skill;
	                    if (newSkill && newSkill.name) {
	                        this.linkedInData.resume += newSkill.name;
	                        if (skills[_i2 + 1]) {
	                            this.linkedInData.resume += ', ';
	                        }
	                    }
	                }
	                this.linkedInData.resume += hardBreak;
	            }

	            // LinkedIn Information
	            this.linkedInData.footer = hardBreak + this.$filter('i18n')('modal.profileURL') + lineBreak;
	            this.linkedInData.footer += userProfile.publicProfileUrl + lineBreak || '';
	            this.linkedInData.footer += userProfile.siteStandardProfileRequest.url + lineBreak || '';
	            // Legal
	            this.linkedInData.footer += hardBreak + legal;
	        }
	    }, {
	        key: 'checkNested',
	        value: function checkNested(obj) {
	            var args = Array.prototype.slice.call(arguments, 1);

	            for (var i = 0; i < args.length; i++) {
	                if (!obj || !obj.hasOwnProperty(args[i])) {
	                    return false;
	                }
	                obj = obj[args[i]];
	            }
	            return true;
	        }
	    }, {
	        key: 'applySuccess',
	        value: function applySuccess() {
	            // Reset LinkedIn Data
	            this.linkedInData.header = '';
	            this.linkedInData.resume = '';
	            this.linkedInData.footer = '';
	            // Reset LinkedIn Flag
	            this.hasAttemptedLIApply = false;
	            // Reset form data
	            this.ApplyService.form.resumeInfo = null;
	            // Hide Form
	            this.showForm = false;
	            // Set the job id in session storage to make sure they can't apply to the same one during the same session
	            var alreadyAppliedJobs = sessionStorage.getItem(this.APPLIED_JOBS_KEY);
	            if (alreadyAppliedJobs) {
	                var alreadyAppliedJobsArray = JSON.parse(alreadyAppliedJobs);
	                alreadyAppliedJobsArray.push(this.SearchService.currentDetailData.id);
	                sessionStorage.setItem(this.APPLIED_JOBS_KEY, JSON.stringify(alreadyAppliedJobsArray));
	            } else {
	                sessionStorage.setItem(this.APPLIED_JOBS_KEY, JSON.stringify([this.SearchService.currentDetailData.id]));
	            }
	            // Send a modal success message to update other views
	            this.$rootScope.$broadcast('ModalSuccess');
	        }
	    }, {
	        key: 'submit',
	        value: function submit(applyForm) {
	            var isFileValid = false,
	                resumeInfo = this.ApplyService.form.resumeInfo,
	                resumeText = this.linkedInData.header + this.linkedInData.resume + this.linkedInData.footer,
	                controller = void 0;

	            if (!this.hasAttemptedLIApply && this.email) {
	                // Send email
	                this.$window.open(this.ShareService.sendEmailLink(this.SearchService.currentDetailData, this.email), '_self');
	                this.email = '';
	                this.closeModal();
	            } else if (this.hasAttemptedLIApply && resumeText) {
	                // LinkedIn Apply
	                applyForm.$submitted = true;
	                this.ApplyService.form.resumeInfo = new Blob([resumeText], { type: 'text/plain' });
	                isFileValid = true;
	            } else if (!this.hasAttemptedLIApply && resumeInfo) {
	                // Validate file & Apply
	                applyForm.$submitted = true;
	                isFileValid = this.validateResume(resumeInfo);
	            } else {
	                this.$log.error(this.$filter('i18n')('modal.LIError'));
	            }

	            if (applyForm.$valid && isFileValid) {
	                controller = this;
	                controller.isSubmitting = true;

	                var jobID = this.SearchService.currentDetailData.id;
	                if (!jobID || this.ApplyService.form.confirm === true) {
	                    /*If no job selected means we are registering CV so chnage display message and send cobnfigured job id */
	                    jobID = this.configuration.service.registerJobId;
	                    this.successMessageKey = 'modal.successHeadingRegister';
	                    this.successSubMessageKey = 'modal.successSubHeadingRegister';
	                    window.location.href = '/application-confirmation/';
	                }

	                this.ApplyService.submit(jobID, function () {
	                    controller.applySuccess();
	                    controller.isSubmitting = false;
	                }, function () {
	                    controller.isSubmitting = false;
	                });
	            }
	        }
	    }]);

	    return CareerPortalModalController;
	}();

	exports.default = CareerPortalModalController;

/***/ }),
/* 9 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var CareerPortalSidebarController = function () {
	    /*jshint -W072 */
	    CareerPortalSidebarController.$inject = ["$scope", "SharedData", "$location", "SearchService", "$timeout", "configuration"];
	    function CareerPortalSidebarController($scope, SharedData, $location, SearchService, $timeout, configuration) {
	        /*jshint +W072 */
	        'ngInject';

	        _classCallCheck(this, CareerPortalSidebarController);

	        this.SharedData = SharedData;
	        this.$location = $location;
	        this.$timeout = $timeout;
	        this.SearchService = SearchService;
	        this.configuration = configuration || {};

	        this.locationLimitTo = 8;
	        this.categoryLimitTo = 8;
	        this.employmentTypeLimitTo = 8;

	        this.selectedLocation = { selected: undefined };
	        this.selectedType = { selected: undefined };
	        this.selectedCategory = { selected: undefined };

	        this.searchSelectDisabled = false;
	        this.SearchService.findJobs();
	        this.SearchService.getCountByLocation(this.setLocations());
	        this.SearchService.getCountByCategory(this.setCategories());
	        this.SearchService.getCountByEmploymentType(this.setEmploymentTypes());

	        // Set the grid state based on configurations
	        switch (this.configuration.defaultGridState) {
	            case 'grid-view':
	                this.SharedData.gridState = 'grid-view';
	                break;
	            case 'list-view':
	            /* falls through */
	            default:
	                this.SharedData.gridState = 'list-view';
	        }

	        $scope.$watchCollection(angular.bind(this, function () {
	            return this.SearchService.searchParams.category;
	        }), this.updateFilterCountsAnonymous());

	        $scope.$watchCollection(angular.bind(this, function () {
	            return this.SearchService.searchParams.location;
	        }), this.updateFilterCountsAnonymous());

	        $scope.$watchCollection(angular.bind(this, function () {
	            return this.SearchService.searchParams.employmentType;
	        }), this.updateFilterCountsAnonymous());
	    }

	    _createClass(CareerPortalSidebarController, [{
	        key: 'updateLocationLimitTo',
	        value: function updateLocationLimitTo(value) {
	            this.locationLimitTo = value;
	        }
	    }, {
	        key: 'updateCategoryLimitTo',
	        value: function updateCategoryLimitTo(value) {
	            this.categoryLimitTo = value;
	        }
	    }, {
	        key: 'updateEmploymentTypeLimitTo',
	        value: function updateEmploymentTypeLimitTo(value) {
	            this.employmentTypeLimitTo = value;
	        }
	    }, {
	        key: 'setLocations',
	        value: function setLocations() {
	            var controller = this;

	            return function (locations) {
	                controller.locations = locations.filter(function (location) {
	                    return location && location.address && location.address.city && location.address.state;
	                });
	            };
	        }
	    }, {
	        key: 'setCategories',
	        value: function setCategories() {
	            var controller = this;

	            return function (categories) {
	                controller.categories = categories.filter(function (category) {
	                    return category && category.publishedCategory && category.publishedCategory.name && category.publishedCategory.name.length;
	                });
	            };
	        }
	    }, {
	        key: 'setEmploymentTypes',
	        value: function setEmploymentTypes() {
	            var controller = this;

	            return function (employmentTypes) {
	                controller.employmentTypes = employmentTypes.filter(function (employmentType) {
	                    return employmentType;
	                });
	            };
	        }
	    }, {
	        key: 'updateCountsByIntersection',
	        value: function updateCountsByIntersection(oldCounts, newCounts, getID, getLabel) {
	            if (!getLabel) {
	                getLabel = getID;
	            }

	            angular.forEach(oldCounts, function (oldCount) {
	                var found = false;

	                angular.forEach(newCounts, function (newCount) {
	                    if (getID.call(oldCount) === getID.call(newCount)) {
	                        oldCount.idCount = newCount.idCount;

	                        found = true;
	                    }
	                });

	                if (!found) {
	                    oldCount.idCount = 0;
	                }
	            });

	            oldCounts.sort(function (count1, count2) {
	                var name1 = getLabel.call(count1);
	                var name2 = getLabel.call(count2);

	                if (name1 < name2) {
	                    return -1;
	                } else if (name1 > name2) {
	                    return 1;
	                } else {
	                    var idCount1 = count1.idCount;
	                    var idCount2 = count2.idCount;

	                    return idCount2 - idCount1;
	                }
	            });
	        }
	    }, {
	        key: 'updateFilterCounts',
	        value: function updateFilterCounts() {
	            var controller = this;

	            if (this.locations) {
	                this.SearchService.getCountByLocation(function (locations) {
	                    controller.updateCountsByIntersection(controller.locations, locations, function () {
	                        return this.address.city + ',' + this.address.state;
	                    });
	                });
	            }

	            if (this.categories) {
	                this.SearchService.getCountByCategory(function (categories) {
	                    controller.updateCountsByIntersection(controller.categories, categories, function () {
	                        return !this.publishedCategory ? null : this.publishedCategory.id;
	                    }, function () {
	                        return !this.publishedCategory ? null : this.publishedCategory.name;
	                    });
	                });
	            }

	            if (this.employmentTypes) {
	                this.SearchService.getCountByEmploymentType(function (employmentTypes) {
	                    controller.updateCountsByIntersection(controller.employmentTypes, employmentTypes, function () {
	                        return !this.employmentType ? null : this.employmentType.employmentType;
	                    });
	                });
	            }
	        }
	    }, {
	        key: 'updateFilterCountsAnonymous',
	        value: function updateFilterCountsAnonymous() {
	            var controller = this;

	            return function () {
	                controller.updateFilterCounts();
	            };
	        }
	    }, {
	        key: 'switchViewStyle',
	        value: function switchViewStyle(type) {
	            this.SharedData.gridState = type + '-view';
	        }
	    }, {
	        key: 'searchJobs',
	        value: function searchJobs() {
	            this.SearchService.searchParams.reloadAllData = true;
	            this.SearchService.findJobs();

	            this.updateFilterCounts();
	        }
	    }, {
	        key: 'clearSearchParamsAndLoadData',
	        value: function clearSearchParamsAndLoadData(param) {
	            this.SearchService.helper.clearSearchParams(param);
	            this.SearchService.searchParams.reloadAllData = true;
	            this.SearchService.findJobs();
	            this.updateFilterCounts();
	        }
	    }, {
	        key: 'goBack',
	        value: function goBack() {
	            if (this.SharedData.viewState === 'overview-open') {
	                this.$location.path('/jobs');
	            }
	        }
	    }, {
	        key: 'searchOnDelay',
	        value: function searchOnDelay() {
	            if (this.searchTimeout) {
	                this.$timeout.cancel(this.searchTimeout);
	            }

	            this.searchTimeout = this.$timeout(angular.bind(this, function () {
	                this.searchJobs();
	            }), 250);
	        }
	    }, {
	        key: 'addOrRemoveLocation',
	        value: function addOrRemoveLocation() {
	            if (!this.selectedLocation.selected) {
	                return;
	            }
	            var key = this.selectedLocation.selected.address.city + '|' + this.selectedLocation.selected.address.state;
	            if (!this.hasLocationFilter(this.selectedLocation.selected)) {
	                this.SearchService.searchParams.location = [];
	                this.SearchService.searchParams.location.push(key);
	            } else {
	                var index = this.SearchService.searchParams.location.indexOf(key);
	                this.SearchService.searchParams.location.splice(index, 1);
	            }
	            this.searchJobs();
	        }
	    }, {
	        key: 'addOrRemoveCategory',
	        value: function addOrRemoveCategory() {
	            if (!this.selectedCategory.selected) {
	                return;
	            }
	            var key = this.selectedCategory.selected.publishedCategory.id;
	            if (!this.hasCategoryFilter(this.selectedCategory.selected)) {
	                this.SearchService.searchParams.category = [];
	                this.SearchService.searchParams.category.push(key);
	            } else {
	                var index = this.SearchService.searchParams.category.indexOf(key);
	                this.SearchService.searchParams.category.splice(index, 1);
	            }
	            this.searchJobs();
	        }
	    }, {
	        key: 'addOrRemoveEmploymentType',
	        value: function addOrRemoveEmploymentType() {
	            if (!this.selectedType.selected) {
	                return;
	            }
	            if (!this.hasEmploymentTypeFilter(this.selectedType.selected)) {
	                this.SearchService.searchParams.employmentType = [];
	                this.SearchService.searchParams.employmentType.push(this.selectedType.selected);
	            } else {
	                var index = this.SearchService.searchParams.employmentType.indexOf(this.selectedType.selected);
	                this.SearchService.searchParams.employmentType.splice(index, 1);
	            }
	            this.searchJobs();
	        }
	    }, {
	        key: 'hasLocationFilter',
	        value: function hasLocationFilter(location) {
	            var key = location.address.city + '|' + location.address.state;
	            return this.SearchService.searchParams.location.indexOf(key) !== -1;
	        }
	    }, {
	        key: 'hasCategoryFilter',
	        value: function hasCategoryFilter(category) {
	            return this.SearchService.searchParams.category.indexOf(category.publishedCategory.id) !== -1;
	        }
	    }, {
	        key: 'hasEmploymentTypeFilter',
	        value: function hasEmploymentTypeFilter(type) {
	            return this.SearchService.searchParams.employmentType.indexOf(type) !== -1;
	        }
	    }]);

	    return CareerPortalSidebarController;
	}();

	exports.default = CareerPortalSidebarController;

/***/ }),
/* 10 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var MainController = function () {
	    MainController.$inject = ["SharedData"];
	    function MainController(SharedData) {
	        'ngInject';

	        _classCallCheck(this, MainController);

	        this.SharedData = SharedData;
	    }

	    _createClass(MainController, [{
	        key: 'closeFilters',
	        value: function closeFilters() {
	            var $portalCanvas = document.querySelector('.portal-canvas');
	            var $mask = document.querySelector('#mask');

	            if ($portalCanvas) {
	                $portalCanvas.classList.remove('show-nav');
	            }

	            if ($mask) {
	                $mask.classList.remove('active');
	            }
	        }
	    }]);

	    return MainController;
	}();

	var Main = function Main() {
	    'ngInject';

	    _classCallCheck(this, Main);

	    return {
	        restrict: 'E',
	        templateUrl: 'app/main/main.html',
	        scope: false,
	        controller: MainController,
	        controllerAs: 'main',
	        bindToController: true,
	        replace: true
	    };
	};

	exports.default = Main;

/***/ }),
/* 11 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var CareerPortalSidebar = function CareerPortalSidebar() {
	    'ngInject';

	    _classCallCheck(this, CareerPortalSidebar);

	    return {
	        restrict: 'E',
	        templateUrl: 'app/sidebar/sidebar.html',
	        scope: false,
	        controller: 'CareerPortalSidebarController',
	        controllerAs: 'sidebar',
	        bindToController: true,
	        replace: true
	    };
	};

	exports.default = CareerPortalSidebar;

/***/ }),
/* 12 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var CareerPortalHeaderController = function () {
	    CareerPortalHeaderController.$inject = ["configuration", "$location", "SearchService"];
	    function CareerPortalHeaderController(configuration, $location, SearchService) {
	        'ngInject';

	        _classCallCheck(this, CareerPortalHeaderController);

	        this.SearchService = SearchService;
	        this.$location = $location;
	        this.configuration = configuration;
	    }

	    _createClass(CareerPortalHeaderController, [{
	        key: 'toggleFilters',
	        value: function toggleFilters() {
	            var $portalCanvas = document.querySelector('.portal-canvas');
	            var $mask = document.querySelector('#mask');

	            if ($portalCanvas) {
	                $portalCanvas.classList.toggle('show-nav');
	            }

	            if ($mask) {
	                $mask.classList.toggle('active');
	            }
	        }
	    }, {
	        key: 'goBack',
	        value: function goBack() {
	            this.$location.path('/jobs');
	        }
	    }]);

	    return CareerPortalHeaderController;
	}();

	var CareerPortalHeader = function CareerPortalHeader() {
	    'ngInject';

	    _classCallCheck(this, CareerPortalHeader);

	    var directive = {
	        restrict: 'E',
	        templateUrl: 'app/header/header.html',
	        scope: false,
	        controller: CareerPortalHeaderController,
	        controllerAs: 'header',
	        bindToController: true,
	        replace: true
	    };

	    return directive;
	};

	exports.default = CareerPortalHeader;

/***/ }),
/* 13 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var CareerPortalModal = function CareerPortalModal() {
	    'ngInject';

	    _classCallCheck(this, CareerPortalModal);

	    return {
	        restrict: 'E',
	        templateUrl: 'app/modal/modal.html',
	        scope: false,
	        controller: 'CareerPortalModalController',
	        controllerAs: 'modal',
	        bindToController: true,
	        replace: true
	    };
	};

	exports.default = CareerPortalModal;

/***/ }),
/* 14 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var SearchService = function () {
	    SearchService.$inject = ["$http", "configuration", "$q"];
	    function SearchService($http, configuration, $q) {
	        'ngInject';

	        _classCallCheck(this, SearchService);

	        this.$http = $http;
	        this.configuration = configuration;
	        this.$q = $q;
	    }

	    _createClass(SearchService, [{
	        key: 'getCountByLocation',
	        value: function getCountByLocation(callback, errorCallback) {
	            return this.getCountBy('address(city,state)', 'address.city,address.state', callback, errorCallback);
	        }
	    }, {
	        key: 'getCountByCategory',
	        value: function getCountByCategory(callback, errorCallback) {
	            return this.getCountBy('publishedCategory(id,name)', 'publishedCategory.name', callback, errorCallback);
	        }
	    }, {
	        key: 'getCountByEmploymentType',
	        value: function getCountByEmploymentType(callback, errorCallback) {
	            return this.getCountBy('employmentType', '', callback, errorCallback);
	        }
	    }, {
	        key: 'getCountWhereIDs',
	        value: function getCountWhereIDs() {
	            var _arguments = arguments;

	            this.$http({
	                method: 'GET',
	                url: this._queryUrl + this.requestParams.assembleForGroupByWhereIDs(arguments[0], arguments[1], arguments[2], arguments[3], arguments[4])
	            }).success(function (data) {
	                _arguments[5](data);
	            }).error(function () {});
	        }
	    }, {
	        key: 'recursiveSearchForIDs',
	        value: function recursiveSearchForIDs(callback, start, count, fields) {
	            this.$http({
	                method: 'GET',
	                url: this._searchUrl + this.requestParams.assembleForSearchForIDs(start, count, fields)
	            }).success(function (data) {
	                callback(data);
	            }).error(function () {});
	        }
	    }, {
	        key: 'getCountBy',
	        value: function getCountBy(fields, orderByFields, callback, errorCallback) {
	            errorCallback = errorCallback || function () {};

	            var totalRecords = [];
	            var start = 0;

	            var controller = this;

	            var callbackIfNoMore = function callbackIfNoMore(data) {
	                if (data.data.length) {
	                    controller.getCountWhereIDs(fields, orderByFields, start, controller.configuration.service.batchSize, data.data, function (counts) {
	                        totalRecords = totalRecords.concat(counts.data);

	                        if (data.total > data.count) {
	                            start += controller.configuration.service.batchSize;

	                            controller.recursiveSearchForIDs(callbackIfNoMore, start, controller.configuration.service.batchSize);
	                        } else {
	                            callback(totalRecords);
	                        }
	                    });
	                } else {
	                    callback(totalRecords);
	                }
	            };
	            this.recursiveSearchForIDs(callbackIfNoMore, start, this.configuration.service.batchSize, fields);
	        }
	    }, {
	        key: 'searchWhereIDs',
	        value: function searchWhereIDs(jobs, callback) {
	            this.$http({
	                method: 'GET',
	                url: this._searchUrl + this.requestParams.assembleForSearchWhereIDs(jobs)
	            }).success(function (data) {
	                callback(data.data);
	            }).error(function () {});
	        }
	    }, {
	        key: 'recursiveSearchForJobs',
	        value: function recursiveSearchForJobs(callbackIfNoMore, start, count, errorCallback) {
	            errorCallback = errorCallback || function () {};

	            this.$http({
	                method: 'GET',
	                url: this._searchUrl + this.requestParams.assembleForSearchForJobs(start, count)
	            }).success(callbackIfNoMore).error(errorCallback);
	        }
	    }, {
	        key: 'findJobs',
	        value: function findJobs() {
	            var _this = this;

	            if (this.searchParams.reloadAllData) {
	                this.helper.emptyCurrentDataList();
	                this.helper.resetStartAndTotal();
	            }

	            var controller = this;

	            var allJobs = [];
	            var start = this.requestParams.start();
	            var count = this.requestParams.count();
	            this.helper.hasMore = false;
	            this.helper.isSearching = true;

	            var doneFinding = function doneFinding(jobs) {
	                controller.helper.isSearching = false;
	                controller.helper.updateStart();
	                if (controller.searchParams.reloadAllData) {
	                    controller.currentListData = jobs;
	                } else {
	                    controller.currentListData.push.apply(controller.currentListData, jobs);
	                }
	            };

	            var callbackIfNoMore = function callbackIfNoMore(data) {
	                if (data.data.length) {
	                    console.log('data', data);
	                    for (var i = 0; i < data.data.length; i++) {
	                        allJobs.push(data.data[i]);
	                    }
	                    if (data.count < count) {
	                        doneFinding(allJobs);
	                    } else if (allJobs.length >= controller.requestParams.count()) {
	                        _this.helper.hasMore = true;
	                        doneFinding(allJobs);
	                    } else {
	                        controller.helper.updateStart(count);
	                        start = controller.requestParams.start();
	                        controller.recursiveSearchForJobs(callbackIfNoMore, start, count);
	                    }
	                } else {
	                    doneFinding(allJobs);
	                }
	            };

	            this.recursiveSearchForJobs(callbackIfNoMore, start, count);
	        }
	    }, {
	        key: 'loadJobData',
	        value: function loadJobData(jobID, callback, errorCallback) {
	            errorCallback = errorCallback || function () {};

	            this.$http({
	                method: 'GET',
	                url: this._queryUrl + this.requestParams.assembleForFind(jobID)
	            }).success(function (data) {
	                if (data && data.data && data.data.length) {
	                    callback(data.data[0]);
	                } else {
	                    errorCallback();
	                }
	            }).error(function () {
	                return errorCallback();
	            });
	        }
	    }, {
	        key: 'loadJobDataByCategory',
	        value: function loadJobDataByCategory(categoryID, idToExclude) {
	            var deferred = this.$q.defer();
	            this.$http({
	                method: 'GET',
	                url: this._queryUrl + this.requestParams.assembleForRelatedJobs(categoryID, idToExclude)
	            }).success(function (data) {
	                if (data && data.data && data.data.length) {
	                    deferred.resolve(data.data);
	                } else {
	                    deferred.reject({ message: 'no data was returned from the server' });
	                }
	            }).error(function (error) {
	                deferred.reject(error);
	            });

	            return deferred.promise;
	        }
	    }, {
	        key: '_',
	        get: function get() {
	            return this.__ || (this.__ = Object.create(null));
	        }
	    }, {
	        key: 'currentDetailData',
	        get: function get() {
	            return this._.currentDetailData || (this._.currentDetailData = {});
	        },
	        set: function set(value) {
	            this._.currentDetailData = value;
	        }
	    }, {
	        key: 'currentListData',
	        get: function get() {
	            return this._.currentListData || (this._.currentListData = []);
	        },
	        set: function set(value) {
	            this._.currentListData = value;
	        }
	    }, {
	        key: 'helper',
	        get: function get() {
	            var _this2 = this;

	            return this._.helper || (this._.helper = {
	                hasMore: true,
	                emptyCurrentDataList: function emptyCurrentDataList() {
	                    return _this2.currentListData.length = 0;
	                },
	                updateStart: function updateStart(count) {
	                    if (count) {
	                        _this2.searchParams.start = parseInt(count) + parseInt(_this2.requestParams.start());
	                    } else {
	                        _this2.searchParams.start = parseInt(_this2.requestParams.count()) + parseInt(_this2.requestParams.start());
	                    }
	                },
	                resetStartAndTotal: function resetStartAndTotal() {
	                    _this2.helper.hasMore = true;
	                    _this2.searchParams.total = 0;
	                    _this2.searchParams.start = 0;
	                },
	                moreRecordsExist: function moreRecordsExist() {
	                    return parseInt(_this2.searchParams.total) - parseInt(_this2.requestParams.start()) > 0;
	                },
	                clearSearchParams: function clearSearchParams(specificParam) {
	                    if (specificParam === 'location') {
	                        _this2.searchParams.location.length = 0;
	                    } else if (specificParam === 'category') {
	                        _this2.searchParams.category.length = 0;
	                    } else if (specificParam === 'text') {
	                        _this2.searchParams.textSearch = '';
	                    } else {
	                        _this2.searchParams.textSearch = '';
	                        _this2.searchParams.category.length = 0;
	                        _this2.searchParams.location.length = 0;
	                    }
	                }
	            });
	        }
	    }, {
	        key: '_publicServiceUrl',
	        get: function get() {
	            var result = this._.publicServiceUrl;

	            if (!result) {
	                var corpToken = this.configuration.service.corpToken;
	                var port = parseInt(this.configuration.service.port) || 443;
	                var scheme = 'http' + (port === 443 ? 's' : '');
	                var swimlane = this.configuration.service.swimlane;

	                result = this._.publicServiceUrl = scheme + '://public-rest' + swimlane + '.bullhornstaffing.com:' + port + '/rest-services/' + corpToken;
	            }

	            return result;
	        }
	    }, {
	        key: '_queryUrl',
	        get: function get() {
	            return this._.queryUrl || (this._.queryUrl = this._publicServiceUrl + '/query/JobBoardPost');
	        }
	    }, {
	        key: 'requestParams',
	        get: function get() {
	            var _this3 = this;

	            return this._.requestParams || (this._.requestParams = {
	                sort: function sort() {
	                    return _this3.searchParams.sort || SearchService._sort;
	                },
	                count: function count() {
	                    var count = 0;
	                    if (!_this3.searchParams.reloadAllData) {
	                        count = _this3.searchParams.loadCount || SearchService._loadCount;
	                    } else {
	                        if (_this3.searchParams.filteredCategory || _this3.searchParams.getHired) {
	                            count = _this3.searchParams.loadCount || SearchService._loadCount;
	                        } else {
	                            count = _this3.searchParams.count || SearchService._count;
	                        }
	                    }

	                    return count;
	                },
	                start: function start() {
	                    return _this3.searchParams.start || 0;
	                },
	                publishedCategory: function publishedCategory(isSearch, fields) {
	                    if ('publishedCategory(id,name)' !== fields) {
	                        if (_this3.searchParams.category.length > 0) {
	                            var equals = isSearch ? ':' : '=';

	                            var fragment = ' AND (';
	                            var first = true;

	                            for (var i = 0; i < _this3.searchParams.category.length; i++) {
	                                if (!first) {
	                                    fragment += ' OR ';
	                                } else {
	                                    first = false;
	                                }
	                                fragment += 'publishedCategory.id' + equals + _this3.searchParams.category[i];
	                            }

	                            return fragment + ')';
	                        }
	                    }

	                    return '';
	                },
	                location: function location(isSearch, fields) {
	                    if ('address(city,state)' !== fields) {
	                        if (_this3.searchParams.location.length > 0) {
	                            var delimiter = isSearch ? '"' : '\'';
	                            var equals = isSearch ? ':' : '=';

	                            var fragment = ' AND (';
	                            var first = true;

	                            for (var j = 0; j < _this3.searchParams.location.length; j++) {
	                                if (!first) {
	                                    fragment += ' OR ';
	                                } else {
	                                    first = false;
	                                }

	                                var location = _this3.searchParams.location[j];

	                                var city = isSearch ? location.split('|')[0] : location.split('|')[0].replace(/'/g, '\'\'');
	                                var state = location.split('|')[1];

	                                fragment += '(address.city' + equals + delimiter + city + delimiter + ' AND address.state' + equals + delimiter + state + delimiter + ')';
	                            }

	                            return fragment + ')';
	                        }
	                    }

	                    return '';
	                },
	                employmentType: function employmentType(isSearch, fields) {
	                    if ('employmentType' !== fields) {
	                        if (_this3.searchParams.employmentType.length > 0) {
	                            var delimiter = isSearch ? '"' : '\'';
	                            var equals = isSearch ? ':' : '=';

	                            var fragment = ' AND (';
	                            var first = true;

	                            for (var j = 0; j < _this3.searchParams.employmentType.length; j++) {
	                                if (!first) {
	                                    fragment += ' OR ';
	                                } else {
	                                    first = false;
	                                }

	                                var employmentType = _this3.searchParams.employmentType[j];

	                                fragment += '(employmentType' + equals + delimiter + employmentType.employmentType + delimiter + ')';
	                            }

	                            return fragment + ')';
	                        }
	                    }

	                    return '';
	                },
	                text: function text() {
	                    if (_this3.searchParams.textSearch) {
	                        return ' AND (title:' + _this3.searchParams.textSearch + '* OR publicDescription:' + _this3.searchParams.textSearch + '*)';
	                    }

	                    return '';
	                },
	                publishedDate: function publishedDate() {
	                    if (_this3.searchParams.dateSearch) {
	                        var ms = Date.parse(_this3.searchParams.dateSearch);
	                        console.log(ms);
	                        var ms1 = ms;
	                        var ms2 = 43200000 + ms;
	                        return ' AND (dateLastPublished:[' + ms1 + ' TO' + ms2 + '])';
	                    }

	                    return '';
	                },
	                query: function query(isSearch, additionalQuery, fields) {
	                    var query = '(isOpen' + (isSearch ? ':1' : '=true') + ')';

	                    if (additionalQuery) {
	                        query += ' AND (' + additionalQuery + ')';
	                    }

	                    if (isSearch) {
	                        query += _this3.requestParams.text();
	                        //query += this.requestParams.publishedDate();
	                    }

	                    query += _this3.requestParams.publishedCategory(isSearch, fields);
	                    query += _this3.requestParams.employmentType(isSearch, fields);
	                    query += _this3.requestParams.location(isSearch, fields);

	                    return query;
	                },
	                whereIDs: function whereIDs(jobs, isSearch) {
	                    var getValue = isSearch ? function (job) {
	                        return 'id:' + job.id;
	                    } : function (job) {
	                        return job.id;
	                    };
	                    var join = isSearch ? ' OR ' : ',';
	                    var prefix = isSearch ? '' : 'id IN ';

	                    var values = [];

	                    for (var i = 0; i < jobs.length; i++) {
	                        values.push(getValue(jobs[i]));
	                    }

	                    return prefix + '(' + values.join(join) + ')';
	                },
	                relatedJobs: function relatedJobs(publishedCategoryID, idToExclude) {
	                    var query = '(isOpen=true) AND publishedCategory.id=' + publishedCategoryID;

	                    if (idToExclude && parseInt(idToExclude) > 0) {
	                        query += ' AND id <>' + idToExclude;
	                    }

	                    return query;
	                },
	                find: function find(jobID) {
	                    return 'id=' + jobID;
	                },
	                assembleForSearchWhereIDs: function assembleForSearchWhereIDs(jobs) {
	                    var where = _this3.requestParams.query(true, _this3.requestParams.whereIDs(jobs, true));

	                    return '?start=0&query=' + where + '&fields=id&count=' + SearchService._count;
	                },
	                assembleForQueryForIDs: function assembleForQueryForIDs(start, count) {
	                    return '?where=' + _this3.requestParams.query(false) + '&fields=' + SearchService._fields + '&count=' + count + '&orderBy=' + SearchService._sort + '&start=' + start;
	                },
	                assembleForSearchForJobs: function assembleForSearchForJobs(start, count) {
	                    return '?query=' + _this3.requestParams.query(true) + '&fields=' + SearchService._fields + '&count=' + count + '&sort=' + SearchService._sort + '&start=' + start;
	                },
	                assembleForGroupByWhereIDs: function assembleForGroupByWhereIDs(fields, orderByFields, start, count, jobs) {
	                    return '?where=' + _this3.requestParams.whereIDs(jobs, false) + '&groupBy=' + fields + '&fields=' + fields + ',count(id)&count=' + count + '&orderBy=+' + orderByFields + ',-count.id&start=' + start;
	                },
	                assembleForSearchForIDs: function assembleForSearchForIDs(start, count, fields) {
	                    return '?showTotalMatched=true&query=' + _this3.requestParams.query(true, undefined, fields) + '&fields=id&sort=id&count=' + count + '&start=' + start;
	                },
	                assembleForRelatedJobs: function assembleForRelatedJobs(publishedCategoryID, idToExclude) {
	                    return '?start=0&where=' + _this3.requestParams.relatedJobs(publishedCategoryID, idToExclude) + '&fields=' + SearchService._fields + '&sort=' + _this3.requestParams.sort() + '&count=' + _this3.configuration.maxRelatedJobs;
	                },
	                assembleForFind: function assembleForFind(jobID) {
	                    return '?start=0&count=1&where=' + _this3.requestParams.find(jobID) + '&fields=' + SearchService._fields;
	                }
	            });
	        }
	    }, {
	        key: 'searchParams',
	        get: function get() {
	            return this._.searchParams || (this._.searchParams = {
	                textSearch: '',
	                location: [],
	                category: [],
	                employmentType: [],
	                dateSearch: '',
	                sort: '',
	                count: '',
	                loadCount: '',
	                start: '',
	                total: '',
	                reloadAllData: true,
	                filteredCategory: false
	            });
	        }
	    }, {
	        key: '_searchUrl',
	        get: function get() {
	            return this._.searchUrl || (this._.searchUrl = this._publicServiceUrl + '/search/JobOrder');
	        }
	    }], [{
	        key: '_',
	        get: function get() {
	            return SearchService.__ || (SearchService.__ = Object.create(null));
	        }
	    }, {
	        key: '_count',
	        get: function get() {
	            return SearchService._.pageSize || (SearchService._.pageSize = 9);
	        }
	    }, {
	        key: '_loadCount',
	        get: function get() {
	            return SearchService._.loadCount || (SearchService._.loadCount = 3);
	        }
	    }, {
	        key: '_fields',
	        get: function get() {
	            return SearchService._.fields || (SearchService._.fields = 'id,title,publishedCategory(id,name),address(city,state),employmentType,dateLastPublished,publicDescription,isOpen,isPublic,isDeleted');
	        }
	    }, {
	        key: '_sort',
	        get: function get() {
	            return SearchService._.sort || (SearchService._.sort = '-dateLastPublished');
	        }
	    }]);

	    return SearchService;
	}();

	exports.default = SearchService;

/***/ }),
/* 15 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var MobileDetection = function () {
	    MobileDetection.$inject = ["$window"];
	    function MobileDetection($window) {
	        'ngInject';

	        _classCallCheck(this, MobileDetection);

	        this.$window = $window;
	        this.browserData = this.getDeviceInfo();
	    }

	    _createClass(MobileDetection, [{
	        key: 'getDeviceInfo',
	        value: function getDeviceInfo() {
	            var _this = this;

	            var ua = this.$window.navigator.userAgent,
	                operatingSystemRegex = {
	                MAC: { and: [/\bMac OS\b/, { not: /Windows Phone/ }] },
	                IOS: { and: [{ or: [/\biPad\b/, /\biPhone\b/, /\biPod\b/] }, { not: /Windows Phone/ }] }
	            },
	                browserRegex = {
	                SAFARI: { and: [/^((?!CriOS).)*\Safari\b.*$/, { not: { or: [/\bOPR\b/, /\bEdge\b/, /Windows Phone/, /\bChrome\b/] } }] }
	            },
	                browsers = {
	                SAFARI: 'safari'
	            },
	                operatingSystems = {
	                MAC: 'mac',
	                IOS: 'ios'
	            },
	                deviceInfo = {
	                userAgent: ua,
	                os: {},
	                browser: {}
	            };

	            deviceInfo.os = Object.keys(operatingSystems).reduce(function (obj, item) {
	                obj[operatingSystems[item]] = _this.deepRegex(ua, operatingSystemRegex[item]);
	                return obj;
	            }, {});

	            deviceInfo.browser = Object.keys(browsers).reduce(function (obj, item) {
	                obj[browsers[item]] = _this.deepRegex(ua, browserRegex[item]);
	                return obj;
	            }, {});

	            return deviceInfo;
	        }
	    }, {
	        key: 'deepRegex',
	        value: function deepRegex(string, regex) {
	            var _this2 = this;

	            if (typeof regex === 'string' || regex instanceof String) {
	                regex = new RegExp(regex);
	            }
	            if (regex instanceof RegExp) {
	                return regex.test(string);
	            } else if (regex && Array.isArray(regex.and)) {
	                return regex.and.every(function (item) {
	                    return _this2.deepRegex(string, item);
	                });
	            } else if (regex && Array.isArray(regex.or)) {
	                return regex.or.some(function (item) {
	                    return _this2.deepRegex(string, item);
	                });
	            } else if (regex && regex.not) {
	                return !this.deepRegex(string, regex.not);
	            } else {
	                return false;
	            }
	        }
	    }]);

	    return MobileDetection;
	}();

	exports.default = MobileDetection;

/***/ }),
/* 16 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var ShareService = function () {
	    ShareService.$inject = ["locale"];
	    function ShareService(locale) {
	        'ngInject';

	        _classCallCheck(this, ShareService);

	        this.locale = locale;
	    }

	    _createClass(ShareService, [{
	        key: 'additionalEmailInfo',
	        value: function additionalEmailInfo(job) {
	            var body = '\n';
	            if (job.title) {
	                body += '\nTitle: ' + this.locale.getString('common.jobsLabel');
	            }

	            if (job.publishedCategory && job.publishedCategory.name) {
	                body += '\n' + this.locale.getString('common.categorySectionHeading') + ': ' + job.publishedCategory.name;
	            }

	            if (job.address) {
	                var location = '\n' + this.locale.getString('common.locationSectionHeading') + ': ';
	                if (job.address.city && job.address.state) {
	                    body += location + job.address.city + ', ' + job.address.state + '\n';
	                } else if (job.address.city) {
	                    body += location + job.address.city + '\n';
	                } else if (job.address.state) {
	                    body += location + job.address.state + '\n';
	                }
	            }
	            return encodeURIComponent(body);
	        }
	    }, {
	        key: 'description',
	        value: function description(job, url) {
	            if (url) {
	                return 'Check out this ' + job.title + ' job: ' + encodeURIComponent(url);
	            }
	            return 'Check out this ' + job.title + ' job!';
	        }
	    }, {
	        key: 'emailLink',
	        value: function emailLink(job) {
	            return 'mailto:' + this.requestParams.email(job);
	        }
	    }, {
	        key: 'facebook',
	        value: function facebook(job) {
	            window.open(this.config.url.facebook + this.requestParams.facebook(job));
	        }
	    }, {
	        key: 'linkedin',
	        value: function linkedin(job) {
	            window.open(this.config.url.linkedin + this.requestParams.linkedin(job));
	        }
	    }, {
	        key: 'sendEmailLink',
	        value: function sendEmailLink(job, email) {
	            email = email || '';
	            return 'mailto:' + email + this.requestParams.additionalEmailInfo(job);
	        }
	    }, {
	        key: 'twitter',
	        value: function twitter(job) {
	            window.open(this.config.url.twitter + this.requestParams.twitter(job));
	        }
	    }, {
	        key: '_',
	        get: function get() {
	            return this.__ || (this.__ = Object.create(null, {}));
	        }
	    }, {
	        key: 'config',
	        get: function get() {
	            return {
	                url: {
	                    facebook: 'https://www.facebook.com/dialog/share',
	                    twitter: 'https://twitter.com/intent/tweet',
	                    linkedin: 'https://www.linkedin.com/shareArticle'
	                },
	                keys: {
	                    facebook: '1439597326343190'
	                }
	            };
	        }
	    }, {
	        key: 'requestParams',
	        get: function get() {
	            var _this = this;

	            return this._.requestParams || (this._.requestParams = {
	                additionalEmailInfo: function additionalEmailInfo(job) {
	                    return '?subject=' + encodeURIComponent(job.title) + '&body=' + _this.description(job, window.location.href) + _this.additionalEmailInfo(job);
	                },
	                facebook: function facebook() {
	                    return '?display=popup&app_id=' + _this.config.keys.facebook + '&href=' + encodeURIComponent(window.location.href) + '&redirect_uri=' + encodeURIComponent('https://www.facebook.com/');
	                },
	                twitter: function twitter(job) {
	                    return '?text=' + encodeURIComponent(_this.description(job)) + '&url=' + encodeURIComponent(window.location.href);
	                },
	                linkedin: function linkedin(job) {
	                    return '?mini=true&source=Bullhorn%20Career%20Portal&title=' + encodeURIComponent(_this.description(job)) + '&url=' + encodeURIComponent(window.location.href);
	                },
	                email: function email(job) {
	                    return '?subject=' + encodeURIComponent(job.title) + '&body=' + _this.description(job, window.location.href);
	                }
	            });
	        }
	    }]);

	    return ShareService;
	}();

	exports.default = ShareService;

/***/ }),
/* 17 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var ApplyService = function () {
	    ApplyService.$inject = ["$http", "configuration"];
	    function ApplyService($http, configuration) {
	        'ngInject';

	        _classCallCheck(this, ApplyService);

	        this.$http = $http;
	        this.configuration = configuration;
	    }

	    _createClass(ApplyService, [{
	        key: 'submit',
	        value: function submit(jobID, successCallback, errorCallback) {
	            successCallback = successCallback || function () {};

	            errorCallback = errorCallback || function () {};

	            var self = this,
	                applyUrl = void 0;
	            self.ajaxError = '';

	            if (this.form.resumeInfo) {
	                var form = new FormData();
	                if (this.form.resumeInfo.toString().indexOf('Blob') !== -1) {
	                    // Resume binary is a blob
	                    form.append('resume', this.form.resumeInfo, 'LinkedIn Resume');
	                } else {
	                    form.append('resume', this.form.resumeInfo);
	                }
	                applyUrl = this._applyUrl + '/' + jobID + '/raw' + this.requestParams.assemble(this.form.resumeInfo);
	                this.$http.post(applyUrl, form, {
	                    transformRequest: angular.identity,
	                    headers: { 'Content-Type': undefined }
	                }).success(function () {
	                    self.ajaxError = '';
	                    successCallback();
	                }).error(function (data) {
	                    if (data.errorCode === 400) {
	                        self.ajaxError = data.errorMessage;
	                    }
	                    self.ajaxError = 'There was an error when applying. Try again.';
	                    errorCallback();
	                });
	            }
	        }
	    }, {
	        key: '_',
	        get: function get() {
	            return this.__ || (this.__ = Object.create(null, {}));
	        }
	    }, {
	        key: 'ajaxError',
	        get: function get() {
	            return this._.ajaxError;
	        },
	        set: function set(value) {
	            this._.ajaxError = value;
	        }
	    }, {
	        key: '_applyUrl',
	        get: function get() {
	            return this._.applyUrl || (this._.applyUrl = this._publicServiceUrl + '/apply');
	        }
	    }, {
	        key: 'form',
	        get: function get() {
	            return this._.form || (this._.form = {
	                firstName: '',
	                lastName: '',
	                dateOfBirth: '',
	                designation: '',
	                companyName: '',
	                passportNumber: '',
	                passportValidity: '',
	                nationality: '',
	                country: '',
	                email: '',
	                salary: '',
	                city: '',
	                desiredSalary: '',
	                period: '',
	                experience: '',
	                category: '',
	                skills: '',
	                industry: '',
	                visaType: '',
	                emailAlternate: '',
	                phone: '',
	                alternatePhone: '',
	                gender: '',
	                ethnicity: '',
	                veteran: '',
	                disability: '',
	                resumeInfo: {},
	                confirm: ''
	            });
	        },
	        set: function set(value) {
	            this._.form = value;
	        }
	    }, {
	        key: '_publicServiceUrl',
	        get: function get() {
	            var result = this._.publicServiceUrl;

	            if (!result) {
	                var corpToken = this.configuration.service.corpToken;
	                var port = parseInt(this.configuration.service.port) || 443;
	                var scheme = 'http' + (port === 443 ? 's' : '');
	                var swimlane = this.configuration.service.swimlane;

	                result = this._.publicServiceUrl = scheme + '://public-rest' + swimlane + '.bullhornstaffing.com:' + port + '/rest-services/' + corpToken;
	            }

	            return result;
	        }
	    }, {
	        key: 'requestParams',
	        get: function get() {
	            var _this = this;

	            return this._.requestParams || (this._.requestParams = {
	                firstName: function firstName() {
	                    return encodeURIComponent(_this.form.firstName);
	                },
	                lastName: function lastName() {
	                    return encodeURIComponent(_this.form.lastName);
	                },
	                dateOfBirth: function dateOfBirth() {
	                    return encodeURIComponent(_this.form.dateOfBirth);
	                },
	                designation: function designation() {
	                    return encodeURIComponent(_this.form.designation);
	                },
	                companyName: function companyName() {
	                    return encodeURIComponent(_this.form.companyName);
	                },
	                passportNumber: function passportNumber() {
	                    return encodeURIComponent(_this.form.passportNumber);
	                },
	                passportValidity: function passportValidity() {
	                    return encodeURIComponent(_this.form.passportValidity);
	                },
	                nationality: function nationality() {
	                    return encodeURIComponent(_this.form.nationality);
	                },
	                salary: function salary() {
	                    return encodeURIComponent(_this.form.salary);
	                },
	                desiredSalary: function desiredSalary() {
	                    return encodeURIComponent(_this.form.desiredSalary);
	                },
	                email: function email() {
	                    return encodeURIComponent(_this.form.email);
	                },
	                city: function city() {
	                    return encodeURIComponent(_this.form.city);
	                },
	                period: function period() {
	                    return encodeURIComponent(_this.form.period);
	                },
	                experience: function experience() {
	                    return encodeURIComponent(_this.form.experience);
	                },
	                category: function category() {
	                    return encodeURIComponent(_this.form.category);
	                },
	                skills: function skills() {
	                    return encodeURIComponent(_this.form.skills);
	                },
	                industry: function industry() {
	                    return encodeURIComponent(_this.form.industry);
	                },
	                visaType: function visaType() {
	                    return encodeURIComponent(_this.form.visaType);
	                },
	                country: function country() {
	                    return encodeURIComponent(_this.form.country);
	                },
	                emailAlternate: function emailAlternate() {
	                    return encodeURIComponent(_this.form.emailAlternate);
	                },
	                phone: function phone() {
	                    return encodeURIComponent(_this.form.phone || '');
	                },
	                alternatePhone: function alternatePhone() {
	                    return encodeURIComponent(_this.form.alternatePhone || '');
	                },
	                gender: function gender() {
	                    return encodeURIComponent(_this.form.gender);
	                },
	                ethnicity: function ethnicity() {
	                    return encodeURIComponent(_this.form.ethnicity);
	                },
	                veteran: function veteran() {
	                    return encodeURIComponent(_this.form.veteran);
	                },
	                disability: function disability() {
	                    return encodeURIComponent(_this.form.disability);
	                },
	                assemble: function assemble(resume) {
	                    var type = resume.name ? resume.name.substring(resume.name.lastIndexOf('.') + 1) : 'txt',
	                        url = '?externalID=Resume&type=Resume&firstName=' + _this.requestParams.firstName() + '&customText1=' + _this.requestParams.period() + '&experience=' + _this.requestParams.experience() + '&email2=' + _this.requestParams.emailAlternate() + '&phone=' + _this.requestParams.phone() + '&phone2=' + _this.requestParams.alternatePhone() + '&lastName=' + _this.requestParams.lastName() + '&email=' + _this.requestParams.email() + '&nationality=' + _this.requestParams.nationality() + '&passportNumber=' + _this.requestParams.passportNumber() + '&passportValidity=' + _this.requestParams.passportValidity() + '&designation=' + _this.requestParams.designation() + '&phone=' + _this.requestParams.phone() + '&gender=' + _this.requestParams.gender() + '&ethnicity=' + _this.requestParams.ethnicity() + '&salary=' + _this.requestParams.salary() + '&veteran=' + _this.requestParams.veteran() + '&disability=' + _this.requestParams.disability() + '&format=' + type;
	                    console.log(url);
	                    if (window.location.href.indexOf('source=') > -1) {
	                        var sourceRegex = /(source=)([A-Za-z0-9\-]+)?/;
	                        var source = window.location.href.match(sourceRegex)[0];
	                        url += '&' + source;
	                    }
	                    return url;
	                }
	            });
	        }
	    }]);

	    return ApplyService;
	}();

	exports.default = ApplyService;

/***/ }),
/* 18 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var SharedData = function () {
	    function SharedData() {
	        _classCallCheck(this, SharedData);
	    }

	    _createClass(SharedData, [{
	        key: '_',
	        get: function get() {
	            return this.__ || (this.__ = Object.create(null, {}));
	        }
	    }, {
	        key: 'viewState',
	        get: function get() {
	            return this._.viewState || 'overview-closed';
	        },
	        set: function set(value) {
	            this._.viewState = value;
	        }
	    }, {
	        key: 'gridState',
	        get: function get() {
	            return this._.gridState || 'list-view';
	        },
	        set: function set(value) {
	            this._.gridState = value;
	        }
	    }, {
	        key: 'modalState',
	        get: function get() {
	            return this._.modalState || 'closed';
	        },
	        set: function set(value) {
	            this._.modalState = value;
	        }
	    }, {
	        key: 'filtersApplied',
	        get: function get() {
	            return this._.filtersApplied || 0;
	        },
	        set: function set(value) {
	            this._.filtersApplied = value;
	        }
	    }]);

	    return SharedData;
	}();

	exports.default = SharedData;

/***/ }),
/* 19 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var LinkedInService = function () {
	    LinkedInService.$inject = ["$q", "configuration", "$window", "SharedData"];
	    function LinkedInService($q, configuration, $window, SharedData) {
	        'ngInject';

	        _classCallCheck(this, LinkedInService);

	        this.$q = $q;
	        this.$window = $window;

	        this.userIsLoaded = false;
	        this.configuration = configuration;
	        this.SharedData = SharedData;
	    }

	    /**
	     * Loads and initialized the LinkedIn API
	     * @param {Promise} def - promise to be resolved when the user is returned from the API
	     */


	    _createClass(LinkedInService, [{
	        key: 'loadAndInitializeApi',
	        value: function loadAndInitializeApi(def) {
	            var _this = this;

	            var script = document.createElement('script'),
	                prior = document.getElementsByTagName('script')[0];
	            script.async = 1;
	            prior.parentNode.insertBefore(script, prior);
	            script.onload = script.onreadystatechange = function (_, isAbort) {
	                // jshint ignore:line
	                if (isAbort || !script.readyState || /loaded|complete/.test(script.readyState)) {
	                    script.onload = script.onreadystatechange = null;
	                    script = undefined;

	                    // Set a callback function on the window for LinkedIn to call after the API is initialized
	                    _this.$window.linkedInApiOnLoadCallback = function () {
	                        _this.getUser(def);
	                        // Opens Modal when API information is loaded.
	                        _this.SharedData.modalState = 'open';
	                    };

	                    if (!isAbort) {
	                        IN.init({
	                            'api_key': _this.configuration.integrations.linkedin.clientId,
	                            onLoad: 'linkedInApiOnLoadCallback'
	                        });
	                    }
	                }
	            };

	            script.src = '//platform.linkedin.com/in.js?async=true';
	        }
	    }, {
	        key: 'getUser',
	        value: function getUser(deferred) {
	            var _this2 = this;

	            var def = deferred || this.$q.defer();
	            // Authenticate user
	            if (typeof IN !== 'undefined') {

	                IN.User.authorize(function () {
	                    var url = '/people/~:(id,email-address,first-name,last-name,formatted-name,location,positions,site-standard-profile-request,api-standard-profile-request,public-profile-url,skills,three-past-positions,educations,courses,publications,patents,languages,phone-numbers,main-address,im-accounts,twitter-accounts)?format=json';
	                    IN.API.Raw(url).method('GET').result(function (linkedinUser) {
	                        def.resolve(linkedinUser);
	                        _this2.userIsLoaded = true;
	                    });
	                });
	            } else {
	                this.loadAndInitializeApi(def);
	            }
	            return def.promise;
	        }
	    }, {
	        key: 'isUserLoaded',
	        value: function isUserLoaded() {
	            return this.userIsLoaded;
	        }
	    }]);

	    return LinkedInService;
	}();

	exports.default = LinkedInService;

/***/ }),
/* 20 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var VerifyLI = function () {
	    VerifyLI.$inject = ["configuration"];
	    function VerifyLI(configuration) {
	        'ngInject';

	        _classCallCheck(this, VerifyLI);

	        this.configuration = configuration;
	        this.verified = this.verifyLinkedInIntegration();
	    }

	    _createClass(VerifyLI, [{
	        key: 'verifyLinkedInIntegration',
	        value: function verifyLinkedInIntegration() {
	            var clientId = this.configuration.integrations.linkedin.clientId || '';
	            return !(clientId === '' || clientId === '[ CLIENTID HERE ]' || clientId.length < 11 || clientId.length > 20);
	        }
	    }]);

	    return VerifyLI;
	}();

	exports.default = VerifyLI;

/***/ }),
/* 21 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var CacheService = function () {
	    function CacheService() {
	        _classCallCheck(this, CacheService);

	        try {
	            this.hasLocalStorage = typeof Storage !== 'undefined';
	            localStorage.setItem('test', 1);
	            localStorage.removeItem('test');
	        } catch (e) {
	            this.hasLocalStorage = false;
	        }
	    }

	    _createClass(CacheService, [{
	        key: 'getItem',
	        value: function getItem(key) {
	            if (this.hasLocalStorage) {
	                var value = JSON.parse(localStorage.getItem(key));
	                if (value) {
	                    return value;
	                }
	                return null;
	            }
	        }
	    }, {
	        key: 'putItem',
	        value: function putItem(key, value) {
	            if (this.hasLocalStorage) {
	                localStorage.setItem(key, JSON.stringify(value));
	                return value;
	            }
	        }
	    }, {
	        key: 'deleteItem',
	        value: function deleteItem(key) {
	            if (this.hasLocalStorage) {
	                localStorage.removeItem(key);
	                return true;
	            }
	        }
	    }, {
	        key: 'clearStorage',
	        value: function clearStorage() {
	            if (this.hasLocalStorage) {
	                localStorage.clear();
	            }
	        }
	    }]);

	    return CacheService;
	}();

	exports.default = CacheService;

/***/ }),
/* 22 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var EeocService = function () {
	    EeocService.$inject = ["configuration"];
	    function EeocService(configuration) {

	        'ngInject';

	        _classCallCheck(this, EeocService);

	        this.genderRaceEthnicity = !!configuration.eeoc && configuration.eeoc.genderRaceEthnicity === true;
	        this.veteran = !!configuration.eeoc && configuration.eeoc.veteran === true;
	        this.disability = !!configuration.eeoc && configuration.eeoc.disability === true;

	        this.selectedEthnicities = {};
	    }

	    _createClass(EeocService, [{
	        key: 'isGenderRaceEthnicityEnabled',
	        value: function isGenderRaceEthnicityEnabled() {
	            return this.genderRaceEthnicity;
	        }
	    }, {
	        key: 'isEthnicityChecked',
	        value: function isEthnicityChecked() {
	            var checked = this.getCheckedEthnicities();
	            return checked.length > 0;
	        }
	    }, {
	        key: 'getCheckedEthnicities',
	        value: function getCheckedEthnicities() {
	            var checked = [];
	            angular.forEach(this.selectedEthnicities, function (value, key) {
	                if (!!value) {
	                    checked.push(key);
	                }
	            });
	            return checked;
	        }
	    }, {
	        key: 'isVeteranEnabled',
	        value: function isVeteranEnabled() {
	            return this.veteran;
	        }
	    }, {
	        key: 'isDisabilityEnabled',
	        value: function isDisabilityEnabled() {
	            return this.disability;
	        }
	    }]);

	    return EeocService;
	}();

	exports.default = EeocService;

/***/ }),
/* 23 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var StripHtml = function StripHtml() {
	    _classCallCheck(this, StripHtml);

	    return function (input) {
	        var s = String(input).replace(/<[^>]+>/gm, '');
	        var out = '';
	        var l = s.length;

	        for (var i = 0; i < l; i++) {
	            var ch = s.charAt(i);
	            if (ch === '&') {
	                var semicolonIndex = s.indexOf(';', i + 1);
	                if (semicolonIndex > 0) {
	                    var entity = s.substring(i + 1, semicolonIndex);
	                    if (entity.length > 1 && entity.charAt(0) === '#') {
	                        /* jshint -W073 */
	                        if (entity.charAt(1) === 'x' || entity.charAt(1) === 'X') {
	                            ch = String.fromCharCode('0' + entity.substring(1));
	                        } else {
	                            ch = String.fromCharCode(entity.substring(1));
	                        }
	                        /* jshint +W073 */
	                    } else {
	                        switch (entity) {
	                            case 'quot':
	                                ch = String.fromCharCode(0x0022);
	                                break;
	                            case 'amp':
	                                ch = String.fromCharCode(0x0026);
	                                break;
	                            case 'lt':
	                                ch = String.fromCharCode(0x003c);
	                                break;
	                            case 'gt':
	                                ch = String.fromCharCode(0x003e);
	                                break;
	                            case 'nbsp':
	                                ch = String.fromCharCode(0x00a0);
	                                break;
	                            default:
	                                ch = '';
	                                break;
	                        }
	                    }
	                    i = semicolonIndex;
	                }
	            }
	            out += ch;
	        }
	        return out;
	    };
	};

	exports.default = StripHtml;

/***/ }),
/* 24 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

	var OmitFilters = function OmitFilters() {
	    _classCallCheck(this, OmitFilters);

	    return function (collection, type, params) {
	        if (!angular.isArray(collection) || angular.isUndefined(type)) {
	            return collection;
	        }

	        return collection.filter(function (element) {
	            var isChecked = false;
	            if (type === 'location') {
	                isChecked = params ? params.indexOf(element.address.city + '|' + element.address.state) >= 0 : false;
	            } else {
	                isChecked = params ? params.indexOf(element.publishedCategory.id) >= 0 : false;
	            }
	            return element.idCount !== 0 || isChecked;
	        });
	    };
	};

	exports.default = OmitFilters;

/***/ }),
/* 25 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	    value: true
	});

	exports.default = ["configuration", "moment", function (configuration, moment) {
	    'ngInject';

	    return function (date) {
	        var momentDate = moment(date);
	        var now = moment();

	        if (now.diff(momentDate, 'days') > 1) {
	            if (['en-EU', 'en-GB'].indexOf(configuration.defaultLocale) !== -1) {
	                return momentDate.format('DD/MM/YY');
	            } else {
	                return momentDate.format('MM/DD/YY');
	            }
	        }
	        return momentDate.fromNow();
	    };
	}];

/***/ })
/******/ ]);
angular.module('CareerPortal').run(['$templateCache', function($templateCache) {$templateCache.put('app/detail/apply.html','<button class="btn green-btn apply-btn" data-ng-click="detail.applyModal()"><span>Apply Now</span></button>');
$templateCache.put('app/detail/detail.html','<div ng-hide="detail.SharedData.modalState == \'open\'"><div class="job-info-wrapper" data-ng-if="detail.job.isPublic && !detail.job.isDeleted && detail.job.isOpen"><h4>{{::detail.job.title}}</h4><button class="btn green-btn apply-btn" data-ng-click="detail.applyModal()"><span>Apply Now</span></button><div class="job-info"><span class="location icon-before">{{::detail.job.address.city}}<span data-ng-if="::(detail.job.address.city && detail.job.address.state)">,&nbsp;</span>{{::detail.job.address.state}}</span> <span class="postedon icon-before" data-ng-if="detail.job.dateLastPublished">Posted On - <strong>{{detail.job.dateLastPublished | displayDate}}</strong></span></div></div></div>');
$templateCache.put('app/detail/view.html','<div ng-hide="detail.SharedData.modalState == \'open\'"><div class="job-info-wrapper" data-ng-if="detail.job.isPublic && !detail.job.isDeleted && detail.job.isOpen"><h4>{{::detail.job.title}}</h4><button class="btn green-btn apply-btn" data-ng-click="detail.applyModal()"><span>Apply Now</span></button><div class="job-info"><span class="location icon-before">{{::detail.job.address.city}}<span data-ng-if="::(detail.job.address.city && detail.job.address.state)">,&nbsp;</span>{{::detail.job.address.state}}</span> <span class="postedon icon-before" data-ng-if="detail.job.dateLastPublished">Posted On - <strong>{{detail.job.dateLastPublished | displayDate}}</strong></span></div></div></div>');
$templateCache.put('app/header/header.html','<header class="app"><button class="toggle-filters" name="filters-menu" data-ng-click="header.toggleFilters()"><i class="bhi-search-menu open"></i> <i class="bhi-times close"></i> <span class="badge" data-ng-show="header.SearchService.searchParams.category.length + header.SearchService.searchParams.location.length > 0">{{header.SearchService.searchParams.category.length + header.SearchService.searchParams.location.length}}</span></button> <button class="go-back" name="over-arrow-back" data-ng-click="header.goBack()"><i class="bhi-arrow-left"></i></button> <label>{{::header.configuration.companyName}}</label></header>');
$templateCache.put('app/list/filter-list.html','<div class="job-opening-section"><div class="container"><career-portal-sidebar></career-portal-sidebar><div class="job-opening-wrap clearfix"><div class="job-details-wrapper" data-ng-repeat="job in list.SearchService.currentListData"><a class="job-details-link" href="#/jobs/{{::job.id}}"><div class="job-name openings"><h5>{{::job.title}}</h5><span>{{::job.address.city}}<span data-ng-if="::(job.address.city && job.address.state)">,&nbsp;</span>{{::job.address.state}}</span></div><div class="industry-details-wrapper openings clearfix"><div class="industry-details"><p>Industry</p><span>{{::job.publishedCategory.name}}</span></div><div class="industry-details" data-ng-show="::((job.address.city || job.address.state) && job.employmentType)"><p>Type</p><span>{{::job.employmentType}}</span></div></div><div class="blog-post-date openings clearfix" data-ng-if="job.dateLastPublished"><p>{{\'common.addedLabel\' | i18n}} - {{job.dateLastPublished | displayDate}}</p><span class="bhi-arrow-right"><u>Read More</u></span></div></a></div></div><div class="no-data-message" data-ng-if="!list.SearchService.helper.isSearching && !list.SearchService.currentListData.length"><h2>{{\'common.noDataHeading\' | i18n}}</h2><h3>{{\'list.noDataMessage\' | i18n}}</h3><p data-ng-if="list.SearchService.searchParams.location.length || list.SearchService.searchParams.category.length || list.SearchService.searchParams.textSearch.length"><a href="" data-ng-click="list.clearSearchParamsAndLoadData();">{{\'list.noDataResolution\' | i18n}}</a></p></div><div class="load-more-wrap"><p class="load-more-data btn blue-btn" data-ng-click="list.loadMoreData();" data-ng-show="list.SearchService.helper.hasMore" style="cursor: pointer;">{{\'list.loadMoreDataLabel\' | i18n}}</p></div></div></div>');
$templateCache.put('app/list/list.html','<div class="job-opening-section"><div class="container"><career-portal-sidebar></career-portal-sidebar><h4 data-ng-if="!list.SearchService.helper.isSearching && list.SearchService.currentListData.length"></h4><div class="job-opening-wrap openings-wrapper clearfix"><div class="job-details-wrapper" data-ng-repeat="job in list.SearchService.currentListData | orderBy:dateLastPublished"><a class="job-details-link" href="#/jobs/{{::job.id}}"><div class="job-name openings"><h5>{{::job.title}}</h5><span>{{::job.address.city}}<span data-ng-if="::(job.address.city && job.address.state)">,&nbsp;</span>{{::job.address.state}}</span></div><div class="industry-details-wrapper openings clearfix"><div class="industry-details"><span>Industry</span> <span>{{::job.publishedCategory.name}}</span></div><div class="industry-details" data-ng-show="::((job.address.city || job.address.state) && job.employmentType)"><span>Type</span> <span>{{::job.employmentType}}</span></div></div><div class="blog-post-date openings clearfix" data-ng-if="job.dateLastPublished"><p>{{\'common.addedLabel\' | i18n}} - {{job.dateLastPublished | displayDate}}</p><span class="bhi-arrow-right"><u>Read More</u></span></div></a></div></div><div class="no-data-message" data-ng-if="!list.SearchService.helper.isSearching && !list.SearchService.currentListData.length"><h2>{{\'common.noDataHeading\' | i18n}}</h2><h3>{{\'list.noDataMessage\' | i18n}}</h3><p data-ng-if="list.SearchService.searchParams.location.length || list.SearchService.searchParams.category.length || list.SearchService.searchParams.textSearch.length"><a href="" data-ng-click="list.clearSearchParamsAndLoadData();">{{\'list.noDataResolution\' | i18n}}</a></p></div><div id="loading-bar-container"></div><div class="load-more-wrap"><p class="load-more-data btn blue-btn" data-ng-click="list.loadMoreData();" data-ng-show="list.SearchService.helper.hasMore" style="cursor: pointer;">{{\'list.loadMoreDataLabel\' | i18n}}</p></div></div></div>');
$templateCache.put('app/main/main.html','<section class="main" data-ng-class="[main.SharedData.viewState, main.SharedData.gridState]"><career-portal-modal data-ng-show="main.SharedData.modalState === \'open\'"></career-portal-modal><section class="portal"><div class="portal-canvas"><section class="main" id="main"><section class="fade" data-ui-view=""></section><div id="mask" class="mask" data-ng-click="main.closeFilters();"></div></section></div></section></section>');
$templateCache.put('app/modal/modal.html','<div data-ng-class="{\'success\':!modal.showForm}"><div class="job-info-wrapper" data-ng-if="modal.SearchService.currentDetailData && modal.SearchService.currentDetailData.title"><h4>{{ modal.SearchService.currentDetailData.title }}</h4><a class="btn blue-btn" href="javascript:;" data-ng-click="modal.closeModal(applyForm)">VIEW DETAILS</a><div class="job-info job-info-apply"><span class="location icon-before">{{ modal.SearchService.currentDetailData.address.city }}<span data-ng-if="(modal.SearchService.currentDetailData.address.city && modal.SearchService.currentDetailData.address.state)">,&nbsp;</span><strong>{{ modal.SearchService.currentDetailData.address.state }}</strong></span> <span class="postedon">Posted On - <strong>11 May 2017</strong></span> <span class="postedon">Type - <strong>{{ ::modal.SearchService.currentDetailData.employmentType }}</strong></span></div></div><form name="applyForm" class="contact-form job-apply-form clearfix" novalidate="" data-ng-show="modal.showForm"><h4>CANDIDATE INFORMATION</h4><div class="contact-info clearfix"><div class="field-wrap clearfix"><div class="col-2"><div class="input"><span class="required"><label>First Name*</label></span> <input type="text" name="firstName" value="" data-ng-model="modal.ApplyService.form.firstName" data-i18n-attr="{placeholder: \'modal.firstNamePlaceholder\'}" required=""></div><span class="error" data-ng-show="applyForm.firstName.$touched || applyForm.$submitted"><span data-ng-show="applyForm.firstName.$error.required">{{ \'modal.firstNameValidation\' | i18n }}</span></span></div><div class="col-2"><div class="input"><span class="required"><label>Last Name*</label></span> <input type="text" name="lastName" value="" data-ng-model="modal.ApplyService.form.lastName" data-i18n-attr="{placeholder: \'modal.lastNamePlaceholder\'}" required=""></div><span class="error" data-ng-show="applyForm.lastName.$touched || applyForm.$submitted"><span data-ng-show="applyForm.lastName.$error.required">{{ \'modal.lastNameValidation\' | i18n }}</span></span></div></div><div class="field-wrap clearfix"><div class="col-2"><div class="input"><span class="required"><label>Date of birth*</label></span><datepicker date-format="MMMM d, y"><input type="text" data-i18n-attr="{placeholder: \'modal.dateOfBirthPlaceholder\'}" ng-model="modal.ApplyService.form.dateOfBirth"></datepicker></div><span class="error" data-ng-show="applyForm.dateOfBirth.$touched || applyForm.$submitted"><span data-ng-show="applyForm.dateOfBirth.$error.required">{{ \'modal.dateOfBirthValidation\' | i18n }}</span></span></div><div class="col-2"><div class="input"><span class="required"><label>Current designation*</label></span> <input type="text" name="designation" value="" data-ng-model="modal.ApplyService.form.designation" data-i18n-attr="{placeholder: \'modal.designationPlaceholder\'}" required=""></div><span class="error" data-ng-show="applyForm.designation.$touched || applyForm.$submitted"><span data-ng-show="applyForm.designation.$error.required">{{ \'modal.designationValidation\' | i18n }}</span></span></div></div><div class="field-wrap clearfix"><div class="col-2"><div class="input"><span class="required"><label>Current company*</label></span> <input type="text" name="companyName" value="" data-ng-model="modal.ApplyService.form.companyName" data-i18n-attr="{placeholder: \'modal.companyNamePlaceholder\'}" required=""></div><span class="error" data-ng-show="applyForm.companyName.$touched || applyForm.$submitted"><span data-ng-show="applyForm.companyName.$error.required">{{ \'modal.companyNameValidation\' | i18n }}</span></span></div><div class="select-wrap col-2"><div class="input eeoc"><label class="tab-label">Select nationality*</label><select class="nice-select" name="nationality" id="eeoc-nationality" data-ng-model="modal.ApplyService.form.nationality"><option selected="" value="">Select</option><option value="EG">Egypt</option><option value="IN">Indian</option><option value="JO">Jordan</option><option value="PK">Pakistan</option><option value="PH">Philipines</option><option value="SA">Saudi Arabia</option><option value="UAE">United Arab Emirates</option><option value="UK">United Kingdom</option><option value="US">United States</option><option value="Other">Other</option></select></div><span class="error" data-ng-show="applyForm.nationality.$touched || applyForm.$submitted"><span data-ng-show="applyForm.nationality.$error.required">{{ \'modal.nationalityValidation\' | i18n }}</span></span></div></div><div class="field-wrap clearfix"><div class="col-2"><div class="input"><span><label>Passport number (optional)</label></span> <input type="text" name="passportNumber" value="" data-ng-model="modal.ApplyService.form.passportNumber" data-i18n-attr="{placeholder: \'modal.passportNumberPlaceholder\'}"></div></div><div class="col-2"><div class="input"><span class="required"><label>Passport validity (optional)</label></span><datepicker date-format="MM-dd-yyyy"><input type="text" data-i18n-attr="{placeholder: \'modal.passportValidityPlaceholder\'}" ng-model="modal.ApplyService.form.passportValidity"></datepicker></div></div></div></div><h4>CONTACT INFORMATION</h4><div class="contact-info clearfix"><div class="field-wrap clearfix"><div class="col-2"><div class="input"><span class="required"><label>Email*</label></span> <input type="email" name="email" value="" data-ng-model="modal.ApplyService.form.email" data-i18n-attr="{placeholder: \'common.emailPlaceholder\'}" required=""></div><span class="error" data-ng-show="applyForm.email.$touched || applyForm.$submitted"><span data-ng-show="applyForm.email.$error.required">{{ \'modal.emailValidationRequired\' | i18n }}</span> <span data-ng-show="applyForm.email.$error.email">{{ \'modal.emailValidationFormat\' | i18n }}</span></span></div><div class="col-2"><div class="input"><span><label>Email two (optional)</label></span> <input type="email" name="emailAlternate" value="" data-ng-model="modal.ApplyService.form.emailAlternate" data-i18n-attr="{placeholder: \'modal.emailAlternatePlaceholder\'}"></div><span class="error" data-ng-show="applyForm.emailAlternate.$touched || applyForm.$submitted"><span data-ng-show="applyForm.emailAlternate.$error.email">{{ \'modal.emailValidationFormat\' | i18n }}</span></span></div></div><div class="field-wrap clearfix"><div class="col-2"><div class="input"><span><label>Telephone/Mobile phone*</label></span> <input type="text" name="phone" value="" data-ng-model="modal.ApplyService.form.phone" data-i18n-attr="{placeholder: \'modal.phonePlaceholder\'}" required=""></div><span class="error" data-ng-show="applyForm.phone.$touched || applyForm.$submitted"><span data-ng-show="applyForm.phone.$error.required">{{ \'modal.phoneValidationRequired\' | i18n }}</span> <span data-ng-show="applyForm.phone.$error.phone">{{ \'modal.phoneValidationFormat\' | i18n }}</span></span></div><div class="col-2"><div class="input"><span><label>Work phone (optional)</label></span> <input type="text" name="alternatePhone" value="" data-ng-model="modal.ApplyService.form.alternatePhone" data-i18n-attr="{placeholder: \'modal.phoneAlternatePlaceholder\'}"></div></div></div><div class="field-wrap clearfix"></div></div><h4>GENERAL INFORMATION</h4><div class="contact-info clearfix"><div class="field-wrap clearfix"><div class="select-wrap col-2"><div class="input eeoc"><label class="tab-label">Notice Period*</label> <input type="text" name="period" value="" data-ng-model="modal.ApplyService.form.period" data-i18n-attr="{placeholder: \'modal.periodPlaceholder\'}" required=""></div><span class="error" data-ng-show="applyForm.period.$touched || applyForm.$submitted"><span data-ng-show="applyForm.period.$error.required">{{ \'modal.periodValidation\' | i18n }}</span></span></div><div class="select-wrap col-2"><div class="input eeoc"><label class="tab-label">Experience in Years*</label> <input type="text" name="experience" value="" data-ng-model="modal.ApplyService.form.experience" data-i18n-attr="{placeholder: \'modal.experiencePlaceholder\'}" required=""></div><span class="error" data-ng-show="applyForm.experience.$touched || applyForm.$submitted"><span data-ng-show="applyForm.experience.$error.required">{{ \'modal.experienceValidation\' | i18n }}</span></span></div></div><div class="field-wrap clearfix"><div class="col-2"><div class="input"><span class="required"><label>Desired salary in AED (Annual)*</label></span> <input type="text" name="salary" value="" data-ng-model="modal.ApplyService.form.salary" data-i18n-attr="{placeholder: \'modal.salaryPlaceholder\'}" required=""></div><span class="error" data-ng-show="applyForm.salary.$touched || applyForm.$submitted"><span data-ng-show="applyForm.salary.$error.required">{{ \'modal.salaryValidation\' | i18n }}</span></span></div></div><span class="required"><label>Upload Resume*</label></span><div class="upload-resume-wrapper clearfix" data-ng-if="!modal.hasAttemptedLIApply"><label class="upload-resume" for="upload-file"><div class="resume-wrap"><span class="upload-icon icon-before"></span> <span class="field-label">{{ \'modal.resumeFilePlaceholder\' | i18n }}</span> <span class="error" data-ng-show="!applyForm.$submitted && modal.resumeUploadErrorMessage">{{ modal.resumeUploadErrorMessage }}</span> <span class="error" data-ng-show="applyForm.$submitted && !modal.ApplyService.form.resumeInfo">{{ \'modal.resumeValidation\' | i18n }}</span></div></label><div class="upload-container needsclick" data-ngf-select="" data-ng-model="modal.ApplyService.form.resumeInfo" data-ngf-max-size="modal.configuration.maxUploadSize" data-ngf-multiple="false" data-ngf-accept="applyForm.$submitted=false; modal.validateResume($file);" data-ng-if="!modal.hasAttemptedLIApply"><i data-ng-show="!modal.ApplyService.form.resumeInfo.name" class="bhi-publish"></i> <i data-ng-show="modal.ApplyService.form.resumeInfo.name" class="bhi-resume"></i> <span class="upload-text uploaded-data-title" data-ng-show="modal.ApplyService.form.resumeInfo.name">{{ modal.ApplyService.form.resumeInfo.name }}</span></div></div><span class="error submit-error" data-ng-if="!modal.isSubmitting && modal.ApplyService.ajaxError"><i class="bhi-caution"></i> <span>{{ modal.ApplyService.ajaxError }}</span></span><div class="btn-check-wrap clearfix" data-ng-if="modal.SearchService.currentDetailData && modal.SearchService.currentDetailData.title"><div class="field-wrap checkbox-wrap"><input type="checkbox" name="subscribe" data-ng-model="modal.ApplyService.form.confirm" ng-init="modal.ApplyService.form.confirm=true" id="subscribe-checkbox"> <label for="subscribe-checkbox" class="icon-before">I want to apply for all open jobs</label></div></div></div></form><section class="success center-title success-msg-title" data-ng-if="!modal.showForm"><h4>{{ modal.successMessageKey | i18n }}</h4><h4 ng-if="modal.successSubMessageKey">{{ modal.successSubMessageKey | i18n }}</h4></section><footer data-ng-class="{\'success\':!modal.showForm}" class="center-title"><button data-ng-show="modal.showForm" name="submit" data-ng-click="modal.submit(applyForm)" data-ng-disabled="modal.isSubmitting || modal.enableSendButton(applyForm.$valid)" data-ng-class="{ \'disabled\': modal.enableSendButton(applyForm.$valid) }" class="btn green-btn submit-application" value="SUBMIT APPLICATION"><span data-ng-if="!modal.isSubmitting">{{ \'modal.sendButton\' | i18n }}</span> <span data-ng-if="modal.isSubmitting"><div class="loading">{{ \'modal.submittingButton\' | i18n }}<div class="loading-dot"></div><div class="loading-dot"></div><div class="loading-dot"></div></div></span></button> <button class="success-btn btn blue-btn" data-ng-hide="modal.showForm" data-ng-if="modal.SearchService.currentDetailData && modal.SearchService.currentDetailData.title" name="ok" data-ng-click="modal.closeModal(applyForm)">{{ \'modal.okButton\' | i18n }}</button></footer></div>');
$templateCache.put('app/sidebar/sidebar.html','<div class="job-opening-section"><div class="container"><div class="job-opening-search"><div class="search-job-icon icon-before"><input type="text" name="search" placeholder="Search" data-ng-change="sidebar.searchOnDelay()" data-ng-model="sidebar.SearchService.searchParams.textSearch" id="keyword" data-i18n-attr="{placeholder: \'sidebar.sidebarSearchPlaceholder\'}"></div><div class="select-wrap"><label class="tab-label"></label><div class="select-field"><ui-select ng-model="sidebar.selectedLocation.selected" theme="selectize" on-select="sidebar.addOrRemoveLocation($item, $model)" search-enabled="sidebar.searchSelectDisabled" title="Choose a location"><ui-select-match placeholder="Select job location">{{$select.selected.address.city}}{{$select.selected.address.state}}</ui-select-match><ui-select-choices repeat="location in filteredLocations = (sidebar.locations | omitFilters:\'location\':sidebar.SearchService.searchParams.location) | limitTo:sidebar.locationLimitTo | orderBy:\'location.address.city\' track by location.address.city + \',\' + location.address.state"><span>{{location.address.city}}, {{location.address.state}}</span></ui-select-choices></ui-select></div></div><div class="select-wrap"><label class="tab-label"></label><div class="select-field"><ui-select ng-model="sidebar.selectedType.selected" theme="selectize" on-select="sidebar.addOrRemoveEmploymentType($item, $model)" search-enabled="sidebar.searchSelectDisabled" title="Choose a job type"><ui-select-match placeholder="Select job type">{{$select.selected.employmentType}}</ui-select-match><ui-select-choices repeat="type in filteredemploymentTypes = (sidebar.employmentTypes) | limitTo:sidebar.employmentTypeLimitTo track by $index"><span>{{type.employmentType}}</span></ui-select-choices></ui-select></div></div><div class="select-wrap"><label class="tab-label"></label><div class="select-field"><ui-select ng-model="sidebar.selectedCategory.selected" theme="selectize" on-select="sidebar.addOrRemoveCategory($item, $model)" search-enabled="sidebar.searchSelectDisabled" placeholder="Select job category" title="Choose a job category"><span>isEmpty : {{$select.isEmpty()}}</span><ui-select-match placeholder="Select job category">{{$select.selected.publishedCategory.name}}</ui-select-match><ui-select-choices repeat="category in filteredCategories = (sidebar.categories | omitFilters:\'category\':sidebar.SearchService.searchParams.category) | limitTo:sidebar.categoryLimitTo track by category.publishedCategory.id"><span>{{category.publishedCategory.name}}</span></ui-select-choices></ui-select></div></div></div></div></div>');}]);