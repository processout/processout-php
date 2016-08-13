<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class Invoice
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the invoice
     * @var string
     */
    protected $id;

    /**
     * Customer linked to the invoice, if any
     * @var object
     */
    protected $customer;

    /**
     * Recurring invoice to which the invoice is linked to, if any
     * @var object
     */
    protected $recurringInvoice;

    /**
     * URL to which you may redirect your customer to proceed with the payment
     * @var string
     */
    protected $url;

    /**
     * Name of the invoice
     * @var string
     */
    protected $name;

    /**
     * Price of the invoice
     * @var string
     */
    protected $price;

    /**
     * Currency of the invoice
     * @var string
     */
    protected $currency;

    /**
     * Taxes applied on the invoice (on top of the price)
     * @var string
     */
    protected $taxes;

    /**
     * Shipping fees applied on the invoice (on top of the price)
     * @var string
     */
    protected $shipping;

    /**
     * Choose whether or not to request the email during the checkout process
     * @var boolean
     */
    protected $requestEmail;

    /**
     * Choose whether or not to request the shipping address during the checkout process
     * @var boolean
     */
    protected $requestShipping;

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
     * Date at which the invoice was created
     * @var string
     */
    protected $createdAt;

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

        $this->instance = $processOut;

        $this->setTaxes("0.00");
        $this->setShipping("0.00");
        $this->setRequestEmail((bool) false);
        $this->setRequestShipping((bool) false);
        
    }

    
    /**
     * Get Id
     * ID of the invoice
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the invoice
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
     * Customer linked to the invoice, if any
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer linked to the invoice, if any
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
     * Get RecurringInvoice
     * Recurring invoice to which the invoice is linked to, if any
     * @return object
     */
    public function getRecurringInvoice()
    {
        return $this->recurringInvoice;
    }

    /**
     * Set RecurringInvoice
     * Recurring invoice to which the invoice is linked to, if any
     * @param  object $value
     * @return $this
     */
    public function setRecurringInvoice($value)
    {
        if (is_object($value))
            $this->recurringInvoice = $value;
        else
        {
            $obj = new RecurringInvoice($this->instance);
            $obj->fillWithData($value);
            $this->recurringInvoice = $obj;
        }
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
     * Name of the invoice
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the invoice
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
     * Price of the invoice
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set Price
     * Price of the invoice
     * @param  string $value
     * @return $this
     */
    public function setPrice($value)
    {
        $this->price = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency of the invoice
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the invoice
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get Taxes
     * Taxes applied on the invoice (on top of the price)
     * @return string
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Set Taxes
     * Taxes applied on the invoice (on top of the price)
     * @param  string $value
     * @return $this
     */
    public function setTaxes($value)
    {
        $this->taxes = $value;
        return $this;
    }
    
    /**
     * Get Shipping
     * Shipping fees applied on the invoice (on top of the price)
     * @return string
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set Shipping
     * Shipping fees applied on the invoice (on top of the price)
     * @param  string $value
     * @return $this
     */
    public function setShipping($value)
    {
        $this->shipping = $value;
        return $this;
    }
    
    /**
     * Get RequestEmail
     * Choose whether or not to request the email during the checkout process
     * @return bool
     */
    public function getRequestEmail()
    {
        return $this->requestEmail;
    }

    /**
     * Set RequestEmail
     * Choose whether or not to request the email during the checkout process
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
     * Choose whether or not to request the shipping address during the checkout process
     * @return bool
     */
    public function getRequestShipping()
    {
        return $this->requestShipping;
    }

    /**
     * Set RequestShipping
     * Choose whether or not to request the shipping address during the checkout process
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
     * @return Invoice
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["customer"]))
            $this->setCustomer($data["customer"]);

        if(! empty($data["recurring_invoice"]))
            $this->setRecurringInvoice($data["recurring_invoice"]);

        if(! empty($data["url"]))
            $this->setUrl($data["url"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["price"]))
            $this->setPrice($data["price"]);

        if(! empty($data["currency"]))
            $this->setCurrency($data["currency"]);

        if(! empty($data["taxes"]))
            $this->setTaxes($data["taxes"]);

        if(! empty($data["shipping"]))
            $this->setShipping($data["shipping"]);

        if(! empty($data["request_email"]))
            $this->setRequestEmail($data["request_email"]);

        if(! empty($data["request_shipping"]))
            $this->setRequestShipping($data["request_shipping"]);

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
     * Get the customer linked to the invoice.
     * @param array $options
     * @return Customer
     */
    public function customer($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/invoices/" . urlencode($this->getInvoiceId()) . "/customers";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($cur->instance);
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
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/invoices/" . urlencode($this->getInvoiceId()) . "/customers";

        $data = array(
			"customer_id" => $customerId
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($cur->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Charge the invoice using the given customer token ID.
	 * @param string $tokenId
     * @param array $options
     * @return bool
     */
    public function charge($tokenId, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/invoices/" . urlencode($this->getInvoiceId()) . "/tokens/" . urlencode($tokenId) . "/charges";

        $data = array(

        );

        $response = new Response($request->post($path, $data, $options));
        return $response->isSuccess();
        
    }

    /**
     * Get all the customer tokens available on the current invoice.
     * @param array $options
     * @return array
     */
    public function tokens($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/invoices/" . urlencode($this->getInvoiceId()) . "/tokens";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['tokens'] as $v)
        {
            $tmp = new Token($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Get all the invoices.
     * @param array $options
     * @return array
     */
    public static function all($options = array())
    {
        $cur = new Invoice();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/invoices";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['invoices'] as $v)
        {
            $tmp = new Invoice($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Create a new invoice.
     * @param array $options
     * @return Invoice
     */
    public function create($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
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
			"custom" => $this->getCustom()
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['invoice'];
        $invoice = new Invoice($cur->instance);
        return $invoice->fillWithData($body);
        
    }

    /**
     * Find an invoice by its ID.
	 * @param string $invoiceId
     * @param array $options
     * @return Invoice
     */
    public static function find($invoiceId, $options = array())
    {
        $cur = new Invoice();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/invoices/" . urlencode($invoiceId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['invoice'];
        $invoice = new Invoice($cur->instance);
        return $invoice->fillWithData($body);
        
    }

    /**
     * Lock the invoice so it can't be interacted with anymore.
     * @param array $options
     * @return bool
     */
    public function lock($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/invoices/" . urlencode($this->getInvoiceId()) . "";

        $data = array(

        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    
}
