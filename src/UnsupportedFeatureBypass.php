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
     * Indicates whether to fallback to normal payment if split payments are not supported
     * @var boolean
     */
    protected $splitPayments;

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
     * Get SplitPayments
     * Indicates whether to fallback to normal payment if split payments are not supported
     * @return bool
     */
    public function getSplitPayments()
    {
        return $this->splitPayments;
    }

    /**
     * Set SplitPayments
     * Indicates whether to fallback to normal payment if split payments are not supported
     * @param  bool $value
     * @return $this
     */
    public function setSplitPayments($value)
    {
        $this->splitPayments = $value;
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

        if(! empty($data['split_payments']))
            $this->setSplitPayments($data['split_payments']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return array
     */
    public function jsonSerialize(): array {
        return array(
            "incremental_authorization" => $this->getIncrementalAuthorization(),
            "split_payments" => $this->getSplitPayments(),
        );
    }

    
}
