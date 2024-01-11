<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class NativeAPMParameterDefinition implements \JsonSerializable
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
     * NativeAPM parameter value type
     * @var string
     */
    protected $type;

    /**
     * NativeAPM parameter value requirement
     * @var boolean
     */
    protected $required;

    /**
     * NativeAPM parameter value length
     * @var integer
     */
    protected $length;

    /**
     * Native APM parameter display name
     * @var string
     */
    protected $displayName;

    /**
     * Native APM parameter available input values
     * @var list
     */
    protected $availableValues;

    /**
     * NativeAPMParameterDefinition constructor
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
     * Get Type
     * NativeAPM parameter value type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * NativeAPM parameter value type
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get Required
     * NativeAPM parameter value requirement
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set Required
     * NativeAPM parameter value requirement
     * @param  bool $value
     * @return $this
     */
    public function setRequired($value)
    {
        $this->required = $value;
        return $this;
    }
    
    /**
     * Get Length
     * NativeAPM parameter value length
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set Length
     * NativeAPM parameter value length
     * @param  int $value
     * @return $this
     */
    public function setLength($value)
    {
        $this->length = $value;
        return $this;
    }
    
    /**
     * Get DisplayName
     * Native APM parameter display name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set DisplayName
     * Native APM parameter display name
     * @param  string $value
     * @return $this
     */
    public function setDisplayName($value)
    {
        $this->displayName = $value;
        return $this;
    }
    
    /**
     * Get AvailableValues
     * Native APM parameter available input values
     * @return array
     */
    public function getAvailableValues()
    {
        return $this->availableValues;
    }

    /**
     * Set AvailableValues
     * Native APM parameter available input values
     * @param  array $value
     * @return $this
     */
    public function setAvailableValues($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->availableValues = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new NativeAPMParameterValueDefinition($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->availableValues = $a;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return NativeAPMParameterDefinition
     */
    public function fillWithData($data)
    {
        if(! empty($data['key']))
            $this->setKey($data['key']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['required']))
            $this->setRequired($data['required']);

        if(! empty($data['length']))
            $this->setLength($data['length']);

        if(! empty($data['display_name']))
            $this->setDisplayName($data['display_name']);

        if(! empty($data['available_values']))
            $this->setAvailableValues($data['available_values']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "key" => $this->getKey(),
            "type" => $this->getType(),
            "required" => $this->getRequired(),
            "length" => $this->getLength(),
            "display_name" => $this->getDisplayName(),
            "available_values" => $this->getAvailableValues(),
        );
    }

    
}
