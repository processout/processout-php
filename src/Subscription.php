<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class Subscription
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

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
     * Customer linked to the subscription
     * @var object
     */
    protected $customer;

    /**
     * Token linked to the subscription, once started
     * @var object
     */
    protected $token;

    /**
     * URL to which you may redirect your customer to authorize the subscription
     * @var string
     */
    protected $url;

    /**
     * Name of the subscription
     * @var string
     */
    protected $name;

    /**
     * Amount of the subscription
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
     * URL where the customer will be redirected when he activates the subscription
     * @var string
     */
    protected $returnUrl;

    /**
     * URL where the customer will be redirected when he canceles the subscription
     * @var string
     */
    protected $cancelUrl;

    /**
     * The subscription interval, formatted in the format "1d2w3m4y" (day, week, month, year)
     * @var string
     */
    protected $interval;

    /**
     * The trial period. The customer will not be charged during this time span. Formatted in the format "1d2w3m4y" (day, week, month, year)
     * @var string
     */
    protected $trialPeriod;

    /**
     * Weither or not the subscription is active
     * @var boolean
     */
    protected $activated;

    /**
     * Weither or not the subscription has ended (programmatically or canceled)
     * @var boolean
     */
    protected $ended;

    /**
     * Reason as to why the subscription ended
     * @var string
     */
    protected $endedReason;

    /**
     * Define whether or not the authorization is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the invoice was created
     * @var string
     */
    protected $createdAt;

    /**
     * Subscription constructor
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
        $this->setTrialPeriod("0d");
        
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
            $obj = new Project($this->instance);
            $obj->fillWithData($value);
            $this->project = $obj;
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
            $obj = new Customer($this->instance);
            $obj->fillWithData($value);
            $this->customer = $obj;
        }
        return $this;
    }
    
    /**
     * Get Token
     * Token linked to the subscription, once started
     * @return object
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set Token
     * Token linked to the subscription, once started
     * @param  object $value
     * @return $this
     */
    public function setToken($value)
    {
        if (is_object($value))
            $this->token = $value;
        else
        {
            $obj = new Token($this->instance);
            $obj->fillWithData($value);
            $this->token = $obj;
        }
        return $this;
    }
    
    /**
     * Get Url
     * URL to which you may redirect your customer to authorize the subscription
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which you may redirect your customer to authorize the subscription
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
     * Amount of the subscription
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount of the subscription
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
     * Get ReturnUrl
     * URL where the customer will be redirected when he activates the subscription
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set ReturnUrl
     * URL where the customer will be redirected when he activates the subscription
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
     * URL where the customer will be redirected when he canceles the subscription
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * Set CancelUrl
     * URL where the customer will be redirected when he canceles the subscription
     * @param  string $value
     * @return $this
     */
    public function setCancelUrl($value)
    {
        $this->cancelUrl = $value;
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
     * Get Activated
     * Weither or not the subscription is active
     * @return bool
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set Activated
     * Weither or not the subscription is active
     * @param  bool $value
     * @return $this
     */
    public function setActivated($value)
    {
        $this->activated = $value;
        return $this;
    }
    
    /**
     * Get Ended
     * Weither or not the subscription has ended (programmatically or canceled)
     * @return bool
     */
    public function getEnded()
    {
        return $this->ended;
    }

    /**
     * Set Ended
     * Weither or not the subscription has ended (programmatically or canceled)
     * @param  bool $value
     * @return $this
     */
    public function setEnded($value)
    {
        $this->ended = $value;
        return $this;
    }
    
    /**
     * Get EndedReason
     * Reason as to why the subscription ended
     * @return string
     */
    public function getEndedReason()
    {
        return $this->endedReason;
    }

    /**
     * Set EndedReason
     * Reason as to why the subscription ended
     * @param  string $value
     * @return $this
     */
    public function setEndedReason($value)
    {
        $this->endedReason = $value;
        return $this;
    }
    
    /**
     * Get Sandbox
     * Define whether or not the authorization is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the authorization is in sandbox environment
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
     * Date at which the invoice was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the invoice was created
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
     * @return Subscription
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["project"]))
            $this->setProject($data["project"]);

        if(! empty($data["customer"]))
            $this->setCustomer($data["customer"]);

        if(! empty($data["token"]))
            $this->setToken($data["token"]);

        if(! empty($data["url"]))
            $this->setUrl($data["url"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["amount"]))
            $this->setAmount($data["amount"]);

        if(! empty($data["currency"]))
            $this->setCurrency($data["currency"]);

        if(! empty($data["metadata"]))
            $this->setMetadata($data["metadata"]);

        if(! empty($data["return_url"]))
            $this->setReturnUrl($data["return_url"]);

        if(! empty($data["cancel_url"]))
            $this->setCancelUrl($data["cancel_url"]);

        if(! empty($data["interval"]))
            $this->setInterval($data["interval"]);

        if(! empty($data["trial_period"]))
            $this->setTrialPeriod($data["trial_period"]);

        if(! empty($data["activated"]))
            $this->setActivated($data["activated"]);

        if(! empty($data["ended"]))
            $this->setEnded($data["ended"]);

        if(! empty($data["ended_reason"]))
            $this->setEndedReason($data["ended_reason"]);

        if(! empty($data["sandbox"]))
            $this->setSandbox($data["sandbox"]);

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        return $this;
    }

    /**
     * Get the customer owning the subscription.
     * @param array $options
     * @return Customer
     */
    public function customer($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/customers";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($cur->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Get the customer action needed to be continue the subscription authorization flow on the given gateway.
	 * @param string $gatewayConfigurationId
     * @param array $options
     * @return CustomerAction
     */
    public function customerAction($gatewayConfigurationId, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/gateway-configurations/" . urlencode($gatewayConfigurationId) . "/customer-action";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer_action'];
        $customerAction = new CustomerAction($cur->instance);
        return $customerAction->fillWithData($body);
        
    }

    /**
     * Get the invoice corresponding to the last iteration of the subscription.
     * @param array $options
     * @return Invoice
     */
    public function invoice($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "/invoices";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['invoice'];
        $invoice = new Invoice($cur->instance);
        return $invoice->fillWithData($body);
        
    }

    /**
     * Create a new subscription for the given customer.
	 * @param string $customerId
     * @param array $options
     * @return $this
     */
    public function create($customerId, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/subscriptions";

        $data = array(
			"name" => $this->getName(), 
			"amount" => $this->getAmount(), 
			"currency" => $this->getCurrency(), 
			"metadata" => $this->getMetadata(), 
			"return_url" => $this->getReturnUrl(), 
			"cancel_url" => $this->getCancelUrl(), 
			"interval" => $this->getInterval(), 
			"trial_period" => $this->getTrialPeriod(), 
			"ended_reason" => $this->getEndedReason(), 
			"customer_id" => $customerId
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['subscription'];
        return $cur->fillWithData($body);
        
    }

    /**
     * Find a subscription by its ID.
	 * @param string $subscriptionId
     * @param array $options
     * @return $this
     */
    public static function find($subscriptionId, $options = array())
    {
        $cur = new Subscription();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/subscriptions/" . urlencode($subscriptionId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['subscription'];
        return $cur->fillWithData($body);
        
    }

    /**
     * Activate the subscription with the provided token.
	 * @param string $source
     * @param array $options
     * @return bool
     */
    public function activate($source, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "";

        $data = array(
			"source" => $source
        );

        $response = new Response($request->post($path, $data, $options));
        return $response->isSuccess();
        
    }

    /**
     * Update the subscription.
     * @param array $options
     * @return $this
     */
    public function update($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = new Response($request->put($path, $data, $options));
        $body = $response->getBody();
        $body = $body['subscription'];
        return $cur->fillWithData($body);
        
    }

    /**
     * End a subscription. The reason may be provided as well.
	 * @param string $reason
     * @param array $options
     * @return bool
     */
    public function end($reason, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/subscriptions/" . urlencode($this->getId()) . "";

        $data = array(
			"reason" => $reason
        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    
}
