This fork serves the sole purpose to make version 1.x, which is required by 
[pyrexx/zugferd-php](https://github.com/Pyrexx/zugferd-php), compatible with PHP 8.1 with its newly reserved keyword 
`readonly`. 

See branch [1.x](https://github.com/magicplan/jms-serializer/tree/1.x)
----

# jms/serializer 

[![GitHub Actions][GA Image]][GA Link]
[![Packagist][Packagist Image]][Packagist Link]

![alt text](doc/logo-small.png)

## Introduction

This library allows you to (de-)serialize data of any complexity. Currently, it supports XML and JSON.

It also provides you with a rich tool-set to adapt the output to your specific needs.

Built-in features include:

- (De-)serialize data of any complexity; circular references and complex exclusion strategies are handled gracefully.
- Supports many built-in PHP types (such as dates, intervals)
- Integrates with Doctrine ORM, et. al.
- Supports versioning, e.g. for APIs
- Configurable via XML, YAML, or Annotations

   
## Documentation

Learn more about the serializer in its [documentation](http://jmsyst.com/libs/serializer).

## Notes

You are browsing the code for the 3.x version, if you are interested in the 1.x or 2.x version, 
check the [1.x][1.x] and [2.x][2.x] branches.

The version `3.x` is the supported version (`master` branch).
The `1.x` and `2.x` versions are not supported anymore. 

For the `1.x` and `2.x` branches there will be no additional feature releases.  
Security issues will be fixed till the 1st January 2020 and 
only critical bugs might receive fixes until the 1st September 2019.

Instructions on how to upgrade to 3.x are available in the [UPGRADING][UPGRADING] document.

## Professional Support

For eventual paid support please write an email to [goetas@gmail.com](mailto:goetas@gmail.com).
 

  [CHANGELOG]: https://github.com/schmittjoh/serializer/blob/master/CHANGELOG.md
  [UPGRADING]: https://github.com/schmittjoh/serializer/blob/master/UPGRADING.md

  [GA Image]: https://github.com/schmittjoh/serializer/workflows/CI/badge.svg
  
  [GA Link]: https://github.com/schmittjoh/serializer/actions?query=workflow%3A%22CI%22+branch%3Amaster
  
  [Packagist Image]: https://img.shields.io/packagist/v/jms/serializer.svg
  
  [Packagist Link]: https://packagist.org/packages/jms/serializer
  
  [1.x]: https://github.com/schmittjoh/serializer/tree/1.x
  [2.x]: https://github.com/schmittjoh/serializer/tree/2.x
