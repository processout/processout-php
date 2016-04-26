<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;
use ProcessOut\Networking\RequestProcessoutPublic;


class Invoice
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * URL where to redirect the customer when the transaction has been canceled. Defaults to ProcessOut's landing page
     * @var string
     */
    protected $cancelUrl;

    /**
     * Currency of the item's price (ex: USD)
     * @var string
     */
    protected $currency;

    /**
     * Custom value, can be anything. The value is sent back to notify_url
     * @var string
     */
    protected $custom;

    /**
     * Id of the created invoice
     * @var string
     */
    protected $id;

    /**
     * Contains a key value dictionary representing additional informations shown on the checkout page
     * @var dictionary
     */
    protected $metas;

    /**
     * Name of the item
     * @var string
     */
    protected $name;

    /**
     * Price of the item
     * @var string
     */
    protected $price;

    /**
     * Determine if we want to ask the customer for his email
     * @var boolean
     */
    protected $requestEmail;

    /**
     * Determine if we want to ask the customer for its shipping address
     * @var boolean
     */
    protected $requestShipping;

    /**
     * URL where to redirect the customer once the payment has been placed. Defaults to ProcessOut's landing page
     * @var string
     */
    protected $returnUrl;

    /**
     * Shipping price added on top of the item price
     * @var string
     */
    protected $shipping;

    /**
     * Taxes price added on top of the item price
     * @var string
     */
    protected $taxes;

    /**
     * URL to which you can redirect your customer in order to pay
     * @var string
     */
    protected $url;

    /**
     * Invoice constructor
     * @param ProcessOut\ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
        {
            $processOut = ProcessOut::getDefault();
        }

        $this->instance = $processOut;$this->setRequestEmail((bool) false);
        $this->setRequestShipping((bool) false);
        $this->setShipping("0.00");
        $this->setTaxes("0.00");
        
    }

    
    /**
     * Get CancelUrl
     * URL where to redirect the customer when the transaction has been canceled. Defaults to ProcessOut's landing page
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * Set CancelUrl
     * URL where to redirect the customer when the transaction has been canceled. Defaults to ProcessOut's landing page
     * @param  string $value
     * @return $this
     */
    public function setCancelUrl($value)
    {
        $this->cancelUrl = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency of the item's price (ex: USD)
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the item's price (ex: USD)
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get Custom
     * Custom value, can be anything. The value is sent back to notify_url
     * @return string
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Set Custom
     * Custom value, can be anything. The value is sent back to notify_url
     * @param  string $value
     * @return $this
     */
    public function setCustom($value)
    {
        $this->custom = $value;
        return $this;
    }
    
    /**
     * Get Id
     * Id of the created invoice
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * Id of the created invoice
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Metas
     * Contains a key value dictionary representing additional informations shown on the checkout page
     * @return array
     */
    public function getMetas()
    {
        return $this->metas;
    }

    /**
     * Set Metas
     * Contains a key value dictionary representing additional informations shown on the checkout page
     * @param  array $value
     * @return $this
     */
    public function setMetas($value)
    {
        $this->metas = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the item
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the item
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Price
     * Price of the item
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set Price
     * Price of the item
     * @param  string $value
     * @return $this
     */
    public function setPrice($value)
    {
        $this->price = $value;
        return $this;
    }
    
    /**
     * Get RequestEmail
     * Determine if we want to ask the customer for his email
     * @return bool
     */
    public function getRequestEmail()
    {
        return $this->requestEmail;
    }

    /**
     * Set RequestEmail
     * Determine if we want to ask the customer for his email
     * @param  bool $value
     * @return $this
     */
    public function setRequestEmail($value)
    {
        $this->requestEmail = $value;
        return $this;
    }
    
    /**
     * Get RequestShipping
     * Determine if we want to ask the customer for its shipping address
     * @return bool
     */
    public function getRequestShipping()
    {
        return $this->requestShipping;
    }

    /**
     * Set RequestShipping
     * Determine if we want to ask the customer for its shipping address
     * @param  bool $value
     * @return $this
     */
    public function setRequestShipping($value)
    {
        $this->requestShipping = $value;
        return $this;
    }
    
    /**
     * Get ReturnUrl
     * URL where to redirect the customer once the payment has been placed. Defaults to ProcessOut's landing page
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set ReturnUrl
     * URL where to redirect the customer once the payment has been placed. Defaults to ProcessOut's landing page
     * @param  string $value
     * @return $this
     */
    public function setReturnUrl($value)
    {
        $this->returnUrl = $value;
        return $this;
    }
    
    /**
     * Get Shipping
     * Shipping price added on top of the item price
     * @return string
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set Shipping
     * Shipping price added on top of the item price
     * @param  string $value
     * @return $this
     */
    public function setShipping($value)
    {
        $this->shipping = $value;
        return $this;
    }
    
    /**
     * Get Taxes
     * Taxes price added on top of the item price
     * @return string
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Set Taxes
     * Taxes price added on top of the item price
     * @param  string $value
     * @return $this
     */
    public function setTaxes($value)
    {
        $this->taxes = $value;
        return $this;
    }
    
    /**
     * Get Url
     * URL to which you can redirect your customer in order to pay
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which you can redirect your customer in order to pay
     * @param  string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->url = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Invoice
     */
    public function fillWithData($data)
    {
        if(! empty($data["cancel_url"]))
            $this->setCancelUrl($data["cancel_url"]);

        if(! empty($data["currency"]))
            $this->setCurrency($data["currency"]);

        if(! empty($data["custom"]))
            $this->setCustom($data["custom"]);

        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["metas"]))
            $this->setMetas($data["metas"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["price"]))
            $this->setPrice($data["price"]);

        if(! empty($data["request_email"]))
            $this->setRequestEmail($data["request_email"]);

        if(! empty($data["request_shipping"]))
            $this->setRequestShipping($data["request_shipping"]);

        if(! empty($data["return_url"]))
            $this->setReturnUrl($data["return_url"]);

        if(! empty($data["shipping"]))
            $this->setShipping($data["shipping"]);

        if(! empty($data["taxes"]))
            $this->setTaxes($data["taxes"]);

        if(! empty($data["url"]))
            $this->setUrl($data["url"]);

        return $this;
    }

    /**
     * Create an invoice.
     * @param array $options
     * @return Invoice
     */
    public function create($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/invoices";

        $data = array(
			"name" => $this->getName(), 
			"price" => $this->getPrice(), 
			"taxes" => $this->getTaxes(), 
			"shipping" => $this->getShipping(), 
			"currency" => $this->getCurrency(), 
			"request_email" => $this->getRequestEmail(), 
			"request_shipping" => $this->getRequestShipping(), 
			"return_url" => $this->getReturnUrl(), 
			"cancel_url" => $this->getCancelUrl(), 
			"metas" => $this->getMetas(), 
			"custom" => $this->getCustom()
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['invoice'];
        $invoice = new Invoice($this->instance);
        return $invoice->fillWithData($body);
        
    }

    /**
     * Get the invoice data.
	 * @param string $id
     * @param array $options
     * @return $this
     */
    public static function find($id, $options = array())
    {
        $request = new RequestProcessoutPublic($this->instance);
        $path    = "/invoices/" . urlencode($id) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['invoice'];
        return $this->fillWithData($body);
        
    }

    /**
     * Charge using a manually generated payment gateway token.
	 * @param string $token
     * @param array $options
     * @return CustomerAction
     */
    public function charge($token, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/invoices/" . urlencode($this->getId()) . "/gateways/{gateway_name}/charges";

        $data = array(
			"token" => $token
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer_action'];
        $customerAction = new CustomerAction($this->instance);
        return $customerAction->fillWithData($body);
        
    }

    /**
     * Charge using a customer token.
	 * @param string $tokenId
     * @param array $options
     * @return CustomerAction
     */
    public function chargeWithToken($tokenId, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/invoices/" . urlencode($this->getId()) . "/tokens/" . urlencode($tokenId) . "/charges";

        $data = array(

        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer_action'];
        $customerAction = new CustomerAction($this->instance);
        return $customerAction->fillWithData($body);
        
    }

    /**
     * Get the customer associated with the current invoice.
     * @param array $options
     * @return Customer
     */
    public function customer($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/invoices/" . urlencode($this->getId()) . "/customers";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($this->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Link a customer to the invoice.
	 * @param string $customerId
     * @param array $options
     * @return Customer
     */
    public function setCustomer($customerId, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/invoices/" . urlencode($this->getId()) . "/customers";

        $data = array(
			"customer_id" => $customerId
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($this->instance);
        return $customer->fillWithData($body);
        
    }

    
}
