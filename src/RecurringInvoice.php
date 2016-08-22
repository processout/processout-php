<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class RecurringInvoice
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the recurring invoice
     * @var string
     */
    protected $id;

    /**
     * Customer linked to the recurring invoice
     * @var object
     */
    protected $customer;

    /**
     * URL to which you may redirect your customer to authorize the recurring invoice
     * @var string
     */
    protected $url;

    /**
     * Name of the recurring invoice
     * @var string
     */
    protected $name;

    /**
     * Price of the recurring invoice
     * @var string
     */
    protected $price;

    /**
     * Currency of the recurring invoice
     * @var string
     */
    protected $currency;

    /**
     * Taxes applied on the recurring invoice (on top of the price)
     * @var string
     */
    protected $taxes;

    /**
     * Shipping fees applied on the recurring invoice (on top of the price)
     * @var string
     */
    protected $shipping;

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
     * The recurring payment period, formatted in the format "1d2w3m4y" (day, week, month, year)
     * @var string
     */
    protected $interval;

    /**
     * The trial period. The customer will not be charged during this time span. Formatted in the format "1d2w3m4y" (day, week, month, year)
     * @var string
     */
    protected $trialPeriod;

    /**
     * Custom variable passed along in the events/webhooks
     * @var string
     */
    protected $custom;

    /**
     * Weither or not the recurring invoice has ended (programmatically or canceled)
     * @var boolean
     */
    protected $ended;

    /**
     * Reason as to why the recurring invoice ended
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
     * RecurringInvoice constructor
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
        $this->setTrialPeriod("0d");
        
    }

    
    /**
     * Get Id
     * ID of the recurring invoice
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the recurring invoice
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
     * Customer linked to the recurring invoice
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer linked to the recurring invoice
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
     * URL to which you may redirect your customer to authorize the recurring invoice
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which you may redirect your customer to authorize the recurring invoice
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
     * Name of the recurring invoice
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the recurring invoice
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
     * Price of the recurring invoice
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set Price
     * Price of the recurring invoice
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
     * Currency of the recurring invoice
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the recurring invoice
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
     * Taxes applied on the recurring invoice (on top of the price)
     * @return string
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Set Taxes
     * Taxes applied on the recurring invoice (on top of the price)
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
     * Shipping fees applied on the recurring invoice (on top of the price)
     * @return string
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set Shipping
     * Shipping fees applied on the recurring invoice (on top of the price)
     * @param  string $value
     * @return $this
     */
    public function setShipping($value)
    {
        $this->shipping = $value;
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
     * Get Interval
     * The recurring payment period, formatted in the format "1d2w3m4y" (day, week, month, year)
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Set Interval
     * The recurring payment period, formatted in the format "1d2w3m4y" (day, week, month, year)
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
     * Get Ended
     * Weither or not the recurring invoice has ended (programmatically or canceled)
     * @return bool
     */
    public function getEnded()
    {
        return $this->ended;
    }

    /**
     * Set Ended
     * Weither or not the recurring invoice has ended (programmatically or canceled)
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
     * Reason as to why the recurring invoice ended
     * @return string
     */
    public function getEndedReason()
    {
        return $this->endedReason;
    }

    /**
     * Set EndedReason
     * Reason as to why the recurring invoice ended
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
     * @return RecurringInvoice
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

        if(! empty($data["price"]))
            $this->setPrice($data["price"]);

        if(! empty($data["currency"]))
            $this->setCurrency($data["currency"]);

        if(! empty($data["taxes"]))
            $this->setTaxes($data["taxes"]);

        if(! empty($data["shipping"]))
            $this->setShipping($data["shipping"]);

        if(! empty($data["return_url"]))
            $this->setReturnUrl($data["return_url"]);

        if(! empty($data["cancel_url"]))
            $this->setCancelUrl($data["cancel_url"]);

        if(! empty($data["interval"]))
            $this->setInterval($data["interval"]);

        if(! empty($data["trial_period"]))
            $this->setTrialPeriod($data["trial_period"]);

        if(! empty($data["custom"]))
            $this->setCustom($data["custom"]);

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
     * Get the customer linked to the recurring invoice.
     * @param array $options
     * @return Customer
     */
    public function customer($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/recurring-invoices/" . urlencode($this->getRecurringInvoiceId()) . "/customers";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($cur->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Get the invoice corresponding to the last iteration of the recurring invoice.
     * @param array $options
     * @return Invoice
     */
    public function invoice($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/recurring-invoices/" . urlencode($this->getRecurringInvoiceId()) . "/invoices";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['invoice'];
        $invoice = new Invoice($cur->instance);
        return $invoice->fillWithData($body);
        
    }

    /**
     * Create a new recurring invoice for the given customer.
	 * @param string $customerId
     * @param array $options
     * @return RecurringInvoice
     */
    public function create($customerId, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/recurring-invoices";

        $data = array(
			"name" => $this->getName(), 
			"price" => $this->getPrice(), 
			"taxes" => $this->getTaxes(), 
			"shipping" => $this->getShipping(), 
			"currency" => $this->getCurrency(), 
			"return_url" => $this->getReturnUrl(), 
			"cancel_url" => $this->getCancelUrl(), 
			"custom" => $this->getCustom(), 
			"interval" => $this->getInterval(), 
			"interval_days" => $this->getIntervalDays(), 
			"trial_period" => $this->getTrialPeriod(), 
			"trial_period_days" => $this->getTrialPeriodDays(), 
			"ended_reason" => $this->getEndedReason(), 
			"customer_id" => $customerId
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['recurring_invoice'];
        $recurringInvoice = new RecurringInvoice($cur->instance);
        return $recurringInvoice->fillWithData($body);
        
    }

    /**
     * Find a recurring invoice by its ID.
	 * @param string $recurringInvoiceId
     * @param array $options
     * @return RecurringInvoice
     */
    public static function find($recurringInvoiceId, $options = array())
    {
        $cur = new RecurringInvoice();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/recurring-invoices/" . urlencode($recurringInvoiceId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['recurring_invoice'];
        $recurringInvoice = new RecurringInvoice($cur->instance);
        return $recurringInvoice->fillWithData($body);
        
    }

    /**
     * End a recurring invoice. The reason may be provided as well.
	 * @param string $reason
     * @param array $options
     * @return bool
     */
    public function end($reason, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/recurring-invoices/" . urlencode($this->getRecurringInvoiceId()) . "";

        $data = array(
			"reason" => $reason
        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    
}
