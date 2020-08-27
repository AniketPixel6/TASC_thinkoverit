function routerConfig($stateProvider) {
    'ngInject';

    $stateProvider
        .state('jobs', {
            url: '/jobs?getHired',
            templateUrl: 'app/list/list.html',
            controller: 'JobListController',
            controllerAs: 'list'
        })
        .state('filteredjobs', {
            url: '/filteredjobs/:cat',
            templateUrl: 'app/list/filter-list.html',
            controller: 'JobFilteredListController',
            controllerAs: 'list',
        })
        .state('registercv', {
            url: '/registercv',
            templateUrl: 'app/modal/modal.html',
            controller: 'CareerPortalModalController',
            controllerAs: 'modal',
        })

        .state('detail', {
            url: '/jobs/:id',
            templateUrl: 'app/detail/detail.html',
            controller: 'JobDetailController',
            controllerAs: 'detail'
        });

    //$urlRouterProvider.otherwise('/jobs');
}

export default routerConfig;
