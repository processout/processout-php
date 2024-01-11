<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class CategoryErrorCodes implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Generic error codes.
     * @var slice
     */
    protected $generic;

    /**
     * Service related error codes.
     * @var slice
     */
    protected $service;

    /**
     * Gateway related error codes.
     * @var slice
     */
    protected $gateway;

    /**
     * Card related error codes.
     * @var slice
     */
    protected $card;

    /**
     * Check related error codes.
     * @var slice
     */
    protected $check;

    /**
     * Shipping related error codes.
     * @var slice
     */
    protected $shipping;

    /**
     * Customer related error codes.
     * @var slice
     */
    protected $customer;

    /**
     * Payment related error codes.
     * @var slice
     */
    protected $payment;

    /**
     * Refund related error codes.
     * @var slice
     */
    protected $refund;

    /**
     * Wallet related error codes.
     * @var slice
     */
    protected $wallet;

    /**
     * Request related error codes.
     * @var slice
     */
    protected $request;

    /**
     * CategoryErrorCodes constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Generic
     * Generic error codes.
     * @return array
     */
    public function getGeneric()
    {
        return $this->generic;
    }

    /**
     * Set Generic
     * Generic error codes.
     * @param  array $value
     * @return $this
     */
    public function setGeneric($value)
    {
        $this->generic = $value;
        return $this;
    }
    
    /**
     * Get Service
     * Service related error codes.
     * @return array
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set Service
     * Service related error codes.
     * @param  array $value
     * @return $this
     */
    public function setService($value)
    {
        $this->service = $value;
        return $this;
    }
    
    /**
     * Get Gateway
     * Gateway related error codes.
     * @return array
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set Gateway
     * Gateway related error codes.
     * @param  array $value
     * @return $this
     */
    public function setGateway($value)
    {
        $this->gateway = $value;
        return $this;
    }
    
    /**
     * Get Card
     * Card related error codes.
     * @return array
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set Card
     * Card related error codes.
     * @param  array $value
     * @return $this
     */
    public function setCard($value)
    {
        $this->card = $value;
        return $this;
    }
    
    /**
     * Get Check
     * Check related error codes.
     * @return array
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * Set Check
     * Check related error codes.
     * @param  array $value
     * @return $this
     */
    public function setCheck($value)
    {
        $this->check = $value;
        return $this;
    }
    
    /**
     * Get Shipping
     * Shipping related error codes.
     * @return array
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set Shipping
     * Shipping related error codes.
     * @param  array $value
     * @return $this
     */
    public function setShipping($value)
    {
        $this->shipping = $value;
        return $this;
    }
    
    /**
     * Get Customer
     * Customer related error codes.
     * @return array
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer related error codes.
     * @param  array $value
     * @return $this
     */
    public function setCustomer($value)
    {
        $this->customer = $value;
        return $this;
    }
    
    /**
     * Get Payment
     * Payment related error codes.
     * @return array
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set Payment
     * Payment related error codes.
     * @param  array $value
     * @return $this
     */
    public function setPayment($value)
    {
        $this->payment = $value;
        return $this;
    }
    
    /**
     * Get Refund
     * Refund related error codes.
     * @return array
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Set Refund
     * Refund related error codes.
     * @param  array $value
     * @return $this
     */
    public function setRefund($value)
    {
        $this->refund = $value;
        return $this;
    }
    
    /**
     * Get Wallet
     * Wallet related error codes.
     * @return array
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * Set Wallet
     * Wallet related error codes.
     * @param  array $value
     * @return $this
     */
    public function setWallet($value)
    {
        $this->wallet = $value;
        return $this;
    }
    
    /**
     * Get Request
     * Request related error codes.
     * @return array
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set Request
     * Request related error codes.
     * @param  array $value
     * @return $this
     */
    public function setRequest($value)
    {
        $this->request = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CategoryErrorCodes
     */
    public function fillWithData($data)
    {
        if(! empty($data['generic']))
            $this->setGeneric($data['generic']);

        if(! empty($data['service']))
            $this->setService($data['service']);

        if(! empty($data['gateway']))
            $this->setGateway($data['gateway']);

        if(! empty($data['card']))
            $this->setCard($data['card']);

        if(! empty($data['check']))
            $this->setCheck($data['check']);

        if(! empty($data['shipping']))
            $this->setShipping($data['shipping']);

        if(! empty($data['customer']))
            $this->setCustomer($data['customer']);

        if(! empty($data['payment']))
            $this->setPayment($data['payment']);

        if(! empty($data['refund']))
            $this->setRefund($data['refund']);

        if(! empty($data['wallet']))
            $this->setWallet($data['wallet']);

        if(! empty($data['request']))
            $this->setRequest($data['request']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "generic" => $this->getGeneric(),
            "service" => $this->getService(),
            "gateway" => $this->getGateway(),
            "card" => $this->getCard(),
            "check" => $this->getCheck(),
            "shipping" => $this->getShipping(),
            "customer" => $this->getCustomer(),
            "payment" => $this->getPayment(),
            "refund" => $this->getRefund(),
            "wallet" => $this->getWallet(),
            "request" => $this->getRequest(),
        );
    }

    
}
