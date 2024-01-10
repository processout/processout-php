<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class NativeAPMRequest implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Native APM parameter values
     * @var list
     */
    protected $parameterValues;

    /**
     * NativeAPMRequest constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get ParameterValues
     * Native APM parameter values
     * @return array
     */
    public function getParameterValues()
    {
        return $this->parameterValues;
    }

    /**
     * Set ParameterValues
     * Native APM parameter values
     * @param  array $value
     * @return $this
     */
    public function setParameterValues($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->parameterValues = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new NativeAPMParameterValue($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->parameterValues = $a;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return NativeAPMRequest
     */
    public function fillWithData($data)
    {
        if(! empty($data['parameter_values']))
            $this->setParameterValues($data['parameter_values']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "parameter_values" => $this->getParameterValues(),
        );
    }

    
}
