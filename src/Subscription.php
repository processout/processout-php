<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Subscription
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the subscription
     * @var string
     */
    protected $id;

    /**
     * Project to which the subscription belongs
     * @var object
     */
    protected $project;

    /**
     * Plan used to create this subscription
     * @var object
     */
    protected $plan;

    /**
     * Customer linked to the subscription
     * @var object
     */
    protected $customer;

    /**
     * Token used to capture payments on this subscription
     * @var object
     */
    protected $token;

    /**
     * URL to which you may redirect your customer to activate the subscription
     * @var string
     */
    protected $url;

    /**
     * Name of the subscription
     * @var string
     */
    protected $name;

    /**
     * Amount to be paid at each billing cycle of the subscription
     * @var string
     */
    protected $amount;

    /**
     * Currency of the subscription
     * @var string
     */
    protected $currency;

    /**
     * Metadata related to the subscription, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * The subscription interval, formatted in the format "1d2w3m4y" (day, week, month, year)
     * @var string
     */
    protected $interval;

    /**
     * Date at which the subscription trial should end. Can be null to set no trial
     * @var string
     */
    protected $trialEndAt;

    /**
     * Whether or not the subscription was activated. This field does not take into account whether or not the subscription was canceled. Used the active field to know if the subscription is currently active
     * @var boolean
     */
    protected $activated;

    /**
     * Whether or not the subscription is currently active (ie activated and not cancelled)
     * @var boolean
     */
    protected $active;

    /**
     * Whether or not the subscription was canceled. The cancellation reason can be found in the cancellation_reason field
     * @var boolean
     */
    protected $canceled;

    /**
     * Reason as to why the subscription was cancelled
     * @var string
     */
    protected $cancellationReason;

    /**
     * Wheither or not the subscription is pending cancellation (meaning a cancel_at date was set)
     * @var boolean
     */
    protected $pendingCancellation;

    /**
     * Date at which the subscription will automatically be canceled. Can be null
     * @var string
     */
    protected $cancelAt;

    /**
     * URL where the customer will be redirected upon activation of the subscription
     * @var string
     */
    protected $returnUrl;

    /**
     * URL where the customer will be redirected if the subscription activation was canceled
     * @var string
     */
    protected $cancelUrl;

    /**
     * Define whether or not the subscription is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the subscription was created
     * @var string
     */
    protected $createdAt;

    /**
     * Date at which the subscription was activated. Null if the subscription hasn't been activated yet
     * @var string
     */
    protected $activatedAt;

    /**
     * Next iteration date, corresponding to the next billing cycle start date
     * @var string
     */
    protected $iterateAt;

    /**
     * Subscription constructor
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
     * ID of the subscription
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the subscription
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
     * Project to which the subscription belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the subscription belongs
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
     * Get Plan
     * Plan used to create this subscription
     * @return object
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set Plan
     * Plan used to create this subscription
     * @param  object $value
     * @return $this
     */
    public function setPlan($value)
    {
        if (is_object($value))
            $this->plan = $value;
        else
        {
            $obj = new Plan($this->client);
            $obj->fillWithData($value);
            $this->plan = $obj;
        }
        return $this;
    }
    
    /**
     * Get Customer
     * Customer linked to the subscription
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer linked to the subscription
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
     * Get Token
     * Token used to capture payments on this subscription
     * @return object
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set Token
     * Token used to capture payments on this subscription
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
     * Get Url
     * URL to which you may redirect your customer to activate the subscription
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which you may redirect your customer to activate the subscription
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
     * Name of the subscription
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the subscription
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
     * Amount to be paid at each billing cycle of the subscription
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount to be paid at each billing cycle of the subscription
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
     * Currency of the subscription
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the subscription
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
     * Metadata related to the subscription, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the subscription, in the form of a dictionary (key-value pair)
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
     * The subscription interval, formatted in the format "1d2w3m4y" (day, week, month, year)
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Set Interval
     * The subscription interval, formatted in the format "1d2w3m4y" (day, week, month, year)
     * @param  string $value
     * @return $this
     */
    public function setInterval($value)
    {
        $this->interval = $value;
        return $this;
    }
    
    /**
     * Get TrialEndAt
     * Date at which the subscription trial should end. Can be null to set no trial
     * @return string
     */
    public function getTrialEndAt()
    {
        return $this->trialEndAt;
    }

    /**
     * Set TrialEndAt
     * Date at which the subscription trial should end. Can be null to set no trial
     * @param  string $value
     * @return $this
     */
    public function setTrialEndAt($value)
    {
        $this->trialEndAt = $value;
        return $this;
    }
    
    /**
     * Get Activated
     * Whether or not the subscription was activated. This field does not take into account whether or not the subscription was canceled. Used the active field to know if the subscription is currently active
     * @return bool
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set Activated
     * Whether or not the subscription was activated. This field does not take into account whether or not the subscription was canceled. Used the active field to know if the subscription is currently active
     * @param  bool $value
     * @return $this
     */
    public function setActivated($value)
    {
        $this->activated = $value;
        return $this;
    }
    
    /**
     * Get Active
     * Whether or not the subscription is currently active (ie activated and not cancelled)
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set Active
     * Whether or not the subscription is currently active (ie activated and not cancelled)
     * @param  bool $value
     * @return $this
     */
    public function setActive($value)
    {
        $this->active = $value;
        return $this;
    }
    
    /**
     * Get Canceled
     * Whether or not the subscription was canceled. The cancellation reason can be found in the cancellation_reason field
     * @return bool
     */
    public function getCanceled()
    {
        return $this->canceled;
    }

    /**
     * Set Canceled
     * Whether or not the subscription was canceled. The cancellation reason can be found in the cancellation_reason field
     * @param  bool $value
     * @return $this
     */
    public function setCanceled($value)
    {
        $this->canceled = $value;
        return $this;
    }
    
    /**
     * Get CancellationReason
     * Reason as to why the subscription was cancelled
     * @return string
     */
    public function getCancellationReason()
    {
        return $this->cancellationReason;
    }

    /**
     * Set CancellationReason
     * Reason as to why the subscription was cancelled
     * @param  string $value
     * @return $this
     */
    public function setCancellationReason($value)
    {
        $this->cancellationReason = $value;
        return $this;
    }
    
    /**
     * Get PendingCancellation
     * Wheither or not the subscription is pending cancellation (meaning a cancel_at date was set)
     * @return bool
     */
    public function getPendingCancellation()
    {
        return $this->pendingCancellation;
    }

    /**
     * Set PendingCancellation
     * Wheither or not the subscription is pending cancellation (meaning a cancel_at date was set)
     * @param  bool $value
     * @return $this
     */
    public function setPendingCancellation($value)
    {
        $this->pendingCancellation = $value;
        return $this;
    }
    
    /**
     * Get CancelAt
     * Date at which the subscription will automatically be canceled. Can be null
     * @return string
     */
    public function getCancelAt()
    {
        return $this->cancelAt;
    }

    /**
     * Set CancelAt
     * Date at which the subscription will automatically be canceled. Can be null
     * @param  string $value
     * @return $this
     */
    public function setCancelAt($value)
    {
        $this->cancelAt = $value;
        return $this;
    }
    
    /**
     * Get ReturnUrl
     * URL where the customer will be redirected upon activation of the subscription
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set ReturnUrl
     * URL where the customer will be redirected upon activation of the subscription
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
     * URL where the customer will be redirected if the subscription activation was canceled
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * Set CancelUrl
     * URL where the customer will be redirected if the subscription activation was canceled
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
     * Define whether or not the subscription is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the subscription is in sandbox environment
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
     * Date at which the subscription was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the subscription was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    
    /**
     * Get ActivatedAt
     * Date at which the subscription was activated. Null if the subscription hasn't been activated yet
     * @return string
     */
    public function getActivatedAt()
    {
        return $this->activatedAt;
    }

    /**
     * Set ActivatedAt
     * Date at which the subscription was activated. Null if the subscription hasn't been activated yet
     * @param  string $value
     * @return $this
     */
    public function setActivatedAt($value)
    {
        $this->activatedAt = $value;
        return $this;
    }
    
    /**
     * Get IterateAt
     * Next iteration date, corresponding to the next billing cycle start date
     * @return string
     */
    public function getIterateAt()
    {
        return $this->iterateAt;
    }

    /**
     * Set IterateAt
     * Next iteration date, corresponding to the next billing cycle start date
     * @param  string $value
     * @return $this
     */
    public function setIterateAt($value)
    {
        $this->iterateAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Subscription
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['plan']))
            $this->setPlan($data['plan']);

        if(! empty($data['customer']))
            $this->setCustomer($data['customer']);

        if(! empty($data['token']))
            $this->setToken($data['token']);

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

        if(! empty($data['trial_end_at']))
            $this->setTrialEndAt($data['trial_end_at']);

        if(! empty($data['activated']))
            $this->setActivated($data['activated']);

        if(! empty($data['active']))
            $this->setActive($data['active']);

        if(! empty($data['canceled']))
            $this->setCanceled($data['canceled']);

        if(! empty($data['cancellation_reason']))
            $this->setCancellationReason($data['cancellation_reason']);

        if(! empty($data['pending_cancellation']))
            $this->setPendingCancellation($data['pending_cancellation']);

        if(! empty($data['cancel_at']))
            $this->setCancelAt($data['cancel_at']);

        if(! empty($data['return_url']))
            $this->setReturnUrl($data['return_url']);

        if(! empty($data['cancel_url']))
            $this->setCancelUrl($data['cancel_url']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        if(! empty($data['activated_at']))
            $this->setActivatedAt($data['activated_at']);

        if(! empty($data['iterate_at']))
            $this->setIterateAt($data['iterate_at']);

        return $this;
    }

    
    /**
     * Get the customer owning the subscription.
     * @param array $options
     * @return Customer
     */
    public function fetchCustomer($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/customers";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field customer
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($this->client);
        $returnValues['customer'] = $customer->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get the discounts applied to the subscription.
     * @param array $options
     * @return array
     */
    public function fetchDiscounts($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/discounts";

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
     * Apply a coupon on the subscription.
     * @param string $couponId
     * @param array $options
     * @return Discount
     */
    public function applyCoupon($couponId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/discounts";

        $data = array(
            "coupon_id" => $couponId
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field discount
        $body = $response->getBody();
        $body = $body['discount'];
        $discount = new Discount($this->client);
        $returnValues['discount'] = $discount->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a subscription's discount by its ID.
     * @param string $discountId
     * @param array $options
     * @return Discount
     */
    public function findDiscount($discountId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/discounts/" . urlencode($discountId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field discount
        $body = $response->getBody();
        $body = $body['discount'];
        $discount = new Discount($this->client);
        $returnValues['discount'] = $discount->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Remove a discount applied to a subscription.
     * @param string $discountId
     * @param array $options
     * @return $this
     */
    public function removeDiscount($discountId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/discounts/" . urlencode($discountId) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        
        // Handling for field discount
        $body = $response->getBody();
        $body = $body['discount'];
        $returnValues['removeDiscount'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get the subscriptions past transactions.
     * @param array $options
     * @return array
     */
    public function fetchTransactions($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/transactions";

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
     * Get all the subscriptions.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions";

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
     * Create a new subscription for the given customer.
     * @param string $customerId
     * @param array $options
     * @return $this
     */
    public function create($customerId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions";

        $data = array(
            "cancel_at" => $this->getCancelAt(), 
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "currency" => $this->getCurrency(), 
            "metadata" => $this->getMetadata(), 
            "interval" => $this->getInterval(), 
            "trial_end_at" => $this->getTrialEndAt(), 
            "return_url" => $this->getReturnUrl(), 
            "cancel_url" => $this->getCancelUrl(), 
            "customer_id" => $customerId
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscription
        $body = $response->getBody();
        $body = $body['subscription'];
        $returnValues['create'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new subscription for the customer from the given plan ID.
     * @param string $customerId
     * @param string $planId
     * @param array $options
     * @return $this
     */
    public function createFromPlan($customerId, $planId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions";

        $data = array(
            "cancel_at" => $this->getCancelAt(), 
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "currency" => $this->getCurrency(), 
            "metadata" => $this->getMetadata(), 
            "interval" => $this->getInterval(), 
            "trial_end_at" => $this->getTrialEndAt(), 
            "return_url" => $this->getReturnUrl(), 
            "cancel_url" => $this->getCancelUrl(), 
            "customer_id" => $customerId, 
            "plan_id" => $planId
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscription
        $body = $response->getBody();
        $body = $body['subscription'];
        $returnValues['createFromPlan'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a subscription by its ID.
     * @param string $subscriptionId
     * @param array $options
     * @return $this
     */
    public function find($subscriptionId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($subscriptionId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscription
        $body = $response->getBody();
        $body = $body['subscription'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Update the subscription's plan.
     * @param string $planId
     * @param string $prorate
     * @param array $options
     * @return $this
     */
    public function updatePlan($planId, $prorate, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "";

        $data = array(
            "plan_id" => $planId, 
            "prorate" => $prorate
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscription
        $body = $response->getBody();
        $body = $body['subscription'];
        $returnValues['updatePlan'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Apply a source to the subscription to activate or update the subscription's source.
     * @param string $source
     * @param array $options
     * @return $this
     */
    public function applySource($source, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "";

        $data = array(
            "source" => $source
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscription
        $body = $response->getBody();
        $body = $body['subscription'];
        $returnValues['applySource'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Save the updated subscription attributes.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "";

        $data = array(
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "interval" => $this->getInterval(), 
            "trial_end_at" => $this->getTrialEndAt(), 
            "metadata" => $this->getMetadata(), 
            "coupon_id" => (!empty($options["coupon_id"])) ? $options["coupon_id"] : null
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscription
        $body = $response->getBody();
        $body = $body['subscription'];
        $returnValues['save'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Cancel a subscription. The reason may be provided as well.
     * @param string $cancellationReason
     * @param array $options
     * @return $this
     */
    public function cancel($cancellationReason, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "";

        $data = array(
            "cancellation_reason" => $cancellationReason
        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscription
        $body = $response->getBody();
        $body = $body['subscription'];
        $returnValues['cancel'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Schedule the cancellation of the subscription. The reason may be provided as well.
     * @param string $cancelAt
     * @param string $cancellationReason
     * @param array $options
     * @return $this
     */
    public function cancelAtDate($cancelAt, $cancellationReason, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "";

        $data = array(
            "cancel_at" => $cancelAt, 
            "cancellation_reason" => $cancellationReason
        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscription
        $body = $response->getBody();
        $body = $body['subscription'];
        $returnValues['cancelAtDate'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
