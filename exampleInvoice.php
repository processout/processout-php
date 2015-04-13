<?php

/**
 * Let's load the dependencies
 */
require 'vendor/autoload.php';

/**
 * Create a new ProcessOut's instance
 * @var ProcessOut
 */
$processout = new ProcessOut\ProcessOut(
	'4d65cebe-c2f0-4803-9eab-3f9e190aaeb5',
	'key-9db060c19281bb39656df61c63ddecff674d80b1178533db0ceffb29b87ce40a'
);

/**
 * Create a new invoice, with custom name, price, quantity and currency
 * @var Invoice
 */
$invoice = $processout->newInvoice(
	'1 copy of a wonderful product at $4.99 USD',
	4.99,
	1,
	'USD'
);

/**
 * And get its invoice link
 */
echo $invoice->getLink();


// Let's put up some space in here
echo '<br />';


/**
 * Create a new invoice thanks to a tailored invoice id
 * @var TailoredInvoice
 */
$tailoredInvoice = $processout->newTailoredInvoice('2fac6a3a-b5da-4067-a694-67373de3283d');

/**
 * And get its invoice link again!
 */
echo $tailoredInvoice->getLink();
