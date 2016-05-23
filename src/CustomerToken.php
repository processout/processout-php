<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;
use ProcessOut\Networking\RequestProcessoutPublic;


class CustomerToken
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * Id of the customer token
     * @var string
     */
    protected $id;

    /**
     * Name of the token to be displayed
     * @var string
     */
    protected $name;

    /**
     * Name of the payment gateway this token was created on
     * @var string
     */
    protected $gateway;

    /**
     * CustomerToken constructor
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
     * Get Id
     * Id of the customer token
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * Id of the customer token
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the token to be displayed
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the token to be displayed
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Gateway
     * Name of the payment gateway this token was created on
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set Gateway
     * Name of the payment gateway this token was created on
     * @param  string $value
     * @return $this
     */
    public function setGateway($value)
    {
        $this->gateway = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CustomerToken
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["gateway"]))
            $this->setGateway($data["gateway"]);

        return $this;
    }

    
}
