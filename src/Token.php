<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Token
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the customer token
     * @var string
     */
    protected $id;

    /**
     * Customer owning the token
     * @var object
     */
    protected $customer;

    /**
     * Card used to create this token, if any
     * @var object
     */
    protected $card;

    /**
     * Type of the token. Can be card or gateway_token
     * @var string
     */
    protected $type;

    /**
     * Metadata related to the token, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Define whether or not the customer token is used on a recurring invoice
     * @var boolean
     */
    protected $isSubscriptionOnly;

    /**
     * Date at which the customer token was created
     * @var string
     */
    protected $createdAt;

    /**
     * Token constructor
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
     * ID of the customer token
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the customer token
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Customer
     * Customer owning the token
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer owning the token
     * @param  object $value
     * @return $this
     */
    public function setCustomer($value)
    {
        if (is_object($value))
            $this->customer = $value;
        else
        {
            $obj = new Customer($this->client);
            $obj->fillWithData($value);
            $this->customer = $obj;
        }
        return $this;
    }
    
    /**
     * Get Card
     * Card used to create this token, if any
     * @return object
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set Card
     * Card used to create this token, if any
     * @param  object $value
     * @return $this
     */
    public function setCard($value)
    {
        if (is_object($value))
            $this->card = $value;
        else
        {
            $obj = new Card($this->client);
            $obj->fillWithData($value);
            $this->card = $obj;
        }
        return $this;
    }
    
    /**
     * Get Type
     * Type of the token. Can be card or gateway_token
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Type of the token. Can be card or gateway_token
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the token, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the token, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get IsSubscriptionOnly
     * Define whether or not the customer token is used on a recurring invoice
     * @return bool
     */
    public function getIsSubscriptionOnly()
    {
        return $this->isSubscriptionOnly;
    }

    /**
     * Set IsSubscriptionOnly
     * Define whether or not the customer token is used on a recurring invoice
     * @param  bool $value
     * @return $this
     */
    public function setIsSubscriptionOnly($value)
    {
        $this->isSubscriptionOnly = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the customer token was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the customer token was created
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
     * @return Token
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['customer']))
            $this->setCustomer($data['customer']);

        if(! empty($data['card']))
            $this->setCard($data['card']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['is_subscription_only']))
            $this->setIsSubscriptionOnly($data['is_subscription_only']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
    /**
     * Find a customer's token by its ID.
     * @param string $customerId
     * @param string $tokenId
     * @param array $options
     * @return $this
     */
    public function find($customerId, $tokenId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($customerId) . "/tokens/" . urlencode($tokenId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field token
        $body = $response->getBody();
        $body = $body['token'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new token for the given customer ID.
     * @param string $customerId
     * @param string $source
     * @param array $options
     * @return $this
     */
    public function create($customerId, $source, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($customerId) . "/tokens";

        $data = array(
            "metadata" => $this->getMetadata(), 
            "source" => $source
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field token
        $body = $response->getBody();
        $body = $body['token'];
        $returnValues['create'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new token for the given customer ID from an authorization request
     * @param string $customerId
     * @param string $source
     * @param string $target
     * @param array $options
     * @return $this
     */
    public function createFromRequest($customerId, $source, $target, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($customerId) . "/tokens";

        $data = array(
            "metadata" => $this->getMetadata(), 
            "source" => $source, 
            "target" => $target
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field token
        $body = $response->getBody();
        $body = $body['token'];
        $returnValues['createFromRequest'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
