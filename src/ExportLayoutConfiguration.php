<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ExportLayoutConfiguration implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Columns that will be exported.
     * @var list
     */
    protected $columns;

    /**
     * Time related configurations.
     * @var object
     */
    protected $time;

    /**
     * Amount related configurations.
     * @var object
     */
    protected $amount;

    /**
     * ExportLayoutConfiguration constructor
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
     * Columns that will be exported.
     * @return array
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Set Columns
     * Columns that will be exported.
     * @param  array $value
     * @return $this
     */
    public function setColumns($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->columns = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new ExportLayoutConfigurationColumn($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->columns = $a;
        }
        return $this;
    }
    
    /**
     * Get Time
     * Time related configurations.
     * @return object
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set Time
     * Time related configurations.
     * @param  object $value
     * @return $this
     */
    public function setTime($value)
    {
        if (is_object($value))
            $this->time = $value;
        else
        {
            $obj = new ExportLayoutConfigurationTime($this->client);
            $obj->fillWithData($value);
            $this->time = $obj;
        }
        return $this;
    }
    
    /**
     * Get Amount
     * Amount related configurations.
     * @return object
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount related configurations.
     * @param  object $value
     * @return $this
     */
    public function setAmount($value)
    {
        if (is_object($value))
            $this->amount = $value;
        else
        {
            $obj = new ExportLayoutConfigurationAmount($this->client);
            $obj->fillWithData($value);
            $this->amount = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ExportLayoutConfiguration
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

    
}
