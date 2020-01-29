<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Customer implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the customer
     * @var string
     */
    protected $id;

    /**
     * Project to which the customer belongs
     * @var object
     */
    protected $project;

    /**
     * ID of the project to which the customer belongs
     * @var string
     */
    protected $projectId;

    /**
     * Default token of the customer
     * @var object
     */
    protected $defaultToken;

    /**
     * ID of the default token of the customer
     * @var string
     */
    protected $defaultTokenId;

    /**
     * List of the customer tokens
     * @var list
     */
    protected $tokens;

    /**
     * List of the customer subscriptions
     * @var list
     */
    protected $subscriptions;

    /**
     * List of the customer transactions
     * @var list
     */
    protected $transactions;

    /**
     * Customer balance. Can be positive or negative
     * @var decimal
     */
    protected $balance;

    /**
     * Currency of the customer balance. Once the currency is set it cannot be modified
     * @var string
     */
    protected $currency;

    /**
     * Email of the customer
     * @var string
     */
    protected $email;

    /**
     * First name of the customer
     * @var string
     */
    protected $firstName;

    /**
     * Last name of the customer
     * @var string
     */
    protected $lastName;

    /**
     * Address of the customer
     * @var string
     */
    protected $address1;

    /**
     * Secondary address of the customer
     * @var string
     */
    protected $address2;

    /**
     * City of the customer
     * @var string
     */
    protected $city;

    /**
     * State of the customer
     * @var string
     */
    protected $state;

    /**
     * ZIP code of the customer
     * @var string
     */
    protected $zip;

    /**
     * Country code of the customer (ISO-3166, 2 characters format)
     * @var string
     */
    protected $countryCode;

    /**
     * IP address of the customer (IPv4 or IPv6)
     * @var string
     */
    protected $ipAddress;

    /**
     * Phone number of the customer
     * @var string
     */
    protected $phoneNumber;

    /**
     * Legal document number
     * @var string
     */
    protected $legalDocument;

    /**
     * Sex of the customer
     * @var string
     */
    protected $sex;

    /**
     * Define whether or not the customer is a business
     * @var boolean
     */
    protected $isBusiness;

    /**
     * Metadata related to the customer, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Define whether or not the customer is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the customer was created
     * @var string
     */
    protected $createdAt;

    /**
     * Customer constructor
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
     * ID of the customer
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the customer
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
     * Project to which the customer belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the customer belongs
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
     * ID of the project to which the customer belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the customer belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get DefaultToken
     * Default token of the customer
     * @return object
     */
    public function getDefaultToken()
    {
        return $this->defaultToken;
    }

    /**
     * Set DefaultToken
     * Default token of the customer
     * @param  object $value
     * @return $this
     */
    public function setDefaultToken($value)
    {
        if (is_object($value))
            $this->defaultToken = $value;
        else
        {
            $obj = new Token($this->client);
            $obj->fillWithData($value);
            $this->defaultToken = $obj;
        }
        return $this;
    }
    
    /**
     * Get DefaultTokenId
     * ID of the default token of the customer
     * @return string
     */
    public function getDefaultTokenId()
    {
        return $this->defaultTokenId;
    }

    /**
     * Set DefaultTokenId
     * ID of the default token of the customer
     * @param  string $value
     * @return $this
     */
    public function setDefaultTokenId($value)
    {
        $this->defaultTokenId = $value;
        return $this;
    }
    
    /**
     * Get Tokens
     * List of the customer tokens
     * @return array
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * Set Tokens
     * List of the customer tokens
     * @param  array $value
     * @return $this
     */
    public function setTokens($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->tokens = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new Token($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->tokens = $a;
        }
        return $this;
    }
    
    /**
     * Get Subscriptions
     * List of the customer subscriptions
     * @return array
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * Set Subscriptions
     * List of the customer subscriptions
     * @param  array $value
     * @return $this
     */
    public function setSubscriptions($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->subscriptions = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new Subscription($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->subscriptions = $a;
        }
        return $this;
    }
    
    /**
     * Get Transactions
     * List of the customer transactions
     * @return array
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Set Transactions
     * List of the customer transactions
     * @param  array $value
     * @return $this
     */
    public function setTransactions($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->transactions = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new Transaction($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->transactions = $a;
        }
        return $this;
    }
    
    /**
     * Get Balance
     * Customer balance. Can be positive or negative
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set Balance
     * Customer balance. Can be positive or negative
     * @param  string $value
     * @return $this
     */
    public function setBalance($value)
    {
        $this->balance = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency of the customer balance. Once the currency is set it cannot be modified
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the customer balance. Once the currency is set it cannot be modified
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get Email
     * Email of the customer
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set Email
     * Email of the customer
     * @param  string $value
     * @return $this
     */
    public function setEmail($value)
    {
        $this->email = $value;
        return $this;
    }
    
    /**
     * Get FirstName
     * First name of the customer
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set FirstName
     * First name of the customer
     * @param  string $value
     * @return $this
     */
    public function setFirstName($value)
    {
        $this->firstName = $value;
        return $this;
    }
    
    /**
     * Get LastName
     * Last name of the customer
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set LastName
     * Last name of the customer
     * @param  string $value
     * @return $this
     */
    public function setLastName($value)
    {
        $this->lastName = $value;
        return $this;
    }
    
    /**
     * Get Address1
     * Address of the customer
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set Address1
     * Address of the customer
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
     * Secondary address of the customer
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set Address2
     * Secondary address of the customer
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
     * City of the customer
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set City
     * City of the customer
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
     * State of the customer
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set State
     * State of the customer
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
     * ZIP code of the customer
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set Zip
     * ZIP code of the customer
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
     * Country code of the customer (ISO-3166, 2 characters format)
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set CountryCode
     * Country code of the customer (ISO-3166, 2 characters format)
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
     * IP address of the customer (IPv4 or IPv6)
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set IpAddress
     * IP address of the customer (IPv4 or IPv6)
     * @param  string $value
     * @return $this
     */
    public function setIpAddress($value)
    {
        $this->ipAddress = $value;
        return $this;
    }
    
    /**
     * Get PhoneNumber
     * Phone number of the customer
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set PhoneNumber
     * Phone number of the customer
     * @param  string $value
     * @return $this
     */
    public function setPhoneNumber($value)
    {
        $this->phoneNumber = $value;
        return $this;
    }
    
    /**
     * Get LegalDocument
     * Legal document number
     * @return string
     */
    public function getLegalDocument()
    {
        return $this->legalDocument;
    }

    /**
     * Set LegalDocument
     * Legal document number
     * @param  string $value
     * @return $this
     */
    public function setLegalDocument($value)
    {
        $this->legalDocument = $value;
        return $this;
    }
    
    /**
     * Get Sex
     * Sex of the customer
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set Sex
     * Sex of the customer
     * @param  string $value
     * @return $this
     */
    public function setSex($value)
    {
        $this->sex = $value;
        return $this;
    }
    
    /**
     * Get IsBusiness
     * Define whether or not the customer is a business
     * @return bool
     */
    public function getIsBusiness()
    {
        return $this->isBusiness;
    }

    /**
     * Set IsBusiness
     * Define whether or not the customer is a business
     * @param  bool $value
     * @return $this
     */
    public function setIsBusiness($value)
    {
        $this->isBusiness = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the customer, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the customer, in the form of a dictionary (key-value pair)
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
     * Define whether or not the customer is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the customer is in sandbox environment
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
     * Date at which the customer was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the customer was created
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
     * @return Customer
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['default_token']))
            $this->setDefaultToken($data['default_token']);

        if(! empty($data['default_token_id']))
            $this->setDefaultTokenId($data['default_token_id']);

        if(! empty($data['tokens']))
            $this->setTokens($data['tokens']);

        if(! empty($data['subscriptions']))
            $this->setSubscriptions($data['subscriptions']);

        if(! empty($data['transactions']))
            $this->setTransactions($data['transactions']);

        if(! empty($data['balance']))
            $this->setBalance($data['balance']);

        if(! empty($data['currency']))
            $this->setCurrency($data['currency']);

        if(! empty($data['email']))
            $this->setEmail($data['email']);

        if(! empty($data['first_name']))
            $this->setFirstName($data['first_name']);

        if(! empty($data['last_name']))
            $this->setLastName($data['last_name']);

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

        if(! empty($data['phone_number']))
            $this->setPhoneNumber($data['phone_number']);

        if(! empty($data['legal_document']))
            $this->setLegalDocument($data['legal_document']);

        if(! empty($data['sex']))
            $this->setSex($data['sex']);

        if(! empty($data['is_business']))
            $this->setIsBusiness($data['is_business']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

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
            "default_token" => $this->getDefaultToken(),
            "default_token_id" => $this->getDefaultTokenId(),
            "tokens" => $this->getTokens(),
            "subscriptions" => $this->getSubscriptions(),
            "transactions" => $this->getTransactions(),
            "balance" => $this->getBalance(),
            "currency" => $this->getCurrency(),
            "email" => $this->getEmail(),
            "first_name" => $this->getFirstName(),
            "last_name" => $this->getLastName(),
            "address1" => $this->getAddress1(),
            "address2" => $this->getAddress2(),
            "city" => $this->getCity(),
            "state" => $this->getState(),
            "zip" => $this->getZip(),
            "country_code" => $this->getCountryCode(),
            "ip_address" => $this->getIpAddress(),
            "phone_number" => $this->getPhoneNumber(),
            "legal_document" => $this->getLegalDocument(),
            "sex" => $this->getSex(),
            "is_business" => $this->getIsBusiness(),
            "metadata" => $this->getMetadata(),
            "sandbox" => $this->getSandbox(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
    /**
     * Get the subscriptions belonging to the customer.
     * @param array $options
     * @return array
     */
    public function fetchSubscriptions($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getId()) . "/subscriptions";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscriptions
        $a    = array();
        $body = $response->getBody();
        foreach($body['subscriptions'] as $v)
        {
            $tmp = new Subscription($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Subscriptions'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get the customer's tokens.
     * @param array $options
     * @return array
     */
    public function fetchTokens($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getId()) . "/tokens";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field tokens
        $a    = array();
        $body = $response->getBody();
        foreach($body['tokens'] as $v)
        {
            $tmp = new Token($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Tokens'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a customer's token by its ID.
     * @param string $tokenId
     * @param array $options
     * @return Token
     */
    public function findToken($tokenId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getId()) . "/tokens/" . urlencode($tokenId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field token
        $body = $response->getBody();
        $body = $body['token'];
        $token = new Token($this->client);
        $returnValues['token'] = $token->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete a customer's token by its ID.
     * @param string $tokenId
     * @param array $options
     * @return bool
     */
    public function deleteToken($tokenId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getId()) . "/tokens/" . urlencode($tokenId) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get the transactions belonging to the customer.
     * @param array $options
     * @return array
     */
    public function fetchTransactions($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getId()) . "/transactions";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field transactions
        $a    = array();
        $body = $response->getBody();
        foreach($body['transactions'] as $v)
        {
            $tmp = new Transaction($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Transactions'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get all the customers.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field customers
        $a    = array();
        $body = $response->getBody();
        foreach($body['customers'] as $v)
        {
            $tmp = new Customer($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Customers'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new customer.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers";

        $data = array(
            "balance" => $this->getBalance(), 
            "currency" => $this->getCurrency(), 
            "email" => $this->getEmail(), 
            "first_name" => $this->getFirstName(), 
            "last_name" => $this->getLastName(), 
            "address1" => $this->getAddress1(), 
            "address2" => $this->getAddress2(), 
            "city" => $this->getCity(), 
            "state" => $this->getState(), 
            "zip" => $this->getZip(), 
            "country_code" => $this->getCountryCode(), 
            "ip_address" => $this->getIpAddress(), 
            "phone_number" => $this->getPhoneNumber(), 
            "legal_document" => $this->getLegalDocument(), 
            "is_business" => $this->getIsBusiness(), 
            "sex" => $this->getSex(), 
            "metadata" => $this->getMetadata(), 
            "id" => $this->getId()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field customer
        $body = $response->getBody();
        $body = $body['customer'];
        $returnValues['create'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a customer by its ID.
     * @param string $customerId
     * @param array $options
     * @return $this
     */
    public function find($customerId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($customerId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field customer
        $body = $response->getBody();
        $body = $body['customer'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Save the updated customer attributes.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getId()) . "";

        $data = array(
            "balance" => $this->getBalance(), 
            "default_token_id" => $this->getDefaultTokenId(), 
            "email" => $this->getEmail(), 
            "first_name" => $this->getFirstName(), 
            "last_name" => $this->getLastName(), 
            "address1" => $this->getAddress1(), 
            "address2" => $this->getAddress2(), 
            "city" => $this->getCity(), 
            "state" => $this->getState(), 
            "zip" => $this->getZip(), 
            "country_code" => $this->getCountryCode(), 
            "ip_address" => $this->getIpAddress(), 
            "phone_number" => $this->getPhoneNumber(), 
            "legal_document" => $this->getLegalDocument(), 
            "is_business" => $this->getIsBusiness(), 
            "sex" => $this->getSex(), 
            "metadata" => $this->getMetadata()
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field customer
        $body = $response->getBody();
        $body = $body['customer'];
        $returnValues['save'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete the customer.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
