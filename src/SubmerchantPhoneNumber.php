<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class SubmerchantPhoneNumber implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Dialing code of the phone number
     * @var string
     */
    protected $dialingCode;

    /**
     * Phone number
     * @var string
     */
    protected $number;

    /**
     * SubmerchantPhoneNumber constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get DialingCode
     * Dialing code of the phone number
     * @return string
     */
    public function getDialingCode()
    {
        return $this->dialingCode;
    }

    /**
     * Set DialingCode
     * Dialing code of the phone number
     * @param  string $value
     * @return $this
     */
    public function setDialingCode($value)
    {
        $this->dialingCode = $value;
        return $this;
    }
    
    /**
     * Get Number
     * Phone number
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set Number
     * Phone number
     * @param  string $value
     * @return $this
     */
    public function setNumber($value)
    {
        $this->number = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return SubmerchantPhoneNumber
     */
    public function fillWithData($data)
    {
        if(! empty($data['dialing_code']))
            $this->setDialingCode($data['dialing_code']);

        if(! empty($data['number']))
            $this->setNumber($data['number']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "dialing_code" => $this->getDialingCode(),
            "number" => $this->getNumber(),
        );
    }

    
}
