<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ThreeDS implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Version of the 3DS
     * @var string
     */
    protected $version;

    /**
     * Current status of the authentication
     * @var string
     */
    protected $status;

    /**
     * True if a fingerprint has occured
     * @var boolean
     */
    protected $fingerprinted;

    /**
     * True if a challenge has occured
     * @var boolean
     */
    protected $challenged;

    /**
     * Ares transaction status
     * @var string
     */
    protected $aresTransStatus;

    /**
     * Cres transaction status
     * @var string
     */
    protected $cresTransStatus;

    /**
     * Universally unique transaction identifier assigned by the DS to identify a single transaction
     * @var string
     */
    protected $dsTransId;

    /**
     * Indicates whether the 3DS fingerprint successfully completed
     * @var string
     */
    protected $fingerprintCompletionIndicator;

    /**
     * Universally unique transaction identifier assigned by the 3DS Server to identify a single transaction
     * @var string
     */
    protected $serverTransId;

    /**
     * ThreeDS constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Version
     * Version of the 3DS
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set Version
     * Version of the 3DS
     * @param  string $value
     * @return $this
     */
    public function setVersion($value)
    {
        $this->version = $value;
        return $this;
    }
    
    /**
     * Get Status
     * Current status of the authentication
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set Status
     * Current status of the authentication
     * @param  string $value
     * @return $this
     */
    public function setStatus($value)
    {
        $this->status = $value;
        return $this;
    }
    
    /**
     * Get Fingerprinted
     * True if a fingerprint has occured
     * @return bool
     */
    public function getFingerprinted()
    {
        return $this->fingerprinted;
    }

    /**
     * Set Fingerprinted
     * True if a fingerprint has occured
     * @param  bool $value
     * @return $this
     */
    public function setFingerprinted($value)
    {
        $this->fingerprinted = $value;
        return $this;
    }
    
    /**
     * Get Challenged
     * True if a challenge has occured
     * @return bool
     */
    public function getChallenged()
    {
        return $this->challenged;
    }

    /**
     * Set Challenged
     * True if a challenge has occured
     * @param  bool $value
     * @return $this
     */
    public function setChallenged($value)
    {
        $this->challenged = $value;
        return $this;
    }
    
    /**
     * Get AresTransStatus
     * Ares transaction status
     * @return string
     */
    public function getAresTransStatus()
    {
        return $this->aresTransStatus;
    }

    /**
     * Set AresTransStatus
     * Ares transaction status
     * @param  string $value
     * @return $this
     */
    public function setAresTransStatus($value)
    {
        $this->aresTransStatus = $value;
        return $this;
    }
    
    /**
     * Get CresTransStatus
     * Cres transaction status
     * @return string
     */
    public function getCresTransStatus()
    {
        return $this->cresTransStatus;
    }

    /**
     * Set CresTransStatus
     * Cres transaction status
     * @param  string $value
     * @return $this
     */
    public function setCresTransStatus($value)
    {
        $this->cresTransStatus = $value;
        return $this;
    }
    
    /**
     * Get DsTransId
     * Universally unique transaction identifier assigned by the DS to identify a single transaction
     * @return string
     */
    public function getDsTransId()
    {
        return $this->dsTransId;
    }

    /**
     * Set DsTransId
     * Universally unique transaction identifier assigned by the DS to identify a single transaction
     * @param  string $value
     * @return $this
     */
    public function setDsTransId($value)
    {
        $this->dsTransId = $value;
        return $this;
    }
    
    /**
     * Get FingerprintCompletionIndicator
     * Indicates whether the 3DS fingerprint successfully completed
     * @return string
     */
    public function getFingerprintCompletionIndicator()
    {
        return $this->fingerprintCompletionIndicator;
    }

    /**
     * Set FingerprintCompletionIndicator
     * Indicates whether the 3DS fingerprint successfully completed
     * @param  string $value
     * @return $this
     */
    public function setFingerprintCompletionIndicator($value)
    {
        $this->fingerprintCompletionIndicator = $value;
        return $this;
    }
    
    /**
     * Get ServerTransId
     * Universally unique transaction identifier assigned by the 3DS Server to identify a single transaction
     * @return string
     */
    public function getServerTransId()
    {
        return $this->serverTransId;
    }

    /**
     * Set ServerTransId
     * Universally unique transaction identifier assigned by the 3DS Server to identify a single transaction
     * @param  string $value
     * @return $this
     */
    public function setServerTransId($value)
    {
        $this->serverTransId = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ThreeDS
     */
    public function fillWithData($data)
    {
        if(! empty($data['version']))
            $this->setVersion($data['version']);

        if(! empty($data['status']))
            $this->setStatus($data['status']);

        if(! empty($data['fingerprinted']))
            $this->setFingerprinted($data['fingerprinted']);

        if(! empty($data['challenged']))
            $this->setChallenged($data['challenged']);

        if(! empty($data['ares_trans_status']))
            $this->setAresTransStatus($data['ares_trans_status']);

        if(! empty($data['cres_trans_status']))
            $this->setCresTransStatus($data['cres_trans_status']);

        if(! empty($data['ds_trans_id']))
            $this->setDsTransId($data['ds_trans_id']);

        if(! empty($data['fingerprint_completion_indicator']))
            $this->setFingerprintCompletionIndicator($data['fingerprint_completion_indicator']);

        if(! empty($data['server_trans_id']))
            $this->setServerTransId($data['server_trans_id']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize(): mixed {
        return array(
            "version" => $this->getVersion(),
            "status" => $this->getStatus(),
            "fingerprinted" => $this->getFingerprinted(),
            "challenged" => $this->getChallenged(),
            "ares_trans_status" => $this->getAresTransStatus(),
            "cres_trans_status" => $this->getCresTransStatus(),
            "ds_trans_id" => $this->getDsTransId(),
            "fingerprint_completion_indicator" => $this->getFingerprintCompletionIndicator(),
            "server_trans_id" => $this->getServerTransId(),
        );
    }

    
}
