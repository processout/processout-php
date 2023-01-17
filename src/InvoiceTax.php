<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceTax implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Amount of the tax for an invoice
     * @var decimal
     */
    protected $amount;

    /**
     * Rate of the tax for an invoice
     * @var decimal
     */
    protected $rate;

    /**
     * InvoiceTax constructor
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
     * Amount of the tax for an invoice
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount of the tax for an invoice
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get Rate
     * Rate of the tax for an invoice
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set Rate
     * Rate of the tax for an invoice
     * @param  string $value
     * @return $this
     */
    public function setRate($value)
    {
        $this->rate = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoiceTax
     */
    public function fillWithData($data)
    {
        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['rate']))
            $this->setRate($data['rate']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize(): mixed {
        return array(
            "amount" => $this->getAmount(),
            "rate" => $this->getRate(),
        );
    }

    
}
