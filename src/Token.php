<?php

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
     * Customer linked to the token
     * @var object
     */
    protected $customer;

    /**
     * ID of the customer token
     * @var string
     */
    protected $customerId;

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
     * Customer linked to the token
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer linked to the token
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
     * Get CustomerId
     * ID of the customer token
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set CustomerId
     * ID of the customer token
     * @param  string $value
     * @return $this
     */
    public function setCustomerId($value)
    {
        $this->customerId = $value;
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

        if(! empty($data["customer_id"]))
            $this->setCustomerId($data["customer_id"]);

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
        $body = $response->getBody();
        $body = $body['token'];
        return $cur->fillWithData($body);
        
    }

    /**
     * Create a new token for the given customer ID.
	 * @param string $customerId
	 * @param string $target
	 * @param string $source
     * @param array $options
     * @return $this
     */
    public function create($customerId, $target, $source, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($customerId) . "/tokens";

        $data = array(
			"metadata" => $this->getMetadata(), 
			"target" => $target, 
			"source" => $source
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['token'];
        return $cur->fillWithData($body);
        
    }

    
}
