ProcessOut PHP
==============

[![Code Climate](https://codeclimate.com/github/ProcessOut/processout-php/badges/gpa.svg)](https://codeclimate.com/github/ProcessOut/processout-php)

This package provides bindings to the ProcessOut API. Manage your callbacks, create new invoices,
redirect your users to a newly generated checkout page and more.

ProcessOut makes you able to manage a bunch of payment gateways - such as PayPal, Crypto currencies, Payza or Dwolla, with no efforts. Learn more on the [ProcessOut website](https://www.processout.com).

Dependencies
------------

* PHP 5.4 or above
* cURL PHP extension

Installation
------------

The package's installation is done using composer. Simply add these lines to your composer.json

``` json
{
	"require": {
		"processout/processout-php": "dev-master"
	}
}
```

And run the composer update command to install/update the package.

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

### Create a new invoice and push it to the server

``` php
<?php

$invoice = new \ProcessOut\Invoice\Invoice($processout);
$invoice->setItemName('Amazing item');
// Set more attributes here
$invoice->save();
```

### Create a new invoice from a tailored invoice and push it to the server

``` php
<?php

$tailored = new \ProcessOut\Invoice\TailoredInvoice($processout);
$invoice  = $tailored->from('1ca570ac-0cb4-4c54-8ff2-f7c82f4fb12b')->invoice();
// You can set more attributes here too, $invoice is an instance of Invoice
$invoice->save();
```


##### Shared invoice attributes

The following attributes are shared between Invoice and TailoredInvoice instances

- *attribute*  - *example*
- ItemName     - **Amazing product**
- ItemPrice    - **4.20**
- ItemQuantity - **2**
- Currency     - **USD**
- Taxes        - **4.20**
- Shipping     - **4.20**
- ReturnUrl    - *URL to which the customer will be redirected upon purchase*
- CancelUrl    - *URL to which the customer will be redirected upon cancellation*
- NotifyUrl    - *URL being called by ProcessOut to send callbacks upon transaction updates*
- Custom       - *A custom field containing anything you want, sent back within all callbacks*
- Sandbox      - *Decide weither or not to activate the sandbox mode*

#### Attribute getters and setters

Every attribute has its own getter and setter, as such:

``` php
// Getter
public function getCustom()
{
    return $this->Custom;
}
// Setter
public function setCustom($custom)
{
    $this->Custom = $custom;
    return $this;
}
```

### Getting the link to an invoice, from an invoice object

``` php
<?php

echo $invoice->getUrl();

// You may also get the id of the invoice (which can be used with the modal)
echo $invoice->getId();
```


### Receiving callbacks / Web hooks

Callbacks can be used to automate transaction management once a payment has been placed by one of your customers. One example could be adding credit to an account once the user has paid their subscription.

However, it doesn't stop there. ProcessOut also supports chargeback handling, and much more. Please refer to the [API documentation](http://docs.processout.apiary.io/#) to learn what data is sent through callbacks.

Once a callback has been sent to your server, you need to check its authenticity, as such:

``` php
<?php

$input = json_decode(file_get_contents('php://input'), true);

$callback = new \ProcessOut\Callback\Callback($processout);
if(!$callback->validate($input))
{
	header('Unauthorized', true, 401);
	echo 'Bad callback'; exit();
}

// Continue normally here, the callback is verified
// One common thing to do would be to check the price, currency, etc...
```

### Error and exception handling

The library will throw different kind of exception when errors happen.
This can be extremely useful to see what part of the application crashed,
and why.
Currently, the library supports 3 kind of exceptions, each verbose-friendly.

``` php
<?php

throw new ProcessOut\Exceptions\APIAuthenticationException();
throw new ProcessOut\Exceptions\ApiException();
throw new ProcessOut\Exceptions\NotFoundException();
```

-------------------------

Full API documentation
----------------------

### Apiary

ProcessOut's full API documentation can be found on [Apiary](http://docs.processout.apiary.io). It contains all the needed information, including callback data, and much more.
