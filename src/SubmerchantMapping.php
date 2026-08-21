<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class SubmerchantMapping implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the ProcessOut submerchant this mapping belongs to
     * @var string
     */
    protected $submerchantId;

    /**
     * ID of the gateway configuration this mapping applies to
     * @var string
     */
    protected $gatewayConfigurationId;

    /**
     * Submerchant ID at the PSP the gateway configuration connects to
     * @var string
     */
    protected $pspSubmerchantId;

    /**
     * Time at which the mapping was created
     * @var string
     */
    protected $createdAt;

    /**
     * SubmerchantMapping constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get SubmerchantId
     * ID of the ProcessOut submerchant this mapping belongs to
     * @return string
     */
    public function getSubmerchantId()
    {
        return $this->submerchantId;
    }

    /**
     * Set SubmerchantId
     * ID of the ProcessOut submerchant this mapping belongs to
     * @param  string $value
     * @return $this
     */
    public function setSubmerchantId($value)
    {
        $this->submerchantId = $value;
        return $this;
    }
    
    /**
     * Get GatewayConfigurationId
     * ID of the gateway configuration this mapping applies to
     * @return string
     */
    public function getGatewayConfigurationId()
    {
        return $this->gatewayConfigurationId;
    }

    /**
     * Set GatewayConfigurationId
     * ID of the gateway configuration this mapping applies to
     * @param  string $value
     * @return $this
     */
    public function setGatewayConfigurationId($value)
    {
        $this->gatewayConfigurationId = $value;
        return $this;
    }
    
    /**
     * Get PspSubmerchantId
     * Submerchant ID at the PSP the gateway configuration connects to
     * @return string
     */
    public function getPspSubmerchantId()
    {
        return $this->pspSubmerchantId;
    }

    /**
     * Set PspSubmerchantId
     * Submerchant ID at the PSP the gateway configuration connects to
     * @param  string $value
     * @return $this
     */
    public function setPspSubmerchantId($value)
    {
        $this->pspSubmerchantId = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Time at which the mapping was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Time at which the mapping was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return SubmerchantMapping
     */
    public function fillWithData($data)
    {
        if(! empty($data['submerchant_id']))
            $this->setSubmerchantId($data['submerchant_id']);

        if(! empty($data['gateway_configuration_id']))
            $this->setGatewayConfigurationId($data['gateway_configuration_id']);

        if(! empty($data['psp_submerchant_id']))
            $this->setPspSubmerchantId($data['psp_submerchant_id']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return array
     */
    public function jsonSerialize(): array {
        return array(
            "submerchant_id" => $this->getSubmerchantId(),
            "gateway_configuration_id" => $this->getGatewayConfigurationId(),
            "psp_submerchant_id" => $this->getPspSubmerchantId(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
}
