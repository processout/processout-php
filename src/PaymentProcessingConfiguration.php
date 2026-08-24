<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class PaymentProcessingConfiguration implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Payment processing should bypass unsupported split payments validation when no payment gateway supports it.
     * @var boolean
     */
    protected $bypassUnsupportedSplitPayments;

    /**
     * Alternative Payment Method (APM) specific payment processing configuration.
     * @var object
     */
    protected $apmPaymentConfig;

    /**
     * PaymentProcessingConfiguration constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get BypassUnsupportedSplitPayments
     * Payment processing should bypass unsupported split payments validation when no payment gateway supports it.
     * @return bool
     */
    public function getBypassUnsupportedSplitPayments()
    {
        return $this->bypassUnsupportedSplitPayments;
    }

    /**
     * Set BypassUnsupportedSplitPayments
     * Payment processing should bypass unsupported split payments validation when no payment gateway supports it.
     * @param  bool $value
     * @return $this
     */
    public function setBypassUnsupportedSplitPayments($value)
    {
        $this->bypassUnsupportedSplitPayments = $value;
        return $this;
    }
    
    /**
     * Get ApmPaymentConfig
     * Alternative Payment Method (APM) specific payment processing configuration.
     * @return object
     */
    public function getApmPaymentConfig()
    {
        return $this->apmPaymentConfig;
    }

    /**
     * Set ApmPaymentConfig
     * Alternative Payment Method (APM) specific payment processing configuration.
     * @param  object $value
     * @return $this
     */
    public function setApmPaymentConfig($value)
    {
        if (is_object($value))
            $this->apmPaymentConfig = $value;
        else
        {
            $obj = new APMPaymentProcessingConfiguration($this->client);
            $obj->fillWithData($value);
            $this->apmPaymentConfig = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return PaymentProcessingConfiguration
     */
    public function fillWithData($data)
    {
        if(! empty($data['bypass_unsupported_split_payments']))
            $this->setBypassUnsupportedSplitPayments($data['bypass_unsupported_split_payments']);

        if(! empty($data['apm_payment_config']))
            $this->setApmPaymentConfig($data['apm_payment_config']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return array
     */
    public function jsonSerialize(): array {
        return array(
            "bypass_unsupported_split_payments" => $this->getBypassUnsupportedSplitPayments(),
            "apm_payment_config" => $this->getApmPaymentConfig(),
        );
    }

    
}
