<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;
use ProcessOut\Networking\RequestProcessoutPublic;


class RecurringInvoice
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * Currency of the item's price (ex: USD)
     * @var string
     */
    protected $currency;

    /**
     * Whether or not the recurring invoice has ended. True if expired is true
     * @var boolean
     */
    protected $ended;

    /**
     * The reason why the recurring invoice ended
     * @var string
     */
    protected $endedReason;

    /**
     * Id of the recurring invoice
     * @var string
     */
    protected $id;

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
     * The recurring payment period, in days. ProcessOut will make sure to collect your payments at the end of each period.
     * @var integer
     */
    protected $recurringDays;

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
     * The recurring trial period, in days.
     * @var integer
     */
    protected $trialDays;

    /**
     * URL to which you can redirect your customer in order to activate the recurring invoice
     * @var string
     */
    protected $url;

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

        $this->instance = $processOut;$this->setShipping("0.00");
        $this->setTaxes("0.00");
        $this->setTrialDays((int) 0);
        
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
     * Get Ended
     * Whether or not the recurring invoice has ended. True if expired is true
     * @return bool
     */
    public function getEnded()
    {
        return $this->ended;
    }

    /**
     * Set Ended
     * Whether or not the recurring invoice has ended. True if expired is true
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
     * The reason why the recurring invoice ended
     * @return string
     */
    public function getEndedReason()
    {
        return $this->endedReason;
    }

    /**
     * Set EndedReason
     * The reason why the recurring invoice ended
     * @param  string $value
     * @return $this
     */
    public function setEndedReason($value)
    {
        $this->endedReason = $value;
        return $this;
    }
    
    /**
     * Get Id
     * Id of the recurring invoice
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * Id of the recurring invoice
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
     * Get RecurringDays
     * The recurring payment period, in days. ProcessOut will make sure to collect your payments at the end of each period.
     * @return int
     */
    public function getRecurringDays()
    {
        return $this->recurringDays;
    }

    /**
     * Set RecurringDays
     * The recurring payment period, in days. ProcessOut will make sure to collect your payments at the end of each period.
     * @param  int $value
     * @return $this
     */
    public function setRecurringDays($value)
    {
        $this->recurringDays = $value;
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
     * Get TrialDays
     * The recurring trial period, in days.
     * @return int
     */
    public function getTrialDays()
    {
        return $this->trialDays;
    }

    /**
     * Set TrialDays
     * The recurring trial period, in days.
     * @param  int $value
     * @return $this
     */
    public function setTrialDays($value)
    {
        $this->trialDays = $value;
        return $this;
    }
    
    /**
     * Get Url
     * URL to which you can redirect your customer in order to activate the recurring invoice
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which you can redirect your customer in order to activate the recurring invoice
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
     * @return RecurringInvoice
     */
    public function fillWithData($data)
    {
        if(! empty($data["currency"]))
            $this->setCurrency($data["currency"]);

        if(! empty($data["ended"]))
            $this->setEnded($data["ended"]);

        if(! empty($data["ended_reason"]))
            $this->setEndedReason($data["ended_reason"]);

        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["price"]))
            $this->setPrice($data["price"]);

        if(! empty($data["recurring_days"]))
            $this->setRecurringDays($data["recurring_days"]);

        if(! empty($data["shipping"]))
            $this->setShipping($data["shipping"]);

        if(! empty($data["taxes"]))
            $this->setTaxes($data["taxes"]);

        if(! empty($data["trial_days"]))
            $this->setTrialDays($data["trial_days"]);

        if(! empty($data["url"]))
            $this->setUrl($data["url"]);

        return $this;
    }

    /**
     * Create a new recurring invoice.
	 * @param string $customerId
     * @param array $options
     * @return RecurringInvoice
     */
    public function create($customerId, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers/" . urlencode($customerId) . "/recurring-invoices";

        $data = array(
			"name" => $this->getName(), 
			"price" => $this->getPrice(), 
			"shipping" => $this->getShipping(), 
			"taxes" => $this->getTaxes(), 
			"currency" => $this->getCurrency(), 
			"recurring_days" => $this->getRecurringDays(), 
			"trial_days" => $this->getTrialDays(), 
			"return_url" => $this->getReturnUrl(), 
			"cancel_url" => $this->getCancelUrl(), 
			"custom" => $this->getCustom()
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['recurring_invoice'];
        $recurringInvoice = new RecurringInvoice($this->instance);
        return $recurringInvoice->fillWithData($body);
        
    }

    /**
     * Get the recurring invoice data.
	 * @param string $id
     * @param array $options
     * @return $this
     */
    public static function find($id, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/recurring-invoices/" . urlencode($id) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['recurring_invoice'];
        return $this->fillWithData($body);
        
    }

    /**
     * End a recurring invoice.
	 * @param string $reason
     * @param array $options
     * @return bool
     */
    public function end($reason, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/recurring-invoices/" . urlencode($this->getId()) . "";

        $data = array(
			"reason" => $reason
        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    /**
     * Get the customer linked to the recurring invoice.
     * @param array $options
     * @return Customer
     */
    public function customer($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/recurring-invoices/" . urlencode($this->getId()) . "/customers";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($this->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Get the invoice representing the new recurring invoice iteration.
     * @param array $options
     * @return Invoice
     */
    public function invoice($options = array())
    {
        $request = new RequestProcessoutPublic($this->instance);
        $path    = "/recurring-invoices/" . urlencode($this->getId()) . "/invoices";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['invoice'];
        $invoice = new Invoice($this->instance);
        return $invoice->fillWithData($body);
        
    }

    
}
