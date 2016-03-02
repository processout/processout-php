<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;
use ProcessOut\Networking\RequestProcessoutPublic;


class TailoredInvoice
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
     * Id of the tailored invoice
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
     * TailoredInvoice constructor
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
     * Get Id
     * Id of the tailored invoice
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * Id of the tailored invoice
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
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return TailoredInvoice
     */
    public function fillWithData($data)
    {
        if(! empty($data["cancel_url"]))
            $this->setCancelUrl($data["cancel_url"]);

        if(! empty($data["currency"]))
            $this->setCurrency($data["currency"]);

        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["price"]))
            $this->setPrice($data["price"]);

        if(! empty($data["return_url"]))
            $this->setReturnUrl($data["return_url"]);

        if(! empty($data["shipping"]))
            $this->setShipping($data["shipping"]);

        if(! empty($data["taxes"]))
            $this->setTaxes($data["taxes"]);

        return $this;
    }

    /**
     * List all tailored invoices.
     * @param array $options
     * @return array
     */
    public static function all($options = array()
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/tailored-invoices";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['tailored_invoices'] as $v)
        {
            $tmp = new TailoredInvoice($this->instance);
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
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/tailored-invoices";

        $data = array(
			"name" => $this->getName(), 
			"price" => $this->getPrice(), 
			"taxes" => $this->getTaxes(), 
			"shipping" => $this->getShipping(), 
			"currency" => $this->getCurrency(), 
			"return_url" => $this->getReturnUrl(), 
			"cancel_url" => $this->getCancelUrl()
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['tailored_invoice'];
        $tailoredInvoice = new TailoredInvoice($this->instance);
        return $tailoredInvoice->fillWithData($body);
        
    }

    /**
     * Create an invoice from a tailored invoice.
     * @param array $options
     * @return Invoice
     */
    public function invoice($options = array())
    {
        $request = new RequestProcessoutPublic($this->instance);
        $path    = "/tailored-invoices/" . urlencode($this->getId()) . "/invoices";

        $data = array(

        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['invoice'];
        $invoice = new Invoice($this->instance);
        return $invoice->fillWithData($body);
        
    }

    /**
     * Get tailored invoice data.
	 * @param string $id
     * @param array $options
     * @return $this
     */
    public static function find($id, $options = array()
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/tailored-invoices/" . urlencode($id) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['tailored_invoice'];
        return $this->fillWithData($body);
        
    }

    /**
     * Update the tailored invoice data.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/tailored-invoices/" . urlencode($this->getId()) . "";

        $data = array(
			"return_url" => $this->getReturnUrl(), 
			"cancel_url" => $this->getCancelUrl(), 
			"notify_url" => $this->getNotifyUrl(), 
			"name" => $this->getName(), 
			"price" => $this->getPrice(), 
			"currency" => $this->getCurrency(), 
			"taxes" => $this->getTaxes(), 
			"shipping" => $this->getShipping()
        );

        $response = new Response($request->put($path, $data, $options));
        $body = $response->getBody();
        $body = $body['tailored_invoice'];
        return $this->fillWithData($body);
        
    }

    /**
     * Delete a tailored invoice.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/tailored-invoices/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    
}
