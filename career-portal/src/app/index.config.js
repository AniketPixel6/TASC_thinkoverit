function jsonConfiguration(configuration) {
    'ngInject';


    configuration.acceptedResumeTypes =  [
        'html',
        'text',
        'txt',
        'pdf',
        'doc',
        'docx',
        'rtf',
        'odt'
    ];

    configuration.companyName = 'TASCOUTSOURCING';
    configuration.defaultLocale = 'en-US';
    configuration.supportedLocales = [
            'en-US',
            'fr-FR'
        ];
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

    configuration.integrations = {linkedin: {clientId:''}};
    configuration.defaultGridState = 'list-view';
    configuration.eeoc = {
            genderRaceEthnicity: false,
            veteran: false,
            disability: false
        };
}

export default jsonConfiguration;
