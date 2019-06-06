<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceShipping
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Amount of the shipping
     * @var decimal
     */
    protected $amount;

    /**
     * Delivery method
     * @var string
     */
    protected $method;

    /**
     * Delivery provider
     * @var string
     */
    protected $provider;

    /**
     * Shipping delay
     * @var string
     */
    protected $delay;

    /**
     * Address where the shipment will be delivered
     * @var string
     */
    protected $address1;

    /**
     * Secondary address where the shipment will be delivered
     * @var string
     */
    protected $address2;

    /**
     * City where the shipment will be delivered
     * @var string
     */
    protected $city;

    /**
     * State where the shipment will be delivered
     * @var string
     */
    protected $state;

    /**
     * Country code where the shipment will be delivered
     * @var string
     */
    protected $countryCode;

    /**
     * ZIP where the shipment will be delivered
     * @var string
     */
    protected $zip;

    /**
     * Phone number for the shipment
     * @var string
     */
    protected $phoneNumber;

    /**
     * Date at which the shipment is expected to be sent
     * @var string
     */
    protected $expectsShippingAt;

    /**
     * InvoiceShipping constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Amount
     * Amount of the shipping
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount of the shipping
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get Method
     * Delivery method
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set Method
     * Delivery method
     * @param  string $value
     * @return $this
     */
    public function setMethod($value)
    {
        $this->method = $value;
        return $this;
    }
    
    /**
     * Get Provider
     * Delivery provider
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set Provider
     * Delivery provider
     * @param  string $value
     * @return $this
     */
    public function setProvider($value)
    {
        $this->provider = $value;
        return $this;
    }
    
    /**
     * Get Delay
     * Shipping delay
     * @return string
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Set Delay
     * Shipping delay
     * @param  string $value
     * @return $this
     */
    public function setDelay($value)
    {
        $this->delay = $value;
        return $this;
    }
    
    /**
     * Get Address1
     * Address where the shipment will be delivered
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set Address1
     * Address where the shipment will be delivered
     * @param  string $value
     * @return $this
     */
    public function setAddress1($value)
    {
        $this->address1 = $value;
        return $this;
    }
    
    /**
     * Get Address2
     * Secondary address where the shipment will be delivered
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set Address2
     * Secondary address where the shipment will be delivered
     * @param  string $value
     * @return $this
     */
    public function setAddress2($value)
    {
        $this->address2 = $value;
        return $this;
    }
    
    /**
     * Get City
     * City where the shipment will be delivered
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set City
     * City where the shipment will be delivered
     * @param  string $value
     * @return $this
     */
    public function setCity($value)
    {
        $this->city = $value;
        return $this;
    }
    
    /**
     * Get State
     * State where the shipment will be delivered
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set State
     * State where the shipment will be delivered
     * @param  string $value
     * @return $this
     */
    public function setState($value)
    {
        $this->state = $value;
        return $this;
    }
    
    /**
     * Get CountryCode
     * Country code where the shipment will be delivered
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set CountryCode
     * Country code where the shipment will be delivered
     * @param  string $value
     * @return $this
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
        return $this;
    }
    
    /**
     * Get Zip
     * ZIP where the shipment will be delivered
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set Zip
     * ZIP where the shipment will be delivered
     * @param  string $value
     * @return $this
     */
    public function setZip($value)
    {
        $this->zip = $value;
        return $this;
    }
    
    /**
     * Get PhoneNumber
     * Phone number for the shipment
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set PhoneNumber
     * Phone number for the shipment
     * @param  string $value
     * @return $this
     */
    public function setPhoneNumber($value)
    {
        $this->phoneNumber = $value;
        return $this;
    }
    
    /**
     * Get ExpectsShippingAt
     * Date at which the shipment is expected to be sent
     * @return string
     */
    public function getExpectsShippingAt()
    {
        return $this->expectsShippingAt;
    }

    /**
     * Set ExpectsShippingAt
     * Date at which the shipment is expected to be sent
     * @param  string $value
     * @return $this
     */
    public function setExpectsShippingAt($value)
    {
        $this->expectsShippingAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoiceShipping
     */
    public function fillWithData($data)
    {
        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['method']))
            $this->setMethod($data['method']);

        if(! empty($data['provider']))
            $this->setProvider($data['provider']);

        if(! empty($data['delay']))
            $this->setDelay($data['delay']);

        if(! empty($data['address1']))
            $this->setAddress1($data['address1']);

        if(! empty($data['address2']))
            $this->setAddress2($data['address2']);

        if(! empty($data['city']))
            $this->setCity($data['city']);

        if(! empty($data['state']))
            $this->setState($data['state']);

        if(! empty($data['country_code']))
            $this->setCountryCode($data['country_code']);

        if(! empty($data['zip']))
            $this->setZip($data['zip']);

        if(! empty($data['phone_number']))
            $this->setPhoneNumber($data['phone_number']);

        if(! empty($data['expects_shipping_at']))
            $this->setExpectsShippingAt($data['expects_shipping_at']);

        return $this;
    }

    
}
