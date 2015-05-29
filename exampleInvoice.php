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
    '8722fce8-f8c0-44be-997e-d4954cf32fc0',
    'key-3022bbac0a88514dff79c0d95f5b8486ba0884bb665834ea9ad79610ac31ab43'
);

/**
 * Create a new invoice, with custom name, price, quantity and currency
 * @var Invoice
 */
$invoice = new \ProcessOut\Invoice\Invoice(
    $processout,
    '1 copy of a wonderful product at $4.99 USD',
    4.99,
    1,
    'USD'
);

/**
 * And get its invoice link
 */
echo $invoice->getLink();

/**
 * Or get its invoice id
 */
echo $invoice->getId();


// Let's put up some space in here
echo '<br />';


/**
 * Create a new invoice thanks to a tailored invoice id
 * @var TailoredInvoice
 */
$tailoredInvoice = new \ProcessOut\Invoice\TailoredInvoice(
    $processout,
    '1ca570ac-0cb4-4c54-8ff2-f7c82f4fb12b');

/**
 * And get its invoice link again
 */
echo $tailoredInvoice->getLink();

/**
 * Or invoice id!
 */
echo $tailoredInvoice->getId();