<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ExportLayoutConfigurationAmount implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Chosen precision for the amount fields in the export.
     * @var string
     */
    protected $precision;

    /**
     * Chosen separator for the amount fields in the export.
     * @var string
     */
    protected $separator;

    /**
     * ExportLayoutConfigurationAmount constructor
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
     * Chosen precision for the amount fields in the export.
     * @return string
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Set Precision
     * Chosen precision for the amount fields in the export.
     * @param  string $value
     * @return $this
     */
    public function setPrecision($value)
    {
        $this->precision = $value;
        return $this;
    }
    
    /**
     * Get Separator
     * Chosen separator for the amount fields in the export.
     * @return string
     */
    public function getSeparator()
    {
        return $this->separator;
    }

    /**
     * Set Separator
     * Chosen separator for the amount fields in the export.
     * @param  string $value
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
     * @return ExportLayoutConfigurationAmount
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
