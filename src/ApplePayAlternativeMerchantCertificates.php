<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ApplePayAlternativeMerchantCertificates implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * number of alternative merchant certificate
     * @var decimal
     */
    protected $count;

    /**
     * Alternative merchant certificates available
     * @var list
     */
    protected $alternativeMerchantCertificates;

    /**
     * ApplePayAlternativeMerchantCertificates constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Count
     * number of alternative merchant certificate
     * @return string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set Count
     * number of alternative merchant certificate
     * @param  string $value
     * @return $this
     */
    public function setCount($value)
    {
        $this->count = $value;
        return $this;
    }
    
    /**
     * Get AlternativeMerchantCertificates
     * Alternative merchant certificates available
     * @return array
     */
    public function getAlternativeMerchantCertificates()
    {
        return $this->alternativeMerchantCertificates;
    }

    /**
     * Set AlternativeMerchantCertificates
     * Alternative merchant certificates available
     * @param  array $value
     * @return $this
     */
    public function setAlternativeMerchantCertificates($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->alternativeMerchantCertificates = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new AlternativeMerchantCertificate($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->alternativeMerchantCertificates = $a;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ApplePayAlternativeMerchantCertificates
     */
    public function fillWithData($data)
    {
        if(! empty($data['count']))
            $this->setCount($data['count']);

        if(! empty($data['alternative_merchant_certificates']))
            $this->setAlternativeMerchantCertificates($data['alternative_merchant_certificates']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "count" => $this->getCount(),
            "alternative_merchant_certificates" => $this->getAlternativeMerchantCertificates(),
        );
    }

    
    /**
     * Fetch the project's alternative certificates by ID
     * @param array $options
     * @return ApplePayAlternativeMerchantCertificates
     */
    public function fetch($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/projects/applepay/alternative-merchant-certificates";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field applepay_certificates
        $body = $response->getBody();
        $body = $body['applepay_certificates'];
        $applePayAlternativeMerchantCertificates = new ApplePayAlternativeMerchantCertificates($this->client);
        $returnValues['applePayAlternativeMerchantCertificates'] = $applePayAlternativeMerchantCertificates->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
}
