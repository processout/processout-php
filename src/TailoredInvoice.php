<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class TailoredInvoice
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the tailored invoice
     * @var string
     */
    protected $id;

    /**
     * Name of the tailored invoice
     * @var string
     */
    protected $name;

    /**
     * Price of the tailored invoice
     * @var string
     */
    protected $price;

    /**
     * Currency of the tailored invoice
     * @var string
     */
    protected $currency;

    /**
     * Taxes applied on the tailored invoice (on top of the price)
     * @var string
     */
    protected $taxes;

    /**
     * Shipping fees applied on the tailored invoice (on top of the price)
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
     * Date at which the tailored invoice was created
     * @var string
     */
    protected $createdAt;

    /**
     * TailoredInvoice constructor
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
     * ID of the tailored invoice
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the tailored invoice
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the tailored invoice
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the tailored invoice
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
     * Price of the tailored invoice
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set Price
     * Price of the tailored invoice
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
     * Currency of the tailored invoice
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the tailored invoice
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
     * Taxes applied on the tailored invoice (on top of the price)
     * @return string
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Set Taxes
     * Taxes applied on the tailored invoice (on top of the price)
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
     * Shipping fees applied on the tailored invoice (on top of the price)
     * @return string
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set Shipping
     * Shipping fees applied on the tailored invoice (on top of the price)
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
     * Get CreatedAt
     * Date at which the tailored invoice was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the tailored invoice was created
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
     * @return TailoredInvoice
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

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

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        return $this;
    }

    /**
     * Create a new invoice from the tailored invoice.
     * @param array $options
     * @return Invoice
     */
    public function invoice($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/tailored-invoices/" . urlencode($this->getId()) . "/invoices";

        $data = array(

        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['invoice'];
        $invoice = new Invoice($cur->instance);
        return $invoice->fillWithData($body);
        
    }

    /**
     * Get all the tailored invoices.
     * @param array $options
     * @return array
     */
    public static function all($options = array())
    {
        $cur = new TailoredInvoice();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/tailored-invoices";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['tailored_invoices'] as $v)
        {
            $tmp = new TailoredInvoice($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Create a new tailored invoice.
     * @param array $options
     * @return TailoredInvoice
     */
    public function create($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/tailored-invoices";

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
        $body = $body['tailored_invoice'];
        $tailoredInvoice = new TailoredInvoice($cur->instance);
        return $tailoredInvoice->fillWithData($body);
        
    }

    /**
     * Find a tailored invoice by its ID.
	 * @param string $tailoredInvoiceId
     * @param array $options
     * @return TailoredInvoice
     */
    public static function find($tailoredInvoiceId, $options = array())
    {
        $cur = new TailoredInvoice();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/tailored-invoices/" . urlencode($tailoredInvoiceId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['tailored_invoice'];
        $tailoredInvoice = new TailoredInvoice($cur->instance);
        return $tailoredInvoice->fillWithData($body);
        
    }

    /**
     * Save the updated tailored invoice attributes.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/tailored-invoices/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = new Response($request->put($path, $data, $options));
        $body = $response->getBody();
        $body = $body['tailored_invoice'];
        return $cur->fillWithData($body);
        
    }

    /**
     * Delete the tailored invoice.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/tailored-invoices/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    
}
