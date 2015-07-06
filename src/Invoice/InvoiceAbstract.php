<?php

namespace ProcessOut\Invoice;

use ProcessOut\ProcessOut;

abstract class InvoiceAbstract
{

    /**
     * ProcessOut instanciated object
     * @var ProcessOut
     */
    protected $ProcessOut;

    /**
     * Item name
     * @var string
     */
    protected $ItemName;

    /**
     * Item price
     * @var double
     */
    protected $ItemPrice;

    /**
     * Item quantity
     * @var integer
     */
    protected $ItemQuantity = 1;

    /**
     * Currency of the invoice (USD, EUR...)
     * @var string
     */
    protected $Currency;

    /**
     * Taxes charged
     * @var double
     */
    protected $Taxes = 0;

    /**
     * Shipping fees charged
     * @var double
     */
    protected $Shipping = 0;

    /**
     * Recurring days
     * @var integer
     */
    protected $RecurringDays = 0;

    /**
     * Request the customer email during the checkout
     * @var boolean
     */
    protected $RequestEmail = false;

    /**
     * Request the customer shipping address during the checkout
     * @var boolean
     */
    protected $RequestShipping = false;

    /**
     * Meta data shown during the checkout
     * @var array
     */
    protected $Metas = array();

    /**
     * URL where the customer will be returned upon purchase
     * @var string
     */
    protected $ReturnUrl = NULL;

    /**
     * URL where the customer will be returned if the transaction is canceled
     * @var string
     */
    protected $CancelUrl = NULL;

    /**
     * Callback URL
     * @var string
     */
    protected $NotifyUrl = NULL;

    /**
     * String passed to the callback URL, can be anything
     * @var string
     */
    protected $Custom = NULL;

    /**
     * Sandbox mode
     * @var boolean
     */
    protected $Sandbox = false;

    /**
     * Contains the latest response from ProcessOut
     * @var array
     */
    protected $lastResponse = array();

    /**
     * InvoiceBase constructor
     * @param ProcessOut $processOut
     */
    public function __construct(ProcessOut $processOut)
    {
        $this->ProcessOut = $processOut;
    }

    /**
     * Get the item name
     * @return string
     */
    public function getItemName()
    {
        return $this->ItemName;
    }

    /**
     * Set the item name
     * @param string $itemName
     */
    public function setItemName($itemName)
    {
        $this->ItemName = $itemName;
        return $this;
    }

    /**
     * Get the item price
     * @return double
     */
    public function getItemPrice()
    {
        return $this->ItemPrice;
    }

    /**
     * Set the item price
     * @param double $itemPrice
     */
    public function setItemPrice($itemPrice)
    {
        $this->ItemPrice = $itemPrice;
        return $this;
    }

    /**
     * Get the item quantity
     * @return integer
     */
    public function getItemQuantity()
    {
        return $this->ItemQuantity;
    }

    /**
     * Set the item quantity
     * @param integer $itemQuantity
     */
    public function setItemQuantity($itemQuantity)
    {
        $this->ItemQuantity = $itemQuantity;
        return $this;
    }

    /**
     * Get the currency (USD, EUR...)
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Set the currency (USD, EUR...)
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->Currency = $currency;
        return $this;
    }

    /**
     * Get the taxes applied to the invoice
     * @return double
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }

    /**
     * Set the taxes applied to the invoice
     * @param double $Taxes
     */
    public function setTaxes($Taxes)
    {
        $this->Taxes = $Taxes;
        return $this;
    }

    /**
     * Get the shipping fees applied to the invoice
     */
    public function getShipping()
    {
        return $this->Shipping;
    }

    /**
     * Set the shipping fees applied to the invoice
     * @param double $Shipping
     */
    public function setShipping($Shipping)
    {
        $this->Shipping = $Shipping;
        return $this;
    }

    /**
     * Get the recurring days
     */
    public function getRecurringDays()
    {
        return $this->RecurringDays;
    }

    /**
     * Set the recurring days
     * @param double $RecurringDays
     */
    public function setRecurringDays($RecurringDays)
    {
        $this->RecurringDays = $RecurringDays;
        return $this;
    }

