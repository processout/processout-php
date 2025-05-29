<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ExportLayoutConfigurationOptions implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Columns options for configuration.
     * @var slice
     */
    protected $columns;

    /**
     * Time options for configuration.
     * @var object
     */
    protected $time;

    /**
     * Amount options for configuration.
     * @var object
     */
    protected $amount;

    /**
     * ExportLayoutConfigurationOptions constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Columns
     * Columns options for configuration.
     * @return array
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Set Columns
     * Columns options for configuration.
     * @param  array $value
     * @return $this
     */
    public function setColumns($value)
    {
        $this->columns = $value;
        return $this;
    }
    
    /**
     * Get Time
     * Time options for configuration.
     * @return object
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set Time
     * Time options for configuration.
     * @param  object $value
     * @return $this
     */
    public function setTime($value)
    {
        if (is_object($value))
            $this->time = $value;
        else
        {
            $obj = new ExportLayoutConfigurationConfigurationOptionsTime($this->client);
            $obj->fillWithData($value);
            $this->time = $obj;
        }
        return $this;
    }
    
    /**
     * Get Amount
     * Amount options for configuration.
     * @return object
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount options for configuration.
     * @param  object $value
     * @return $this
     */
    public function setAmount($value)
    {
        if (is_object($value))
            $this->amount = $value;
        else
        {
            $obj = new ExportLayoutConfigurationConfigurationOptionsAmount($this->client);
            $obj->fillWithData($value);
            $this->amount = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ExportLayoutConfigurationOptions
     */
    public function fillWithData($data)
    {
        if(! empty($data['columns']))
            $this->setColumns($data['columns']);

        if(! empty($data['time']))
            $this->setTime($data['time']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "columns" => $this->getColumns(),
            "time" => $this->getTime(),
            "amount" => $this->getAmount(),
        );
    }

    
    /**
     * Fetch export layout configuration options.
     * @param string $exportType
     * @param array $options
     * @return $this
     */
    public function fetch($exportType, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/exports/layouts/options/" . urlencode($exportType) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field export_layout_configuration_options
        $body = $response->getBody();
        if (isset($body['export_layout_configuration_options'])) {
            $body = $body['export_layout_configuration_options'];
            $returnValues['fetch'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
}
