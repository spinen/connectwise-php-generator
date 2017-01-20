# SPINEN's ConnectWise API Clients Generator

Generate php clients from ConnectWise's swagger documents for their REST API.

Each api is built into it's own client.

## Clients

* [Company API Client](http://github.com/spinen/connectwise-company-php-client)
* [Expense API Client](http://github.com/spinen/connectwise-expense-php-client)
* [Finance API Client](http://github.com/spinen/connectwise-finance-php-client)
* [Marketing API Client](http://github.com/spinen/connectwise-marketing-php-client)
* [Mobile API Client](http://github.com/spinen/connectwise-mobile-php-client)
* [Procurement API Client](http://github.com/spinen/connectwise-procurement-php-client)
* [Project API Client](http://github.com/spinen/connectwise-project-php-client)
* [Sales API Client](http://github.com/spinen/connectwise-sales-php-client)
* [Schedule API Client](http://github.com/spinen/connectwise-schedule-php-client)
* [Service API Client](http://github.com/spinen/connectwise-service-php-client)
* [System API Client](http://github.com/spinen/connectwise-system-php-client)
* [Time API Client](http://github.com/spinen/connectwise-time-php-client)

## Build

You will probably not need to build the client, you can just use the generated.
However, here are the steps to remind me how to do it...

1. `mkdir -p swagger/specs`
2. Download the specs into above folder
3. Download [Swagger Code Generator](https://github.com/swagger-api/swagger-codegen) in the swagger folder
4. Compile the jar with docker mvn image
5. Run the generator `./generate.sh`
