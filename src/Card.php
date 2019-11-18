<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Card implements \JsonSerializable
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
     * ID of the project to which the card belongs
     * @var string
     */
    protected $projectId;

    /**
     * Token linked to the card, which can be used to process payments
     * @var object
     */
    protected $token;

    /**
     * Scheme of the card, such as visa or mastercard
     * @var string
     */
    protected $scheme;

    /**
     * Co-scheme of the card, such as carte bancaire
     * @var string
     */
    protected $coScheme;

    /**
     * Customer preferred scheme, such as carte bancaire vs visa
     * @var string
     */
    protected $preferredScheme;

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
     * Status of the CVC check initially made on the card when the CVC was provided
     * @var string
     */
    protected $cvcCheck;

    /**
     * Status of the AVS check initially made on the card when the AVS was provided
     * @var string
     */
    protected $avsCheck;

    /**
     * Name of the card holder
     * @var string
     */
    protected $name;

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
     * ZIP code of the card holder
     * @var string
     */
    protected $zip;

    /**
     * Country code of the card holder (ISO-3166, 2 characters format)
     * @var string
     */
    protected $countryCode;

    /**
     * IP address of the card (IPv4 or IPv6)
     * @var string
     */
    protected $ipAddress;

    /**
     * Fingerprint of the card (stays the same if the same card gets tokenized multiple times). Scoped per ProcessOut project
     * @var string
     */
    protected $fingerprint;

    /**
     * Metadata related to the card, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Contains true if the card will expire soon, false otherwise
     * @var boolean
     */
    protected $expiresSoon;

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
     * Get ProjectId
     * ID of the project to which the card belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the card belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get Token
     * Token linked to the card, which can be used to process payments
     * @return object
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set Token
     * Token linked to the card, which can be used to process payments
     * @param  object $value
     * @return $this
     */
    public function setToken($value)
    {
        if (is_object($value))
            $this->token = $value;
        else
        {
            $obj = new Token($this->client);
            $obj->fillWithData($value);
            $this->token = $obj;
        }
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
     * Get CoScheme
     * Co-scheme of the card, such as carte bancaire
     * @return string
     */
    public function getCoScheme()
    {
        return $this->coScheme;
    }

    /**
     * Set CoScheme
     * Co-scheme of the card, such as carte bancaire
     * @param  string $value
     * @return $this
     */
    public function setCoScheme($value)
    {
        $this->coScheme = $value;
        return $this;
    }
    
    /**
     * Get PreferredScheme
     * Customer preferred scheme, such as carte bancaire vs visa
     * @return string
     */
    public function getPreferredScheme()
    {
        return $this->preferredScheme;
    }

    /**
     * Set PreferredScheme
     * Customer preferred scheme, such as carte bancaire vs visa
     * @param  string $value
     * @return $this
     */
    public function setPreferredScheme($value)
    {
        $this->preferredScheme = $value;
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
     * Get CvcCheck
     * Status of the CVC check initially made on the card when the CVC was provided
     * @return string
     */
    public function getCvcCheck()
    {
        return $this->cvcCheck;
    }

    /**
     * Set CvcCheck
     * Status of the CVC check initially made on the card when the CVC was provided
     * @param  string $value
     * @return $this
     */
    public function setCvcCheck($value)
    {
        $this->cvcCheck = $value;
        return $this;
    }
    
    /**
     * Get AvsCheck
     * Status of the AVS check initially made on the card when the AVS was provided
     * @return string
     */
    public function getAvsCheck()
    {
        return $this->avsCheck;
    }

    /**
     * Set AvsCheck
     * Status of the AVS check initially made on the card when the AVS was provided
     * @param  string $value
     * @return $this
     */
    public function setAvsCheck($value)
    {
        $this->avsCheck = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the card holder
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the card holder
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
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
     * Get IpAddress
     * IP address of the card (IPv4 or IPv6)
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set IpAddress
     * IP address of the card (IPv4 or IPv6)
     * @param  string $value
     * @return $this
     */
    public function setIpAddress($value)
    {
        $this->ipAddress = $value;
        return $this;
    }
    
    /**
     * Get Fingerprint
     * Fingerprint of the card (stays the same if the same card gets tokenized multiple times). Scoped per ProcessOut project
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * Set Fingerprint
     * Fingerprint of the card (stays the same if the same card gets tokenized multiple times). Scoped per ProcessOut project
     * @param  string $value
     * @return $this
     */
    public function setFingerprint($value)
    {
        $this->fingerprint = $value;
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
     * Get ExpiresSoon
     * Contains true if the card will expire soon, false otherwise
     * @return bool
     */
    public function getExpiresSoon()
    {
        return $this->expiresSoon;
    }

    /**
     * Set ExpiresSoon
     * Contains true if the card will expire soon, false otherwise
     * @param  bool $value
     * @return $this
     */
    public function setExpiresSoon($value)
    {
        $this->expiresSoon = $value;
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

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['token']))
            $this->setToken($data['token']);

        if(! empty($data['scheme']))
            $this->setScheme($data['scheme']);

        if(! empty($data['co_scheme']))
            $this->setCoScheme($data['co_scheme']);

        if(! empty($data['preferred_scheme']))
            $this->setPreferredScheme($data['preferred_scheme']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['bank_name']))
            $this->setBankName($data['bank_name']);

        if(! empty($data['brand']))
            $this->setBrand($data['brand']);

        if(! empty($data['iin']))
            $this->setIin($data['iin']);

        if(! empty($data['last_4_digits']))
            $this->setLast4Digits($data['last_4_digits']);

        if(! empty($data['exp_month']))
            $this->setExpMonth($data['exp_month']);

        if(! empty($data['exp_year']))
            $this->setExpYear($data['exp_year']);

        if(! empty($data['cvc_check']))
            $this->setCvcCheck($data['cvc_check']);

        if(! empty($data['avs_check']))
            $this->setAvsCheck($data['avs_check']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['address1']))
            $this->setAddress1($data['address1']);

        if(! empty($data['address2']))
            $this->setAddress2($data['address2']);

        if(! empty($data['city']))
            $this->setCity($data['city']);

        if(! empty($data['state']))
            $this->setState($data['state']);

        if(! empty($data['zip']))
            $this->setZip($data['zip']);

        if(! empty($data['country_code']))
            $this->setCountryCode($data['country_code']);

        if(! empty($data['ip_address']))
            $this->setIpAddress($data['ip_address']);

        if(! empty($data['fingerprint']))
            $this->setFingerprint($data['fingerprint']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['expires_soon']))
            $this->setExpiresSoon($data['expires_soon']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "id" => $this->getId(),
            "project" => $this->getProject(),
            "project_id" => $this->getProjectId(),
            "token" => $this->getToken(),
            "scheme" => $this->getScheme(),
            "co_scheme" => $this->getCoScheme(),
            "preferred_scheme" => $this->getPreferredScheme(),
            "type" => $this->getType(),
            "bank_name" => $this->getBankName(),
            "brand" => $this->getBrand(),
            "iin" => $this->getIin(),
            "last_4_digits" => $this->getLast4Digits(),
            "exp_month" => $this->getExpMonth(),
            "exp_year" => $this->getExpYear(),
            "cvc_check" => $this->getCvcCheck(),
            "avs_check" => $this->getAvsCheck(),
            "name" => $this->getName(),
            "address1" => $this->getAddress1(),
            "address2" => $this->getAddress2(),
            "city" => $this->getCity(),
            "state" => $this->getState(),
            "zip" => $this->getZip(),
            "country_code" => $this->getCountryCode(),
            "ip_address" => $this->getIpAddress(),
            "fingerprint" => $this->getFingerprint(),
            "metadata" => $this->getMetadata(),
            "expires_soon" => $this->getExpiresSoon(),
            "sandbox" => $this->getSandbox(),
            "created_at" => $this->getCreatedAt(),
            );
    }

    
    /**
     * Get all the cards.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/cards";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field cards
        $a    = array();
        $body = $response->getBody();
        foreach($body['cards'] as $v)
        {
            $tmp = new Card($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Cards'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a card by its ID.
     * @param string $cardId
     * @param array $options
     * @return $this
     */
    public function find($cardId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/cards/" . urlencode($cardId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field card
        $body = $response->getBody();
        $body = $body['card'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
