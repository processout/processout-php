<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class CustomerPhone implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Phone number of the customer
     * @var string
     */
    protected $number;

    /**
     * Phone number dialing code of the customer
     * @var string
     */
    protected $dialingCode;

    /**
     * CustomerPhone constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Number
     * Phone number of the customer
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set Number
     * Phone number of the customer
     * @param  string $value
     * @return $this
     */
    public function setNumber($value)
    {
        $this->number = $value;
        return $this;
    }
    
    /**
     * Get DialingCode
     * Phone number dialing code of the customer
     * @return string
     */
    public function getDialingCode()
    {
        return $this->dialingCode;
    }

    /**
     * Set DialingCode
     * Phone number dialing code of the customer
     * @param  string $value
     * @return $this
     */
    public function setDialingCode($value)
    {
        $this->dialingCode = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CustomerPhone
     */
    public function fillWithData($data)
    {
        if(! empty($data['number']))
            $this->setNumber($data['number']);

        if(! empty($data['dialing_code']))
            $this->setDialingCode($data['dialing_code']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "number" => $this->getNumber(),
            "dialing_code" => $this->getDialingCode(),
        );
    }

    
}
