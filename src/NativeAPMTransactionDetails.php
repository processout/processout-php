<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class NativeAPMTransactionDetails implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Native APM Gateway details
     * @var object
     */
    protected $gateway;

    /**
     * Native APM Invoice details
     * @var object
     */
    protected $invoice;

    /**
     * Native APM Parameter details
     * @var list
     */
    protected $parameters;

    /**
     * Native APM Transaction State
     * @var string
     */
    protected $state;

    /**
     * NativeAPMTransactionDetails constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Gateway
     * Native APM Gateway details
     * @return object
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set Gateway
     * Native APM Gateway details
     * @param  object $value
     * @return $this
     */
    public function setGateway($value)
    {
        if (is_object($value))
            $this->gateway = $value;
        else
        {
            $obj = new NativeAPMTransactionDetailsGateway($this->client);
            $obj->fillWithData($value);
            $this->gateway = $obj;
        }
        return $this;
    }
    
    /**
     * Get Invoice
     * Native APM Invoice details
     * @return object
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set Invoice
     * Native APM Invoice details
     * @param  object $value
     * @return $this
     */
    public function setInvoice($value)
    {
        if (is_object($value))
            $this->invoice = $value;
        else
        {
            $obj = new NativeAPMTransactionDetailsInvoice($this->client);
            $obj->fillWithData($value);
            $this->invoice = $obj;
        }
        return $this;
    }
    
    /**
     * Get Parameters
     * Native APM Parameter details
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Set Parameters
     * Native APM Parameter details
     * @param  array $value
     * @return $this
     */
    public function setParameters($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->parameters = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new NativeAPMParameterDefinition($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->parameters = $a;
        }
        return $this;
    }
    
    /**
     * Get State
     * Native APM Transaction State
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set State
     * Native APM Transaction State
     * @param  string $value
     * @return $this
     */
    public function setState($value)
    {
        $this->state = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return NativeAPMTransactionDetails
     */
    public function fillWithData($data)
    {
        if(! empty($data['gateway']))
            $this->setGateway($data['gateway']);

        if(! empty($data['invoice']))
            $this->setInvoice($data['invoice']);

        if(! empty($data['parameters']))
            $this->setParameters($data['parameters']);

        if(! empty($data['state']))
            $this->setState($data['state']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "gateway" => $this->getGateway(),
            "invoice" => $this->getInvoice(),
            "parameters" => $this->getParameters(),
            "state" => $this->getState(),
        );
    }

    
}
