<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class AuthorizationRequest
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the authorization
     * @var string
     */
    protected $id;

    /**
     * Project to which the authorization request belongs
     * @var object
     */
    protected $project;

    /**
     * Customer linked to the authorization request
     * @var object
     */
    protected $customer;

    /**
     * Token linked to the authorization request, once authorized
     * @var object
     */
    protected $token;

    /**
     * URL to which you may redirect your customer to proceed with the authorization
     * @var string
     */
    protected $url;

    /**
     * Whether or not the authorization request was authorized
     * @var boolean
     */
    protected $authorized;

    /**
     * Name of the authorization
     * @var string
     */
    protected $name;

    /**
     * Currency of the authorization
     * @var string
     */
    protected $currency;

    /**
     * URL where the customer will be redirected upon authorization
     * @var string
     */
    protected $returnUrl;

    /**
     * URL where the customer will be redirected if the authorization was canceled
     * @var string
     */
    protected $cancelUrl;

    /**
     * Custom variable passed along in the events/webhooks
     * @var string
     */
    protected $custom;

    /**
     * Define whether or not the authorization is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the authorization was created
     * @var string
     */
    protected $createdAt;

    /**
     * AuthorizationRequest constructor
     * @param ProcessOut\ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
        {
            $processOut = ProcessOut::getDefault();
        }

        $this->instance = $processOut;

        
    }

    
    /**
     * Get Id
     * ID of the authorization
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the authorization
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
     * Project to which the authorization request belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the authorization request belongs
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
     * Customer linked to the authorization request
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer linked to the authorization request
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
     * Token linked to the authorization request, once authorized
     * @return object
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set Token
     * Token linked to the authorization request, once authorized
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
     * URL to which you may redirect your customer to proceed with the authorization
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which you may redirect your customer to proceed with the authorization
     * @param  string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->url = $value;
        return $this;
    }
    
    /**
     * Get Authorized
     * Whether or not the authorization request was authorized
     * @return bool
     */
    public function getAuthorized()
    {
        return $this->authorized;
    }

    /**
     * Set Authorized
     * Whether or not the authorization request was authorized
     * @param  bool $value
     * @return $this
     */
    public function setAuthorized($value)
    {
        $this->authorized = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the authorization
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the authorization
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency of the authorization
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the authorization
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get ReturnUrl
     * URL where the customer will be redirected upon authorization
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set ReturnUrl
     * URL where the customer will be redirected upon authorization
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
     * URL where the customer will be redirected if the authorization was canceled
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * Set CancelUrl
     * URL where the customer will be redirected if the authorization was canceled
     * @param  string $value
     * @return $this
     */
    public function setCancelUrl($value)
    {
        $this->cancelUrl = $value;
        return $this;
    }
    
    /**
     * Get Custom
     * Custom variable passed along in the events/webhooks
     * @return string
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Set Custom
     * Custom variable passed along in the events/webhooks
     * @param  string $value
     * @return $this
     */
    public function setCustom($value)
    {
        $this->custom = $value;
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
     * Date at which the authorization was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the authorization was created
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
     * @return AuthorizationRequest
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

        if(! empty($data["authorized"]))
            $this->setAuthorized($data["authorized"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["currency"]))
            $this->setCurrency($data["currency"]);

        if(! empty($data["return_url"]))
            $this->setReturnUrl($data["return_url"]);

        if(! empty($data["cancel_url"]))
            $this->setCancelUrl($data["cancel_url"]);

        if(! empty($data["custom"]))
            $this->setCustom($data["custom"]);

        if(! empty($data["sandbox"]))
            $this->setSandbox($data["sandbox"]);

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        return $this;
    }

    /**
     * Get the customer linked to the authorization request.
     * @param array $options
     * @return Customer
     */
    public function customer($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/authorization-requests/" . urlencode($this->getId()) . "/customers";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $returnValues = array();

        
        // Handling for field customer
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($cur->instance);
        $returnValues["customer"] = $customer->fillWithData($body);
                
        return array_values($returnValues)[0];
        
    }

    /**
     * Create a new authorization request for the given customer ID.
	 * @param string $customerId
     * @param array $options
     * @return $this
     */
    public function create($customerId, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/authorization-requests";

        $data = array(
			"name" => $this->getName(), 
			"currency" => $this->getCurrency(), 
			"return_url" => $this->getReturnUrl(), 
			"cancel_url" => $this->getCancelUrl(), 
			"custom" => $this->getCustom(), 
			"customer_id" => $customerId
        );

        $response = new Response($request->post($path, $data, $options));
        $returnValues = array();

        
        // Handling for field authorization_request
        $body = $response->getBody();
                    $body = $body['authorization_request'];
                    
        $returnValues["create"] = $cur->fillWithData($body);
        return array_values($returnValues)[0];
        
    }

    /**
     * Find an authorization request by its ID.
	 * @param string $authorizationRequestId
     * @param array $options
     * @return $this
     */
    public static function find($authorizationRequestId, $options = array())
    {
        $cur = new AuthorizationRequest();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/authorization-requests/" . urlencode($authorizationRequestId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $returnValues = array();

        
        // Handling for field authorization_request
        $body = $response->getBody();
                    $body = $body['authorization_request'];
                    
        $returnValues["find"] = $cur->fillWithData($body);
        return array_values($returnValues)[0];
        
    }

    
}
