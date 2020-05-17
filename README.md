Docker PHP
==========

**Docker PHP** (for lack of a better name) is a [Docker](http://docker.com/) client written in PHP.
This library aim to reach 100% API support of the Docker Engine.

The test suite currently passes against Docker Remote API v1.25 to v1.36.

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://travis-ci.com/INSSET/projet-specialite-docker-php.svg?token=baJoBzqvZXEZeR6Ca5yQ&branch=master)](https://travis-ci.com/INSSET/projet-specialite-docker-php)[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/docker-php/docker-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/docker-php/docker-php)

Installation
------------

The recommended way to install Docker PHP is of course to use [Composer](http://getcomposer.org/):


Usage
-----

See [the documentation](http://docker-php.readthedocs.org/en/latest/).

Unit Tests
----------

Setup the test suite using [Composer](http://getcomposer.org/) if not already done:

```
$ composer install --dev
```

Run it using [PHPUnit](http://phpunit.de/):

```
$ composer test
```

Run it using [Phpstan](https://phpstan.org/):

```
$ composer lint
```

Contributing
------------

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

Credits
-------

This README heavily inspired by [willdurand/Negotiation](https://github.com/willdurand/Negotiation) by @willdurand. This guy is pretty awesome.

License
-------

The MIT License (MIT). Please see [License File](LICENSE) for more information.
