<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class NativeAPMTransactionDetailsInvoice implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Native APM Invoice amount
     * @var decimal
     */
    protected $amount;

    /**
     * Native APM Invoice currency code
     * @var string
     */
    protected $currencyCode;

    /**
     * NativeAPMTransactionDetailsInvoice constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Amount
     * Native APM Invoice amount
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Native APM Invoice amount
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get CurrencyCode
     * Native APM Invoice currency code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set CurrencyCode
     * Native APM Invoice currency code
     * @param  string $value
     * @return $this
     */
    public function setCurrencyCode($value)
    {
        $this->currencyCode = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return NativeAPMTransactionDetailsInvoice
     */
    public function fillWithData($data)
    {
        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['currency_code']))
            $this->setCurrencyCode($data['currency_code']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "amount" => $this->getAmount(),
            "currency_code" => $this->getCurrencyCode(),
        );
    }

    
}
