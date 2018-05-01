# silverstripe-betterslug
[![Build Status](https://travis-ci.org/gordonbanderson/silverstripe-betterslug.svg?branch=upgradess4)](https://travis-ci.org/gordonbanderson/silverstripe-betterslug)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-betterslug/badges/quality-score.png?b=upgradess4)](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-betterslug/?branch=upgradess4)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-betterslug/badges/coverage.png?b=upgradess4)](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-betterslug/?branch=upgradess4)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-betterslug/badges/build.png?b=upgradess4)](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-betterslug/build-status/upgradess4)
[![codecov.io](https://codecov.io/github/gordonbanderson/silverstripe-betterslug/coverage.svg?branch=upgradess4)](https://codecov.io/github/gordonbanderson/silverstripe-betterslug?branch=upgradess4)

[![Latest Stable Version](https://poser.pugx.org/dariuszp/silverstripe-betterslug/version)](https://packagist.org/packages/dariuszp/silverstripe-betterslug)
[![Latest Unstable Version](https://poser.pugx.org/dariuszp/silverstripe-betterslug/v/unstable)](//packagist.org/packages/dariuszp/silverstripe-betterslug)
[![Total Downloads](https://poser.pugx.org/dariuszp/silverstripe-betterslug/downloads)](https://packagist.org/packages/dariuszp/silverstripe-betterslug)
[![License](https://poser.pugx.org/dariuszp/silverstripe-betterslug/license)](https://packagist.org/packages/dariuszp/silverstripe-betterslug)
[![Monthly Downloads](https://poser.pugx.org/dariuszp/silverstripe-betterslug/d/monthly)](https://packagist.org/packages/dariuszp/silverstripe-betterslug)
[![Daily Downloads](https://poser.pugx.org/dariuszp/silverstripe-betterslug/d/daily)](https://packagist.org/packages/dariuszp/silverstripe-betterslug)

[![Dependency Status](https://www.versioneye.com/php/dariuszp:silverstripe-betterslug/badge.svg)](https://www.versioneye.com/php/dariuszp:silverstripe-betterslug)
[![Reference Status](https://www.versioneye.com/php/dariuszp:silverstripe-betterslug/reference_badge.svg?style=flat)](https://www.versioneye.com/php/dariuszp:silverstripe-betterslug/references)

![codecov.io](https://codecov.io/github/gordonbanderson/silverstripe-betterslug/branch.svg?branch=upgradess4)

Slug generator with accent folding for Silverstripe CMS

This module will provide better text to slug translation for silverstripe by replacing very basic transliterator with cocur/slugify module:
https://github.com/cocur/slugify

## Installation:

````
  composer require dariuszp/silverstripe-betterslug
  // or if you have .phar package
  ./composer.phar require dariuszp/silverstripe-betterslug
````

## Usage

When you create page with title like this:
````
Τάρτες ατομικές με γέμιση πορτοκαλένιας κρέμας και γλυκό πορτοκάλι
````

It will be translated to:
````
tartes-atomikes-me-gemisi-portokalenias-kremas-kai-gliko-portokali
````

Istead of **page-41** like before.

In case some characters are not handled, you can further configure module by add your own translation rules. For example:

**_config.yml**
````
BetterSlug:
  rulesets:
    symbols:
      active: true
      map:
        ☂: ubrella
        ☁: cloud
````

This will turn:
````
When you see dark ☁, bring an ☂!
````

Into:
````
when-you-see-dark-cloud-bring-an-ubrella
````
