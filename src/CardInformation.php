<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class CardInformation implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * First 6 digits of the card
     * @var string
     */
    protected $iin;

    /**
     * Scheme of the card, such as visa or mastercard
     * @var string
     */
    protected $scheme;

    /**
     * Type of the card (Credit, Debit, ...)
     * @var string
     */
    protected $type;

    /**
     * Name of the bank of the card
     * @var string
     */
    protected $bankName;

    /**
     * Level of the card (Electron, Classic, Gold, ...)
     * @var string
     */
    protected $brand;

    /**
     * Category of the card (consumer, commercial, ...)
     * @var string
     */
    protected $category;

    /**
     * Country that issued the card
     * @var string
     */
    protected $country;

    /**
     * CardInformation constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Iin
     * First 6 digits of the card
     * @return string
     */
    public function getIin()
    {
        return $this->iin;
    }

    /**
     * Set Iin
     * First 6 digits of the card
     * @param  string $value
     * @return $this
     */
    public function setIin($value)
    {
        $this->iin = $value;
        return $this;
    }
    
    /**
     * Get Scheme
     * Scheme of the card, such as visa or mastercard
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * Set Scheme
     * Scheme of the card, such as visa or mastercard
     * @param  string $value
     * @return $this
     */
    public function setScheme($value)
    {
        $this->scheme = $value;
        return $this;
    }
    
    /**
     * Get Type
     * Type of the card (Credit, Debit, ...)
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Type of the card (Credit, Debit, ...)
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get BankName
     * Name of the bank of the card
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set BankName
     * Name of the bank of the card
     * @param  string $value
     * @return $this
     */
    public function setBankName($value)
    {
        $this->bankName = $value;
        return $this;
    }
    
    /**
     * Get Brand
     * Level of the card (Electron, Classic, Gold, ...)
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set Brand
     * Level of the card (Electron, Classic, Gold, ...)
     * @param  string $value
     * @return $this
     */
    public function setBrand($value)
    {
        $this->brand = $value;
        return $this;
    }
    
    /**
     * Get Category
     * Category of the card (consumer, commercial, ...)
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set Category
     * Category of the card (consumer, commercial, ...)
     * @param  string $value
     * @return $this
     */
    public function setCategory($value)
    {
        $this->category = $value;
        return $this;
    }
    
    /**
     * Get Country
     * Country that issued the card
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set Country
     * Country that issued the card
     * @param  string $value
     * @return $this
     */
    public function setCountry($value)
    {
        $this->country = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CardInformation
     */
    public function fillWithData($data)
    {
        if(! empty($data['iin']))
            $this->setIin($data['iin']);

        if(! empty($data['scheme']))
            $this->setScheme($data['scheme']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['bank_name']))
            $this->setBankName($data['bank_name']);

        if(! empty($data['brand']))
            $this->setBrand($data['brand']);

        if(! empty($data['category']))
            $this->setCategory($data['category']);

        if(! empty($data['country']))
            $this->setCountry($data['country']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "iin" => $this->getIin(),
            "scheme" => $this->getScheme(),
            "type" => $this->getType(),
            "bank_name" => $this->getBankName(),
            "brand" => $this->getBrand(),
            "category" => $this->getCategory(),
            "country" => $this->getCountry(),
        );
    }

    
    /**
     * Fetch card information from the IIN.
     * @param string $iin
     * @param array $options
     * @return $this
     */
    public function fetch($iin, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/iins/" . urlencode($iin) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field card_information
        $body = $response->getBody();
        if (isset($body['card_information'])) {
            $body = $body['card_information'];
            $returnValues['fetch'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
}
