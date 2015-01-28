<?php

namespace ProcessOut;

use ProcessOut\Objects\Invoice;
use ProcessOut\Objects\ProductInvoice;

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
	 * Create a new invoice out of a product
	 * @param string $productId ID of the product
	 * @return ProductInvoice
	 */
	public function newProductInvoice($productId)
	{
		return new ProductInvoice($this->ProjectId, $this->ProjectKey, $productId);
	}

	/**
	 * Perform basic checks on the callback to make sure it's legit
	 * @param array $data Input data (ex: php://input)
	 * @return boolean
	 */
	public function checkCallbackData($data)
	{
		return $data['hmac_signature'] == hash_hmac(
			'sha256',
			md5($data['transaction_id']),
			$this->ProjectKey,
			true);
	}

}
