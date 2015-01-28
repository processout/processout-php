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
 * Get the input
 * @var array
 */
$input = json_decode(file_get_contents('php://input'), true);

/**
 * Checking if the callback seems to be legit
 */
if(!$processout->checkCallbackData($input))
{
	header($_SERVER['SERVER_PROTOCOL'] . ' Unauthorized', true, 401);
	echo 'Bad callback'; exit();
}

/**
 * Callback is legit! Perform actions on it
 * /!\ Be sure to still check the amount, currencies... /!\
 */
switch($input['action'])
{
	case 'invoice.completed':
		// Transaction successfull/completed
		break;

	case 'invoice.pending':
		// Transaction still need some time to be processed
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

	default:
		header($_SERVER['SERVER_PROTOCOL'] . ' Bad Request', true, 400);
		echo 'Unknown callback action'; exit();
}
