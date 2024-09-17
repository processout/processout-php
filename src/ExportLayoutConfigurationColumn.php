<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ExportLayoutConfigurationColumn implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Name of the column. Must match with supported ones for chosen export type.
     * @var string
     */
    protected $name;

    /**
     * Rename of the chosen column if needed.
     * @var string
     */
    protected $rename;

    /**
     * ExportLayoutConfigurationColumn constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Name
     * Name of the column. Must match with supported ones for chosen export type.
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the column. Must match with supported ones for chosen export type.
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Rename
     * Rename of the chosen column if needed.
     * @return string
     */
    public function getRename()
    {
        return $this->rename;
    }

    /**
     * Set Rename
     * Rename of the chosen column if needed.
     * @param  string $value
     * @return $this
     */
    public function setRename($value)
    {
        $this->rename = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ExportLayoutConfigurationColumn
     */
    public function fillWithData($data)
    {
        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['rename']))
            $this->setRename($data['rename']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "name" => $this->getName(),
            "rename" => $this->getRename(),
        );
    }

    
}
