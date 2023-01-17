<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Discount implements \JsonSerializable
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
     * ID of the project to which the discount belongs
     * @var string
     */
    protected $projectId;

    /**
     * Subscription to which the discount belongs
     * @var object
     */
    protected $subscription;

    /**
     * ID of the subscription to which the addon belongs
     * @var string
     */
    protected $subscriptionId;

    /**
     * Coupon used to create the discount, if any
     * @var object
     */
    protected $coupon;

    /**
     * ID of the coupon used to create the discount, if any
     * @var string
     */
    protected $couponId;

    /**
     * Name of the discount
     * @var string
     */
    protected $name;

    /**
     * Amount discounted
     * @var decimal
     */
    protected $amount;

    /**
     * Percentage discounted
     * @var integer
     */
    protected $percent;

    /**
     * Date at which the discount will expire
     * @var string
     */
    protected $expiresAt;

    /**
     * Metadata related to the discount, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Define whether or not the discount is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the discount was created
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
     * Get ProjectId
     * ID of the project to which the discount belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the discount belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
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
     * Get SubscriptionId
     * ID of the subscription to which the addon belongs
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set SubscriptionId
     * ID of the subscription to which the addon belongs
     * @param  string $value
     * @return $this
     */
    public function setSubscriptionId($value)
    {
        $this->subscriptionId = $value;
        return $this;
    }
    
    /**
     * Get Coupon
     * Coupon used to create the discount, if any
     * @return object
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Set Coupon
     * Coupon used to create the discount, if any
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
     * Get CouponId
     * ID of the coupon used to create the discount, if any
     * @return string
     */
    public function getCouponId()
    {
        return $this->couponId;
    }

    /**
     * Set CouponId
     * ID of the coupon used to create the discount, if any
     * @param  string $value
     * @return $this
     */
    public function setCouponId($value)
    {
        $this->couponId = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the discount
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the discount
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
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
     * Get Percent
     * Percentage discounted
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set Percent
     * Percentage discounted
     * @param  int $value
     * @return $this
     */
    public function setPercent($value)
    {
        $this->percent = $value;
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
     * Metadata related to the discount, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the discount, in the form of a dictionary (key-value pair)
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
     * Define whether or not the discount is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the discount is in sandbox environment
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
     * Date at which the discount was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the discount was created
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

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['subscription']))
            $this->setSubscription($data['subscription']);

        if(! empty($data['subscription_id']))
            $this->setSubscriptionId($data['subscription_id']);

        if(! empty($data['coupon']))
            $this->setCoupon($data['coupon']);

        if(! empty($data['coupon_id']))
            $this->setCouponId($data['coupon_id']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['percent']))
            $this->setPercent($data['percent']);

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
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize(): mixed {
        return array(
            "id" => $this->getId(),
            "project" => $this->getProject(),
            "project_id" => $this->getProjectId(),
            "subscription" => $this->getSubscription(),
            "subscription_id" => $this->getSubscriptionId(),
            "coupon" => $this->getCoupon(),
            "coupon_id" => $this->getCouponId(),
            "name" => $this->getName(),
            "amount" => $this->getAmount(),
            "percent" => $this->getPercent(),
            "expires_at" => $this->getExpiresAt(),
            "metadata" => $this->getMetadata(),
            "sandbox" => $this->getSandbox(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
    /**
     * Get the discounts applied to the subscription.
     * @param string $subscriptionId
     * @param array $options
     * @return array
     */
    public function fetchSubscriptionDiscounts($subscriptionId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($subscriptionId) . "/discounts";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field discounts
        $a    = array();
        $body = $response->getBody();
        foreach($body['discounts'] as $v)
        {
            $tmp = new Discount($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Discounts'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new discount for the given subscription ID.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getSubscriptionId()) . "/discounts";

        $data = array(
            "coupon_id" => $this->getCouponId(), 
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "expires_at" => $this->getExpiresAt(), 
            "metadata" => $this->getMetadata()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field discount
        $body = $response->getBody();
        $body = $body['discount'];
        $returnValues['create'] = $this->fillWithData($body);
        
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
        $this->fillWithData($options);

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
    
    /**
     * Delete a discount applied to a subscription.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getSubscriptionId()) . "/discounts/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
