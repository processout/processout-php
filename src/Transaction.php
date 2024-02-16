<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Transaction implements \JsonSerializable
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
     * External ThreeDS Gateway Configuration is the gateway configuration that was used to authenticate the payment, if configured
     * @var object
     */
    protected $externalThreeDSGatewayConfiguration;

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
     * Amount that was voided on the transaction
     * @var decimal
     */
    protected $voidedAmount;

    /**
     * Amount that was voided on the transaction, in the currency of the project
     * @var decimal
     */
    protected $voidedAmountLocal;

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
     * Error message of the transaction, when the payment has failed
     * @var string
     */
    protected $errorMessage;

    /**
     * Name of the merchant acquirer
     * @var string
     */
    protected $acquirerName;

    /**
     * Name of the last gateway the transaction was attempted on (successfully or not). Use the operations list to get the full transaction's history
     * @var string
     */
    protected $gatewayName;

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
     * Whether the transaction was voided or not
     * @var boolean
     */
    protected $voided;

    /**
     * Whether the transaction was refunded or not
     * @var boolean
     */
    protected $refunded;

    /**
     * Whether the transaction was charged back or not
     * @var boolean
     */
    protected $chargedback;

    /**
     * Whether the transaction received a fraud notification event or not
     * @var boolean
     */
    protected $receivedFraudNotification;

    /**
     * Whether the transaction received a retrieval request event or not
     * @var boolean
     */
    protected $receivedRetrievalRequest;

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
     * Date at which the transaction was charged back
     * @var string
     */
    protected $chargedbackAt;

    /**
     * Date at which the transaction was refunded
     * @var string
     */
    protected $refundedAt;

    /**
     * Date at which the transaction was authorized
     * @var string
     */
    protected $authorizedAt;

    /**
     * Date at which the transaction was captured
     * @var string
     */
    protected $capturedAt;

    /**
     * Date at which the transaction was voided
     * @var string
     */
    protected $voidedAt;

    /**
     * 3DS data of a transaction if it was authenticated
     * @var object
     */
    protected $threeDS;

    /**
     * CVC check done during the transaction
     * @var string
     */
    protected $cvcCheck;

    /**
     * AVS check done during the transaction
     * @var string
     */
    protected $avsCheck;

    /**
     * Initial scheme ID that was referenced in the request
     * @var string
     */
    protected $initialSchemeTransactionId;

    /**
     * The ID assigned to the transaction by the scheme in the last successful authorization
     * @var string
     */
    protected $schemeId;

    /**
     * Payment type of the transaction
     * @var string
     */
    protected $paymentType;

    /**
     * The Electronic Commerce Indicator
     * @var string
     */
    protected $eci;

    /**
     * Native APM response data
     * @var object
     */
    protected $nativeApm;

    /**
     * Additional data about the transaction, originating from a PSP, for example customer shipping address
     * @var object
     */
    protected $externalDetails;

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
            $obj = new Invoice($this->client);
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
     * Get ExternalThreeDSGatewayConfiguration
     * External ThreeDS Gateway Configuration is the gateway configuration that was used to authenticate the payment, if configured
     * @return object
     */
    public function getExternalThreeDSGatewayConfiguration()
    {
        return $this->externalThreeDSGatewayConfiguration;
    }

    /**
     * Set ExternalThreeDSGatewayConfiguration
     * External ThreeDS Gateway Configuration is the gateway configuration that was used to authenticate the payment, if configured
     * @param  object $value
     * @return $this
     */
    public function setExternalThreeDSGatewayConfiguration($value)
    {
        if (is_object($value))
            $this->externalThreeDSGatewayConfiguration = $value;
        else
        {
            $obj = new GatewayConfiguration($this->client);
            $obj->fillWithData($value);
            $this->externalThreeDSGatewayConfiguration = $obj;
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
     * Get VoidedAmount
     * Amount that was voided on the transaction
     * @return string
     */
    public function getVoidedAmount()
    {
        return $this->voidedAmount;
    }

    /**
     * Set VoidedAmount
     * Amount that was voided on the transaction
     * @param  string $value
     * @return $this
     */
    public function setVoidedAmount($value)
    {
        $this->voidedAmount = $value;
        return $this;
    }
    
    /**
     * Get VoidedAmountLocal
     * Amount that was voided on the transaction, in the currency of the project
     * @return string
     */
    public function getVoidedAmountLocal()
    {
        return $this->voidedAmountLocal;
    }

    /**
     * Set VoidedAmountLocal
     * Amount that was voided on the transaction, in the currency of the project
     * @param  string $value
     * @return $this
     */
    public function setVoidedAmountLocal($value)
    {
        $this->voidedAmountLocal = $value;
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
     * Get ErrorMessage
     * Error message of the transaction, when the payment has failed
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Set ErrorMessage
     * Error message of the transaction, when the payment has failed
     * @param  string $value
     * @return $this
     */
    public function setErrorMessage($value)
    {
        $this->errorMessage = $value;
        return $this;
    }
    
    /**
     * Get AcquirerName
     * Name of the merchant acquirer
     * @return string
     */
    public function getAcquirerName()
    {
        return $this->acquirerName;
    }

    /**
     * Set AcquirerName
     * Name of the merchant acquirer
     * @param  string $value
     * @return $this
     */
    public function setAcquirerName($value)
    {
        $this->acquirerName = $value;
        return $this;
    }
    
    /**
     * Get GatewayName
     * Name of the last gateway the transaction was attempted on (successfully or not). Use the operations list to get the full transaction's history
     * @return string
     */
    public function getGatewayName()
    {
        return $this->gatewayName;
    }

    /**
     * Set GatewayName
     * Name of the last gateway the transaction was attempted on (successfully or not). Use the operations list to get the full transaction's history
     * @param  string $value
     * @return $this
     */
    public function setGatewayName($value)
    {
        $this->gatewayName = $value;
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
     * Get Voided
     * Whether the transaction was voided or not
     * @return bool
     */
    public function getVoided()
    {
        return $this->voided;
    }

    /**
     * Set Voided
     * Whether the transaction was voided or not
     * @param  bool $value
     * @return $this
     */
    public function setVoided($value)
    {
        $this->voided = $value;
        return $this;
    }
    
    /**
     * Get Refunded
     * Whether the transaction was refunded or not
     * @return bool
     */
    public function getRefunded()
    {
        return $this->refunded;
    }

    /**
     * Set Refunded
     * Whether the transaction was refunded or not
     * @param  bool $value
     * @return $this
     */
    public function setRefunded($value)
    {
        $this->refunded = $value;
        return $this;
    }
    
    /**
     * Get Chargedback
     * Whether the transaction was charged back or not
     * @return bool
     */
    public function getChargedback()
    {
        return $this->chargedback;
    }

    /**
     * Set Chargedback
     * Whether the transaction was charged back or not
     * @param  bool $value
     * @return $this
     */
    public function setChargedback($value)
    {
        $this->chargedback = $value;
        return $this;
    }
    
    /**
     * Get ReceivedFraudNotification
     * Whether the transaction received a fraud notification event or not
     * @return bool
     */
    public function getReceivedFraudNotification()
    {
        return $this->receivedFraudNotification;
    }

    /**
     * Set ReceivedFraudNotification
     * Whether the transaction received a fraud notification event or not
     * @param  bool $value
     * @return $this
     */
    public function setReceivedFraudNotification($value)
    {
        $this->receivedFraudNotification = $value;
        return $this;
    }
    
    /**
     * Get ReceivedRetrievalRequest
     * Whether the transaction received a retrieval request event or not
     * @return bool
     */
    public function getReceivedRetrievalRequest()
    {
        return $this->receivedRetrievalRequest;
    }

    /**
     * Set ReceivedRetrievalRequest
     * Whether the transaction received a retrieval request event or not
     * @param  bool $value
     * @return $this
     */
    public function setReceivedRetrievalRequest($value)
    {
        $this->receivedRetrievalRequest = $value;
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
     * Get ChargedbackAt
     * Date at which the transaction was charged back
     * @return string
     */
    public function getChargedbackAt()
    {
        return $this->chargedbackAt;
    }

    /**
     * Set ChargedbackAt
     * Date at which the transaction was charged back
     * @param  string $value
     * @return $this
     */
    public function setChargedbackAt($value)
    {
        $this->chargedbackAt = $value;
        return $this;
    }
    
    /**
     * Get RefundedAt
     * Date at which the transaction was refunded
     * @return string
     */
    public function getRefundedAt()
    {
        return $this->refundedAt;
    }

    /**
     * Set RefundedAt
     * Date at which the transaction was refunded
     * @param  string $value
     * @return $this
     */
    public function setRefundedAt($value)
    {
        $this->refundedAt = $value;
        return $this;
    }
    
    /**
     * Get AuthorizedAt
     * Date at which the transaction was authorized
     * @return string
     */
    public function getAuthorizedAt()
    {
        return $this->authorizedAt;
    }

    /**
     * Set AuthorizedAt
     * Date at which the transaction was authorized
     * @param  string $value
     * @return $this
     */
    public function setAuthorizedAt($value)
    {
        $this->authorizedAt = $value;
        return $this;
    }
    
    /**
     * Get CapturedAt
     * Date at which the transaction was captured
     * @return string
     */
    public function getCapturedAt()
    {
        return $this->capturedAt;
    }

    /**
     * Set CapturedAt
     * Date at which the transaction was captured
     * @param  string $value
     * @return $this
     */
    public function setCapturedAt($value)
    {
        $this->capturedAt = $value;
        return $this;
    }
    
    /**
     * Get VoidedAt
     * Date at which the transaction was voided
     * @return string
     */
    public function getVoidedAt()
    {
        return $this->voidedAt;
    }

    /**
     * Set VoidedAt
     * Date at which the transaction was voided
     * @param  string $value
     * @return $this
     */
    public function setVoidedAt($value)
    {
        $this->voidedAt = $value;
        return $this;
    }
    
    /**
     * Get ThreeDS
     * 3DS data of a transaction if it was authenticated
     * @return object
     */
    public function getThreeDS()
    {
        return $this->threeDS;
    }

    /**
     * Set ThreeDS
     * 3DS data of a transaction if it was authenticated
     * @param  object $value
     * @return $this
     */
    public function setThreeDS($value)
    {
        if (is_object($value))
            $this->threeDS = $value;
        else
        {
            $obj = new ThreeDS($this->client);
            $obj->fillWithData($value);
            $this->threeDS = $obj;
        }
        return $this;
    }
    
    /**
     * Get CvcCheck
     * CVC check done during the transaction
     * @return string
     */
    public function getCvcCheck()
    {
        return $this->cvcCheck;
    }

    /**
     * Set CvcCheck
     * CVC check done during the transaction
     * @param  string $value
     * @return $this
     */
    public function setCvcCheck($value)
    {
        $this->cvcCheck = $value;
        return $this;
    }
    
    /**
     * Get AvsCheck
     * AVS check done during the transaction
     * @return string
     */
    public function getAvsCheck()
    {
        return $this->avsCheck;
    }

    /**
     * Set AvsCheck
     * AVS check done during the transaction
     * @param  string $value
     * @return $this
     */
    public function setAvsCheck($value)
    {
        $this->avsCheck = $value;
        return $this;
    }
    
    /**
     * Get InitialSchemeTransactionId
     * Initial scheme ID that was referenced in the request
     * @return string
     */
    public function getInitialSchemeTransactionId()
    {
        return $this->initialSchemeTransactionId;
    }

    /**
     * Set InitialSchemeTransactionId
     * Initial scheme ID that was referenced in the request
     * @param  string $value
     * @return $this
     */
    public function setInitialSchemeTransactionId($value)
    {
        $this->initialSchemeTransactionId = $value;
        return $this;
    }
    
    /**
     * Get SchemeId
     * The ID assigned to the transaction by the scheme in the last successful authorization
     * @return string
     */
    public function getSchemeId()
    {
        return $this->schemeId;
    }

    /**
     * Set SchemeId
     * The ID assigned to the transaction by the scheme in the last successful authorization
     * @param  string $value
     * @return $this
     */
    public function setSchemeId($value)
    {
        $this->schemeId = $value;
        return $this;
    }
    
    /**
     * Get PaymentType
     * Payment type of the transaction
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set PaymentType
     * Payment type of the transaction
     * @param  string $value
     * @return $this
     */
    public function setPaymentType($value)
    {
        $this->paymentType = $value;
        return $this;
    }
    
    /**
     * Get Eci
     * The Electronic Commerce Indicator
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * Set Eci
     * The Electronic Commerce Indicator
     * @param  string $value
     * @return $this
     */
    public function setEci($value)
    {
        $this->eci = $value;
        return $this;
    }
    
    /**
     * Get NativeApm
     * Native APM response data
     * @return object
     */
    public function getNativeApm()
    {
        return $this->nativeApm;
    }

    /**
     * Set NativeApm
     * Native APM response data
     * @param  object $value
     * @return $this
     */
    public function setNativeApm($value)
    {
        if (is_object($value))
            $this->nativeApm = $value;
        else
        {
            $obj = new NativeAPMResponse($this->client);
            $obj->fillWithData($value);
            $this->nativeApm = $obj;
        }
        return $this;
    }
    
    /**
     * Get ExternalDetails
     * Additional data about the transaction, originating from a PSP, for example customer shipping address
     * @return object
     */
    public function getExternalDetails()
    {
        return $this->externalDetails;
    }

    /**
     * Set ExternalDetails
     * Additional data about the transaction, originating from a PSP, for example customer shipping address
     * @param  object $value
     * @return $this
     */
    public function setExternalDetails($value)
    {
        $this->externalDetails = $value;
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

        if(! empty($data['external_three_d_s_gateway_configuration']))
            $this->setExternalThreeDSGatewayConfiguration($data['external_three_d_s_gateway_configuration']);

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

        if(! empty($data['voided_amount']))
            $this->setVoidedAmount($data['voided_amount']);

        if(! empty($data['voided_amount_local']))
            $this->setVoidedAmountLocal($data['voided_amount_local']);

        if(! empty($data['currency']))
            $this->setCurrency($data['currency']);

        if(! empty($data['error_code']))
            $this->setErrorCode($data['error_code']);

        if(! empty($data['error_message']))
            $this->setErrorMessage($data['error_message']);

        if(! empty($data['acquirer_name']))
            $this->setAcquirerName($data['acquirer_name']);

        if(! empty($data['gateway_name']))
            $this->setGatewayName($data['gateway_name']);

        if(! empty($data['three_d_s_status']))
            $this->setThreeDSStatus($data['three_d_s_status']);

        if(! empty($data['status']))
            $this->setStatus($data['status']);

        if(! empty($data['authorized']))
            $this->setAuthorized($data['authorized']);

        if(! empty($data['captured']))
            $this->setCaptured($data['captured']);

        if(! empty($data['voided']))
            $this->setVoided($data['voided']);

        if(! empty($data['refunded']))
            $this->setRefunded($data['refunded']);

        if(! empty($data['chargedback']))
            $this->setChargedback($data['chargedback']);

        if(! empty($data['received_fraud_notification']))
            $this->setReceivedFraudNotification($data['received_fraud_notification']);

        if(! empty($data['received_retrieval_request']))
            $this->setReceivedRetrievalRequest($data['received_retrieval_request']);

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

        if(! empty($data['chargedback_at']))
            $this->setChargedbackAt($data['chargedback_at']);

        if(! empty($data['refunded_at']))
            $this->setRefundedAt($data['refunded_at']);

        if(! empty($data['authorized_at']))
            $this->setAuthorizedAt($data['authorized_at']);

        if(! empty($data['captured_at']))
            $this->setCapturedAt($data['captured_at']);

        if(! empty($data['voided_at']))
            $this->setVoidedAt($data['voided_at']);

        if(! empty($data['three_d_s']))
            $this->setThreeDS($data['three_d_s']);

        if(! empty($data['cvc_check']))
            $this->setCvcCheck($data['cvc_check']);

        if(! empty($data['avs_check']))
            $this->setAvsCheck($data['avs_check']);

        if(! empty($data['initial_scheme_transaction_id']))
            $this->setInitialSchemeTransactionId($data['initial_scheme_transaction_id']);

        if(! empty($data['scheme_id']))
            $this->setSchemeId($data['scheme_id']);

        if(! empty($data['payment_type']))
            $this->setPaymentType($data['payment_type']);

        if(! empty($data['eci']))
            $this->setEci($data['eci']);

        if(! empty($data['native_apm']))
            $this->setNativeApm($data['native_apm']);

        if(! empty($data['external_details']))
            $this->setExternalDetails($data['external_details']);

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
            "invoice" => $this->getInvoice(),
            "invoice_id" => $this->getInvoiceId(),
            "customer" => $this->getCustomer(),
            "customer_id" => $this->getCustomerId(),
            "subscription" => $this->getSubscription(),
            "subscription_id" => $this->getSubscriptionId(),
            "token" => $this->getToken(),
            "token_id" => $this->getTokenId(),
            "card" => $this->getCard(),
            "card_id" => $this->getCardId(),
            "gateway_configuration" => $this->getGatewayConfiguration(),
            "external_three_d_s_gateway_configuration" => $this->getExternalThreeDSGatewayConfiguration(),
            "gateway_configuration_id" => $this->getGatewayConfigurationId(),
            "operations" => $this->getOperations(),
            "refunds" => $this->getRefunds(),
            "name" => $this->getName(),
            "amount" => $this->getAmount(),
            "amount_local" => $this->getAmountLocal(),
            "authorized_amount" => $this->getAuthorizedAmount(),
            "authorized_amount_local" => $this->getAuthorizedAmountLocal(),
            "captured_amount" => $this->getCapturedAmount(),
            "captured_amount_local" => $this->getCapturedAmountLocal(),
            "refunded_amount" => $this->getRefundedAmount(),
            "refunded_amount_local" => $this->getRefundedAmountLocal(),
            "available_amount" => $this->getAvailableAmount(),
            "available_amount_local" => $this->getAvailableAmountLocal(),
            "voided_amount" => $this->getVoidedAmount(),
            "voided_amount_local" => $this->getVoidedAmountLocal(),
            "currency" => $this->getCurrency(),
            "error_code" => $this->getErrorCode(),
            "error_message" => $this->getErrorMessage(),
            "acquirer_name" => $this->getAcquirerName(),
            "gateway_name" => $this->getGatewayName(),
            "three_d_s_status" => $this->getThreeDSStatus(),
            "status" => $this->getStatus(),
            "authorized" => $this->getAuthorized(),
            "captured" => $this->getCaptured(),
            "voided" => $this->getVoided(),
            "refunded" => $this->getRefunded(),
            "chargedback" => $this->getChargedback(),
            "received_fraud_notification" => $this->getReceivedFraudNotification(),
            "received_retrieval_request" => $this->getReceivedRetrievalRequest(),
            "processout_fee" => $this->getProcessoutFee(),
            "estimated_fee" => $this->getEstimatedFee(),
            "gateway_fee" => $this->getGatewayFee(),
            "gateway_fee_local" => $this->getGatewayFeeLocal(),
            "currency_fee" => $this->getCurrencyFee(),
            "metadata" => $this->getMetadata(),
            "sandbox" => $this->getSandbox(),
            "created_at" => $this->getCreatedAt(),
            "chargedback_at" => $this->getChargedbackAt(),
            "refunded_at" => $this->getRefundedAt(),
            "authorized_at" => $this->getAuthorizedAt(),
            "captured_at" => $this->getCapturedAt(),
            "voided_at" => $this->getVoidedAt(),
            "three_d_s" => $this->getThreeDS(),
            "cvc_check" => $this->getCvcCheck(),
            "avs_check" => $this->getAvsCheck(),
            "initial_scheme_transaction_id" => $this->getInitialSchemeTransactionId(),
            "scheme_id" => $this->getSchemeId(),
            "payment_type" => $this->getPaymentType(),
            "eci" => $this->getEci(),
            "native_apm" => $this->getNativeApm(),
            "external_details" => $this->getExternalDetails(),
        );
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
