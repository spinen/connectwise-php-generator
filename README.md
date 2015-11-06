# SPINEN's ConnectWise API PHP Wrapper

[![Latest Stable Version](https://poser.pugx.org/spinen/connectwise-php-generator/v/stable)](https://packagist.org/packages/spinen/connectwise-php-generator)
[![Total Downloads](https://poser.pugx.org/spinen/connectwise-php-generator/downloads)](https://packagist.org/packages/spinen/connectwise-php-generator)
[![Latest Unstable Version](https://poser.pugx.org/spinen/connectwise-php-generator/v/unstable)](https://packagist.org/packages/spinen/connectwise-php-generator)
[![Dependency Status](https://www.versioneye.com/php/spinen:laravel-garbage-man/0.1.1/badge.svg)](https://www.versioneye.com/php/spinen:laravel-garbage-man/0.1.1)
[![License](https://poser.pugx.org/spinen/connectwise-php-generator/license)](https://packagist.org/packages/spinen/connectwise-php-generator)

Generate a php soap client for the ConnectWise WSDL API's. This repository generates the library & has an example client that consumes the library. The documentation for the API is located at [http://developer.connectwise.com](http://developer.connectwise.com).

## Client & Library

Both the library & client are subsplit off into read-only repositories:

### SPINEN's ConnectWise Client

[https://github.com/spinen/connectwise-php-client](https://github.com/spinen/connectwise-php-client)

[![Latest Stable Version](https://poser.pugx.org/spinen/connectwise-php-client/v/stable)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Total Downloads](https://poser.pugx.org/spinen/connectwise-php-client/downloads)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Latest Unstable Version](https://poser.pugx.org/spinen/connectwise-php-client/v/unstable)](https://packagist.org/packages/spinen/connectwise-php-client)
[![Dependency Status](https://www.versioneye.com/php/spinen:laravel-garbage-man/0.1.1/badge.svg)](https://www.versioneye.com/php/spinen:laravel-garbage-man/0.1.1)
[![License](https://poser.pugx.org/spinen/connectwise-php-client/license)](https://packagist.org/packages/spinen/connectwise-php-client)

### SPINEN's ConnectWise Library

[https://github.com/spinen/connectwise-php-library](https://github.com/spinen/connectwise-php-library)

[![Latest Stable Version](https://poser.pugx.org/spinen/connectwise-php-library/v/stable)](https://packagist.org/packages/spinen/connectwise-php-library)
[![Total Downloads](https://poser.pugx.org/spinen/connectwise-php-library/downloads)](https://packagist.org/packages/spinen/connectwise-php-library)
[![Latest Unstable Version](https://poser.pugx.org/spinen/connectwise-php-library/v/unstable)](https://packagist.org/packages/spinen/connectwise-php-library)
[![Dependency Status](https://www.versioneye.com/php/spinen:laravel-garbage-man/0.1.1/badge.svg)](https://www.versioneye.com/php/spinen:laravel-garbage-man/0.1.1)
[![License](https://poser.pugx.org/spinen/connectwise-php-library/license)](https://packagist.org/packages/spinen/connectwise-php-library)

## Build Status

| Branch | Status | Coverage | Code Quality |
| ------ | :----: | :------: | :----------: |
| Develop | [![Build Status](https://travis-ci.org/spinen/connectwise-php-generator.svg?branch=develop)](https://travis-ci.org/spinen/connectwise-php-generator) | [![Coverage Status](https://coveralls.io/repos/spinen/connectwise-php-library-generator/badge.svg?branch=develop&service=github)](https://coveralls.io/github/spinen/connectwise-php-library-generator?branch=develop) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/connectwise-php-library-generator/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/spinen/connectwise-php-library-generator/?branch=develop) |
| Master | [![Build Status](https://travis-ci.org/spinen/connectwise-php-generator.svg?branch=master)](https://travis-ci.org/spinen/connectwise-php-generator) | [![Coverage Status](https://coveralls.io/repos/spinen/connectwise-php-library-generator/badge.svg?branch=master&service=github)](https://coveralls.io/github/spinen/connectwise-php-library-generator?branch=master) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/connectwise-php-library-generator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/spinen/connectwise-php-library-generator/?branch=master) |

## List of available Soap Endpoints (2.0)

You can see all of the WSDL's at [https://developer.connectwise.com/SOAP_Endpoints](https://developer.connectwise.com/SOAP_Endpoints).

| API Name | WSDL URI |
|:-----|:----|
| Activity API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/ActivityApi.asmx?wsdl |
| Agreement API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/AgreementApi.asmx?wsdl |
| Company API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/CompanyApi.asmx?wsdl |
| Configuration API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/ConfigurationAPI.asmx?wsdl | 
| Contact API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/ContactApi.asmx?wsdl |
| Document API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/DocumentApi.asmx?wsdl |
| Invoice API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/InvoiceApi.asmx?wsdl |
| Managed Device API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/ManagedDeviceApi.asmx?wsdl |
| Marketing API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/MarketingApi.asmx?wsdl |
| Member API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/MemberApi.asmx?wsdl |
| Opportunity API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/OpportunityApi.asmx?wsdl |
| Opportunity Conversion API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/OpportunityConversionApi.asmx?wsdl |
| Product API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/ProductApi.asmx?wsdl |
| Project API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/ProjectApi.asmx?wsdl |
| Purchasing API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/PurchasingApi.asmx?wsdl |
| Reporting API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/ReportingApi.asmx?wsdl |
| Scheduling API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/SchedulingApi.asmx?wsdl |
| Service Ticket API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/ServiceTicketApi.asmx?wsdl |
| System API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/SystemApi.asmx?wsdl |
| Time Entry API | https://&lt;ConnectWiseSite&gt;/v4_6_release/apis/2.0/TimeEntryApi.asmx?wsdl |

## Library used to automatically create wrapper

I am using wsdl2phpgenerator [https://github.com/wsdl2phpgenerator/wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator).

## Generate the wrappers

You need to copy .env.example to .env & add the path to your cw install, then you can run generate.php

## TL;DR;

```bash
$ echo "CONNECTWISE_URL=https://youcw.fqdn.tld" > .env;php generate.php
```
