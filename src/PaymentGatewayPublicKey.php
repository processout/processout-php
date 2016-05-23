<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;
use ProcessOut\Networking\RequestProcessoutPublic;


class PaymentGatewayPublicKey
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * Key name of the public key
     * @var string
     */
    protected $key;

    /**
     * Key value of the public key
     * @var string
     */
    protected $value;

    /**
     * PaymentGatewayPublicKey constructor
     * @param ProcessOut\ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
        {
            $processOut = ProcessOut::getDefault();
        }

        $this->instance = $processOut;

        
    }

    
    /**
     * Get Key
     * Key name of the public key
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set Key
     * Key name of the public key
     * @param  string $value
     * @return $this
     */
    public function setKey($value)
    {
        $this->key = $value;
        return $this;
    }
    
    /**
     * Get Value
     * Key value of the public key
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Value
     * Key value of the public key
     * @param  string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return PaymentGatewayPublicKey
     */
    public function fillWithData($data)
    {
        if(! empty($data["key"]))
            $this->setKey($data["key"]);

        if(! empty($data["value"]))
            $this->setValue($data["value"]);

        return $this;
    }

    
}
