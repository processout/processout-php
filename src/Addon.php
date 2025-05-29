<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Addon implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the addon
     * @var string
     */
    protected $id;

    /**
     * Project to which the addon belongs
     * @var object
     */
    protected $project;

    /**
     * ID of the project to which the addon belongs
     * @var string
     */
    protected $projectId;

    /**
     * Subscription to which the addon belongs
     * @var object
     */
    protected $subscription;

    /**
     * ID of the subscription to which the addon belongs
     * @var string
     */
    protected $subscriptionId;

    /**
     * Plan used to create the addon, if any
     * @var object
     */
    protected $plan;

    /**
     * ID of the plan used to create the addon, if any
     * @var string
     */
    protected $planId;

    /**
     * Type of the addon. Can be either metered or recurring
     * @var string
     */
    protected $type;

    /**
     * Name of the addon
     * @var string
     */
    protected $name;

    /**
     * Amount of the addon
     * @var decimal
     */
    protected $amount;

    /**
     * Quantity of the addon
     * @var integer
     */
    protected $quantity;

    /**
     * Metadata related to the addon, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Define whether or not the addon is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the addon was created
     * @var string
     */
    protected $createdAt;

    /**
     * Addon constructor
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
     * ID of the addon
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the addon
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
     * Project to which the addon belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the addon belongs
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
     * ID of the project to which the addon belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the addon belongs
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
     * Subscription to which the addon belongs
     * @return object
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set Subscription
     * Subscription to which the addon belongs
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
     * Get Plan
     * Plan used to create the addon, if any
     * @return object
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set Plan
     * Plan used to create the addon, if any
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
     * ID of the plan used to create the addon, if any
     * @return string
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * Set PlanId
     * ID of the plan used to create the addon, if any
     * @param  string $value
     * @return $this
     */
    public function setPlanId($value)
    {
        $this->planId = $value;
        return $this;
    }
    
    /**
     * Get Type
     * Type of the addon. Can be either metered or recurring
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Type of the addon. Can be either metered or recurring
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the addon
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the addon
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
     * Amount of the addon
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount of the addon
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get Quantity
     * Quantity of the addon
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set Quantity
     * Quantity of the addon
     * @param  int $value
     * @return $this
     */
    public function setQuantity($value)
    {
        $this->quantity = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the addon, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the addon, in the form of a dictionary (key-value pair)
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
     * Define whether or not the addon is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the addon is in sandbox environment
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
     * Date at which the addon was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the addon was created
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
     * @return Addon
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

        if(! empty($data['plan']))
            $this->setPlan($data['plan']);

        if(! empty($data['plan_id']))
            $this->setPlanId($data['plan_id']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['quantity']))
            $this->setQuantity($data['quantity']);

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
    public function jsonSerialize() {
        return array(
            "id" => $this->getId(),
            "project" => $this->getProject(),
            "project_id" => $this->getProjectId(),
            "subscription" => $this->getSubscription(),
            "subscription_id" => $this->getSubscriptionId(),
            "plan" => $this->getPlan(),
            "plan_id" => $this->getPlanId(),
            "type" => $this->getType(),
            "name" => $this->getName(),
            "amount" => $this->getAmount(),
            "quantity" => $this->getQuantity(),
            "metadata" => $this->getMetadata(),
            "sandbox" => $this->getSandbox(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
    /**
     * Get the addons applied to the subscription.
     * @param string $subscriptionId
     * @param array $options
     * @return array
     */
    public function fetchSubscriptionAddons($subscriptionId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($subscriptionId) . "/addons";

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
     * Create a new addon to the given subscription ID.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getSubscriptionId()) . "/addons";

        $data = array(
            "plan_id" => $this->getPlanId(), 
            "type" => $this->getType(), 
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "quantity" => $this->getQuantity(), 
            "metadata" => $this->getMetadata(), 
            "prorate" => (!empty($options["prorate"])) ? $options["prorate"] : null, 
            "proration_date" => (!empty($options["proration_date"])) ? $options["proration_date"] : null, 
            "preview" => (!empty($options["preview"])) ? $options["preview"] : null
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field addon
        $body = $response->getBody();
        if (isset($body['addon'])) {
            $body = $body['addon'];
            $returnValues['create'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a subscription's addon by its ID.
     * @param string $subscriptionId
     * @param string $addonId
     * @param array $options
     * @return $this
     */
    public function find($subscriptionId, $addonId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($subscriptionId) . "/addons/" . urlencode($addonId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field addon
        $body = $response->getBody();
        if (isset($body['addon'])) {
            $body = $body['addon'];
            $returnValues['find'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Save the updated addon attributes.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getSubscriptionId()) . "/addons/" . urlencode($this->getId()) . "";

        $data = array(
            "plan_id" => $this->getPlanId(), 
            "type" => $this->getType(), 
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "quantity" => $this->getQuantity(), 
            "metadata" => $this->getMetadata(), 
            "prorate" => (!empty($options["prorate"])) ? $options["prorate"] : null, 
            "proration_date" => (!empty($options["proration_date"])) ? $options["proration_date"] : null, 
            "preview" => (!empty($options["preview"])) ? $options["preview"] : null, 
            "increment_quantity_by" => (!empty($options["increment_quantity_by"])) ? $options["increment_quantity_by"] : null
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field addon
        $body = $response->getBody();
        if (isset($body['addon'])) {
            $body = $body['addon'];
            $returnValues['save'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete an addon applied to a subscription.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/subscriptions/" . urlencode($this->getSubscriptionId()) . "/addons/" . urlencode($this->getId()) . "";

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
    
}
