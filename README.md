ProcessOut PHP
==============

[![Latest Stable Version](https://poser.pugx.org/processout/processout-php/v/stable)](https://packagist.org/packages/processout/processout-php)
[![License](https://poser.pugx.org/processout/processout-php/license)](https://packagist.org/packages/processout/processout-php)

This package provides bindings to the ProcessOut API.

Dependencies
------------

* PHP 5.4 or above
* cURL PHP extension

Installation
------------

The package's installation is done using composer. Simply add these lines to your composer.json

```json
{
    "require": {
        "ProcessOut/ProcessOut-php": "^6.16.0"
    }
}
```

And run the composer update command to install/update the package.

```sh
composer update
```

Installing without composer
------------

The ProcessOut PHP library may also be used without composer by directly
cloning the directory into your project

```sh
git clone https://github.com/processout/processout-php
```

or downloading the latest release at 
[github.com/ProcessOut/processout-php/releases](https://github.com/ProcessOut/processout-php/releases)
and including the ProcessOut init file

```php
include_once("processout-php/init.php");
```

