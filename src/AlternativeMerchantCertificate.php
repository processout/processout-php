<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class AlternativeMerchantCertificate implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * id of the alternative merchant certificate
     * @var string
     */
    protected $id;

    /**
     * AlternativeMerchantCertificate constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Id
     * id of the alternative merchant certificate
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * id of the alternative merchant certificate
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return AlternativeMerchantCertificate
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize(): mixed {
        return array(
            "id" => $this->getId(),
        );
    }

    
    /**
     * Save new alternative apple pay certificates
     * @param array $options
     * @return AlternativeMerchantCertificate
     */
    public function save($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/projects/applepay/alternative-merchant-certificates";

        $data = array(

        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field alternative_merchant_certificate
        $body = $response->getBody();
        $body = $body['alternative_merchant_certificate'];
        $alternativeMerchantCertificate = new AlternativeMerchantCertificate($this->client);
        $returnValues['alternativeMerchantCertificate'] = $alternativeMerchantCertificate->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete a given alternative merchant certificate
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/projects/applepay/alternative-merchant-certificates/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
