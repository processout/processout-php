<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class Refund
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

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
     * @param ProcessOut\ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
        {
            $processOut = ProcessOut::getDefault();
        }

        $this->instance = $processOut;

        $this->setMetadata(array('_library' => 'php'));
        
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
            $obj = new Transaction($this->instance);
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
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["transaction"]))
            $this->setTransaction($data["transaction"]);

        if(! empty($data["reason"]))
            $this->setReason($data["reason"]);

        if(! empty($data["information"]))
            $this->setInformation($data["information"]);

        if(! empty($data["amount"]))
            $this->setAmount($data["amount"]);

        if(! empty($data["metadata"]))
            $this->setMetadata($data["metadata"]);

        if(! empty($data["sandbox"]))
            $this->setSandbox($data["sandbox"]);

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        return $this;
    }

    /**
     * Find a transaction's refund by its ID.
	 * @param string $transactionId
	 * @param string $refundId
     * @param array $options
     * @return $this
     */
    public static function find($transactionId, $refundId, $options = array())
    {
        $cur = new Refund();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/transactions/" . urlencode($transactionId) . "/refunds/" . urlencode($refundId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['refund'];
        return $cur->fillWithData($body);
        
    }

    /**
     * Apply a refund to a transaction.
	 * @param string $transactionId
     * @param array $options
     * @return bool
     */
    public function apply($transactionId, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/transactions/{transactions_id}/refunds";

        $data = array(
			"amount" => $this->getAmount(), 
			"metadata" => $this->getMetadata(), 
			"reason" => $this->getReason(), 
			"information" => $this->getInformation()
        );

        $response = new Response($request->post($path, $data, $options));
        return $response->isSuccess();
        
    }

    
}
