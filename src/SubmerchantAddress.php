<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class SubmerchantAddress implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Address line 1
     * @var string
     */
    protected $line1;

    /**
     * Address line 2
     * @var string
     */
    protected $line2;

    /**
     * City
     * @var string
     */
    protected $city;

    /**
     * State
     * @var string
     */
    protected $state;

    /**
     * Country code
     * @var string
     */
    protected $countryCode;

    /**
     * ZIP code
     * @var string
     */
    protected $zip;

    /**
     * County (US specific)
     * @var string
     */
    protected $county;

    /**
     * SubmerchantAddress constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Line1
     * Address line 1
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * Set Line1
     * Address line 1
     * @param  string $value
     * @return $this
     */
    public function setLine1($value)
    {
        $this->line1 = $value;
        return $this;
    }
    
    /**
     * Get Line2
     * Address line 2
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * Set Line2
     * Address line 2
     * @param  string $value
     * @return $this
     */
    public function setLine2($value)
    {
        $this->line2 = $value;
        return $this;
    }
    
    /**
     * Get City
     * City
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set City
     * City
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
     * State
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set State
     * State
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
     * Country code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set CountryCode
     * Country code
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
     * ZIP code
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set Zip
     * ZIP code
     * @param  string $value
     * @return $this
     */
    public function setZip($value)
    {
        $this->zip = $value;
        return $this;
    }
    
    /**
     * Get County
     * County (US specific)
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set County
     * County (US specific)
     * @param  string $value
     * @return $this
     */
    public function setCounty($value)
    {
        $this->county = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return SubmerchantAddress
     */
    public function fillWithData($data)
    {
        if(! empty($data['line1']))
            $this->setLine1($data['line1']);

        if(! empty($data['line2']))
            $this->setLine2($data['line2']);

        if(! empty($data['city']))
            $this->setCity($data['city']);

        if(! empty($data['state']))
            $this->setState($data['state']);

        if(! empty($data['country_code']))
            $this->setCountryCode($data['country_code']);

        if(! empty($data['zip']))
            $this->setZip($data['zip']);

        if(! empty($data['county']))
            $this->setCounty($data['county']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "line1" => $this->getLine1(),
            "line2" => $this->getLine2(),
            "city" => $this->getCity(),
            "state" => $this->getState(),
            "country_code" => $this->getCountryCode(),
            "zip" => $this->getZip(),
            "county" => $this->getCounty(),
        );
    }

    
}
