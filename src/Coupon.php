<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Coupon
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the coupon
     * @var string
     */
    protected $id;

    /**
     * Project to which the coupon belongs
     * @var object
     */
    protected $project;

    /**
     * Name of the coupon
     * @var string
     */
    protected $name;

    /**
     * Amount to be removed from the subscription price
     * @var string
     */
    protected $amountOff;

    /**
     * Percent of the subscription amount to be removed (integer between 0 and 100)
     * @var integer
     */
    protected $percentOff;

    /**
     * Currency of the coupon amount_off
     * @var string
     */
    protected $currency;

    /**
     * Number of time the coupon can be redeemed. If 0, there's no limit
     * @var integer
     */
    protected $maxRedemptions;

    /**
     * Date at which the coupon will expire
     * @var string
     */
    protected $expiresAt;

    /**
     * Metadata related to the coupon, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Number billing cycles the coupon will last when applied to a subscription. If 0, will last forever
     * @var integer
     */
    protected $iterationCount;

    /**
     * Number of time the coupon was redeemed
     * @var integer
     */
    protected $redeemedNumber;

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
     * Coupon constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->setMetadata(null);
        

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Id
     * ID of the coupon
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the coupon
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
     * Project to which the coupon belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the coupon belongs
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
     * Get Name
     * Name of the coupon
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the coupon
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get AmountOff
     * Amount to be removed from the subscription price
     * @return string
     */
    public function getAmountOff()
    {
        return $this->amountOff;
    }

    /**
     * Set AmountOff
     * Amount to be removed from the subscription price
     * @param  string $value
     * @return $this
     */
    public function setAmountOff($value)
    {
        $this->amountOff = $value;
        return $this;
    }
    
    /**
     * Get PercentOff
     * Percent of the subscription amount to be removed (integer between 0 and 100)
     * @return int
     */
    public function getPercentOff()
    {
        return $this->percentOff;
    }

    /**
     * Set PercentOff
     * Percent of the subscription amount to be removed (integer between 0 and 100)
     * @param  int $value
     * @return $this
     */
    public function setPercentOff($value)
    {
        $this->percentOff = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency of the coupon amount_off
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the coupon amount_off
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get MaxRedemptions
     * Number of time the coupon can be redeemed. If 0, there's no limit
     * @return int
     */
    public function getMaxRedemptions()
    {
        return $this->maxRedemptions;
    }

    /**
     * Set MaxRedemptions
     * Number of time the coupon can be redeemed. If 0, there's no limit
     * @param  int $value
     * @return $this
     */
    public function setMaxRedemptions($value)
    {
        $this->maxRedemptions = $value;
        return $this;
    }
    
    /**
     * Get ExpiresAt
     * Date at which the coupon will expire
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Set ExpiresAt
     * Date at which the coupon will expire
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
     * Get IterationCount
     * Number billing cycles the coupon will last when applied to a subscription. If 0, will last forever
     * @return int
     */
    public function getIterationCount()
    {
        return $this->iterationCount;
    }

    /**
     * Set IterationCount
     * Number billing cycles the coupon will last when applied to a subscription. If 0, will last forever
     * @param  int $value
     * @return $this
     */
    public function setIterationCount($value)
    {
        $this->iterationCount = $value;
        return $this;
    }
    
    /**
     * Get RedeemedNumber
     * Number of time the coupon was redeemed
     * @return int
     */
    public function getRedeemedNumber()
    {
        return $this->redeemedNumber;
    }

    /**
     * Set RedeemedNumber
     * Number of time the coupon was redeemed
     * @param  int $value
     * @return $this
     */
    public function setRedeemedNumber($value)
    {
        $this->redeemedNumber = $value;
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
     * @return Coupon
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['amount_off']))
            $this->setAmountOff($data['amount_off']);

        if(! empty($data['percent_off']))
            $this->setPercentOff($data['percent_off']);

        if(! empty($data['currency']))
            $this->setCurrency($data['currency']);

        if(! empty($data['max_redemptions']))
            $this->setMaxRedemptions($data['max_redemptions']);

        if(! empty($data['expires_at']))
            $this->setExpiresAt($data['expires_at']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['iteration_count']))
            $this->setIterationCount($data['iteration_count']);

        if(! empty($data['redeemed_number']))
            $this->setRedeemedNumber($data['redeemed_number']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
    /**
     * Get all the coupons.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $request = new Request($this->client);
        $path    = "/coupons";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field coupons
        $a    = array();
        $body = $response->getBody();
        foreach($body['coupons'] as $v)
        {
            $tmp = new Coupon($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Coupons'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new coupon.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $request = new Request($this->client);
        $path    = "/coupons";

        $data = array(
            "id" => $this->getId(), 
            "amount_off" => $this->getAmountOff(), 
            "percent_off" => $this->getPercentOff(), 
            "currency" => $this->getCurrency(), 
            "iteration_count" => $this->getIterationCount(), 
            "max_redemptions" => $this->getMaxRedemptions(), 
            "expires_at" => $this->getExpiresAt(), 
            "metadata" => $this->getMetadata()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field coupon
        $body = $response->getBody();
        $body = $body['coupon'];
        $returnValues['create'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a coupon by its ID.
     * @param string $couponId
     * @param array $options
     * @return $this
     */
    public function find($couponId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/coupons/" . urlencode($couponId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field coupon
        $body = $response->getBody();
        $body = $body['coupon'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Save the updated coupon attributes.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $request = new Request($this->client);
        $path    = "/coupons/" . urlencode($this->getId()) . "";

        $data = array(
            "metadata" => $this->getMetadata()
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field coupon
        $body = $response->getBody();
        $body = $body['coupon'];
        $returnValues['save'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete the coupon.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $request = new Request($this->client);
        $path    = "/coupons/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
