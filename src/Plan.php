<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Plan
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the plan
     * @var string
     */
    protected $id;

    /**
     * Project to which the plan belongs
     * @var object
     */
    protected $project;

    /**
     * URL to which you may redirect your customer to activate the subscription plan
     * @var string
     */
    protected $url;

    /**
     * Name of the plan
     * @var string
     */
    protected $name;

    /**
     * Amount of the plan
     * @var string
     */
    protected $amount;

    /**
     * Currency of the plan
     * @var string
     */
    protected $currency;

    /**
     * Metadata related to the plan, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * The plan interval, formatted in the format "1d2w3m4y" (day, week, month, year)
     * @var string
     */
    protected $interval;

    /**
     * The trial period. The customer will not be charged during this time span. Formatted in the format "1d2w3m4y" (day, week, month, year)
     * @var string
     */
    protected $trialPeriod;

    /**
     * URL where the customer will be redirected when he activates the subscription created using this plan
     * @var string
     */
    protected $returnUrl;

    /**
     * URL where the customer will be redirected when he cancelling the subscription created using this plan
     * @var string
     */
    protected $cancelUrl;

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
     * Plan constructor
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
     * ID of the plan
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the plan
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
     * Project to which the plan belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the plan belongs
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
     * Get Url
     * URL to which you may redirect your customer to activate the subscription plan
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which you may redirect your customer to activate the subscription plan
     * @param  string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->url = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the plan
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the plan
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
     * Amount of the plan
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount of the plan
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency of the plan
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the plan
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the plan, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the plan, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get Interval
     * The plan interval, formatted in the format "1d2w3m4y" (day, week, month, year)
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Set Interval
     * The plan interval, formatted in the format "1d2w3m4y" (day, week, month, year)
     * @param  string $value
     * @return $this
     */
    public function setInterval($value)
    {
        $this->interval = $value;
        return $this;
    }
    
    /**
     * Get TrialPeriod
     * The trial period. The customer will not be charged during this time span. Formatted in the format "1d2w3m4y" (day, week, month, year)
     * @return string
     */
    public function getTrialPeriod()
    {
        return $this->trialPeriod;
    }

    /**
     * Set TrialPeriod
     * The trial period. The customer will not be charged during this time span. Formatted in the format "1d2w3m4y" (day, week, month, year)
     * @param  string $value
     * @return $this
     */
    public function setTrialPeriod($value)
    {
        $this->trialPeriod = $value;
        return $this;
    }
    
    /**
     * Get ReturnUrl
     * URL where the customer will be redirected when he activates the subscription created using this plan
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set ReturnUrl
     * URL where the customer will be redirected when he activates the subscription created using this plan
     * @param  string $value
     * @return $this
     */
    public function setReturnUrl($value)
    {
        $this->returnUrl = $value;
        return $this;
    }
    
    /**
     * Get CancelUrl
     * URL where the customer will be redirected when he cancelling the subscription created using this plan
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * Set CancelUrl
     * URL where the customer will be redirected when he cancelling the subscription created using this plan
     * @param  string $value
     * @return $this
     */
    public function setCancelUrl($value)
    {
        $this->cancelUrl = $value;
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
     * @return Plan
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['url']))
            $this->setUrl($data['url']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['currency']))
            $this->setCurrency($data['currency']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['interval']))
            $this->setInterval($data['interval']);

        if(! empty($data['trial_period']))
            $this->setTrialPeriod($data['trial_period']);

        if(! empty($data['return_url']))
            $this->setReturnUrl($data['return_url']);

        if(! empty($data['cancel_url']))
            $this->setCancelUrl($data['cancel_url']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
    /**
     * Get all the plans.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/plans";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field plans
        $a    = array();
        $body = $response->getBody();
        foreach($body['plans'] as $v)
        {
            $tmp = new Plan($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Plans'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new plan.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/plans";

        $data = array(
            "id" => $this->getId(), 
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "currency" => $this->getCurrency(), 
            "interval" => $this->getInterval(), 
            "trial_period" => $this->getTrialPeriod(), 
            "metadata" => $this->getMetadata(), 
            "return_url" => $this->getReturnUrl(), 
            "cancel_url" => $this->getCancelUrl()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field plan
        $body = $response->getBody();
        $body = $body['plan'];
        $returnValues['create'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a plan by its ID.
     * @param string $planId
     * @param array $options
     * @return $this
     */
    public function find($planId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/plans/" . urlencode($planId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field plan
        $body = $response->getBody();
        $body = $body['plan'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Save the updated plan attributes. This action won't affect subscriptions already linked to this plan.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/plans/" . urlencode($this->getId()) . "";

        $data = array(
            "name" => $this->getName(), 
            "trial_period" => $this->getTrialPeriod(), 
            "metadata" => $this->getMetadata(), 
            "return_url" => $this->getReturnUrl(), 
            "cancel_url" => $this->getCancelUrl()
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field plan
        $body = $response->getBody();
        $body = $body['plan'];
        $returnValues['save'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete a plan. Subscriptions linked to this plan won't be affected.
     * @param array $options
     * @return bool
     */
    public function end($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/plans/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
