Wrike PHP SDK - Wrike API V3 & V4
=================================

Introduction
------------

**This is full pre-configured Wrike PHP SDK package for [Wrike PHP Library](https://github.com/wedocreatives/wrike-php-library).**

Handle
[Wrike PHP Library](https://github.com/wedocreatives/wrike-php-library),
[HTTP Client plugin](https://github.com/wedocreatives/wrike-php-guzzle) and
[response transformer plugin](https://github.com/wedocreatives/wrike-php-jmsserializer)
in one package.


* For more info or none standard purposes please check [generic Wrike PHP Library](https://github.com/wedocreatives/wrike-php-library).
* For Symfony Framework please check full configured [Wrike bundle](https://github.com/wedocreatives/wrike-bundle).

Versions
--------
| Major Version | Wrike API | PHP Compatibility                  | Initial release | Support                        |
|:-------------:|:---------:|:----------------------------------:|:---------------:|:------------------------------:|
| V2            | V4        | PHP 7.1, PHP 7.2, TBD              | October, 2018   | TBD                            |
| V1            | V3        | PHP 5.5, PHP 5.6, PHP 7.0, PHP 7.1 | February, 2018  | Support ends on February, 2019 |

Project status
--------------

**General**

[![Packagist License](https://img.shields.io/packagist/l/wedocreatives/wrike-php-sdk.svg)](https://packagist.org/packages/wedocreatives/wrike-php-sdk)
[![Packagist Downloads](https://img.shields.io/packagist/dt/wedocreatives/wrike-php-sdk.svg)](https://packagist.org/packages/wedocreatives/wrike-php-sdk)
[![Packagist Version](https://img.shields.io/packagist/v/wedocreatives/wrike-php-sdk.svg)](https://packagist.org/packages/wedocreatives/wrike-php-sdk)
[![Packagist Version](https://img.shields.io/packagist/php-v/wedocreatives/wrike-php-sdk.svg)](https://packagist.org/packages/wedocreatives/wrike-php-sdk)
[![Libraries.io](https://img.shields.io/librariesio/github/wedocreatives/wrike-php-sdk.svg)](https://libraries.io/packagist/wedocreatives%2Fwrike-php-sdk)

[![CII Best Practices](https://bestpractices.coreinfrastructure.org/projects/1693/badge)](https://bestpractices.coreinfrastructure.org/projects/1693)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/3dea766e-c7cc-4180-b611-8a3b103f334f/mini.png)](https://insight.sensiolabs.com/projects/3dea766e-c7cc-4180-b611-8a3b103f334f)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/1fcef9280f3844b6bb1249fe0f21de0f)](https://www.codacy.com/app/wedocreatives/wrike-php-sdk)
[![Code Climate Maintainability](https://api.codeclimate.com/v1/badges/7ade1663f7d5db2ca614/maintainability)](https://codeclimate.com/github/wedocreatives/wrike-php-sdk/maintainability)

**Branch 'master'**

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/wedocreatives/wrike-php-sdk/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/wedocreatives/wrike-php-sdk/?branch=master)
[![Scrutinizer Build Status](https://scrutinizer-ci.com/g/wedocreatives/wrike-php-sdk/badges/build.png?b=master)](https://scrutinizer-ci.com/g/wedocreatives/wrike-php-sdk/build-status/master)
[![Scrutinizer Code Coverage](https://scrutinizer-ci.com/g/wedocreatives/wrike-php-sdk/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/wedocreatives/wrike-php-sdk/?branch=master)
[![Travis Build Status](https://travis-ci.org/wedocreatives/wrike-php-sdk.svg?branch=master)](https://travis-ci.org/wedocreatives/wrike-php-sdk)
[![StyleCI](https://styleci.io/repos/80352730/shield?branch=master)](https://styleci.io/repos/80352730)
[![Coverage Status](https://coveralls.io/repos/github/wedocreatives/wrike-php-sdk/badge.svg?branch=master)](https://coveralls.io/github/wedocreatives/wrike-php-sdk?branch=master)

Installation
------------
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require wedocreatives/wrike-php-sdk "^1.0"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Contribution
------------
To try it yourself clone the repository:

```bash
git clone git@github.com:wedocreatives/wrike-php-sdk.git
cd wrike-php-sdk
```

and install dependencies with composer:

```bash
composer install
```

Run PHPUnit tests:

```bash
./vendor/bin/phpunit
``` 

Usage
-----
```php
/**
 * Basic usage
 */
$api = ApiFactory::create(<PermanentToken>);
$allContacts = $api->getContactResource()->getAll();
...
```
 
For more info please check full documentation on [Generic Wrike PHP Library](https://github.com/wedocreatives/wrike-php-library)


Reference
---------

[Generic Wrike PHP Library](https://github.com/wedocreatives/wrike-php-library)

[Response transformer plugin](https://github.com/wedocreatives/wrike-php-jmsserializer) for Wrike PHP Library

[HTTP Client plugin](https://github.com/wedocreatives/wrike-php-guzzle) for Wrike PHP Library

[Symfony bundle](https://github.com/wedocreatives/wrike-bundle)

Official [Wrike API Documentation](https://developers.wrike.com/documentation/api/overview)

License
-------

This bundle is available under the [MIT license](LICENSE).
