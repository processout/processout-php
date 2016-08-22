<?php

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
     * Customer linked to the authorization
     * @var object
     */
    protected $customer;

    /**
     * URL to which you may redirect your customer to proceed with the authorization
     * @var string
     */
    protected $url;

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
     * Get Customer
     * Customer linked to the authorization
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer linked to the authorization
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

        if(! empty($data["customer"]))
            $this->setCustomer($data["customer"]);

        if(! empty($data["url"]))
            $this->setUrl($data["url"]);

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
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($cur->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Authorize (create) a new customer token on the given gateway.
	 * @param string $gatewayName
	 * @param string $name
	 * @param string $token
     * @param array $options
     * @return Token
     */
    public function authorize($gatewayName, $name, $token, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/authorization-requests/" . urlencode($this->getId()) . "/gateways/" . urlencode($gatewayName) . "/tokens";

        $data = array(
			"name" => $name, 
			"token" => $token
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['token'];
        $token = new Token($cur->instance);
        return $token->fillWithData($body);
        
    }

    /**
     * Create a new authorization request for the given customer ID.
	 * @param string $customerId
     * @param array $options
     * @return AuthorizationRequest
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
        $body = $response->getBody();
        $body = $body['authorization_request'];
        $authorizationRequest = new AuthorizationRequest($cur->instance);
        return $authorizationRequest->fillWithData($body);
        
    }

    /**
     * Find an authorization request by its ID.
	 * @param string $id
     * @param array $options
     * @return $this
     */
    public static function find($id, $options = array())
    {
        $cur = new AuthorizationRequest();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/authorization-requests/" . urlencode($id) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['authorization_request'];
        return $cur->fillWithData($body);
        
    }

    
}
