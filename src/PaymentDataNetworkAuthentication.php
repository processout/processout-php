<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class PaymentDataNetworkAuthentication
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Authentication CAVV
     * @var string
     */
    protected $cavv;

    /**
     * PaymentDataNetworkAuthentication constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Cavv
     * Authentication CAVV
     * @return string
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * Set Cavv
     * Authentication CAVV
     * @param  string $value
     * @return $this
     */
    public function setCavv($value)
    {
        $this->cavv = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return PaymentDataNetworkAuthentication
     */
    public function fillWithData($data)
    {
        if(! empty($data['cavv']))
            $this->setCavv($data['cavv']);

        return $this;
    }

    
}
