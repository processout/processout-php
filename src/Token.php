<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class Token
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

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
     * @param ProcessOut\ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
        {
            $processOut = ProcessOut::getDefault();
        }

        $this->instance = $processOut;

        $this->setMetadata(array('_library' => 'php'));
        
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
            $obj = new Customer($this->instance);
            $obj->fillWithData($value);
            $this->customer = $obj;
        }
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
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["customer"]))
            $this->setCustomer($data["customer"]);

        if(! empty($data["metadata"]))
            $this->setMetadata($data["metadata"]);

        if(! empty($data["is_subscription_only"]))
            $this->setIsSubscriptionOnly($data["is_subscription_only"]);

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        return $this;
    }

    /**
     * Find a customer's token by its ID.
	 * @param string $customerId
	 * @param string $tokenId
     * @param array $options
     * @return $this
     */
    public static function find($customerId, $tokenId, $options = array())
    {
        $cur = new Token();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($customerId) . "/tokens/" . urlencode($tokenId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $returnValues = array();

        
        // Handling for field token
        $body = $response->getBody();
                    $body = $body['token'];
                    
        $returnValues["find"] = $cur->fillWithData($body);
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
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($customerId) . "/tokens";

        $data = array(
			"metadata" => $this->getMetadata(), 
			"source" => $source
        );

        $response = new Response($request->post($path, $data, $options));
        $returnValues = array();

        
        // Handling for field token
        $body = $response->getBody();
                    $body = $body['token'];
                    
        $returnValues["create"] = $cur->fillWithData($body);
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
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($customerId) . "/tokens";

        $data = array(
			"metadata" => $this->getMetadata(), 
			"source" => $source, 
			"target" => $target
        );

        $response = new Response($request->post($path, $data, $options));
        $returnValues = array();

        
        // Handling for field token
        $body = $response->getBody();
                    $body = $body['token'];
                    
        $returnValues["createFromRequest"] = $cur->fillWithData($body);
        return array_values($returnValues)[0];
        
    }

    
}
