<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceShippingPhone implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Phone number for the shipment
     * @var string
     */
    protected $number;

    /**
     * Phone number dialing code for the shipment
     * @var string
     */
    protected $dialingCode;

    /**
     * InvoiceShippingPhone constructor
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
     * Phone number for the shipment
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set Number
     * Phone number for the shipment
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
     * Phone number dialing code for the shipment
     * @return string
     */
    public function getDialingCode()
    {
        return $this->dialingCode;
    }

    /**
     * Set DialingCode
     * Phone number dialing code for the shipment
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
     * @return InvoiceShippingPhone
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
