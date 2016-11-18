<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Discount
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the discount
     * @var string
     */
    protected $id;

    /**
     * Project to which the discount belongs
     * @var object
     */
    protected $project;

    /**
     * Subscription to which the discount belongs
     * @var object
     */
    protected $subscription;

    /**
     * Coupon used to create this discount, if any
     * @var object
     */
    protected $coupon;

    /**
     * Amount discounted
     * @var string
     */
    protected $amount;

    /**
     * Date at which the discount will expire
     * @var string
     */
    protected $expiresAt;

    /**
     * Metadata related to the coupon, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Define whether or not the plan is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the plan was created
     * @var string
     */
    protected $createdAt;

    /**
     * Discount constructor
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
     * ID of the discount
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the discount
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
     * Project to which the discount belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the discount belongs
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
     * Get Subscription
     * Subscription to which the discount belongs
     * @return object
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set Subscription
     * Subscription to which the discount belongs
     * @param  object $value
     * @return $this
     */
    public function setSubscription($value)
    {
        if (is_object($value))
            $this->subscription = $value;
        else
        {
            $obj = new Subscription($this->client);
            $obj->fillWithData($value);
            $this->subscription = $obj;
        }
        return $this;
    }
    
    /**
     * Get Coupon
     * Coupon used to create this discount, if any
     * @return object
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Set Coupon
     * Coupon used to create this discount, if any
     * @param  object $value
     * @return $this
     */
    public function setCoupon($value)
    {
        if (is_object($value))
            $this->coupon = $value;
        else
        {
            $obj = new Coupon($this->client);
            $obj->fillWithData($value);
            $this->coupon = $obj;
        }
        return $this;
    }
    
    /**
     * Get Amount
     * Amount discounted
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount discounted
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get ExpiresAt
     * Date at which the discount will expire
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Set ExpiresAt
     * Date at which the discount will expire
     * @param  string $value
     * @return $this
     */
    public function setExpiresAt($value)
    {
        $this->expiresAt = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the coupon, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the coupon, in the form of a dictionary (key-value pair)
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
     * Define whether or not the plan is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the plan is in sandbox environment
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
     * Date at which the plan was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the plan was created
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
     * @return Discount
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['subscription']))
            $this->setSubscription($data['subscription']);

        if(! empty($data['coupon']))
            $this->setCoupon($data['coupon']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['expires_at']))
            $this->setExpiresAt($data['expires_at']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
    /**
     * Apply a new discount to the given subscription ID.
     * @param string $subscriptionId
     * @param array $options
     * @return $this
     */
    public function apply($subscriptionId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($subscriptionId) . "/discounts";

        $data = array(
            "amount" => $this->getAmount(), 
            "expires_at" => $this->getExpiresAt(), 
            "metadata" => $this->getMetadata()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field discount
        $body = $response->getBody();
        $body = $body['discount'];
        $returnValues['apply'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Apply a new discount on the subscription from a coupon ID.
     * @param string $subscriptionId
     * @param string $couponId
     * @param array $options
     * @return $this
     */
    public function applyCoupon($subscriptionId, $couponId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($subscriptionId) . "/discounts";

        $data = array(
            "coupon_id" => $couponId
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field discount
        $body = $response->getBody();
        $body = $body['discount'];
        $returnValues['applyCoupon'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a subscription's discount by its ID.
     * @param string $subscriptionId
     * @param string $discountId
     * @param array $options
     * @return $this
     */
    public function find($subscriptionId, $discountId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($subscriptionId) . "/discounts/" . urlencode($discountId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field discount
        $body = $response->getBody();
        $body = $body['discount'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
