<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Transaction
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the transaction
     * @var string
     */
    protected $id;

    /**
     * Project to which the transaction belongs
     * @var object
     */
    protected $project;

    /**
     * ID of the project to which the transaction belongs
     * @var string
     */
    protected $projectId;

    /**
     * Invoice used to generate this transaction, if any
     * @var object
     */
    protected $invoice;

    /**
     * ID of the invoice used to generate this transaction, if any
     * @var string
     */
    protected $invoiceId;

    /**
     * Customer that was linked to this transaction, if any
     * @var object
     */
    protected $customer;

    /**
     * ID of the customer that was linked to the transaction, if any
     * @var string
     */
    protected $customerId;

    /**
     * Subscription to which this transaction belongs
     * @var object
     */
    protected $subscription;

    /**
     * ID of the subscription to which the transaction belongs, if any
     * @var string
     */
    protected $subscriptionId;

    /**
     * Token that was used to capture the payment of the transaction, if any
     * @var object
     */
    protected $token;

    /**
     * ID of the token was used to capture the payment of the transaction, if any
     * @var string
     */
    protected $tokenId;

    /**
     * Card that was used to capture the payment of the transaction, if any
     * @var object
     */
    protected $card;

    /**
     * ID of the card that was used to capture the payment of the transaction, if any
     * @var string
     */
    protected $cardId;

    /**
     * Gateway Configuration is the last gateway configuration that was used to process the payment, if any
     * @var object
     */
    protected $gatewayConfiguration;

    /**
     * ID of the last gateway configuration that was used to process the payment, if any
     * @var string
     */
    protected $gatewayConfigurationId;

    /**
     * Operations linked to the transaction
     * @var list
     */
    protected $operations;

    /**
     * List of the transaction refunds
     * @var list
     */
    protected $refunds;

    /**
     * Name of the transaction
     * @var string
     */
    protected $name;

    /**
     * Amount requested when creating the transaction
     * @var decimal
     */
    protected $amount;

    /**
     * Amount requested when creating the transaction, in the currency of the project
     * @var decimal
     */
    protected $amountLocal;

    /**
     * Amount that was successfully authorized on the transaction
     * @var decimal
     */
    protected $authorizedAmount;

    /**
     * Amount that was successfully authorized on the transaction, in the currency of the project
     * @var decimal
     */
    protected $authorizedAmountLocal;

    /**
     * Amount that was successfully captured on the transaction
     * @var decimal
     */
    protected $capturedAmount;

    /**
     * Amount that was successfully captured on the transaction, in the currency of the project
     * @var decimal
     */
    protected $capturedAmountLocal;

    /**
     * Amount that was successfully refunded on the transaction
     * @var decimal
     */
    protected $refundedAmount;

    /**
     * Amount that was successfully refunded on the transaction, in the currency of the project
     * @var decimal
     */
    protected $refundedAmountLocal;

    /**
     * Amount available on the transaction (captured - refunded)
     * @var decimal
     */
    protected $availableAmount;

    /**
     * Amount available on the transaction (captured - refunded), in the currency of the project
     * @var decimal
     */
    protected $availableAmountLocal;

    /**
     * Currency of the transaction
     * @var string
     */
    protected $currency;

    /**
     * Error code of the transaction, when the payment has failed
     * @var string
     */
    protected $errorCode;

    /**
     * Status of the potential 3-D Secure authentication
     * @var string
     */
    protected $threeDSStatus;

    /**
     * Status of the transaction
     * @var string
     */
    protected $status;

    /**
     * Whether the transaction was authorized or not
     * @var boolean
     */
    protected $authorized;

    /**
     * Whether the transaction was captured or not
     * @var boolean
     */
    protected $captured;

    /**
     * ProcessOut fee applied on the transaction
     * @var decimal
     */
    protected $processoutFee;

    /**
     * Gateway fee estimated before processing the payment
     * @var decimal
     */
    protected $estimatedFee;

    /**
     * Fee taken by the payment gateway to process the payment
     * @var decimal
     */
    protected $gatewayFee;

    /**
     * Fee taken by the payment gateway to process the payment, in the currency of the project
     * @var decimal
     */
    protected $gatewayFeeLocal;

    /**
     * Currency of the fee taken on the transaction (field `gateway_fee`)
     * @var string
     */
    protected $currencyFee;

    /**
     * Metadata related to the transaction, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Define whether or not the transaction is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the transaction was created
     * @var string
     */
    protected $createdAt;

    /**
     * Transaction constructor
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
     * ID of the transaction
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the transaction
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
     * Project to which the transaction belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the transaction belongs
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
     * ID of the project to which the transaction belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the transaction belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get Invoice
     * Invoice used to generate this transaction, if any
     * @return object
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set Invoice
     * Invoice used to generate this transaction, if any
     * @param  object $value
     * @return $this
     */
    public function setInvoice($value)
    {
        if (is_object($value))
            $this->invoice = $value;
        else
        {
            $obj = new Customer($this->client);
            $obj->fillWithData($value);
            $this->invoice = $obj;
        }
        return $this;
    }
    
    /**
     * Get InvoiceId
     * ID of the invoice used to generate this transaction, if any
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set InvoiceId
     * ID of the invoice used to generate this transaction, if any
     * @param  string $value
     * @return $this
     */
    public function setInvoiceId($value)
    {
        $this->invoiceId = $value;
        return $this;
    }
    
    /**
     * Get Customer
     * Customer that was linked to this transaction, if any
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer that was linked to this transaction, if any
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
     * ID of the customer that was linked to the transaction, if any
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set CustomerId
     * ID of the customer that was linked to the transaction, if any
     * @param  string $value
     * @return $this
     */
    public function setCustomerId($value)
    {
        $this->customerId = $value;
        return $this;
    }
    
    /**
     * Get Subscription
     * Subscription to which this transaction belongs
     * @return object
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set Subscription
     * Subscription to which this transaction belongs
     * @param  object $value
     * @return $this
     */
    public function setSubscription($value)
    {
        if (is_object($value))
            $this->subscription = $value;
        else
        {
            $obj = new Subscription($this->client);
            $obj->fillWithData($value);
            $this->subscription = $obj;
        }
        return $this;
    }
    
    /**
     * Get SubscriptionId
     * ID of the subscription to which the transaction belongs, if any
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set SubscriptionId
     * ID of the subscription to which the transaction belongs, if any
     * @param  string $value
     * @return $this
     */
    public function setSubscriptionId($value)
    {
        $this->subscriptionId = $value;
        return $this;
    }
    
    /**
     * Get Token
     * Token that was used to capture the payment of the transaction, if any
     * @return object
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set Token
     * Token that was used to capture the payment of the transaction, if any
     * @param  object $value
     * @return $this
     */
    public function setToken($value)
    {
        if (is_object($value))
            $this->token = $value;
        else
        {
            $obj = new Token($this->client);
            $obj->fillWithData($value);
            $this->token = $obj;
        }
        return $this;
    }
    
    /**
     * Get TokenId
     * ID of the token was used to capture the payment of the transaction, if any
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * Set TokenId
     * ID of the token was used to capture the payment of the transaction, if any
     * @param  string $value
     * @return $this
     */
    public function setTokenId($value)
    {
        $this->tokenId = $value;
        return $this;
    }
    
    /**
     * Get Card
     * Card that was used to capture the payment of the transaction, if any
     * @return object
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set Card
     * Card that was used to capture the payment of the transaction, if any
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
     * ID of the card that was used to capture the payment of the transaction, if any
     * @return string
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set CardId
     * ID of the card that was used to capture the payment of the transaction, if any
     * @param  string $value
     * @return $this
     */
    public function setCardId($value)
    {
        $this->cardId = $value;
        return $this;
    }
    
    /**
     * Get GatewayConfiguration
     * Gateway Configuration is the last gateway configuration that was used to process the payment, if any
     * @return object
     */
    public function getGatewayConfiguration()
    {
        return $this->gatewayConfiguration;
    }

    /**
     * Set GatewayConfiguration
     * Gateway Configuration is the last gateway configuration that was used to process the payment, if any
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
     * ID of the last gateway configuration that was used to process the payment, if any
     * @return string
     */
    public function getGatewayConfigurationId()
    {
        return $this->gatewayConfigurationId;
    }

    /**
     * Set GatewayConfigurationId
     * ID of the last gateway configuration that was used to process the payment, if any
     * @param  string $value
     * @return $this
     */
    public function setGatewayConfigurationId($value)
    {
        $this->gatewayConfigurationId = $value;
        return $this;
    }
    
    /**
     * Get Operations
     * Operations linked to the transaction
     * @return array
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Set Operations
     * Operations linked to the transaction
     * @param  array $value
     * @return $this
     */
    public function setOperations($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->operations = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new TransactionOperation($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->operations = $a;
        }
        return $this;
    }
    
    /**
     * Get Refunds
     * List of the transaction refunds
     * @return array
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * Set Refunds
     * List of the transaction refunds
     * @param  array $value
     * @return $this
     */
    public function setRefunds($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->refunds = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new Refund($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->refunds = $a;
        }
        return $this;
    }
    
    /**
     * Get Name
     * Name of the transaction
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the transaction
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
     * Amount requested when creating the transaction
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount requested when creating the transaction
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get AmountLocal
     * Amount requested when creating the transaction, in the currency of the project
     * @return string
     */
    public function getAmountLocal()
    {
        return $this->amountLocal;
    }

    /**
     * Set AmountLocal
     * Amount requested when creating the transaction, in the currency of the project
     * @param  string $value
     * @return $this
     */
    public function setAmountLocal($value)
    {
        $this->amountLocal = $value;
        return $this;
    }
    
    /**
     * Get AuthorizedAmount
     * Amount that was successfully authorized on the transaction
     * @return string
     */
    public function getAuthorizedAmount()
    {
        return $this->authorizedAmount;
    }

    /**
     * Set AuthorizedAmount
     * Amount that was successfully authorized on the transaction
     * @param  string $value
     * @return $this
     */
    public function setAuthorizedAmount($value)
    {
        $this->authorizedAmount = $value;
        return $this;
    }
    
    /**
     * Get AuthorizedAmountLocal
     * Amount that was successfully authorized on the transaction, in the currency of the project
     * @return string
     */
    public function getAuthorizedAmountLocal()
    {
        return $this->authorizedAmountLocal;
    }

    /**
     * Set AuthorizedAmountLocal
     * Amount that was successfully authorized on the transaction, in the currency of the project
     * @param  string $value
     * @return $this
     */
    public function setAuthorizedAmountLocal($value)
    {
        $this->authorizedAmountLocal = $value;
        return $this;
    }
    
    /**
     * Get CapturedAmount
     * Amount that was successfully captured on the transaction
     * @return string
     */
    public function getCapturedAmount()
    {
        return $this->capturedAmount;
    }

    /**
     * Set CapturedAmount
     * Amount that was successfully captured on the transaction
     * @param  string $value
     * @return $this
     */
    public function setCapturedAmount($value)
    {
        $this->capturedAmount = $value;
        return $this;
    }
    
    /**
     * Get CapturedAmountLocal
     * Amount that was successfully captured on the transaction, in the currency of the project
     * @return string
     */
    public function getCapturedAmountLocal()
    {
        return $this->capturedAmountLocal;
    }

    /**
     * Set CapturedAmountLocal
     * Amount that was successfully captured on the transaction, in the currency of the project
     * @param  string $value
     * @return $this
     */
    public function setCapturedAmountLocal($value)
    {
        $this->capturedAmountLocal = $value;
        return $this;
    }
    
    /**
     * Get RefundedAmount
     * Amount that was successfully refunded on the transaction
     * @return string
     */
    public function getRefundedAmount()
    {
        return $this->refundedAmount;
    }

    /**
     * Set RefundedAmount
     * Amount that was successfully refunded on the transaction
     * @param  string $value
     * @return $this
     */
    public function setRefundedAmount($value)
    {
        $this->refundedAmount = $value;
        return $this;
    }
    
    /**
     * Get RefundedAmountLocal
     * Amount that was successfully refunded on the transaction, in the currency of the project
     * @return string
     */
    public function getRefundedAmountLocal()
    {
        return $this->refundedAmountLocal;
    }

    /**
     * Set RefundedAmountLocal
     * Amount that was successfully refunded on the transaction, in the currency of the project
     * @param  string $value
     * @return $this
     */
    public function setRefundedAmountLocal($value)
    {
        $this->refundedAmountLocal = $value;
        return $this;
    }
    
    /**
     * Get AvailableAmount
     * Amount available on the transaction (captured - refunded)
     * @return string
     */
    public function getAvailableAmount()
    {
        return $this->availableAmount;
    }

    /**
     * Set AvailableAmount
     * Amount available on the transaction (captured - refunded)
     * @param  string $value
     * @return $this
     */
    public function setAvailableAmount($value)
    {
        $this->availableAmount = $value;
        return $this;
    }
    
    /**
     * Get AvailableAmountLocal
     * Amount available on the transaction (captured - refunded), in the currency of the project
     * @return string
     */
    public function getAvailableAmountLocal()
    {
        return $this->availableAmountLocal;
    }

    /**
     * Set AvailableAmountLocal
     * Amount available on the transaction (captured - refunded), in the currency of the project
     * @param  string $value
     * @return $this
     */
    public function setAvailableAmountLocal($value)
    {
        $this->availableAmountLocal = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency of the transaction
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the transaction
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get ErrorCode
     * Error code of the transaction, when the payment has failed
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set ErrorCode
     * Error code of the transaction, when the payment has failed
     * @param  string $value
     * @return $this
     */
    public function setErrorCode($value)
    {
        $this->errorCode = $value;
        return $this;
    }
    
    /**
     * Get ThreeDSStatus
     * Status of the potential 3-D Secure authentication
     * @return string
     */
    public function getThreeDSStatus()
    {
        return $this->threeDSStatus;
    }

    /**
     * Set ThreeDSStatus
     * Status of the potential 3-D Secure authentication
     * @param  string $value
     * @return $this
     */
    public function setThreeDSStatus($value)
    {
        $this->threeDSStatus = $value;
        return $this;
    }
    
    /**
     * Get Status
     * Status of the transaction
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set Status
     * Status of the transaction
     * @param  string $value
     * @return $this
     */
    public function setStatus($value)
    {
        $this->status = $value;
        return $this;
    }
    
    /**
     * Get Authorized
     * Whether the transaction was authorized or not
     * @return bool
     */
    public function getAuthorized()
    {
        return $this->authorized;
    }

    /**
     * Set Authorized
     * Whether the transaction was authorized or not
     * @param  bool $value
     * @return $this
     */
    public function setAuthorized($value)
    {
        $this->authorized = $value;
        return $this;
    }
    
    /**
     * Get Captured
     * Whether the transaction was captured or not
     * @return bool
     */
    public function getCaptured()
    {
        return $this->captured;
    }

    /**
     * Set Captured
     * Whether the transaction was captured or not
     * @param  bool $value
     * @return $this
     */
    public function setCaptured($value)
    {
        $this->captured = $value;
        return $this;
    }
    
    /**
     * Get ProcessoutFee
     * ProcessOut fee applied on the transaction
     * @return string
     */
    public function getProcessoutFee()
    {
        return $this->processoutFee;
    }

    /**
     * Set ProcessoutFee
     * ProcessOut fee applied on the transaction
     * @param  string $value
     * @return $this
     */
    public function setProcessoutFee($value)
    {
        $this->processoutFee = $value;
        return $this;
    }
    
    /**
     * Get EstimatedFee
     * Gateway fee estimated before processing the payment
     * @return string
     */
    public function getEstimatedFee()
    {
        return $this->estimatedFee;
    }

    /**
     * Set EstimatedFee
     * Gateway fee estimated before processing the payment
     * @param  string $value
     * @return $this
     */
    public function setEstimatedFee($value)
    {
        $this->estimatedFee = $value;
        return $this;
    }
    
    /**
     * Get GatewayFee
     * Fee taken by the payment gateway to process the payment
     * @return string
     */
    public function getGatewayFee()
    {
        return $this->gatewayFee;
    }

    /**
     * Set GatewayFee
     * Fee taken by the payment gateway to process the payment
     * @param  string $value
     * @return $this
     */
    public function setGatewayFee($value)
    {
        $this->gatewayFee = $value;
        return $this;
    }
    
    /**
     * Get GatewayFeeLocal
     * Fee taken by the payment gateway to process the payment, in the currency of the project
     * @return string
     */
    public function getGatewayFeeLocal()
    {
        return $this->gatewayFeeLocal;
    }

    /**
     * Set GatewayFeeLocal
     * Fee taken by the payment gateway to process the payment, in the currency of the project
     * @param  string $value
     * @return $this
     */
    public function setGatewayFeeLocal($value)
    {
        $this->gatewayFeeLocal = $value;
        return $this;
    }
    
    /**
     * Get CurrencyFee
     * Currency of the fee taken on the transaction (field `gateway_fee`)
     * @return string
     */
    public function getCurrencyFee()
    {
        return $this->currencyFee;
    }

    /**
     * Set CurrencyFee
     * Currency of the fee taken on the transaction (field `gateway_fee`)
     * @param  string $value
     * @return $this
     */
    public function setCurrencyFee($value)
    {
        $this->currencyFee = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the transaction, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the transaction, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get Sandbox
     * Define whether or not the transaction is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the transaction is in sandbox environment
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
     * Date at which the transaction was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the transaction was created
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
     * @return Transaction
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['invoice']))
            $this->setInvoice($data['invoice']);

        if(! empty($data['invoice_id']))
            $this->setInvoiceId($data['invoice_id']);

        if(! empty($data['customer']))
            $this->setCustomer($data['customer']);

        if(! empty($data['customer_id']))
            $this->setCustomerId($data['customer_id']);

        if(! empty($data['subscription']))
            $this->setSubscription($data['subscription']);

        if(! empty($data['subscription_id']))
            $this->setSubscriptionId($data['subscription_id']);

        if(! empty($data['token']))
            $this->setToken($data['token']);

        if(! empty($data['token_id']))
            $this->setTokenId($data['token_id']);

        if(! empty($data['card']))
            $this->setCard($data['card']);

        if(! empty($data['card_id']))
            $this->setCardId($data['card_id']);

        if(! empty($data['gateway_configuration']))
            $this->setGatewayConfiguration($data['gateway_configuration']);

        if(! empty($data['gateway_configuration_id']))
            $this->setGatewayConfigurationId($data['gateway_configuration_id']);

        if(! empty($data['operations']))
            $this->setOperations($data['operations']);

        if(! empty($data['refunds']))
            $this->setRefunds($data['refunds']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['amount_local']))
            $this->setAmountLocal($data['amount_local']);

        if(! empty($data['authorized_amount']))
            $this->setAuthorizedAmount($data['authorized_amount']);

        if(! empty($data['authorized_amount_local']))
            $this->setAuthorizedAmountLocal($data['authorized_amount_local']);

        if(! empty($data['captured_amount']))
            $this->setCapturedAmount($data['captured_amount']);

        if(! empty($data['captured_amount_local']))
            $this->setCapturedAmountLocal($data['captured_amount_local']);

        if(! empty($data['refunded_amount']))
            $this->setRefundedAmount($data['refunded_amount']);

        if(! empty($data['refunded_amount_local']))
            $this->setRefundedAmountLocal($data['refunded_amount_local']);

        if(! empty($data['available_amount']))
            $this->setAvailableAmount($data['available_amount']);

        if(! empty($data['available_amount_local']))
            $this->setAvailableAmountLocal($data['available_amount_local']);

        if(! empty($data['currency']))
            $this->setCurrency($data['currency']);

        if(! empty($data['error_code']))
            $this->setErrorCode($data['error_code']);

        if(! empty($data['three_d_s_status']))
            $this->setThreeDSStatus($data['three_d_s_status']);

        if(! empty($data['status']))
            $this->setStatus($data['status']);

        if(! empty($data['authorized']))
            $this->setAuthorized($data['authorized']);

        if(! empty($data['captured']))
            $this->setCaptured($data['captured']);

        if(! empty($data['processout_fee']))
            $this->setProcessoutFee($data['processout_fee']);

        if(! empty($data['estimated_fee']))
            $this->setEstimatedFee($data['estimated_fee']);

        if(! empty($data['gateway_fee']))
            $this->setGatewayFee($data['gateway_fee']);

        if(! empty($data['gateway_fee_local']))
            $this->setGatewayFeeLocal($data['gateway_fee_local']);

        if(! empty($data['currency_fee']))
            $this->setCurrencyFee($data['currency_fee']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
    /**
     * Get the transaction's refunds.
     * @param array $options
     * @return array
     */
    public function fetchRefunds($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/transactions/" . urlencode($this->getId()) . "/refunds";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field refunds
        $a    = array();
        $body = $response->getBody();
        foreach($body['refunds'] as $v)
        {
            $tmp = new Refund($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Refunds'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a transaction's refund by its ID.
     * @param string $refundId
     * @param array $options
     * @return Refund
     */
    public function findRefund($refundId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/transactions/" . urlencode($this->getId()) . "/refunds/" . urlencode($refundId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field refund
        $body = $response->getBody();
        $body = $body['refund'];
        $refund = new Refund($this->client);
        $returnValues['refund'] = $refund->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get all the transactions.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/transactions";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field transactions
        $a    = array();
        $body = $response->getBody();
        foreach($body['transactions'] as $v)
        {
            $tmp = new Transaction($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Transactions'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a transaction by its ID.
     * @param string $transactionId
     * @param array $options
     * @return $this
     */
    public function find($transactionId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/transactions/" . urlencode($transactionId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field transaction
        $body = $response->getBody();
        $body = $body['transaction'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
