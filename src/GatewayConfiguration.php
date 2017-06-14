<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class GatewayConfiguration
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

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
     * ID of the project to which the gateway configuration belongs
     * @var string
     */
    protected $projectId;

    /**
     * Gateway that the configuration configures
     * @var object
     */
    protected $gateway;

    /**
     * ID of the gateway to which the gateway configuration belongs
     * @var integer
     */
    protected $gatewayId;

    /**
     * Name of the gateway configuration
     * @var string
     */
    protected $name;

    /**
     * Fixed fee of the gateway configuration, if specified
     * @var float
     */
    protected $feeFixed;

    /**
     * Percentage fee of the gateway configuration, if specified
     * @var float
     */
    protected $feePercentage;

    /**
     * Default currency of the gateway configuration
     * @var string
     */
    protected $defaultCurrency;

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
     * Date at which the gateway configuration was created
     * @var string
     */
    protected $createdAt;

    /**
     * Date at which the gateway configuration was enabled
     * @var string
     */
    protected $enabledAt;

    /**
     * GatewayConfiguration constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
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
            $obj = new Project($this->client);
            $obj->fillWithData($value);
            $this->project = $obj;
        }
        return $this;
    }
    
    /**
     * Get ProjectId
     * ID of the project to which the gateway configuration belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the gateway configuration belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
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
            $obj = new Gateway($this->client);
            $obj->fillWithData($value);
            $this->gateway = $obj;
        }
        return $this;
    }
    
    /**
     * Get GatewayId
     * ID of the gateway to which the gateway configuration belongs
     * @return int
     */
    public function getGatewayId()
    {
        return $this->gatewayId;
    }

    /**
     * Set GatewayId
     * ID of the gateway to which the gateway configuration belongs
     * @param  int $value
     * @return $this
     */
    public function setGatewayId($value)
    {
        $this->gatewayId = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the gateway configuration
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the gateway configuration
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get FeeFixed
     * Fixed fee of the gateway configuration, if specified
     * @return double
     */
    public function getFeeFixed()
    {
        return $this->feeFixed;
    }

    /**
     * Set FeeFixed
     * Fixed fee of the gateway configuration, if specified
     * @param  double $value
     * @return $this
     */
    public function setFeeFixed($value)
    {
        $this->feeFixed = $value;
        return $this;
    }
    
    /**
     * Get FeePercentage
     * Percentage fee of the gateway configuration, if specified
     * @return double
     */
    public function getFeePercentage()
    {
        return $this->feePercentage;
    }

    /**
     * Set FeePercentage
     * Percentage fee of the gateway configuration, if specified
     * @param  double $value
     * @return $this
     */
    public function setFeePercentage($value)
    {
        $this->feePercentage = $value;
        return $this;
    }
    
    /**
     * Get DefaultCurrency
     * Default currency of the gateway configuration
     * @return string
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * Set DefaultCurrency
     * Default currency of the gateway configuration
     * @param  string $value
     * @return $this
     */
    public function setDefaultCurrency($value)
    {
        $this->defaultCurrency = $value;
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
     * Get CreatedAt
     * Date at which the gateway configuration was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the gateway configuration was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    
    /**
     * Get EnabledAt
     * Date at which the gateway configuration was enabled
     * @return string
     */
    public function getEnabledAt()
    {
        return $this->enabledAt;
    }

    /**
     * Set EnabledAt
     * Date at which the gateway configuration was enabled
     * @param  string $value
     * @return $this
     */
    public function setEnabledAt($value)
    {
        $this->enabledAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return GatewayConfiguration
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['gateway']))
            $this->setGateway($data['gateway']);

        if(! empty($data['gateway_id']))
            $this->setGatewayId($data['gateway_id']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['fee_fixed']))
            $this->setFeeFixed($data['fee_fixed']);

        if(! empty($data['fee_percentage']))
            $this->setFeePercentage($data['fee_percentage']);

        if(! empty($data['default_currency']))
            $this->setDefaultCurrency($data['default_currency']);

        if(! empty($data['enabled']))
            $this->setEnabled($data['enabled']);

        if(! empty($data['public_keys']))
            $this->setPublicKeys($data['public_keys']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        if(! empty($data['enabled_at']))
            $this->setEnabledAt($data['enabled_at']);

        return $this;
    }

    
}
