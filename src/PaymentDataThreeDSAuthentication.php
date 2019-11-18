<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class PaymentDataThreeDSAuthentication implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Authentication XID
     * @var string
     */
    protected $xID;

    /**
     * PaymentDataThreeDSAuthentication constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get XID
     * Authentication XID
     * @return string
     */
    public function getXID()
    {
        return $this->xID;
    }

    /**
     * Set XID
     * Authentication XID
     * @param  string $value
     * @return $this
     */
    public function setXID($value)
    {
        $this->xID = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return PaymentDataThreeDSAuthentication
     */
    public function fillWithData($data)
    {
        if(! empty($data['XID']))
            $this->setXID($data['XID']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "XID" => $this->getXID(),
            );
    }

    
}
