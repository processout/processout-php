<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class PaymentDataThreeDSRequest implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * URL of the ACS
     * @var string
     */
    protected $acsUrl;

    /**
     * PAReq used during the 3DS authentication
     * @var string
     */
    protected $pareq;

    /**
     * MD used during the 3DS authentication
     * @var string
     */
    protected $md;

    /**
     * URL of the 3DS term
     * @var string
     */
    protected $termUrl;

    /**
     * PaymentDataThreeDSRequest constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get AcsUrl
     * URL of the ACS
     * @return string
     */
    public function getAcsUrl()
    {
        return $this->acsUrl;
    }

    /**
     * Set AcsUrl
     * URL of the ACS
     * @param  string $value
     * @return $this
     */
    public function setAcsUrl($value)
    {
        $this->acsUrl = $value;
        return $this;
    }
    
    /**
     * Get Pareq
     * PAReq used during the 3DS authentication
     * @return string
     */
    public function getPareq()
    {
        return $this->pareq;
    }

    /**
     * Set Pareq
     * PAReq used during the 3DS authentication
     * @param  string $value
     * @return $this
     */
    public function setPareq($value)
    {
        $this->pareq = $value;
        return $this;
    }
    
    /**
     * Get Md
     * MD used during the 3DS authentication
     * @return string
     */
    public function getMd()
    {
        return $this->md;
    }

    /**
     * Set Md
     * MD used during the 3DS authentication
     * @param  string $value
     * @return $this
     */
    public function setMd($value)
    {
        $this->md = $value;
        return $this;
    }
    
    /**
     * Get TermUrl
     * URL of the 3DS term
     * @return string
     */
    public function getTermUrl()
    {
        return $this->termUrl;
    }

    /**
     * Set TermUrl
     * URL of the 3DS term
     * @param  string $value
     * @return $this
     */
    public function setTermUrl($value)
    {
        $this->termUrl = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return PaymentDataThreeDSRequest
     */
    public function fillWithData($data)
    {
        if(! empty($data['acs_url']))
            $this->setAcsUrl($data['acs_url']);

        if(! empty($data['pareq']))
            $this->setPareq($data['pareq']);

        if(! empty($data['md']))
            $this->setMd($data['md']);

        if(! empty($data['term_url']))
            $this->setTermUrl($data['term_url']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "acs_url" => $this->getAcsUrl(),
        "pareq" => $this->getPareq(),
        "md" => $this->getMd(),
        "term_url" => $this->getTermUrl(),
        );
    }

    
}
