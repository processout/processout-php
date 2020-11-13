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
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ThreeDS
     */
    public function fillWithData($data)
    {
        if(! empty($data['Version']))
            $this->setVersion($data['Version']);

        if(! empty($data['Status']))
            $this->setStatus($data['Status']);

        if(! empty($data['fingerprinted']))
            $this->setFingerprinted($data['fingerprinted']);

        if(! empty($data['challenged']))
            $this->setChallenged($data['challenged']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "Version" => $this->getVersion(),
            "Status" => $this->getStatus(),
            "fingerprinted" => $this->getFingerprinted(),
            "challenged" => $this->getChallenged(),
        );
    }

    
}
