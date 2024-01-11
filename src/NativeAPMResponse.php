<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class NativeAPMResponse implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Native APM response state
     * @var string
     */
    protected $state;

    /**
     * Native APM parameter values description
     * @var list
     */
    protected $parameterDefinitions;

    /**
     * Native APM parameter values
     * @var list
     */
    protected $parameterValues;

    /**
     * NativeAPMResponse constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get State
     * Native APM response state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set State
     * Native APM response state
     * @param  string $value
     * @return $this
     */
    public function setState($value)
    {
        $this->state = $value;
        return $this;
    }
    
    /**
     * Get ParameterDefinitions
     * Native APM parameter values description
     * @return array
     */
    public function getParameterDefinitions()
    {
        return $this->parameterDefinitions;
    }

    /**
     * Set ParameterDefinitions
     * Native APM parameter values description
     * @param  array $value
     * @return $this
     */
    public function setParameterDefinitions($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->parameterDefinitions = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new NativeAPMParameterDefinition($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->parameterDefinitions = $a;
        }
        return $this;
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
     * @return NativeAPMResponse
     */
    public function fillWithData($data)
    {
        if(! empty($data['state']))
            $this->setState($data['state']);

        if(! empty($data['parameter_definitions']))
            $this->setParameterDefinitions($data['parameter_definitions']);

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
            "state" => $this->getState(),
            "parameter_definitions" => $this->getParameterDefinitions(),
            "parameter_values" => $this->getParameterValues(),
        );
    }

    
}
