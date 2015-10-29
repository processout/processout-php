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
     * Whether or not the recurring invoice has expired
     * @var boolean
     */
    protected $expired;

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
     * URL called by processout to notify your application when an event is fired. Most commonly known as webhooks
     * @var string
     */
    protected $notifyUrl;

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

























        $this->setRecurringDays((int) 0);



        $this->setRequestEmail((bool) false);



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
     * Get Expired
     * Whether or not the recurring invoice has expired
     * @return bool
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Set Expired
     * Whether or not the recurring invoice has expired
     * @param  bool $value
     * @return $this
     */
    public function setExpired($value)
    {
        $this->expired = $value;

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
     * Get NotifyUrl
     * URL called by processout to notify your application when an event is fired. Most commonly known as webhooks
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Set NotifyUrl
     * URL called by processout to notify your application when an event is fired. Most commonly known as webhooks
     * @param  string $value
     * @return $this
     */
    public function setNotifyUrl($value)
    {
        $this->notifyUrl = $value;

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
     * @return RecurringInvoice
     */
    public function fillWithData($data)
    {

        if(! empty($data["cancel_url"]))
        {
            $this->setCancelUrl($data["cancel_url"]);
        }

        if(! empty($data["currency"]))
        {
            $this->setCurrency($data["currency"]);
        }

        if(! empty($data["custom"]))
        {
            $this->setCustom($data["custom"]);
        }

        if(! empty($data["ended"]))
        {
            $this->setEnded($data["ended"]);
        }

        if(! empty($data["ended_reason"]))
        {
            $this->setEndedReason($data["ended_reason"]);
        }

        if(! empty($data["expired"]))
        {
            $this->setExpired($data["expired"]);
        }

        if(! empty($data["id"]))
        {
            $this->setId($data["id"]);
        }

        if(! empty($data["metas"]))
        {
            $this->setMetas($data["metas"]);
        }

        if(! empty($data["name"]))
        {
            $this->setName($data["name"]);
        }

        if(! empty($data["notify_url"]))
        {
            $this->setNotifyUrl($data["notify_url"]);
        }

        if(! empty($data["price"]))
        {
            $this->setPrice($data["price"]);
        }

        if(! empty($data["recurring_days"]))
        {
            $this->setRecurringDays($data["recurring_days"]);
        }

        if(! empty($data["request_email"]))
        {
            $this->setRequestEmail($data["request_email"]);
        }

        if(! empty($data["request_shipping"]))
        {
            $this->setRequestShipping($data["request_shipping"]);
        }

        if(! empty($data["return_url"]))
        {
            $this->setReturnUrl($data["return_url"]);
        }

        if(! empty($data["shipping"]))
        {
            $this->setShipping($data["shipping"]);
        }

        if(! empty($data["taxes"]))
        {
            $this->setTaxes($data["taxes"]);
        }

        if(! empty($data["url"]))
        {
            $this->setUrl($data["url"]);
        }


        return $this;
    }


    /**
     * Create a recurring invoice.
     *
     * @return $this
     */

    public function create()

    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/invoices";

        $data = array(
			"request_email" => $this->getRequestEmail(),
			"request_shipping" => $this->getRequestShipping(),
			"metas" => $this->getMetas(),
			"return_url" => $this->getReturnUrl(),
			"cancel_url" => $this->getCancelUrl(),
			"notify_url" => $this->getNotifyUrl(),
			"custom" => $this->getCustom(),
			"name" => $this->getName(),
			"price" => $this->getPrice(),
			"currency" => $this->getCurrency(),
			"taxes" => $this->getTaxes(),
			"shipping" => $this->getShipping(),
			"recurring_days" => $this->getRecurringDays()
        );


        $response = new Response($request->post($path, $data));



        return $this->fillWithData($response->getBody());

    }

    /**
     * Get the information related to a recurring invoice.
	 * @param string $id
     * @return $this
     */

    public static function find($id)

    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/recurring-invoices/" . urlencode($id) . "";

        $data = array(

        );


        $response = new Response($request->get($path, $data));



        return $this->fillWithData($response->getBody());

    }

    /**
     * Stop a recurring invoice.
     *
     * @return bool
     */

    public function delete()

    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/recurring-invoices/" . urlencode($this->getId()) . "";

        $data = array(

        );


        $response = new Response($request->delete($path, $data));



        return $response->isSuccess();

    }


}
