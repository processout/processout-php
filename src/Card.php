<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Card
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the card
     * @var string
     */
    protected $id;

    /**
     * Project to which the card belongs
     * @var object
     */
    protected $project;

    /**
     * Brand of the card (Visa, Mastercard, ...)
     * @var string
     */
    protected $brand;

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
    protected $level;

    /**
     * First 6 digits of the card
     * @var string
     */
    protected $iin;

    /**
     * Last 4 digits of the card
     * @var string
     */
    protected $last4Digits;

    /**
     * Expiry month
     * @var integer
     */
    protected $expMonth;

    /**
     * Expiry year, in a 4 digits format
     * @var integer
     */
    protected $expYear;

    /**
     * Metadata related to the card, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Define whether or not the card is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the card was created
     * @var string
     */
    protected $createdAt;

    /**
     * Card constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->setMetadata(array('_library' => 'php'));
        

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Id
     * ID of the card
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the card
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Project
     * Project to which the card belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the card belongs
     * @param  object $value
     * @return $this
     */
    public function setProject($value)
    {
        if (is_object($value))
            $this->project = $value;
        else
        {
            $obj = new Project($this->client);
            $obj->fillWithData($value);
            $this->project = $obj;
        }
        return $this;
    }
    
    /**
     * Get Brand
     * Brand of the card (Visa, Mastercard, ...)
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set Brand
     * Brand of the card (Visa, Mastercard, ...)
     * @param  string $value
     * @return $this
     */
    public function setBrand($value)
    {
        $this->brand = $value;
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
     * Get Level
     * Level of the card (Electron, Classic, Gold, ...)
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set Level
     * Level of the card (Electron, Classic, Gold, ...)
     * @param  string $value
     * @return $this
     */
    public function setLevel($value)
    {
        $this->level = $value;
        return $this;
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
     * Get Last4Digits
     * Last 4 digits of the card
     * @return string
     */
    public function getLast4Digits()
    {
        return $this->last4Digits;
    }

    /**
     * Set Last4Digits
     * Last 4 digits of the card
     * @param  string $value
     * @return $this
     */
    public function setLast4Digits($value)
    {
        $this->last4Digits = $value;
        return $this;
    }
    
    /**
     * Get ExpMonth
     * Expiry month
     * @return int
     */
    public function getExpMonth()
    {
        return $this->expMonth;
    }

    /**
     * Set ExpMonth
     * Expiry month
     * @param  int $value
     * @return $this
     */
    public function setExpMonth($value)
    {
        $this->expMonth = $value;
        return $this;
    }
    
    /**
     * Get ExpYear
     * Expiry year, in a 4 digits format
     * @return int
     */
    public function getExpYear()
    {
        return $this->expYear;
    }

    /**
     * Set ExpYear
     * Expiry year, in a 4 digits format
     * @param  int $value
     * @return $this
     */
    public function setExpYear($value)
    {
        $this->expYear = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the card, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the card, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get Sandbox
     * Define whether or not the card is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the card is in sandbox environment
     * @param  bool $value
     * @return $this
     */
    public function setSandbox($value)
    {
        $this->sandbox = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the card was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the card was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Card
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['brand']))
            $this->setBrand($data['brand']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['bank_name']))
            $this->setBankName($data['bank_name']);

        if(! empty($data['level']))
            $this->setLevel($data['level']);

        if(! empty($data['iin']))
            $this->setIin($data['iin']);

        if(! empty($data['last_4_digits']))
            $this->setLast4Digits($data['last_4_digits']);

        if(! empty($data['exp_month']))
            $this->setExpMonth($data['exp_month']);

        if(! empty($data['exp_year']))
            $this->setExpYear($data['exp_year']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
}
