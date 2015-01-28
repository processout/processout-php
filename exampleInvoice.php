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
	'5257b50803a87750875a12fcbbf75e73',
	'934c34c315cd041d31358c36a1bf53d6b2323e0de95b1adef739cfdaa4b7bd36'
);

/**
 * Create a new invoice out of a product id
 * @var ProductInvoice
 */
$invoice = $processout->newProductInvoice('f7dec519feb3106efa1ee96189a222c3');

/**
 * And get its invoice link
 */
echo $invoice->getLink();


// Let's put up some space in here
echo '<br />';


/**
 * Create a new common invoice, with custom name, price and currency
 * @var Invoice
 */
$invoice = $processout->newInvoice(
	'1 copy of a wonderful product at $4.99 USD',
	4.99,
	1,
	'USD'
);

/**
 * And get its invoice link again!
 */
echo $invoice->getLink();
