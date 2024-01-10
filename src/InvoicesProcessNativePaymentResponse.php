<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoicesProcessNativePaymentResponse implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Transaction linked to this Native APM
     * @var object
     */
    protected $transaction;

    /**
     * Native APM response
     * @var object
     */
    protected $nativeApm;

    /**
     * InvoicesProcessNativePaymentResponse constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Transaction
     * Transaction linked to this Native APM
     * @return object
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set Transaction
     * Transaction linked to this Native APM
     * @param  object $value
     * @return $this
     */
    public function setTransaction($value)
    {
        if (is_object($value))
            $this->transaction = $value;
        else
        {
            $obj = new Transaction($this->client);
            $obj->fillWithData($value);
            $this->transaction = $obj;
        }
        return $this;
    }
    
    /**
     * Get NativeApm
     * Native APM response
     * @return object
     */
    public function getNativeApm()
    {
        return $this->nativeApm;
    }

    /**
     * Set NativeApm
     * Native APM response
     * @param  object $value
     * @return $this
     */
    public function setNativeApm($value)
    {
        if (is_object($value))
            $this->nativeApm = $value;
        else
        {
            $obj = new NativeAPMResponse($this->client);
            $obj->fillWithData($value);
            $this->nativeApm = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoicesProcessNativePaymentResponse
     */
    public function fillWithData($data)
    {
        if(! empty($data['transaction']))
            $this->setTransaction($data['transaction']);

        if(! empty($data['native_apm']))
            $this->setNativeApm($data['native_apm']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "transaction" => $this->getTransaction(),
            "native_apm" => $this->getNativeApm(),
        );
    }

    
}
