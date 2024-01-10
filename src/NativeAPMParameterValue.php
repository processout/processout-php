<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class NativeAPMParameterValue implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Native APM parameter value key
     * @var string
     */
    protected $key;

    /**
     * Native APM parameter value value
     * @var string
     */
    protected $value;

    /**
     * NativeAPMParameterValue constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Key
     * Native APM parameter value key
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set Key
     * Native APM parameter value key
     * @param  string $value
     * @return $this
     */
    public function setKey($value)
    {
        $this->key = $value;
        return $this;
    }
    
    /**
     * Get Value
     * Native APM parameter value value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Value
     * Native APM parameter value value
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
     * @return NativeAPMParameterValue
     */
    public function fillWithData($data)
    {
        if(! empty($data['key']))
            $this->setKey($data['key']);

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
            "key" => $this->getKey(),
            "value" => $this->getValue(),
        );
    }

    
}
