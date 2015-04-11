<?php

const API = 'Api';
const CLIENT = 'Client';
const COMMANDS = 'Commands';
const CONFIG = 'config';
const CONNECTWISE = 'ConnectWise';
const GENERATED = 'Generated';
const GENERATOR = 'Generator';
const LIBRARY = 'Library';
const NAMESPACE_SEPARATOR = '\\';
const PROCESSORS = 'Processors';
const SPINEN = 'Spinen';
const SRC = 'src';
const VENDOR = 'vendor';

return [
    // Properties needed to connect to ConnectWise server
    'connectwise'         => [
        'host'     => env_value('CONNECTWISE_URL'),
        'company'  => env_value('COMPANY', 'company'),
        'username' => env_value('USERNAME', 'username'),
        'password' => env_value('PASSWORD', 'password'),
    ],
    // Any binds that you want to do with the container
    'di'                  => [

    ],
    'generated_name'      => GENERATED,
    // Paths to map key folders to containing directories
    'paths'               => [
        // Relative to the project_root
        'directory'      => [
            'api'        => implode(DIRECTORY_SEPARATOR, [SRC, LIBRARY, API]),
            'client'     => implode(DIRECTORY_SEPARATOR, [SRC, CLIENT]),
            'commands'   => implode(DIRECTORY_SEPARATOR, [SRC, GENERATOR, COMMANDS]),
            'config'     => CONFIG,
            'generated'  => implode(DIRECTORY_SEPARATOR, [SRC, LIBRARY, API, GENERATED]),
            'generator'  => implode(DIRECTORY_SEPARATOR, [SRC, GENERATOR]),
            'library'    => implode(DIRECTORY_SEPARATOR, [SRC, LIBRARY]),
            'processors' => implode(DIRECTORY_SEPARATOR, [SRC, GENERATOR, PROCESSORS]),
            'source'     => SRC,
            'vendor'     => VENDOR,
        ],
        // Relative to namespace_root
        'namespace'      => [
            'api'        => implode(NAMESPACE_SEPARATOR, [LIBRARY, API]),
            'client'     => CLIENT,
            'commands'   => implode(NAMESPACE_SEPARATOR, [GENERATOR, COMMANDS]),
            'generated'  => implode(NAMESPACE_SEPARATOR, [LIBRARY, API, GENERATED]),
            'generator'  => GENERATOR,
            'library'    => LIBRARY,
            'processors' => implode(NAMESPACE_SEPARATOR, [GENERATOR, PROCESSORS]),
        ],
        // Namespace of the classes
        'namespace_root' => implode(NAMESPACE_SEPARATOR, [SPINEN, CONNECTWISE]),
        // Relative to the config directory
        'project_root'   => realpath(implode(DIRECTORY_SEPARATOR, [__DIR__, '..'])),
    ],
    // Name of the signature file
    'signature_file_name' => 'Signature',
    // Name an relative locations to the WSDL's on the ConnectWise server
    'wsdls'               => [
        'Activity API'               => 'v4_6_release/apis/2.0/ActivityApi.asmx?wsdl',
        'Agreement API'              => 'v4_6_release/apis/2.0/AgreementApi.asmx?wsdl',
        'Company API'                => 'v4_6_release/apis/2.0/CompanyApi.asmx?wsdl',
        'Configuration API'          => 'v4_6_release/apis/2.0/ConfigurationAPI.asmx?wsdl',
        'Contact API'                => 'v4_6_release/apis/2.0/ContactApi.asmx?wsdl',
        'Document API'               => 'v4_6_release/apis/2.0/DocumentApi.asmx?wsdl',
        'Invoice API'                => 'v4_6_release/apis/2.0/InvoiceApi.asmx?wsdl',
        'Managed Device API'         => 'v4_6_release/apis/2.0/ManagedDeviceApi.asmx?wsdl',
        'Marketing API'              => 'v4_6_release/apis/2.0/MarketingApi.asmx?wsdl',
        'Member API'                 => 'v4_6_release/apis/2.0/MemberApi.asmx?wsdl',
        'Opportunity API'            => 'v4_6_release/apis/2.0/OpportunityApi.asmx?wsdl',
        'Opportunity Conversion API' => 'v4_6_release/apis/2.0/OpportunityConversionApi.asmx?wsdl',
        'Product API'                => 'v4_6_release/apis/2.0/ProductApi.asmx?wsdl',
        'Project API'                => 'v4_6_release/apis/2.0/ProjectApi.asmx?wsdl',
        'Purchasing API'             => 'v4_6_release/apis/2.0/PurchasingApi.asmx?wsdl',
        'Reporting API'              => 'v4_6_release/apis/2.0/ReportingApi.asmx?wsdl',
        'Scheduling API'             => 'v4_6_release/apis/2.0/SchedulingApi.asmx?wsdl',
        'Service Ticket API'         => 'v4_6_release/apis/2.0/ServiceTicketApi.asmx?wsdl',
        'System API'                 => 'v4_6_release/apis/2.0/SystemApi.asmx?wsdl',
        'Time Entry API'             => 'v4_6_release/apis/2.0/TimeEntryApi.asmx?wsdl',
    ],
];
