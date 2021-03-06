/* moment:false */
import routerConfig from './index.route';
import localeConfig from './index.locale';
import jsonConfiguration from './index.config';

import JobListController from './list/list.controller';
import JobFilteredListController from './list/filter.list.controller';
import JobDetailController from './detail/detail.controller';
import JobViewController from './detail/view.controller';
import CareerPortalModalController from './modal/modal.controller';
import CareerPortalSidebarController from './sidebar/sidebar.controller';

import Main from './main/main.directive';
import CareerPortalSidebar from './sidebar/sidebar.directive';
import CareerPortalHeader from './header/header.directive';
import CareerPortalModal from './modal/modal.directive';

import SearchService from './services/search.service';
import MobileDetection from './services/mobiledetection.service';
import ShareService from './services/share.service';
import ApplyService from './services/apply.service';
import SharedData from './services/shared.factory';
import LinkedInService from './services/linkedin.service';
import VerifyLI from './services/verifyli.service';
import CacheService from './services/cache.service';
import EeocService from './services/eeoc.service';

import StripHtmlFilter from './filters/striphtml.filter';
import OmitFiltersFilter from './filters/omitfilters.filter';
import DisplayDateFilter from './filters/displayDate.filter';

angular.module('CareerPortal', ['ngAnimate', 'ngTouch', '720kb.datepicker', 'angular-loading-bar', 'ngSanitize', 'ui.select', 'ui.router', 'ngFileUpload', '720kb.tooltips', 'ng-fastclick', 'ngLocalize', 'ngLocalize.Config', 'ngLocalize.InstalledLanguages', 'ngLocalize.Events'])
    .constant('moment', moment)
    .constant('configuration', {})
    .constant('localeConf', {})
    .constant('localeSupported', [])
    .constant('APPLIED_JOBS_KEY', 'APPLIED_JOBS_KEY')
    .config(routerConfig)
    .config(localeConfig)
    .config(jsonConfiguration)
    .directive('main', () => new Main())
    .directive('careerPortalSidebar', () => new CareerPortalSidebar())
    .directive('careerPortalHeader', () => new CareerPortalHeader())
    .directive('careerPortalModal', () => new CareerPortalModal())
    .controller('JobListController', JobListController)
    .controller('JobFilteredListController', JobFilteredListController)
    .controller('JobDetailController', JobDetailController)
    .controller('JobViewController', JobViewController)
    .controller('CareerPortalModalController', CareerPortalModalController)
    .controller('CareerPortalSidebarController', CareerPortalSidebarController)
    .filter('stripHtml', () => new StripHtmlFilter())
    .filter('omitFilters', () => new OmitFiltersFilter())
    .filter('displayDate', DisplayDateFilter)
    .factory('SharedData', () => new SharedData())
    .service('ShareService', ShareService)
    .service('ApplyService', ApplyService)
    .service('SearchService', SearchService)
    .service('LinkedInService', LinkedInService)
    .service('MobileDetection', MobileDetection)
    .service('VerifyLI', VerifyLI)
    .service('CacheService', CacheService)
    .service('EeocService', EeocService)
    .config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
        cfpLoadingBarProvider.parentSelector = '#loading-bar-container';
        cfpLoadingBarProvider.spinnerTemplate = '<div class="loading-wrap">Loading...</div>';
    }]);

// Deferring the bootstrap to make sure we have loaded the config from app.json
deferredBootstrapper.bootstrap({
    element: document.body,
    module: 'CareerPortal'
});
