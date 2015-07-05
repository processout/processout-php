<?php

/**
 * Let's load the dependencies
 */
require '../vendor/autoload.php';

/**
 * Create a new ProcessOut's instance
 * @var ProcessOut
 */
$processout = new \ProcessOut\ProcessOut(
    '008a8331-db1b-4cf4-b905-e21fd4aa78e9',
    'key-bb6edef7b8b486b8fabb3097c21f171ad85022b057e9422f960509016a6afcdc'
);

/**
 * Create a new invoice, with custom name, price, quantity and currency
 * @var Invoice
 */
$invoice = new \ProcessOut\Invoice\Invoice($processout);
$invoice->setItemName('Wonderful product')
    ->setItemPrice(4.99)->setCurrency('USD');

try {
    $invoice->save();

} catch (\ProcessOut\Exceptions\ApiAuthenticationException $e) {
    die('Looks like your project id or secret is wrong. ' . $e->getMessage());

} catch (\ProcessOut\Exceptions\ApiException $e) {
    die('Looks like theres been an API error. ' . $e->getMessage());

}

/**
 * And get its invoice url
 */
echo $invoice->getUrl() . PHP_EOL;

/**
 * Or get its invoice id
 */
echo $invoice->getId() . PHP_EOL;



/**
 * ================================
 */



/**
 * Create a new tailored invoice
 * @var TailoredInvoice
 */
$tailoredInvoice = new \ProcessOut\Invoice\TailoredInvoice($processout);

try {
    $tailoredInvoice->from('a4fb38dd-b36c-42c9-8b92-c515de122a16');

} catch (\ProcessOut\Exceptions\NotFoundException $e) {
    die('Looks like the tailored invoice could not be found.');

}

/**
 * Create an invoice instance from this tailoredInvoice
 * @var Invoice
 */
$invoice = $tailoredInvoice->invoice()->save();

/**
 * And get its invoice link again
 */
echo $invoice->getUrl() . PHP_EOL;

/**
 * Or invoice id!
 */
echo $invoice->getId();