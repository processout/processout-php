<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Refund
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the refund
     * @var string
     */
    protected $id;

    /**
     * Transaction to which the refund is applied
     * @var object
     */
    protected $transaction;

    /**
     * Reason for the refund. Either customer_request, duplicate or fraud
     * @var string
     */
    protected $reason;

    /**
     * Custom details regarding the refund
     * @var string
     */
    protected $information;

    /**
     * Amount to be refunded. Must not be greater than the amount still available on the transaction
     * @var string
     */
    protected $amount;

    /**
     * Metadata related to the refund, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Define whether or not the refund is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the refund was done
     * @var string
     */
    protected $createdAt;

    /**
     * Refund constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->setMetadata(null);
        

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Id
     * ID of the refund
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the refund
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
     * Transaction to which the refund is applied
     * @return object
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set Transaction
     * Transaction to which the refund is applied
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
     * Get Reason
     * Reason for the refund. Either customer_request, duplicate or fraud
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set Reason
     * Reason for the refund. Either customer_request, duplicate or fraud
     * @param  string $value
     * @return $this
     */
    public function setReason($value)
    {
        $this->reason = $value;
        return $this;
    }
    
    /**
     * Get Information
     * Custom details regarding the refund
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set Information
     * Custom details regarding the refund
     * @param  string $value
     * @return $this
     */
    public function setInformation($value)
    {
        $this->information = $value;
        return $this;
    }
    
    /**
     * Get Amount
     * Amount to be refunded. Must not be greater than the amount still available on the transaction
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount to be refunded. Must not be greater than the amount still available on the transaction
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the refund, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the refund, in the form of a dictionary (key-value pair)
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
     * Define whether or not the refund is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the refund is in sandbox environment
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
     * Date at which the refund was done
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the refund was done
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
     * @return Refund
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['transaction']))
            $this->setTransaction($data['transaction']);

        if(! empty($data['reason']))
            $this->setReason($data['reason']);

        if(! empty($data['information']))
            $this->setInformation($data['information']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
    /**
     * Find a transaction's refund by its ID.
     * @param string $transactionId
     * @param string $refundId
     * @param array $options
     * @return $this
     */
    public function find($transactionId, $refundId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/transactions/" . urlencode($transactionId) . "/refunds/" . urlencode($refundId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field refund
        $body = $response->getBody();
        $body = $body['refund'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Apply a refund to a transaction.
     * @param string $transactionId
     * @param array $options
     * @return bool
     */
    public function apply($transactionId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/transactions/" . urlencode($transactionId) . "/refunds";

        $data = array(
            "amount" => $this->getAmount(), 
            "metadata" => $this->getMetadata(), 
            "reason" => $this->getReason(), 
            "information" => $this->getInformation()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
