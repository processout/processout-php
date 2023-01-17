<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceDevice implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Channel of the device
     * @var string
     */
    protected $channel;

    /**
     * IP address of the device
     * @var string
     */
    protected $ipAddress;

    /**
     * ID of the device
     * @var string
     */
    protected $id;

    /**
     * InvoiceDevice constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Channel
     * Channel of the device
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set Channel
     * Channel of the device
     * @param  string $value
     * @return $this
     */
    public function setChannel($value)
    {
        $this->channel = $value;
        return $this;
    }
    
    /**
     * Get IpAddress
     * IP address of the device
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set IpAddress
     * IP address of the device
     * @param  string $value
     * @return $this
     */
    public function setIpAddress($value)
    {
        $this->ipAddress = $value;
        return $this;
    }
    
    /**
     * Get Id
     * ID of the device
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the device
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoiceDevice
     */
    public function fillWithData($data)
    {
        if(! empty($data['channel']))
            $this->setChannel($data['channel']);

        if(! empty($data['ip_address']))
            $this->setIpAddress($data['ip_address']);

        if(! empty($data['id']))
            $this->setId($data['id']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize(): mixed {
        return array(
            "channel" => $this->getChannel(),
            "ip_address" => $this->getIpAddress(),
            "id" => $this->getId(),
        );
    }

    
}
