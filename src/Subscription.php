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
     * ID of the project to which the subscription belongs
     * @var string
     */
    protected $projectId;

    /**
     * Plan linked to this subscription, if any
     * @var object
     */
    protected $plan;

    /**
     * ID of the plan linked to this subscription, if any
     * @var string
     */
    protected $planId;

    /**
     * List of the subscription discounts
     * @var list
     */
    protected $discounts;

    /**
     * List of the subscription addons
     * @var list
     */
    protected $addons;

    /**
     * List of the subscription transactions
     * @var list
     */
    protected $transactions;

    /**
     * Customer linked to the subscription
     * @var object
     */
    protected $customer;

    /**
     * ID of the customer linked to the subscription
     * @var string
     */
    protected $customerId;

    /**
     * Token used to capture payments on this subscription
     * @var object
     */
    protected $token;

    /**
     * ID of the token used to capture payments on this subscription
     * @var string
     */
    protected $tokenId;

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
     * Base amount of the subscription
     * @var decimal
     */
    protected $amount;

    /**
     * Amount to be paid at each billing cycle of the subscription
     * @var decimal
     */
    protected $billableAmount;

    /**
     * Amount discounted by discounts applied to the subscription
     * @var decimal
     */
    protected $discountedAmount;

    /**
     * Amount applied on top of the subscription base price with addons
     * @var decimal
     */
    protected $addonsAmount;

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
     * Whether or not the subscription was activated. This field does not take into account whether or not the subscription was canceled. Use the active field to know if the subscription is currently active
     * @var boolean
     */
    protected $activated;

    /**
     * Whether or not the subscription is currently active (ie activated and not cancelled)
     * @var boolean
     */
    protected $active;

    /**
     * Date at which the subscription will automatically be canceled. Can be null
     * @var string
     */
    protected $cancelAt;

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
     * Whether or not the subscription is pending cancellation (meaning a cancel_at date was set)
     * @var boolean
     */
    protected $pendingCancellation;

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
     * When the subscription has unpaid invoices, defines the dunning logic of the subscription (as specified in the project settings)
     * @var string
     */
    protected $unpaidState;

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
     * Get ProjectId
     * ID of the project to which the subscription belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the subscription belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get Plan
     * Plan linked to this subscription, if any
     * @return object
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set Plan
     * Plan linked to this subscription, if any
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
     * Get PlanId
     * ID of the plan linked to this subscription, if any
     * @return string
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * Set PlanId
     * ID of the plan linked to this subscription, if any
     * @param  string $value
     * @return $this
     */
    public function setPlanId($value)
    {
        $this->planId = $value;
        return $this;
    }
    
    /**
     * Get Discounts
     * List of the subscription discounts
     * @return array
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * Set Discounts
     * List of the subscription discounts
     * @param  array $value
     * @return $this
     */
    public function setDiscounts($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->discounts = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new Discount($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->discounts = $a;
        }
        return $this;
    }
    
    /**
     * Get Addons
     * List of the subscription addons
     * @return array
     */
    public function getAddons()
    {
        return $this->addons;
    }

    /**
     * Set Addons
     * List of the subscription addons
     * @param  array $value
     * @return $this
     */
    public function setAddons($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->addons = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new Addon($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->addons = $a;
        }
        return $this;
    }
    
    /**
     * Get Transactions
     * List of the subscription transactions
     * @return array
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Set Transactions
     * List of the subscription transactions
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
     * Get CustomerId
     * ID of the customer linked to the subscription
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set CustomerId
     * ID of the customer linked to the subscription
     * @param  string $value
     * @return $this
     */
    public function setCustomerId($value)
    {
        $this->customerId = $value;
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
     * Get TokenId
     * ID of the token used to capture payments on this subscription
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * Set TokenId
     * ID of the token used to capture payments on this subscription
     * @param  string $value
     * @return $this
     */
    public function setTokenId($value)
    {
        $this->tokenId = $value;
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
     * Base amount of the subscription
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Base amount of the subscription
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get BillableAmount
     * Amount to be paid at each billing cycle of the subscription
     * @return string
     */
    public function getBillableAmount()
    {
        return $this->billableAmount;
    }

    /**
     * Set BillableAmount
     * Amount to be paid at each billing cycle of the subscription
     * @param  string $value
     * @return $this
     */
    public function setBillableAmount($value)
    {
        $this->billableAmount = $value;
        return $this;
    }
    
    /**
     * Get DiscountedAmount
     * Amount discounted by discounts applied to the subscription
     * @return string
     */
    public function getDiscountedAmount()
    {
        return $this->discountedAmount;
    }

    /**
     * Set DiscountedAmount
     * Amount discounted by discounts applied to the subscription
     * @param  string $value
     * @return $this
     */
    public function setDiscountedAmount($value)
    {
        $this->discountedAmount = $value;
        return $this;
    }
    
    /**
     * Get AddonsAmount
     * Amount applied on top of the subscription base price with addons
     * @return string
     */
    public function getAddonsAmount()
    {
        return $this->addonsAmount;
    }

    /**
     * Set AddonsAmount
     * Amount applied on top of the subscription base price with addons
     * @param  string $value
     * @return $this
     */
    public function setAddonsAmount($value)
    {
        $this->addonsAmount = $value;
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
     * Whether or not the subscription was activated. This field does not take into account whether or not the subscription was canceled. Use the active field to know if the subscription is currently active
     * @return bool
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set Activated
     * Whether or not the subscription was activated. This field does not take into account whether or not the subscription was canceled. Use the active field to know if the subscription is currently active
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
     * Whether or not the subscription is pending cancellation (meaning a cancel_at date was set)
     * @return bool
     */
    public function getPendingCancellation()
    {
        return $this->pendingCancellation;
    }

    /**
     * Set PendingCancellation
     * Whether or not the subscription is pending cancellation (meaning a cancel_at date was set)
     * @param  bool $value
     * @return $this
     */
    public function setPendingCancellation($value)
    {
        $this->pendingCancellation = $value;
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
     * Get UnpaidState
     * When the subscription has unpaid invoices, defines the dunning logic of the subscription (as specified in the project settings)
     * @return string
     */
    public function getUnpaidState()
    {
        return $this->unpaidState;
    }

    /**
     * Set UnpaidState
     * When the subscription has unpaid invoices, defines the dunning logic of the subscription (as specified in the project settings)
     * @param  string $value
     * @return $this
     */
    public function setUnpaidState($value)
    {
        $this->unpaidState = $value;
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

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['plan']))
            $this->setPlan($data['plan']);

        if(! empty($data['plan_id']))
            $this->setPlanId($data['plan_id']);

        if(! empty($data['discounts']))
            $this->setDiscounts($data['discounts']);

        if(! empty($data['addons']))
            $this->setAddons($data['addons']);

        if(! empty($data['transactions']))
            $this->setTransactions($data['transactions']);

        if(! empty($data['customer']))
            $this->setCustomer($data['customer']);

        if(! empty($data['customer_id']))
            $this->setCustomerId($data['customer_id']);

        if(! empty($data['token']))
            $this->setToken($data['token']);

        if(! empty($data['token_id']))
            $this->setTokenId($data['token_id']);

        if(! empty($data['url']))
            $this->setUrl($data['url']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['billable_amount']))
            $this->setBillableAmount($data['billable_amount']);

        if(! empty($data['discounted_amount']))
            $this->setDiscountedAmount($data['discounted_amount']);

        if(! empty($data['addons_amount']))
            $this->setAddonsAmount($data['addons_amount']);

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

        if(! empty($data['cancel_at']))
            $this->setCancelAt($data['cancel_at']);

        if(! empty($data['canceled']))
            $this->setCanceled($data['canceled']);

        if(! empty($data['cancellation_reason']))
            $this->setCancellationReason($data['cancellation_reason']);

        if(! empty($data['pending_cancellation']))
            $this->setPendingCancellation($data['pending_cancellation']);

        if(! empty($data['return_url']))
            $this->setReturnUrl($data['return_url']);

        if(! empty($data['cancel_url']))
            $this->setCancelUrl($data['cancel_url']);

        if(! empty($data['unpaid_state']))
            $this->setUnpaidState($data['unpaid_state']);

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
     * Get the addons applied to the subscription.
     * @param array $options
     * @return array
     */
    public function fetchAddons($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/addons";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field addons
        $a    = array();
        $body = $response->getBody();
        foreach($body['addons'] as $v)
        {
            $tmp = new Addon($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Addons'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a subscription's addon by its ID.
     * @param string $addonId
     * @param array $options
     * @return Addon
     */
    public function findAddon($addonId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/addons/" . urlencode($addonId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field addon
        $body = $response->getBody();
        $body = $body['addon'];
        $addon = new Addon($this->client);
        $returnValues['addon'] = $addon->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete an addon applied to a subscription.
     * @param string $addonId
     * @param array $options
     * @return bool
     */
    public function deleteAddon($addonId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/addons/" . urlencode($addonId) . "";

        $data = array(
            "prorate" => (!empty($options["prorate"])) ? $options["prorate"] : null, 
            "proration_date" => (!empty($options["proration_date"])) ? $options["proration_date"] : null, 
            "preview" => (!empty($options["preview"])) ? $options["preview"] : null
        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
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
     * Delete a discount applied to a subscription.
     * @param string $discountId
     * @param array $options
     * @return bool
     */
    public function deleteDiscount($discountId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/discounts/" . urlencode($discountId) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
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
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions";

        $data = array(
            "plan_id" => $this->getPlanId(), 
            "cancel_at" => $this->getCancelAt(), 
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "currency" => $this->getCurrency(), 
            "metadata" => $this->getMetadata(), 
            "interval" => $this->getInterval(), 
            "trial_end_at" => $this->getTrialEndAt(), 
            "customer_id" => $this->getCustomerId(), 
            "return_url" => $this->getReturnUrl(), 
            "cancel_url" => $this->getCancelUrl(), 
            "source" => (!empty($options["source"])) ? $options["source"] : null, 
            "coupon_id" => (!empty($options["coupon_id"])) ? $options["coupon_id"] : null
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
            "plan_id" => $this->getPlanId(), 
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "interval" => $this->getInterval(), 
            "trial_end_at" => $this->getTrialEndAt(), 
            "metadata" => $this->getMetadata(), 
            "coupon_id" => (!empty($options["coupon_id"])) ? $options["coupon_id"] : null, 
            "source" => (!empty($options["source"])) ? $options["source"] : null, 
            "prorate" => (!empty($options["prorate"])) ? $options["prorate"] : null, 
            "proration_date" => (!empty($options["proration_date"])) ? $options["proration_date"] : null, 
            "preview" => (!empty($options["preview"])) ? $options["preview"] : null
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
     * @param array $options
     * @return $this
     */
    public function cancel($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "";

        $data = array(
            "cancel_at" => $this->getCancelAt(), 
            "cancellation_reason" => $this->getCancellationReason(), 
            "cancel_at_end" => (!empty($options["cancel_at_end"])) ? $options["cancel_at_end"] : null
        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        
        // Handling for field subscription
        $body = $response->getBody();
        $body = $body['subscription'];
        $returnValues['cancel'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
