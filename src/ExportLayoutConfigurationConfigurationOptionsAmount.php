<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ExportLayoutConfigurationConfigurationOptionsAmount implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Precision options for configuration.
     * @var slice
     */
    protected $precision;

    /**
     * Separator options for configuration.
     * @var slice
     */
    protected $separator;

    /**
     * ExportLayoutConfigurationConfigurationOptionsAmount constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Precision
     * Precision options for configuration.
     * @return array
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Set Precision
     * Precision options for configuration.
     * @param  array $value
     * @return $this
     */
    public function setPrecision($value)
    {
        $this->precision = $value;
        return $this;
    }
    
    /**
     * Get Separator
     * Separator options for configuration.
     * @return array
     */
    public function getSeparator()
    {
        return $this->separator;
    }

    /**
     * Set Separator
     * Separator options for configuration.
     * @param  array $value
     * @return $this
     */
    public function setSeparator($value)
    {
        $this->separator = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ExportLayoutConfigurationConfigurationOptionsAmount
     */
    public function fillWithData($data)
    {
        if(! empty($data['precision']))
            $this->setPrecision($data['precision']);

        if(! empty($data['separator']))
            $this->setSeparator($data['separator']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "precision" => $this->getPrecision(),
            "separator" => $this->getSeparator(),
        );
    }

    
}
