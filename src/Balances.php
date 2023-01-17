<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Balances implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Vouchers linked to the customer
     * @var list
     */
    protected $vouchers;

    /**
     * Balances constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Vouchers
     * Vouchers linked to the customer
     * @return array
     */
    public function getVouchers()
    {
        return $this->vouchers;
    }

    /**
     * Set Vouchers
     * Vouchers linked to the customer
     * @param  array $value
     * @return $this
     */
    public function setVouchers($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->vouchers = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new Balance($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->vouchers = $a;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Balances
     */
    public function fillWithData($data)
    {
        if(! empty($data['vouchers']))
            $this->setVouchers($data['vouchers']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize(): mixed {
        return array(
            "vouchers" => $this->getVouchers(),
        );
    }

    
    /**
     * Fetch a customer token's balance
     * @param string $tokenId
     * @param array $options
     * @return Balances
     */
    public function find($tokenId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/balances/tokens/" . urlencode($tokenId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field balances
        $body = $response->getBody();
        $body = $body['balances'];
        $balances = new Balances($this->client);
        $returnValues['balances'] = $balances->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
}
