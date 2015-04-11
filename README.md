# ConnectWise API PHP Wrapper

This is going to be the wrapper to interface with ConnectWise in php.  The documentation for the API is located at [http://developer.connectwise.com](http://developer.connectwise.com).  You can see all of the WSDL's at [https://developer.connectwise.com/SOAP_Endpoints](https://developer.connectwise.com/SOAP_Endpoints).

### List of available Soap Endpoints (2.0)

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

### Library used to automatically create wrapper

I am using wsdl2phpgenerator [https://github.com/wsdl2phpgenerator/wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator).

### Generate the wrappers

You need to copy .env.example to .env & add the path to your cw install, then you can run generate.php

#### TL;DR;

```bash
$ echo "CONNECTWISE_URL=https://youcw.fqdn.tld" > .env;php generate.php
```
