<?php

/**
 * Let's load the dependencies
 */
require '../vendor/autoload.php';

/**
 * Create a new ProcessOut's instance
 * @var ProcessOut
 */
$processout = new ProcessOut\ProcessOut(
    '8722fce8-f8c0-44be-997e-d4954cf32fc0',
    'key-3022bbac0a88514dff79c0d95f5b8486ba0884bb665834ea9ad79610ac31ab43'
);

/**
 * Get the input
 * @var array
 */
$input = json_decode(file_get_contents('php://input'), true);

/**
 * Checking if the callback seems to be legit
 */
if(!(new \ProcessOut\Callback\Callback($processout))->validate($input))
{
    header('Unauthorized', true, 401);
    echo 'Bad callback'; exit();
}

/**
 * Callback is legit! Perform actions on it
 * /!\ Be sure to still check the price, currencies... /!\
 */
switch($input['action'])
{
    case 'invoice.completed':
        // Transaction successfull/completed
        break;

    case 'invoice.pending':
        // Transaction still needs some time to be processed
        break;

    case 'invoice.failed':
        // Damn, something went wrong
        break;

    case 'invoice.disputed':
        // Your customer opened a dispute on the transaction
        break;

    case 'invoice.solved':
        // You won/solved a dispute
        break;

    case 'invoice.reversed':
        // You most likely lost a dispute and the transaction got reversed
        break;

    case 'invoice.refunded':
        // You refunded the transaction
        break;

    case 'recurring-invoice.started':
        // A new recurring payment has been created
        break;

    case 'recurring-invoice.ended':
        // A recurring payment has ended. It could be because the customer
        // simply didn't paid for the new period, or because he disputed the
        // transaction. In the later case, another callback invoice.disputed
        // is also sent.
        break;

    default:
        header($_SERVER['SERVER_PROTOCOL'] . ' Bad Request', true, 400);
        echo 'Unknown callback action'; exit();
}
