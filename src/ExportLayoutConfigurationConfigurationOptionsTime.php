<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ExportLayoutConfigurationConfigurationOptionsTime implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Format options for configuration.
     * @var slice
     */
    protected $format;

    /**
     * ExportLayoutConfigurationConfigurationOptionsTime constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Format
     * Format options for configuration.
     * @return array
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set Format
     * Format options for configuration.
     * @param  array $value
     * @return $this
     */
    public function setFormat($value)
    {
        $this->format = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ExportLayoutConfigurationConfigurationOptionsTime
     */
    public function fillWithData($data)
    {
        if(! empty($data['format']))
            $this->setFormat($data['format']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "format" => $this->getFormat(),
        );
    }

    
}
