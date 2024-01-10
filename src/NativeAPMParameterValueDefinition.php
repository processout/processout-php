<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class NativeAPMParameterValueDefinition implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Native APM parameter value
     * @var string
     */
    protected $value;

    /**
     * Native APM parameter default value flag
     * @var boolean
     */
    protected $default;

    /**
     * Native APM parameter value display name
     * @var string
     */
    protected $displayName;

    /**
     * NativeAPMParameterValueDefinition constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Value
     * Native APM parameter value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Value
     * Native APM parameter value
     * @param  string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
    
    /**
     * Get Default
     * Native APM parameter default value flag
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set Default
     * Native APM parameter default value flag
     * @param  bool $value
     * @return $this
     */
    public function setDefault($value)
    {
        $this->default = $value;
        return $this;
    }
    
    /**
     * Get DisplayName
     * Native APM parameter value display name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set DisplayName
     * Native APM parameter value display name
     * @param  string $value
     * @return $this
     */
    public function setDisplayName($value)
    {
        $this->displayName = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return NativeAPMParameterValueDefinition
     */
    public function fillWithData($data)
    {
        if(! empty($data['value']))
            $this->setValue($data['value']);

        if(! empty($data['default']))
            $this->setDefault($data['default']);

        if(! empty($data['display_name']))
            $this->setDisplayName($data['display_name']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "value" => $this->getValue(),
            "default" => $this->getDefault(),
            "display_name" => $this->getDisplayName(),
        );
    }

    
}
