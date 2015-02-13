ProcessOut PHP Server
=====================

This package manages invoices for the server-side of an application that uses the ProcessOut SDK.

ProcessOut makes you able to manage a bunch of payment gateways - such as PayPal, Crypto currencies, Payza or Dwolla, with no efforts. Learn more on the [ProcessOut's website](https://www.processout.com).

Dependencies
------------

* PHP 5.4 or above
* cURL PHP extension

Installation
------------

The package's installation is done using composer. Simply add this lines to your composer.json

``` json
{
	"require": {
		"processout/processout-php-server": "dev-master"
	}
}
```

And run the composer update command to install the package.

``` sh
composer update
```

-------------------------

Prerequisites
-------------

### Instantiate a new ProcessOut instance

``` php
<?php

$projectId     = '21184268-76fa-4b33-99a0-63fb15f9041a';
$projectSecret = 'key-24a2061d0fd2853b75728073d5406de437d525b2ff941fe34ca061cb2180d0f8';

$processout = new ProcessOut\ProcessOut($projectId, $projectSecret);
```

Usage
-----

### Create a new invoice from scratch

``` php
<?php

$invoice = $processout->newInvoice(
	'1 copy of a wonderful product at $4.99 USD',
	4.99,
	1,
	'USD'
);
```

### Create a new invoice from an existing product

``` php
<?php

$invoice = $processout->newProductInvoice('f7dec519feb3106efa1ee96189a222c3');
```

### Getting the link to an invoice

``` php
<?php

echo $invoice->getLink();
```

### Receiving callbacks / Web hooks

Callbacks can be used to automate transaction management once a payment has been placed by one of your customers. One example could be adding credit to an account once the user has paid his subscription.

However, it doesn't stop there. ProcessOut also supports chargebacks handling, and much more. Please refer to the [API documentation](http://docs.processout.apiary.io/#) to learn what data is sent through callbacks.

Once a callback has been sent to your server, you need to check its authenticity, as such:

``` php
<?php

$input = json_decode(file_get_contents('php://input'), true);

if(!$processout->checkCallbackData($input))
{
	header($_SERVER['SERVER_PROTOCOL'] . ' Unauthorized', true, 401);
	echo 'Bad callback'; exit();
}

// Continue normally here, the callback is verified
// One common thing to do would be to check the price, currency, etc...
```

-------------------------

Full API documentation
----------------------

### Apiary

The ProcessOut's full API documentation can be found on [Apiary](http://docs.processout.apiary.io). It contains all the needed information, including the callbacks data, and much more.
