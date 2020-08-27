class ApplyService {
    constructor($http, configuration) {
        'ngInject';

        this.$http = $http;
        this.configuration = configuration;
    }

    get _() {
        return this.__ || (this.__ = Object.create(null, {}));
    }

    get ajaxError() {
        return this._.ajaxError;
    }

    set ajaxError(value) {
        this._.ajaxError = value;
    }

    get _applyUrl() {
        return this._.applyUrl || (this._.applyUrl = `${this._publicServiceUrl}/apply`);
    }

    get form() {
        return this._.form || (this._.form = {
                firstName: '',
                lastName: '',
				dateOfBirth: '',
                designation: '',
                companyName: '',
                passportNumber : '',
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
    }

    set form(value) {
        this._.form = value;
    }

    get _publicServiceUrl() {
        let result = this._.publicServiceUrl;

        if (!result) {
            let corpToken = this.configuration.service.corpToken;
            let port = parseInt(this.configuration.service.port) || 443;
            let scheme = `http${port === 443 ? 's' : ''}`;
            let swimlane = this.configuration.service.swimlane;


            result = this._.publicServiceUrl = `${scheme}://public-rest${swimlane}.bullhornstaffing.com:${port}/rest-services/${corpToken}`;
        }

        return result;
    }

    get requestParams() {
        return this._.requestParams || (this._.requestParams = {
                firstName: () => encodeURIComponent(this.form.firstName),
                lastName: () => encodeURIComponent(this.form.lastName),
				dateOfBirth: () => encodeURIComponent(this.form.dateOfBirth),
                designation: () => encodeURIComponent(this.form.designation),
                companyName: () => encodeURIComponent(this.form.companyName),
                passportNumber: () => encodeURIComponent(this.form.passportNumber),
                passportValidity: () => encodeURIComponent(this.form.passportValidity),
                nationality: () => encodeURIComponent(this.form.nationality),
                salary: () => encodeURIComponent(this.form.salary),
                desiredSalary: () => encodeURIComponent(this.form.desiredSalary),
                email: () => encodeURIComponent(this.form.email),
                city: () => encodeURIComponent(this.form.city),
                period: () => encodeURIComponent(this.form.period),
                experience: () => encodeURIComponent(this.form.experience),
                category: () => encodeURIComponent(this.form.category),
                skills: () => encodeURIComponent(this.form.skills),
                industry: () => encodeURIComponent(this.form.industry),
                visaType: () => encodeURIComponent(this.form.visaType),
                country: () => encodeURIComponent(this.form.country),
                emailAlternate: () => encodeURIComponent(this.form.emailAlternate),
                phone: () => encodeURIComponent(this.form.phone || ''),
                alternatePhone: () => encodeURIComponent(this.form.alternatePhone || ''),
                gender: () => encodeURIComponent(this.form.gender),
                ethnicity: () => encodeURIComponent(this.form.ethnicity),
                veteran: () => encodeURIComponent(this.form.veteran),
                disability: () => encodeURIComponent(this.form.disability),
                assemble: resume => {
                    let type = resume.name ? resume.name.substring(resume.name.lastIndexOf('.') + 1) : 'txt',
                        url = '?externalID=Resume&type=Resume&firstName=' + this.requestParams.firstName() + '&customText1=' + this.requestParams.period() + '&experience=' + this.requestParams.experience() + '&email2=' + this.requestParams.emailAlternate() + '&phone=' + this.requestParams.phone() + '&phone2=' + this.requestParams.alternatePhone() + '&lastName=' + this.requestParams.lastName() + '&email=' + this.requestParams.email()  + '&nationality=' + this.requestParams.nationality() + '&passportNumber=' + this.requestParams.passportNumber() + '&passportValidity=' + this.requestParams.passportValidity() + '&designation=' + this.requestParams.designation() + '&phone=' + this.requestParams.phone() + '&gender=' + this.requestParams.gender() + '&ethnicity=' + this.requestParams.ethnicity() + '&salary=' + this.requestParams.salary() + '&veteran=' + this.requestParams.veteran() + '&disability=' + this.requestParams.disability() + '&format=' + type;
                        console.log(url);
                    if (window.location.href.indexOf('source=') > -1) {
                        let sourceRegex = /(source=)([A-Za-z0-9\-]+)?/;
                        let source = window.location.href.match(sourceRegex)[0];
                        url += '&' + source;
                    }
                    return url;
                }
            });
    }

    submit(jobID, successCallback, errorCallback) {
        successCallback = successCallback || function () {
            };

        errorCallback = errorCallback || function () {
            };

        let self = this,
            applyUrl;
        self.ajaxError = '';

        if (this.form.resumeInfo) {
            let form = new FormData();
            if (this.form.resumeInfo.toString().indexOf('Blob') !== -1) {
                // Resume binary is a blob
                form.append('resume', this.form.resumeInfo, 'LinkedIn Resume');
            } else {
                form.append('resume', this.form.resumeInfo);
            }
            applyUrl = this._applyUrl + '/' + jobID + '/raw' + this.requestParams.assemble(this.form.resumeInfo);
            this.$http.post(applyUrl, form, {
                    transformRequest: angular.identity,
                    headers: {'Content-Type': undefined}
                })
                .success(() => {
                    self.ajaxError = '';
                    successCallback();
                }).error((data) => {
                    if (data.errorCode === 400) {
                        self.ajaxError = data.errorMessage;
                    }
                    self.ajaxError = 'There was an error when applying. Try again.';
                    errorCallback();
                });
        }
    }
}

export default ApplyService;
