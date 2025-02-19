<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class TransactionOperation implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the transaction operation
     * @var string
     */
    protected $id;

    /**
     * Transaction to which the operation belongs
     * @var object
     */
    protected $transaction;

    /**
     * ID of the transaction to which the operation belongs
     * @var string
     */
    protected $transactionId;

    /**
     * Token that was used by the operation, if any
     * @var object
     */
    protected $token;

    /**
     * ID of the token was used by the operation, if any
     * @var string
     */
    protected $tokenId;

    /**
     * Card that was used by the operation, if any
     * @var object
     */
    protected $card;

    /**
     * ID of the card that was used by the operation, if any
     * @var string
     */
    protected $cardId;

    /**
     * Gateway configuration that was used to process the operation
     * @var object
     */
    protected $gatewayConfiguration;

    /**
     * ID of the gateway configuration that was used to process the operation
     * @var string
     */
    protected $gatewayConfigurationId;

    /**
     * Amount of the operation
     * @var decimal
     */
    protected $amount;

    /**
     * Currency of the operation
     * @var string
     */
    protected $currency;

    /**
     * True if the operation is an attempt, false otherwise
     * @var boolean
     */
    protected $isAttempt;

    /**
     * True if the operation has failed, false otherwise
     * @var boolean
     */
    protected $hasFailed;

    /**
     * True if the operation amount can be accounted for, false otherwise
     * @var boolean
     */
    protected $isAccountable;

    /**
     * Type of the operation, such as authorization, capture, refund or void
     * @var string
     */
    protected $type;

    /**
     * ID of the operation done through the PSP
     * @var string
     */
    protected $gatewayOperationId;

    /**
     * Acquirer Routing Number, can be used to track a payment or refund at the issuer
     * @var string
     */
    protected $arn;

    /**
     * Error code returned when attempting the operation, if any
     * @var string
     */
    protected $errorCode;

    /**
     * Error message returned when attempting the operation, if any
     * @var string
     */
    protected $errorMessage;

    /**
     * Additionnal context saved when processing the transaction on the specific PSP
     * @var dictionary
     */
    protected $gatewayData;

    /**
     * ThreeDS request payment data (read-only)
     * @var object
     */
    protected $paymentDataThreeDSRequest;

    /**
     * 3-D Secure authentication payment data (read-only)
     * @var object
     */
    protected $paymentDataThreeDSAuthentication;

    /**
     * Network authentication payment data (read-only)
     * @var object
     */
    protected $paymentDataNetworkAuthentication;

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
     * Indicates whether the transaction was processed with a network token instead of raw card details
     * @var boolean
     */
    protected $processedWithNetworkToken;

    /**
     * Payment type of the transaction
     * @var string
     */
    protected $paymentType;

    /**
     * Metadata related to the operation, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Gateway fee generated by the operation
     * @var string
     */
    protected $gatewayFee;

    /**
     * Date at which the operation was created
     * @var string
     */
    protected $createdAt;

    /**
     * TransactionOperation constructor
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
     * ID of the transaction operation
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the transaction operation
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Transaction
     * Transaction to which the operation belongs
     * @return object
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set Transaction
     * Transaction to which the operation belongs
     * @param  object $value
     * @return $this
     */
    public function setTransaction($value)
    {
        if (is_object($value))
            $this->transaction = $value;
        else
        {
            $obj = new Transaction($this->client);
            $obj->fillWithData($value);
            $this->transaction = $obj;
        }
        return $this;
    }
    
    /**
     * Get TransactionId
     * ID of the transaction to which the operation belongs
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set TransactionId
     * ID of the transaction to which the operation belongs
     * @param  string $value
     * @return $this
     */
    public function setTransactionId($value)
    {
        $this->transactionId = $value;
        return $this;
    }
    
    /**
     * Get Token
     * Token that was used by the operation, if any
     * @return object
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set Token
     * Token that was used by the operation, if any
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
     * ID of the token was used by the operation, if any
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * Set TokenId
     * ID of the token was used by the operation, if any
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
     * Card that was used by the operation, if any
     * @return object
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set Card
     * Card that was used by the operation, if any
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
     * ID of the card that was used by the operation, if any
     * @return string
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set CardId
     * ID of the card that was used by the operation, if any
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
     * Gateway configuration that was used to process the operation
     * @return object
     */
    public function getGatewayConfiguration()
    {
        return $this->gatewayConfiguration;
    }

    /**
     * Set GatewayConfiguration
     * Gateway configuration that was used to process the operation
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
     * ID of the gateway configuration that was used to process the operation
     * @return string
     */
    public function getGatewayConfigurationId()
    {
        return $this->gatewayConfigurationId;
    }

    /**
     * Set GatewayConfigurationId
     * ID of the gateway configuration that was used to process the operation
     * @param  string $value
     * @return $this
     */
    public function setGatewayConfigurationId($value)
    {
        $this->gatewayConfigurationId = $value;
        return $this;
    }
    
    /**
     * Get Amount
     * Amount of the operation
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount of the operation
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency of the operation
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the operation
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get IsAttempt
     * True if the operation is an attempt, false otherwise
     * @return bool
     */
    public function getIsAttempt()
    {
        return $this->isAttempt;
    }

    /**
     * Set IsAttempt
     * True if the operation is an attempt, false otherwise
     * @param  bool $value
     * @return $this
     */
    public function setIsAttempt($value)
    {
        $this->isAttempt = $value;
        return $this;
    }
    
    /**
     * Get HasFailed
     * True if the operation has failed, false otherwise
     * @return bool
     */
    public function getHasFailed()
    {
        return $this->hasFailed;
    }

    /**
     * Set HasFailed
     * True if the operation has failed, false otherwise
     * @param  bool $value
     * @return $this
     */
    public function setHasFailed($value)
    {
        $this->hasFailed = $value;
        return $this;
    }
    
    /**
     * Get IsAccountable
     * True if the operation amount can be accounted for, false otherwise
     * @return bool
     */
    public function getIsAccountable()
    {
        return $this->isAccountable;
    }

    /**
     * Set IsAccountable
     * True if the operation amount can be accounted for, false otherwise
     * @param  bool $value
     * @return $this
     */
    public function setIsAccountable($value)
    {
        $this->isAccountable = $value;
        return $this;
    }
    
    /**
     * Get Type
     * Type of the operation, such as authorization, capture, refund or void
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Type of the operation, such as authorization, capture, refund or void
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get GatewayOperationId
     * ID of the operation done through the PSP
     * @return string
     */
    public function getGatewayOperationId()
    {
        return $this->gatewayOperationId;
    }

    /**
     * Set GatewayOperationId
     * ID of the operation done through the PSP
     * @param  string $value
     * @return $this
     */
    public function setGatewayOperationId($value)
    {
        $this->gatewayOperationId = $value;
        return $this;
    }
    
    /**
     * Get Arn
     * Acquirer Routing Number, can be used to track a payment or refund at the issuer
     * @return string
     */
    public function getArn()
    {
        return $this->arn;
    }

    /**
     * Set Arn
     * Acquirer Routing Number, can be used to track a payment or refund at the issuer
     * @param  string $value
     * @return $this
     */
    public function setArn($value)
    {
        $this->arn = $value;
        return $this;
    }
    
    /**
     * Get ErrorCode
     * Error code returned when attempting the operation, if any
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set ErrorCode
     * Error code returned when attempting the operation, if any
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
     * Error message returned when attempting the operation, if any
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Set ErrorMessage
     * Error message returned when attempting the operation, if any
     * @param  string $value
     * @return $this
     */
    public function setErrorMessage($value)
    {
        $this->errorMessage = $value;
        return $this;
    }
    
    /**
     * Get GatewayData
     * Additionnal context saved when processing the transaction on the specific PSP
     * @return array
     */
    public function getGatewayData()
    {
        return $this->gatewayData;
    }

    /**
     * Set GatewayData
     * Additionnal context saved when processing the transaction on the specific PSP
     * @param  array $value
     * @return $this
     */
    public function setGatewayData($value)
    {
        $this->gatewayData = $value;
        return $this;
    }
    
    /**
     * Get PaymentDataThreeDSRequest
     * ThreeDS request payment data (read-only)
     * @return object
     */
    public function getPaymentDataThreeDSRequest()
    {
        return $this->paymentDataThreeDSRequest;
    }

    /**
     * Set PaymentDataThreeDSRequest
     * ThreeDS request payment data (read-only)
     * @param  object $value
     * @return $this
     */
    public function setPaymentDataThreeDSRequest($value)
    {
        if (is_object($value))
            $this->paymentDataThreeDSRequest = $value;
        else
        {
            $obj = new PaymentDataThreeDSRequest($this->client);
            $obj->fillWithData($value);
            $this->paymentDataThreeDSRequest = $obj;
        }
        return $this;
    }
    
    /**
     * Get PaymentDataThreeDSAuthentication
     * 3-D Secure authentication payment data (read-only)
     * @return object
     */
    public function getPaymentDataThreeDSAuthentication()
    {
        return $this->paymentDataThreeDSAuthentication;
    }

    /**
     * Set PaymentDataThreeDSAuthentication
     * 3-D Secure authentication payment data (read-only)
     * @param  object $value
     * @return $this
     */
    public function setPaymentDataThreeDSAuthentication($value)
    {
        if (is_object($value))
            $this->paymentDataThreeDSAuthentication = $value;
        else
        {
            $obj = new PaymentDataThreeDSAuthentication($this->client);
            $obj->fillWithData($value);
            $this->paymentDataThreeDSAuthentication = $obj;
        }
        return $this;
    }
    
    /**
     * Get PaymentDataNetworkAuthentication
     * Network authentication payment data (read-only)
     * @return object
     */
    public function getPaymentDataNetworkAuthentication()
    {
        return $this->paymentDataNetworkAuthentication;
    }

    /**
     * Set PaymentDataNetworkAuthentication
     * Network authentication payment data (read-only)
     * @param  object $value
     * @return $this
     */
    public function setPaymentDataNetworkAuthentication($value)
    {
        if (is_object($value))
            $this->paymentDataNetworkAuthentication = $value;
        else
        {
            $obj = new PaymentDataNetworkAuthentication($this->client);
            $obj->fillWithData($value);
            $this->paymentDataNetworkAuthentication = $obj;
        }
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
     * Get ProcessedWithNetworkToken
     * Indicates whether the transaction was processed with a network token instead of raw card details
     * @return bool
     */
    public function getProcessedWithNetworkToken()
    {
        return $this->processedWithNetworkToken;
    }

    /**
     * Set ProcessedWithNetworkToken
     * Indicates whether the transaction was processed with a network token instead of raw card details
     * @param  bool $value
     * @return $this
     */
    public function setProcessedWithNetworkToken($value)
    {
        $this->processedWithNetworkToken = $value;
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
     * Get Metadata
     * Metadata related to the operation, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the operation, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get GatewayFee
     * Gateway fee generated by the operation
     * @return string
     */
    public function getGatewayFee()
    {
        return $this->gatewayFee;
    }

    /**
     * Set GatewayFee
     * Gateway fee generated by the operation
     * @param  string $value
     * @return $this
     */
    public function setGatewayFee($value)
    {
        $this->gatewayFee = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the operation was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the operation was created
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
     * @return TransactionOperation
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['transaction']))
            $this->setTransaction($data['transaction']);

        if(! empty($data['transaction_id']))
            $this->setTransactionId($data['transaction_id']);

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

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['currency']))
            $this->setCurrency($data['currency']);

        if(! empty($data['is_attempt']))
            $this->setIsAttempt($data['is_attempt']);

        if(! empty($data['has_failed']))
            $this->setHasFailed($data['has_failed']);

        if(! empty($data['is_accountable']))
            $this->setIsAccountable($data['is_accountable']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['gateway_operation_id']))
            $this->setGatewayOperationId($data['gateway_operation_id']);

        if(! empty($data['arn']))
            $this->setArn($data['arn']);

        if(! empty($data['error_code']))
            $this->setErrorCode($data['error_code']);

        if(! empty($data['error_message']))
            $this->setErrorMessage($data['error_message']);

        if(! empty($data['gateway_data']))
            $this->setGatewayData($data['gateway_data']);

        if(! empty($data['payment_data_three_d_s_request']))
            $this->setPaymentDataThreeDSRequest($data['payment_data_three_d_s_request']);

        if(! empty($data['payment_data_three_d_s_authentication']))
            $this->setPaymentDataThreeDSAuthentication($data['payment_data_three_d_s_authentication']);

        if(! empty($data['payment_data_network_authentication']))
            $this->setPaymentDataNetworkAuthentication($data['payment_data_network_authentication']);

        if(! empty($data['initial_scheme_transaction_id']))
            $this->setInitialSchemeTransactionId($data['initial_scheme_transaction_id']);

        if(! empty($data['scheme_id']))
            $this->setSchemeId($data['scheme_id']);

        if(! empty($data['processed_with_network_token']))
            $this->setProcessedWithNetworkToken($data['processed_with_network_token']);

        if(! empty($data['payment_type']))
            $this->setPaymentType($data['payment_type']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['gateway_fee']))
            $this->setGatewayFee($data['gateway_fee']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "id" => $this->getId(),
            "transaction" => $this->getTransaction(),
            "transaction_id" => $this->getTransactionId(),
            "token" => $this->getToken(),
            "token_id" => $this->getTokenId(),
            "card" => $this->getCard(),
            "card_id" => $this->getCardId(),
            "gateway_configuration" => $this->getGatewayConfiguration(),
            "gateway_configuration_id" => $this->getGatewayConfigurationId(),
            "amount" => $this->getAmount(),
            "currency" => $this->getCurrency(),
            "is_attempt" => $this->getIsAttempt(),
            "has_failed" => $this->getHasFailed(),
            "is_accountable" => $this->getIsAccountable(),
            "type" => $this->getType(),
            "gateway_operation_id" => $this->getGatewayOperationId(),
            "arn" => $this->getArn(),
            "error_code" => $this->getErrorCode(),
            "error_message" => $this->getErrorMessage(),
            "gateway_data" => $this->getGatewayData(),
            "payment_data_three_d_s_request" => $this->getPaymentDataThreeDSRequest(),
            "payment_data_three_d_s_authentication" => $this->getPaymentDataThreeDSAuthentication(),
            "payment_data_network_authentication" => $this->getPaymentDataNetworkAuthentication(),
            "initial_scheme_transaction_id" => $this->getInitialSchemeTransactionId(),
            "scheme_id" => $this->getSchemeId(),
            "processed_with_network_token" => $this->getProcessedWithNetworkToken(),
            "payment_type" => $this->getPaymentType(),
            "metadata" => $this->getMetadata(),
            "gateway_fee" => $this->getGatewayFee(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
}
