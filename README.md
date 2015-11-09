# SPINEN's ConnectWise API PHP Wrapper

[![Latest Stable Version](https://poser.pugx.org/spinen/connectwise-php-generator/v/stable)](https://packagist.org/packages/spinen/connectwise-php-generator)
[![Total Downloads](https://poser.pugx.org/spinen/connectwise-php-generator/downloads)](https://packagist.org/packages/spinen/connectwise-php-generator)
[![Latest Unstable Version](https://poser.pugx.org/spinen/connectwise-php-generator/v/unstable)](https://packagist.org/packages/spinen/connectwise-php-generator)
[![Dependency Status](https://www.versioneye.com/php/spinen:laravel-garbage-man/0.1.1/badge.svg)](https://www.versioneye.com/php/spinen:laravel-garbage-man/0.1.1)
[![License](https://poser.pugx.org/spinen/connectwise-php-generator/license)](https://packagist.org/packages/spinen/connectwise-php-generator)

Generate a php client using the swagger spec. This repository generates the library & has an example client that consumes the library. The documentation for the API is located at [http://developer.connectwise.com](http://developer.connectwise.com).

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
| Develop | [![Build Status](https://travis-ci.org/spinen/connectwise-php-generator.svg?branch=develop)](https://travis-ci.org/spinen/connectwise-php-generator) | [![Coverage Status](https://coveralls.io/repos/spinen/connectwise-php-generator/badge.svg?branch=develop&service=github)](https://coveralls.io/github/spinen/connectwise-php-generator?branch=develop) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/connectwise-php-generator/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/spinen/connectwise-php-generator/?branch=develop) |
| Master | [![Build Status](https://travis-ci.org/spinen/connectwise-php-generator.svg?branch=master)](https://travis-ci.org/spinen/connectwise-php-generator) | [![Coverage Status](https://coveralls.io/repos/spinen/connectwise-php-generator/badge.svg?branch=master&service=github)](https://coveralls.io/github/spinen/connectwise-php-generator?branch=master) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/spinen/connectwise-php-generator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/spinen/connectwise-php-generator/?branch=master) |

## Library used to automatically create client

We are using the Swagger Codegen package [https://github.com/swagger-api/swagger-codegen](https://github.com/swagger-api/swagger-codegen) to generate the php client.

## Generate the client

Download the latest version of the swagger-codegen this folder, and unzip it's contents to the swagger-codegen folder.  You will need to remove the parent folder from the archive...

```bash
$ cd swagger-codegen
$ wget https://github.com/swagger-api/swagger-codegen/archive/master.zip
$ tar -xzf master.zip --strip-components=1 -C  ./
$ rm master.zip
```

There is a script in the swagger-codegen folder named pullcodegen that will grab the latest code & unzip it into that directory.  It removes all unexpected files/folders from the directory.

It seems to be easiest to use Docker to run the generator as it keeps you from having to install Java 7 & maven on your computer.  

Here are the steps to run it on docker-machine...

```bash
$ cd swagger-codegen
$ docker-machine create -d virtualbox swagger
$ eval "$(docker-machine env swagger)"
$ ./run-in-docker.sh mvn package
$ ./run-in-docker.sh generate -i service.json -l php -c config.json -t templates/
```