    /**
     * Get the request email boolean value
     * @return boolean $RequestEmail
     */
    public function getRequestEmail()
    {
        return $this->RequestEmail;
    }

    /**
     * Set the request email booleam value
     * @param boolean $RequestEmail
     */
    public function setRequestEmail($RequestEmail)
    {
        $this->RequestEmail = $RequestEmail;
        return $this;
    }

    /**
     * Get the request shipping boolean value
     * @return boolean $RequestShipping
     */
    public function getRequestShipping()
    {
        return $this->RequestShipping;
    }

    /**
     * Set the request shipping boolean value
     * @param boolean $RequestShipping
     */
    public function setRequestShipping($RequestShipping)
    {
        $this->RequestShipping = $RequestShipping;
        return $this;
    }

    /**
     * Get the meta data values
     * @return array
     */
    public function getMetas()
    {
        return $this->Metas;
    }

    /**
     * Set the meta data values
     * @param array $Metas
     */
    public function setMetas($Metas)
    {
        $this->Metas = $Metas;
        return $this;
    }

    /**
     * Add a meta to the meta data valeus
     * @param string $key
     * @param string $value
     */
    public function addMeta($key, $value)
    {
        $this->Metas[$key] = $value;
        return $this;
    }

    /**
     * Get the URL where the user will be redirected upon purchase
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->ReturnUrl;
    }

    /**
     * Set the URL where the user will be redirected upon purchase
     * @param string $returnUrl
     */
    public function setReturnUrl($returnUrl)
    {
        $this->ReturnUrl = $returnUrl;
        return $this;
    }

    /**
     * Get the URL where the user will be redirected when the transaction gets
     *  canceled
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->CancelUrl;
    }

    /**
     * Set the URL where the user will be redirected when the transaction gets
     *  canceled
     * @param string $cancelUrl
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->CancelUrl = $cancelUrl;
        return $this;
    }

    /**
     * Get the URL called by the callback
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->NotifyUrl;
    }

    /**
     * Set the URL called by the callback
     * @param string $notifyUrl
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->NotifyUrl = $notifyUrl;
        return $this;
    }

    /**
     * Get the custom value sent in the callback
     * @return string
     */
    public function getCustom()
    {
        return $this->Custom;
    }

    /**
     * Set the custom value sent in the callback
     * @param string $custom
     */
    public function setCustom($custom)
    {
        $this->Custom = $custom;
        return $this;
    }

    /**
     * Get the status of the sandbox mode
     * @return boolean
     */
    public function getSandbox()
    {
        return $this->Sandbox;
    }

    /**
     * Set the sandbox mode
     * @param boolean $sandbox
     */
    public function setSandbox($sandbox)
    {
        $this->Sandbox = $sandbox;
        return $this;
    }

    /**
     * Enable the sandbox mode
     */
    public function enableSandbox()
    {
        return $this->setSandbox(true);
    }

    /**
     * Disable the sandbox mode
     */
    public function disableSandbox()
    {
        return $this->setSandbox(false);
    }

    /**
     * Returns the latest response from ProcessOut
     * @return array
     */
    public function getLastResponse() {
        return $this->lastResponse;
    }

    /**
     * Generates the appropriate request data
     * @return array
     */
    protected function _generateData()
    {
        return array(
            'item_name'      => $this->getItemName(),
            'item_quantity'  => $this->getItemQuantity(),
            'item_price'     => $this->getItemPrice(),
            'currency'       => $this->getCurrency(),
            'taxes'          => $this->getTaxes(),
            'shipping'       => $this->getShipping(),
            'recurring_days' => $this->getRecurringDays(),

            'request_email'    => $this->getRequestEmail(),
            'request_shipping' => $this->getRequestShipping(),

            'metas' => $this->getMetas(),

            'return_url' => $this->getReturnUrl(),
            'cancel_url' => $this->getCancelUrl(),
            'notify_url' => $this->getNotifyUrl(),
            'custom'     => $this->getCustom(),
            'sandbox'    => $this->getSandbox()
        );
    }

}
