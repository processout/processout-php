<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ErrorCodes implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Error codes from gateways by category.
     * @var object
     */
    protected $gateway;

    /**
     * ErrorCodes constructor
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
     * Error codes from gateways by category.
     * @return object
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set Gateway
     * Error codes from gateways by category.
     * @param  object $value
     * @return $this
     */
    public function setGateway($value)
    {
        if (is_object($value))
            $this->gateway = $value;
        else
        {
            $obj = new CategoryErrorCodes($this->client);
            $obj->fillWithData($value);
            $this->gateway = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ErrorCodes
     */
    public function fillWithData($data)
    {
        if(! empty($data['gateway']))
            $this->setGateway($data['gateway']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "gateway" => $this->getGateway(),
        );
    }

    
    /**
     * Get all error codes.
     * @param array $options
     * @return $this
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/error-codes";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field 
        $body = $response->getBody();
        $returnValues['all'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
