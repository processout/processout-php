<?php

namespace ProcessOut;

use ProcessOut\Objects\Invoice;
use ProcessOut\Objects\TailoredInvoice;

class ProcessOut
{

	/**
	 * ProcesOut's project ID
	 * @var string
	 */
	protected $ProjectId;

	/**
	 * ProcessOut's project secret
	 * @var string
	 */
	protected $ProjectKey;

	/**
	 * ProcessOut constructor
	 * @param string $projectId
	 * @param string $projectKey
	 */
	public function __construct($projectId, $projectKey)
	{
		$this->ProjectId  = $projectId;
		$this->ProjectKey = $projectKey;
	}

	/**
	 * Create a new invoice
	 * @param  $itemName      Item name
	 * @param  $itemAmount    Item amount
	 * @param  $itemQuantity  Item quantity
	 * @param  $currency      Currency of the invoice (USD, EUR...)
	 * @return Invoice
	 */
	public function newInvoice($itemName, $itemAmount, $itemQuantity, $currency)
	{
		return new Invoice($this->ProjectId, $this->ProjectKey, $itemName,
			$itemAmount, $itemQuantity, $currency);
	}

	/**
	 * Create a new invoice out of a tailored invoice
	 * @param string $tailoredInvoiceId ID of the tailored invoice
	 * @return TailoredInvoice
	 */
	public function newTailoredInvoice($tailoredInvoiceId)
	{
		return new TailoredInvoice($this->ProjectId, $this->ProjectKey,
            $tailoredInvoiceId);
	}

	/**
	 * Perform basic checks on the callback to make sure it's legit
	 * @param array $data Input data (ex: php://input)
	 * @return boolean
	 */
	public function checkCallbackData($data)
	{
		return hash_equals(base64_decode($data['hmac_signature']), hash_hmac(
			'sha256',
			$data['transaction_id'],
			$this->ProjectKey,
			true));
	}

}
