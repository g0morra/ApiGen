# Smart and Readable Documentation for your PHP project

[![Build Status](https://img.shields.io/travis/ApiGen/ApiGen/master.svg?style=flat-square)](https://travis-ci.org/ApiGen/ApiGen)
[![Quality Score](https://img.shields.io/scrutinizer/g/ApiGen/ApiGen.svg?style=flat-square)](https://scrutinizer-ci.com/g/ApiGen/ApiGen)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/ApiGen/ApiGen.svg?style=flat-square)](https://scrutinizer-ci.com/g/ApiGen/ApiGen)
[![Downloads](https://img.shields.io/packagist/dt/apigen/apigen.svg?style=flat-square)](https://packagist.org/packages/apigen/apigen)
[![Latest stable](https://img.shields.io/packagist/v/apigen/apigen.svg?style=flat-square)](https://packagist.org/packages/apigen/apigen)


Just look at [Doctrine ORM API](http://www.doctrine-project.org/api/orm/2.4/).


## Requirements

- PHP 5.4


## Install

### 1. As a PHAR

1. Download [ApiGen](http://apigen.org/apigen.phar)

2. Run ApiGen with source and destination options:

```sh
php apigen.phar generate -s src -d ../my-project-api
```

To omit cli options just create `apigen.yaml` or `apigen.neon` file in your project.

```yaml
source:
    - src

destination: ../my-project-api
```

For global installation, see [documentation](https://github.com/ApiGen/ApiGen/wiki#installation).


### 2. Using Composer

```sh
composer require apigen/apigen --dev
```

Then run with options as above:

```sh
php vendor/bin/apigen generate -s src -d ../my/project-api
```


## Options

To see all available options with it's description and default values, just run:

```sh
apigen generate --help
```

*Note: in `apigen.neon` is prefered camel case (`accessLevel`) over dash-case in CLI (`--access-level`).*

If you want to know what annotations do we support, [here is the list](../../wiki/supported-annotations).


## Testing

```sh
$ phpunit
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.
