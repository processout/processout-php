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
    'a0731980-dac2-4602-9255-f57a341376ef',
    'key-a8e862bee6bf5205ceab6d88a95dd7a0df86de75fa66a150cacf9ea8dd7d767a'
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
$tailoredInvoice = $processout->newTailoredInvoice(
    'b45b76ba-42e5-4389-9255-e78202846bd3');

/**
 * And get its invoice link again!
 */
echo $tailoredInvoice->getLink();
