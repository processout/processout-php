<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class NativeAPMTransactionDetailsGateway implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Native APM Gateway display name
     * @var string
     */
    protected $displayName;

    /**
     * Native APM Gateway logo url
     * @var string
     */
    protected $logoUrl;

    /**
     * NativeAPMTransactionDetailsGateway constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get DisplayName
     * Native APM Gateway display name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set DisplayName
     * Native APM Gateway display name
     * @param  string $value
     * @return $this
     */
    public function setDisplayName($value)
    {
        $this->displayName = $value;
        return $this;
    }
    
    /**
     * Get LogoUrl
     * Native APM Gateway logo url
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Set LogoUrl
     * Native APM Gateway logo url
     * @param  string $value
     * @return $this
     */
    public function setLogoUrl($value)
    {
        $this->logoUrl = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return NativeAPMTransactionDetailsGateway
     */
    public function fillWithData($data)
    {
        if(! empty($data['display_name']))
            $this->setDisplayName($data['display_name']);

        if(! empty($data['logo_url']))
            $this->setLogoUrl($data['logo_url']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "display_name" => $this->getDisplayName(),
            "logo_url" => $this->getLogoUrl(),
        );
    }

    
}
