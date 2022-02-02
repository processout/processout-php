<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Token implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the customer token
     * @var string
     */
    protected $id;

    /**
     * Customer owning the token
     * @var object
     */
    protected $customer;

    /**
     * ID of the customer linked to the token
     * @var string
     */
    protected $customerId;

    /**
     * Gateway configuration to which the token is linked, if any
     * @var object
     */
    protected $gatewayConfiguration;

    /**
     * ID of the gateway configuration to which the token is linked, if any
     * @var string
     */
    protected $gatewayConfigurationId;

    /**
     * Card used to create this token, if any
     * @var object
     */
    protected $card;

    /**
     * ID of the card used to create the token, if any
     * @var string
     */
    protected $cardId;

    /**
     * Type of the token. Can be card or gateway_token
     * @var string
     */
    protected $type;

    /**
     * Metadata related to the token, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Define whether or not the customer token is used on a recurring invoice
     * @var boolean
     */
    protected $isSubscriptionOnly;

    /**
     * True if the token it the default token of the customer, false otherwise
     * @var boolean
     */
    protected $isDefault;

    /**
     * URL where the customer will be redirected upon payment authentication (if required by tokenization method)
     * @var string
     */
    protected $returnUrl;

    /**
     * URL where the customer will be redirected if the tokenization was canceled (if required by tokenization method)
     * @var string
     */
    protected $cancelUrl;

    /**
     * Summary of the customer token, such as a description of the card used or the email of a PayPal account
     * @var string
     */
    protected $summary;

    /**
     * True if the token is chargeable, false otherwise
     * @var boolean
     */
    protected $isChargeable;

    /**
     * Date at which the customer token was created
     * @var string
     */
    protected $createdAt;

    /**
     * Description of the created token
     * @var string
     */
    protected $description;

    /**
     * Invoice used to verify this token, if any
     * @var object
     */
    protected $invoice;

    /**
     * ID of the invoice used to verify that token
     * @var string
     */
    protected $invoiceId;

    /**
     * Allow to refund or void the invoice manually
     * @var boolean
     */
    protected $manualInvoiceCancellation;

    /**
     * Token constructor
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
     * ID of the customer token
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the customer token
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
     * Customer owning the token
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer owning the token
     * @param  object $value
     * @return $this
     */
    public function setCustomer($value)
    {
        if (is_object($value))
            $this->customer = $value;
        else
        {
            $obj = new Customer($this->client);
            $obj->fillWithData($value);
            $this->customer = $obj;
        }
        return $this;
    }
    
    /**
     * Get CustomerId
     * ID of the customer linked to the token
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set CustomerId
     * ID of the customer linked to the token
     * @param  string $value
     * @return $this
     */
    public function setCustomerId($value)
    {
        $this->customerId = $value;
        return $this;
    }
    
    /**
     * Get GatewayConfiguration
     * Gateway configuration to which the token is linked, if any
     * @return object
     */
    public function getGatewayConfiguration()
    {
        return $this->gatewayConfiguration;
    }

    /**
     * Set GatewayConfiguration
     * Gateway configuration to which the token is linked, if any
     * @param  object $value
     * @return $this
     */
    public function setGatewayConfiguration($value)
    {
        if (is_object($value))
            $this->gatewayConfiguration = $value;
        else
        {
            $obj = new GatewayConfiguration($this->client);
            $obj->fillWithData($value);
            $this->gatewayConfiguration = $obj;
        }
        return $this;
    }
    
    /**
     * Get GatewayConfigurationId
     * ID of the gateway configuration to which the token is linked, if any
     * @return string
     */
    public function getGatewayConfigurationId()
    {
        return $this->gatewayConfigurationId;
    }

    /**
     * Set GatewayConfigurationId
     * ID of the gateway configuration to which the token is linked, if any
     * @param  string $value
     * @return $this
     */
    public function setGatewayConfigurationId($value)
    {
        $this->gatewayConfigurationId = $value;
        return $this;
    }
    
    /**
     * Get Card
     * Card used to create this token, if any
     * @return object
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set Card
     * Card used to create this token, if any
     * @param  object $value
     * @return $this
     */
    public function setCard($value)
    {
        if (is_object($value))
            $this->card = $value;
        else
        {
            $obj = new Card($this->client);
            $obj->fillWithData($value);
            $this->card = $obj;
        }
        return $this;
    }
    
    /**
     * Get CardId
     * ID of the card used to create the token, if any
     * @return string
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set CardId
     * ID of the card used to create the token, if any
     * @param  string $value
     * @return $this
     */
    public function setCardId($value)
    {
        $this->cardId = $value;
        return $this;
    }
    
    /**
     * Get Type
     * Type of the token. Can be card or gateway_token
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Type of the token. Can be card or gateway_token
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the token, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the token, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get IsSubscriptionOnly
     * Define whether or not the customer token is used on a recurring invoice
     * @return bool
     */
    public function getIsSubscriptionOnly()
    {
        return $this->isSubscriptionOnly;
    }

    /**
     * Set IsSubscriptionOnly
     * Define whether or not the customer token is used on a recurring invoice
     * @param  bool $value
     * @return $this
     */
    public function setIsSubscriptionOnly($value)
    {
        $this->isSubscriptionOnly = $value;
        return $this;
    }
    
    /**
     * Get IsDefault
     * True if the token it the default token of the customer, false otherwise
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Set IsDefault
     * True if the token it the default token of the customer, false otherwise
     * @param  bool $value
     * @return $this
     */
    public function setIsDefault($value)
    {
        $this->isDefault = $value;
        return $this;
    }
    
    /**
     * Get ReturnUrl
     * URL where the customer will be redirected upon payment authentication (if required by tokenization method)
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set ReturnUrl
     * URL where the customer will be redirected upon payment authentication (if required by tokenization method)
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
     * URL where the customer will be redirected if the tokenization was canceled (if required by tokenization method)
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * Set CancelUrl
     * URL where the customer will be redirected if the tokenization was canceled (if required by tokenization method)
     * @param  string $value
     * @return $this
     */
    public function setCancelUrl($value)
    {
        $this->cancelUrl = $value;
        return $this;
    }
    
    /**
     * Get Summary
     * Summary of the customer token, such as a description of the card used or the email of a PayPal account
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set Summary
     * Summary of the customer token, such as a description of the card used or the email of a PayPal account
     * @param  string $value
     * @return $this
     */
    public function setSummary($value)
    {
        $this->summary = $value;
        return $this;
    }
    
    /**
     * Get IsChargeable
     * True if the token is chargeable, false otherwise
     * @return bool
     */
    public function getIsChargeable()
    {
        return $this->isChargeable;
    }

    /**
     * Set IsChargeable
     * True if the token is chargeable, false otherwise
     * @param  bool $value
     * @return $this
     */
    public function setIsChargeable($value)
    {
        $this->isChargeable = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the customer token was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the customer token was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    
    /**
     * Get Description
     * Description of the created token
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Description
     * Description of the created token
     * @param  string $value
     * @return $this
     */
    public function setDescription($value)
    {
        $this->description = $value;
        return $this;
    }
    
    /**
     * Get Invoice
     * Invoice used to verify this token, if any
     * @return object
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set Invoice
     * Invoice used to verify this token, if any
     * @param  object $value
     * @return $this
     */
    public function setInvoice($value)
    {
        if (is_object($value))
            $this->invoice = $value;
        else
        {
            $obj = new Invoice($this->client);
            $obj->fillWithData($value);
            $this->invoice = $obj;
        }
        return $this;
    }
    
    /**
     * Get InvoiceId
     * ID of the invoice used to verify that token
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set InvoiceId
     * ID of the invoice used to verify that token
     * @param  string $value
     * @return $this
     */
    public function setInvoiceId($value)
    {
        $this->invoiceId = $value;
        return $this;
    }
    
    /**
     * Get ManualInvoiceCancellation
     * Allow to refund or void the invoice manually
     * @return bool
     */
    public function getManualInvoiceCancellation()
    {
        return $this->manualInvoiceCancellation;
    }

    /**
     * Set ManualInvoiceCancellation
     * Allow to refund or void the invoice manually
     * @param  bool $value
     * @return $this
     */
    public function setManualInvoiceCancellation($value)
    {
        $this->manualInvoiceCancellation = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Token
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['customer']))
            $this->setCustomer($data['customer']);

        if(! empty($data['customer_id']))
            $this->setCustomerId($data['customer_id']);

        if(! empty($data['gateway_configuration']))
            $this->setGatewayConfiguration($data['gateway_configuration']);

        if(! empty($data['gateway_configuration_id']))
            $this->setGatewayConfigurationId($data['gateway_configuration_id']);

        if(! empty($data['card']))
            $this->setCard($data['card']);

        if(! empty($data['card_id']))
            $this->setCardId($data['card_id']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['is_subscription_only']))
            $this->setIsSubscriptionOnly($data['is_subscription_only']);

        if(! empty($data['is_default']))
            $this->setIsDefault($data['is_default']);

        if(! empty($data['return_url']))
            $this->setReturnUrl($data['return_url']);

        if(! empty($data['cancel_url']))
            $this->setCancelUrl($data['cancel_url']);

        if(! empty($data['summary']))
            $this->setSummary($data['summary']);

        if(! empty($data['is_chargeable']))
            $this->setIsChargeable($data['is_chargeable']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        if(! empty($data['description']))
            $this->setDescription($data['description']);

        if(! empty($data['invoice']))
            $this->setInvoice($data['invoice']);

        if(! empty($data['invoice_id']))
            $this->setInvoiceId($data['invoice_id']);

        if(! empty($data['manual_invoice_cancellation']))
            $this->setManualInvoiceCancellation($data['manual_invoice_cancellation']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "id" => $this->getId(),
            "customer" => $this->getCustomer(),
            "customer_id" => $this->getCustomerId(),
            "gateway_configuration" => $this->getGatewayConfiguration(),
            "gateway_configuration_id" => $this->getGatewayConfigurationId(),
            "card" => $this->getCard(),
            "card_id" => $this->getCardId(),
            "type" => $this->getType(),
            "metadata" => $this->getMetadata(),
            "is_subscription_only" => $this->getIsSubscriptionOnly(),
            "is_default" => $this->getIsDefault(),
            "return_url" => $this->getReturnUrl(),
            "cancel_url" => $this->getCancelUrl(),
            "summary" => $this->getSummary(),
            "is_chargeable" => $this->getIsChargeable(),
            "created_at" => $this->getCreatedAt(),
            "description" => $this->getDescription(),
            "invoice" => $this->getInvoice(),
            "invoice_id" => $this->getInvoiceId(),
            "manual_invoice_cancellation" => $this->getManualInvoiceCancellation(),
        );
    }

    
    /**
     * Get the customer's tokens.
     * @param string $customerId
     * @param array $options
     * @return array
     */
    public function fetchCustomerTokens($customerId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($customerId) . "/tokens";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field tokens
        $a    = array();
        $body = $response->getBody();
        foreach($body['tokens'] as $v)
        {
            $tmp = new Token($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Tokens'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a customer's token by its ID.
     * @param string $customerId
     * @param string $tokenId
     * @param array $options
     * @return $this
     */
    public function find($customerId, $tokenId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($customerId) . "/tokens/" . urlencode($tokenId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field token
        $body = $response->getBody();
        $body = $body['token'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new token for the given customer ID.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getCustomerId()) . "/tokens";

        $data = array(
            "metadata" => $this->getMetadata(), 
            "return_url" => $this->getReturnUrl(), 
            "cancel_url" => $this->getCancelUrl(), 
            "description" => $this->getDescription(), 
            "invoice_id" => $this->getInvoiceId(), 
            "manual_invoice_cancellation" => $this->getManualInvoiceCancellation(), 
            "source" => (!empty($options["source"])) ? $options["source"] : null, 
            "settings" => (!empty($options["settings"])) ? $options["settings"] : null, 
            "device" => (!empty($options["device"])) ? $options["device"] : null, 
            "verify" => (!empty($options["verify"])) ? $options["verify"] : null, 
            "verify_metadata" => (!empty($options["verify_metadata"])) ? $options["verify_metadata"] : null, 
            "set_default" => (!empty($options["set_default"])) ? $options["set_default"] : null
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field token
        $body = $response->getBody();
        $body = $body['token'];
        $returnValues['create'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Save the updated customer attributes.
     * @param array $options
     * @return bool
     */
    public function save($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getCustomerId()) . "/tokens/" . urlencode($this->getId()) . "";

        $data = array(
            "source" => (!empty($options["source"])) ? $options["source"] : null, 
            "settings" => (!empty($options["settings"])) ? $options["settings"] : null, 
            "device" => (!empty($options["device"])) ? $options["device"] : null, 
            "verify" => (!empty($options["verify"])) ? $options["verify"] : null, 
            "verify_metadata" => (!empty($options["verify_metadata"])) ? $options["verify_metadata"] : null, 
            "set_default" => (!empty($options["set_default"])) ? $options["set_default"] : null
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete a customer token
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/customers/" . urlencode($this->getCustomerId()) . "/tokens/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
