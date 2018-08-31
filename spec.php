<?php

include 'init.php';

$client = new \ProcessOut\ProcessOut('test-proj_gAO1Uu0ysZJvDuUpOGPkUBeE3pGalk3x', 
    'key_jqSPvwq3AG5MlYAgqxlwwgOcAC3Zy7d8');

// Create and fetch a new invoice
$invoice = $client->newInvoice(array(
    'name' => 'Test invoice',
    'amount' => '9.99',
    'currency' => 'USD'
))->create();

assert(!empty($invoice->getId()), 'The invoice ID should not be empty');

$fetched = $client->newInvoice()->find($invoice->getId());
assert(!empty($fetched->getId()), 'The fetched invoice ID should not be empty');
assert($invoice->getId() == $fetched->getId(), 'The invoices ID should be equal');

// Capture an invoice
$gr = new \ProcessOut\GatewayRequest('sandbox');
$gr->url = 'https://processout.com?token=test-valid';
$gr->method = 'POST';
$gr->headers = array('Content-Type' => 'application/json');
$gr->body = '{}';

$transaction = $invoice->capture($gr->getString());
assert($transaction->getStatus() == 'completed', 'The transactions status was not completed');

// Expand the transaction gateway configuration
$transaction = $transaction->find($transaction->getId(), array(
    'expand' => array('gateway_configuration')
));
assert(!empty($transaction->getGatewayConfiguration()->getId()), 'The transaction gateway configuration ID was empty');

// Fetch the customers
$customers = $client->newCustomer()->all();

// Create a subscription for a customer
$customer = $client->newCustomer()->create();
assert(!empty($customer->getId()), 'The created customer ID should not be empty');

$subscription = $client->newSubscription(array(
    'customer_id' => $customer->getId(),
    'amount' => '9.99',
    'currency' => 'USD',
    'interval' => '1d',
    'name' => 'great subscription'
))->create();
assert(!empty($subscription->getId()), 'The created subscription ID should not be empty');

// Expand a customers' project and fetch gateways
$customer = $client->newCustomer()->create(array('expand' => array('project')));
assert(!empty($customer->getProject()), 'The customer project should be expanded');
assert(!empty($customer->getProject()->getId()), 'The customer project ID should be expanded');

// Make sure the error code is correctly fetched
try {
    $client->newCustomer()->find('bad');
    assert(false, 'There should have been an error');
} catch(\ProcessOut\Exceptions\NotFoundException $e) {
    assert($e->getCode() == 'resource.customer.not-found', 'The error code was incorrect');
}