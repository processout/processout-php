<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class BalancesCustomerAction implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Customer action type (such as url)
     * @var string
     */
    protected $type;

    /**
     * Value of the customer action. If type is an URL, URL to which you should redirect your customer
     * @var string
     */
    protected $value;

    /**
     * BalancesCustomerAction constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Type
     * Customer action type (such as url)
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Customer action type (such as url)
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get Value
     * Value of the customer action. If type is an URL, URL to which you should redirect your customer
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Value
     * Value of the customer action. If type is an URL, URL to which you should redirect your customer
     * @param  string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return BalancesCustomerAction
     */
    public function fillWithData($data)
    {
        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['value']))
            $this->setValue($data['value']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "type" => $this->getType(),
            "value" => $this->getValue(),
        );
    }

    
}
