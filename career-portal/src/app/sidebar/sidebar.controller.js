class CareerPortalSidebarController {
    /*jshint -W072 */
    constructor($scope, SharedData, $location, SearchService, $timeout, configuration) {
    /*jshint +W072 */
        'ngInject';

        this.SharedData = SharedData;
        this.$location = $location;
        this.$timeout = $timeout;
        this.SearchService = SearchService;
        this.configuration = configuration || {};

        this.locationLimitTo = 8;
        this.categoryLimitTo = 8;
        this.employmentTypeLimitTo = 8;

        this.selectedLocation = {selected: undefined};
        this.selectedType = {selected: undefined};
        this.selectedCategory = {selected: undefined};

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

    updateLocationLimitTo(value) {
        this.locationLimitTo = value;
    }

    updateCategoryLimitTo(value) {
        this.categoryLimitTo = value;
    }

    updateEmploymentTypeLimitTo(value) {
        this.employmentTypeLimitTo = value;
    }

    setLocations() {
        let controller = this;

        return function (locations) {
            controller.locations = locations.filter(function (location) {
                return location && location.address && location.address.city && location.address.state;
            });
        };
    }

    setCategories() {
        let controller = this;

        return function (categories) {
            controller.categories = categories.filter(function (category) {
                return category && category.publishedCategory && category.publishedCategory.name && category.publishedCategory.name.length;
            });
        };
    }

    setEmploymentTypes() {
        let controller = this;

        return function (employmentTypes) {
            controller.employmentTypes = employmentTypes.filter(function (employmentType) {
                return employmentType;
            });
        };
    }

    updateCountsByIntersection(oldCounts, newCounts, getID, getLabel) {
        if (!getLabel) {
            getLabel = getID;
        }

        angular.forEach(oldCounts, function (oldCount) {
            let found = false;

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
            let name1 = getLabel.call(count1);
            let name2 = getLabel.call(count2);

            if (name1 < name2) {
                return -1;
            } else if (name1 > name2) {
                return 1;
            } else {
                let idCount1 = count1.idCount;
                let idCount2 = count2.idCount;

                return idCount2 - idCount1;
            }
        });
    }

    updateFilterCounts() {
        let controller = this;

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

    updateFilterCountsAnonymous() {
        let controller = this;

        return function () {
            controller.updateFilterCounts();
        };
    }

    switchViewStyle(type) {
        this.SharedData.gridState = type + '-view';
    }

    searchJobs() {
        this.SearchService.searchParams.reloadAllData = true;
        this.SearchService.findJobs();

        this.updateFilterCounts();
    }

    clearSearchParamsAndLoadData(param) {
        this.SearchService.helper.clearSearchParams(param);
        this.SearchService.searchParams.reloadAllData = true;
        this.SearchService.findJobs();
        this.updateFilterCounts();
    }

    goBack() {
        if (this.SharedData.viewState === 'overview-open') {
            this.$location.path('/jobs');
        }
    }

    searchOnDelay() {
        if (this.searchTimeout) {
            this.$timeout.cancel(this.searchTimeout);
        }

        this.searchTimeout = this.$timeout(angular.bind(this, function () {
            this.searchJobs();
        }), 250);
    }

    addOrRemoveLocation() {
        if (!this.selectedLocation.selected) {
            return;
        }
        let key = this.selectedLocation.selected.address.city + '|' + this.selectedLocation.selected.address.state;
        if (!this.hasLocationFilter(this.selectedLocation.selected)) {
            this.SearchService.searchParams.location = [];
            this.SearchService.searchParams.location.push(key);
        } else {
            let index = this.SearchService.searchParams.location.indexOf(key);
            this.SearchService.searchParams.location.splice(index, 1);
        }
        this.searchJobs();
    }

    addOrRemoveCategory() {
        if (!this.selectedCategory.selected) {
            return;
        }
        let key = this.selectedCategory.selected.publishedCategory.id;
        if (!this.hasCategoryFilter(this.selectedCategory.selected)) {
            this.SearchService.searchParams.category = [];
            this.SearchService.searchParams.category.push(key);
        } else {
            let index = this.SearchService.searchParams.category.indexOf(key);
            this.SearchService.searchParams.category.splice(index, 1);
        }
        this.searchJobs();
    }

    addOrRemoveEmploymentType() {
        if (!this.selectedType.selected) {
            return;
        }
        if (!this.hasEmploymentTypeFilter(this.selectedType.selected)) {
            this.SearchService.searchParams.employmentType = [];
            this.SearchService.searchParams.employmentType.push(this.selectedType.selected);
        } else {
            let index = this.SearchService.searchParams.employmentType.indexOf(this.selectedType.selected);
            this.SearchService.searchParams.employmentType.splice(index, 1);
        }
        this.searchJobs();
    }

    hasLocationFilter(location) {
        let key = location.address.city + '|' + location.address.state;
        return this.SearchService.searchParams.location.indexOf(key) !== -1;
    }

    hasCategoryFilter(category) {
        return this.SearchService.searchParams.category.indexOf(category.publishedCategory.id) !== -1;
    }

    hasEmploymentTypeFilter(type) {
        return this.SearchService.searchParams.employmentType.indexOf(type) !== -1;
    }

}

export default CareerPortalSidebarController;
