<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class UnsupportedFeatureBypass implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Indicates whether to fallback to normal authorization if incremental is not supported
     * @var boolean
     */
    protected $incrementalAuthorization;

    /**
     * UnsupportedFeatureBypass constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get IncrementalAuthorization
     * Indicates whether to fallback to normal authorization if incremental is not supported
     * @return bool
     */
    public function getIncrementalAuthorization()
    {
        return $this->incrementalAuthorization;
    }

    /**
     * Set IncrementalAuthorization
     * Indicates whether to fallback to normal authorization if incremental is not supported
     * @param  bool $value
     * @return $this
     */
    public function setIncrementalAuthorization($value)
    {
        $this->incrementalAuthorization = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return UnsupportedFeatureBypass
     */
    public function fillWithData($data)
    {
        if(! empty($data['incremental_authorization']))
            $this->setIncrementalAuthorization($data['incremental_authorization']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "incremental_authorization" => $this->getIncrementalAuthorization(),
        );
    }

    
}
