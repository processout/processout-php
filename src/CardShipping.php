<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class CardShipping implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Address line of the card holder
     * @var string
     */
    protected $address1;

    /**
     * Secondary address line of the card holder
     * @var string
     */
    protected $address2;

    /**
     * City of the card holder
     * @var string
     */
    protected $city;

    /**
     * State of the card holder
     * @var string
     */
    protected $state;

    /**
     * Country code of the card holder (ISO-3166, 2 characters format)
     * @var string
     */
    protected $countryCode;

    /**
     * ZIP code of the card holder
     * @var string
     */
    protected $zip;

    /**
     * Shipping phone number
     * @var object
     */
    protected $phone;

    /**
     * CardShipping constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Address1
     * Address line of the card holder
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set Address1
     * Address line of the card holder
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
     * Secondary address line of the card holder
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set Address2
     * Secondary address line of the card holder
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
     * City of the card holder
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set City
     * City of the card holder
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
     * State of the card holder
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set State
     * State of the card holder
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
     * Country code of the card holder (ISO-3166, 2 characters format)
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set CountryCode
     * Country code of the card holder (ISO-3166, 2 characters format)
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
     * ZIP code of the card holder
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set Zip
     * ZIP code of the card holder
     * @param  string $value
     * @return $this
     */
    public function setZip($value)
    {
        $this->zip = $value;
        return $this;
    }
    
    /**
     * Get Phone
     * Shipping phone number
     * @return object
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set Phone
     * Shipping phone number
     * @param  object $value
     * @return $this
     */
    public function setPhone($value)
    {
        if (is_object($value))
            $this->phone = $value;
        else
        {
            $obj = new Phone($this->client);
            $obj->fillWithData($value);
            $this->phone = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CardShipping
     */
    public function fillWithData($data)
    {
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

        if(! empty($data['phone']))
            $this->setPhone($data['phone']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "address1" => $this->getAddress1(),
            "address2" => $this->getAddress2(),
            "city" => $this->getCity(),
            "state" => $this->getState(),
            "country_code" => $this->getCountryCode(),
            "zip" => $this->getZip(),
            "phone" => $this->getPhone(),
        );
    }

    
}
