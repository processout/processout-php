<?php

namespace ProcessOut\Objects;

class Invoice extends InvoiceBase
{

	/**
	 * Item name
	 * @var string
	 */
	protected $ItemName;

	/**
	 * Item amount
	 * @var double
	 */
	protected $ItemAmount;

	/**
	 * Item quantity
	 * @var integer
	 */
	protected $ItemQuantity;

	/**
	 * Currency of the invoice (USD, EUR...)
	 * @var string
	 */
	protected $Currency;

	/**
	 * Taxes charged
	 * @var double
	 */
	protected $Taxes    = 0;

	/**
	 * Shipping fees charged
	 * @var double
	 */
	protected $Shipping = 0;

	/**
	 * Discount percentage (no impact on the invoice's amount)
	 * @var integer
	 */
	protected $Discount = 0;

	/**
	 * Invoice constructor
	 * @param string $projectId
	 * @param string $projectSecret
	 * @param string $itemName
	 * @param double $itemAmount
	 * @param integer $itemQuantity
	 * @param string $currency
	 */
	public function __construct($projectId, $projectSecret, $itemName,
		$itemAmount, $itemQuantity, $currency)
	{
        $this->ItemName     = $itemName;
        $this->ItemAmount   = $itemAmount;
        $this->ItemQuantity = $itemQuantity;
        $this->Currency     = $currency;

        parent::__construct($projectId, $projectSecret);
	}

	/**
	 * Get the item name
	 * @return string
	 */
	public function getItemName() {
	    return $this->ItemName;
	}

	/**
	 * Set the item name
	 * @param string $ItemName
	 */
	public function setItemName($ItemName) {
	    $this->ItemName = $ItemName;
	    return $this;
	}

	/**
	 * Get the item amount
	 * @return double
	 */
	public function getItemAmount() {
	    return $this->ItemAmount;
	}

	/**
	 * Set the item amount
	 * @param double $ItemAmount
	 */
	public function setItemAmount($ItemAmount) {
	    $this->ItemAmount = $ItemAmount;
	    return $this;
	}

	/**
	 * Get the item quantity
	 * @return integer
	 */
	public function getItemQuantity() {
	    return $this->ItemQuantity;
	}

	/**
	 * Set the item quantity
	 * @param integer $ItemQuantity
	 */
	public function setItemQuantity($ItemQuantity) {
	    $this->ItemQuantity = $ItemQuantity;
	    return $this;
	}

	/**
	 * Get the currency (USD, EUR...)
	 * @return string
	 */
	public function getCurrency() {
	    return $this->Currency;
	}

	/**
	 * Set the currency (USD, EUR...)
	 * @param string $Currency
	 */
	public function setCurrency($Currency) {
	    $this->Currency = $Currency;
	    return $this;
	}

	/**
	 * Get the taxes applied to the invoice
	 * @return double
	 */
	public function getTaxes() {
	    return $this->Taxes;
	}

	/**
	 * Set the taxes applied to the invoice
	 * @param double $Taxes
	 */
	public function setTaxes($Taxes) {
	    $this->Taxes = $Taxes;
	    return $this;
	}

	/**
	 * Get the shipping fees applied to the invoice
	 */
	public function getShipping() {
	    return $this->Shipping;
	}

	/**
	 * Set the shipping fees applied to the invoice
	 * @param double $Shipping
	 */
	public function setShipping($Shipping) {
	    $this->Shipping = $Shipping;
	    return $this;
	}

	/**
	 * Get the discount percentage (has no impact to the invoice amount)
	 * @return integer
	 */
	public function getDiscount() {
	    return $this->Discount;
	}

	/**
	 * Set the discount percentage (has no impact to the invoice amount)
	 * @param integer $Discount
	 */
	public function setDiscount($Discount) {
	    $this->Discount = $Discount;
	    return $this;
	}

	/**
	 * Perform the ProcessOut's request to generate the invoice, and return the
	 * URL to that invoice
	 * @return string
	 */
	public function getLink()
	{
		$this->lastResponse = $this->cURL->newRequest(
			'post',
			$this->HOST . '/invoices',
			$this->_generateData()
		)->setOptions(array(
			CURLOPT_USERPWD  => $this->ProjectId . ':' .
				$this->ProjectSecret
		))->send();

		if($this->lastResponse->statusCode != '200')
		{
			throw new \Exception("Processout returned an error code,
				please verify your inputs. Error: " .
				$this->lastResponse->code);
		}

		$data = json_decode($this->lastResponse->body);

		return $data->url;
	}

	/**
	 * Generate the data used during the ProcessOut's request
	 * @return array
	 */
	protected function _generateData()
	{
		return array_merge(array(
            'item_name'     => $this->ItemName,
            'item_amount'   => $this->ItemAmount,
            'item_quantity' => $this->ItemQuantity,
            'currency'      => $this->Currency,
            'taxes'         => $this->Taxes,
            'shipping'      => $this->Shipping,
            'discount'      => $this->Discount
		), parent::_generateData());
	}

}
