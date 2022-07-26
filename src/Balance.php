<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Balance implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Amount available
     * @var string
     */
    protected $amount;

    /**
     * Currency the balance is in
     * @var string
     */
    protected $currency;

    /**
     * Expiry time of the voucher
     * @var string
     */
    protected $expiry;

    /**
     * Balance constructor
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
     * Amount available
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount available
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency the balance is in
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency the balance is in
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get Expiry
     * Expiry time of the voucher
     * @return string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Set Expiry
     * Expiry time of the voucher
     * @param  string $value
     * @return $this
     */
    public function setExpiry($value)
    {
        $this->expiry = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Balance
     */
    public function fillWithData($data)
    {
        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['currency']))
            $this->setCurrency($data['currency']);

        if(! empty($data['expiry']))
            $this->setExpiry($data['expiry']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "amount" => $this->getAmount(),
            "currency" => $this->getCurrency(),
            "expiry" => $this->getExpiry(),
        );
    }

    
}
