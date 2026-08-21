<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class APMPaymentProcessingConfiguration implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Type of redirection performed once the customer returns from the Alternative Payment Method (APM) flow.
     * @var string
     */
    protected $returnRedirectType;

    /**
     * Preferred finalization mode requested for the Alternative Payment Method (APM) flow.
     * @var string
     */
    protected $preferredFinalizationMode;

    /**
     * APMPaymentProcessingConfiguration constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get ReturnRedirectType
     * Type of redirection performed once the customer returns from the Alternative Payment Method (APM) flow.
     * @return string
     */
    public function getReturnRedirectType()
    {
        return $this->returnRedirectType;
    }

    /**
     * Set ReturnRedirectType
     * Type of redirection performed once the customer returns from the Alternative Payment Method (APM) flow.
     * @param  string $value
     * @return $this
     */
    public function setReturnRedirectType($value)
    {
        $this->returnRedirectType = $value;
        return $this;
    }
    
    /**
     * Get PreferredFinalizationMode
     * Preferred finalization mode requested for the Alternative Payment Method (APM) flow.
     * @return string
     */
    public function getPreferredFinalizationMode()
    {
        return $this->preferredFinalizationMode;
    }

    /**
     * Set PreferredFinalizationMode
     * Preferred finalization mode requested for the Alternative Payment Method (APM) flow.
     * @param  string $value
     * @return $this
     */
    public function setPreferredFinalizationMode($value)
    {
        $this->preferredFinalizationMode = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return APMPaymentProcessingConfiguration
     */
    public function fillWithData($data)
    {
        if(! empty($data['return_redirect_type']))
            $this->setReturnRedirectType($data['return_redirect_type']);

        if(! empty($data['preferred_finalization_mode']))
            $this->setPreferredFinalizationMode($data['preferred_finalization_mode']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return array
     */
    public function jsonSerialize(): array {
        return array(
            "return_redirect_type" => $this->getReturnRedirectType(),
            "preferred_finalization_mode" => $this->getPreferredFinalizationMode(),
        );
    }

    
}
