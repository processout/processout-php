<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class GatewayConfiguration
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the gateway configuration
     * @var string
     */
    protected $id;

    /**
     * Project to which the gateway configuration belongs
     * @var object
     */
    protected $project;

    /**
     * Gateway that the configuration configures
     * @var object
     */
    protected $gateway;

    /**
     * Define whether or not the gateway configuration is enabled
     * @var boolean
     */
    protected $enabled;

    /**
     * Public keys of the payment gateway configuration (key-value pair)
     * @var dictionary
     */
    protected $publicKeys;

    /**
     * GatewayConfiguration constructor
     * @param ProcessOut\ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
        {
            $processOut = ProcessOut::getDefault();
        }

        $this->instance = $processOut;

        $this->setPublicKeys(array('_library' => 'php'));
        
    }

    
    /**
     * Get Id
     * ID of the gateway configuration
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the gateway configuration
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Project
     * Project to which the gateway configuration belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the gateway configuration belongs
     * @param  object $value
     * @return $this
     */
    public function setProject($value)
    {
        if (is_object($value))
            $this->project = $value;
        else
        {
            $obj = new Project($this->instance);
            $obj->fillWithData($value);
            $this->project = $obj;
        }
        return $this;
    }
    
    /**
     * Get Gateway
     * Gateway that the configuration configures
     * @return object
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set Gateway
     * Gateway that the configuration configures
     * @param  object $value
     * @return $this
     */
    public function setGateway($value)
    {
        if (is_object($value))
            $this->gateway = $value;
        else
        {
            $obj = new Gateway($this->instance);
            $obj->fillWithData($value);
            $this->gateway = $obj;
        }
        return $this;
    }
    
    /**
     * Get Enabled
     * Define whether or not the gateway configuration is enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set Enabled
     * Define whether or not the gateway configuration is enabled
     * @param  bool $value
     * @return $this
     */
    public function setEnabled($value)
    {
        $this->enabled = $value;
        return $this;
    }
    
    /**
     * Get PublicKeys
     * Public keys of the payment gateway configuration (key-value pair)
     * @return array
     */
    public function getPublicKeys()
    {
        return $this->publicKeys;
    }

    /**
     * Set PublicKeys
     * Public keys of the payment gateway configuration (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setPublicKeys($value)
    {
        $this->publicKeys = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return GatewayConfiguration
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["project"]))
            $this->setProject($data["project"]);

        if(! empty($data["gateway"]))
            $this->setGateway($data["gateway"]);

        if(! empty($data["enabled"]))
            $this->setEnabled($data["enabled"]);

        if(! empty($data["public_keys"]))
            $this->setPublicKeys($data["public_keys"]);

        return $this;
    }

    
}
