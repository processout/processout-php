<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Product implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the product
     * @var string
     */
    protected $id;

    /**
     * Project to which the product belongs
     * @var object
     */
    protected $project;

    /**
     * ID of the project to which the product belongs
     * @var string
     */
    protected $projectId;

    /**
     * URL to which you may redirect your customer to proceed with the payment
     * @var string
     */
    protected $url;

    /**
     * Name of the product
     * @var string
     */
    protected $name;

    /**
     * Amount of the product
     * @var decimal
     */
    protected $amount;

    /**
     * Currency of the product
     * @var string
     */
    protected $currency;

    /**
     * Metadata related to the product, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * URL where the customer will be redirected upon payment
     * @var string
     */
    protected $returnUrl;

    /**
     * URL where the customer will be redirected if the paymen was canceled
     * @var string
     */
    protected $cancelUrl;

    /**
     * Define whether or not the product is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the product was created
     * @var string
     */
    protected $createdAt;

    /**
     * Product constructor
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
     * ID of the product
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the product
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
     * Project to which the product belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the product belongs
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
     * ID of the project to which the product belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the product belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get Url
     * URL to which you may redirect your customer to proceed with the payment
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which you may redirect your customer to proceed with the payment
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
     * Name of the product
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the product
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
     * Amount of the product
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount of the product
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
     * Currency of the product
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the product
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
     * Metadata related to the product, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the product, in the form of a dictionary (key-value pair)
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
     * URL where the customer will be redirected upon payment
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set ReturnUrl
     * URL where the customer will be redirected upon payment
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
     * URL where the customer will be redirected if the paymen was canceled
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * Set CancelUrl
     * URL where the customer will be redirected if the paymen was canceled
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
     * Define whether or not the product is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the product is in sandbox environment
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
     * Date at which the product was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the product was created
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
     * @return Product
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

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
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "id" => $this->getId(),
            "project" => $this->getProject(),
            "project_id" => $this->getProjectId(),
            "url" => $this->getUrl(),
            "name" => $this->getName(),
            "amount" => $this->getAmount(),
            "currency" => $this->getCurrency(),
            "metadata" => $this->getMetadata(),
            "return_url" => $this->getReturnUrl(),
            "cancel_url" => $this->getCancelUrl(),
            "sandbox" => $this->getSandbox(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
    /**
     * Create a new invoice from the product.
     * @param array $options
     * @return Invoice
     */
    public function createInvoice($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/products/" . urlencode($this->getId()) . "/invoices";

        $data = array(

        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field invoice
        $body = $response->getBody();
        $body = $body['invoice'];
        $invoice = new Invoice($this->client);
        $returnValues['invoice'] = $invoice->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get all the products.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/products";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field products
        $a    = array();
        $body = $response->getBody();
        foreach($body['products'] as $v)
        {
            $tmp = new Product($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Products'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new product.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/products";

        $data = array(
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "currency" => $this->getCurrency(), 
            "metadata" => $this->getMetadata(), 
            "return_url" => $this->getReturnUrl(), 
            "cancel_url" => $this->getCancelUrl()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field product
        $body = $response->getBody();
        $body = $body['product'];
        $returnValues['create'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a product by its ID.
     * @param string $productId
     * @param array $options
     * @return $this
     */
    public function find($productId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/products/" . urlencode($productId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field product
        $body = $response->getBody();
        $body = $body['product'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Save the updated product attributes.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/products/" . urlencode($this->getId()) . "";

        $data = array(
            "name" => $this->getName(), 
            "amount" => $this->getAmount(), 
            "currency" => $this->getCurrency(), 
            "metadata" => $this->getMetadata(), 
            "return_url" => $this->getReturnUrl(), 
            "cancel_url" => $this->getCancelUrl()
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field product
        $body = $response->getBody();
        $body = $body['product'];
        $returnValues['save'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete the product.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/products/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
