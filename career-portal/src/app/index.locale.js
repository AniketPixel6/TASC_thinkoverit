function localeConfig(configuration, localeConf, localeSupported) {
    'ngInject';

    localeConf.appBasePath = '/tasc/career-portal';
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

export default localeConfig;
