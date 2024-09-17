<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ExternalThreeDS implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ThreeDS v1 ID
     * @var string
     */
    protected $xid;

    /**
     * Transaction status
     * @var string
     */
    protected $transStatus;

    /**
     * ECI
     * @var string
     */
    protected $eci;

    /**
     * Authentication value
     * @var string
     */
    protected $cavv;

    /**
     * DS Transaction ID
     * @var string
     */
    protected $dsTransId;

    /**
     * ThreeDS Message version
     * @var string
     */
    protected $version;

    /**
     * Authentication flow: one of `frictionless` or 'challenge`
     * @var string
     */
    protected $authenticationFlow;

    /**
     * ExternalThreeDS constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Xid
     * ThreeDS v1 ID
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * Set Xid
     * ThreeDS v1 ID
     * @param  string $value
     * @return $this
     */
    public function setXid($value)
    {
        $this->xid = $value;
        return $this;
    }
    
    /**
     * Get TransStatus
     * Transaction status
     * @return string
     */
    public function getTransStatus()
    {
        return $this->transStatus;
    }

    /**
     * Set TransStatus
     * Transaction status
     * @param  string $value
     * @return $this
     */
    public function setTransStatus($value)
    {
        $this->transStatus = $value;
        return $this;
    }
    
    /**
     * Get Eci
     * ECI
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * Set Eci
     * ECI
     * @param  string $value
     * @return $this
     */
    public function setEci($value)
    {
        $this->eci = $value;
        return $this;
    }
    
    /**
     * Get Cavv
     * Authentication value
     * @return string
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * Set Cavv
     * Authentication value
     * @param  string $value
     * @return $this
     */
    public function setCavv($value)
    {
        $this->cavv = $value;
        return $this;
    }
    
    /**
     * Get DsTransId
     * DS Transaction ID
     * @return string
     */
    public function getDsTransId()
    {
        return $this->dsTransId;
    }

    /**
     * Set DsTransId
     * DS Transaction ID
     * @param  string $value
     * @return $this
     */
    public function setDsTransId($value)
    {
        $this->dsTransId = $value;
        return $this;
    }
    
    /**
     * Get Version
     * ThreeDS Message version
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set Version
     * ThreeDS Message version
     * @param  string $value
     * @return $this
     */
    public function setVersion($value)
    {
        $this->version = $value;
        return $this;
    }
    
    /**
     * Get AuthenticationFlow
     * Authentication flow: one of `frictionless` or 'challenge`
     * @return string
     */
    public function getAuthenticationFlow()
    {
        return $this->authenticationFlow;
    }

    /**
     * Set AuthenticationFlow
     * Authentication flow: one of `frictionless` or 'challenge`
     * @param  string $value
     * @return $this
     */
    public function setAuthenticationFlow($value)
    {
        $this->authenticationFlow = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ExternalThreeDS
     */
    public function fillWithData($data)
    {
        if(! empty($data['xid']))
            $this->setXid($data['xid']);

        if(! empty($data['trans_status']))
            $this->setTransStatus($data['trans_status']);

        if(! empty($data['eci']))
            $this->setEci($data['eci']);

        if(! empty($data['cavv']))
            $this->setCavv($data['cavv']);

        if(! empty($data['ds_trans_id']))
            $this->setDsTransId($data['ds_trans_id']);

        if(! empty($data['version']))
            $this->setVersion($data['version']);

        if(! empty($data['authentication_flow']))
            $this->setAuthenticationFlow($data['authentication_flow']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "xid" => $this->getXid(),
            "trans_status" => $this->getTransStatus(),
            "eci" => $this->getEci(),
            "cavv" => $this->getCavv(),
            "ds_trans_id" => $this->getDsTransId(),
            "version" => $this->getVersion(),
            "authentication_flow" => $this->getAuthenticationFlow(),
        );
    }

    
}
