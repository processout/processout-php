<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class PayoutItem
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the payout item
     * @var string
     */
    protected $id;

    /**
     * Project to which the payout item belongs
     * @var object
     */
    protected $project;

    /**
     * ID of the project to which the payout item belongs
     * @var string
     */
    protected $projectId;

    /**
     * Payout to which the item belongs
     * @var object
     */
    protected $payout;

    /**
     * ID of the payout to which the item belongs
     * @var string
     */
    protected $payoutId;

    /**
     * Transaction linked to this payout item. Can be null
     * @var object
     */
    protected $transaction;

    /**
     * ID of the transaction linked to this payout item. Can be null
     * @var string
     */
    protected $transactionId;

    /**
     * Type of the payout item
     * @var string
     */
    protected $type;

    /**
     * ID of the payout item from the payment gateway
     * @var string
     */
    protected $gatewayId;

    /**
     * Fee linked to this specific payout item. Can be null or 0.
     * @var decimal
     */
    protected $fee;

    /**
     * Metadata related to the payout item, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Date at which the payout item was created
     * @var string
     */
    protected $createdAt;

    /**
     * PayoutItem constructor
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
     * ID of the payout item
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the payout item
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
     * Project to which the payout item belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the payout item belongs
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
     * ID of the project to which the payout item belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the payout item belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get Payout
     * Payout to which the item belongs
     * @return object
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * Set Payout
     * Payout to which the item belongs
     * @param  object $value
     * @return $this
     */
    public function setPayout($value)
    {
        if (is_object($value))
            $this->payout = $value;
        else
        {
            $obj = new Payout($this->client);
            $obj->fillWithData($value);
            $this->payout = $obj;
        }
        return $this;
    }
    
    /**
     * Get PayoutId
     * ID of the payout to which the item belongs
     * @return string
     */
    public function getPayoutId()
    {
        return $this->payoutId;
    }

    /**
     * Set PayoutId
     * ID of the payout to which the item belongs
     * @param  string $value
     * @return $this
     */
    public function setPayoutId($value)
    {
        $this->payoutId = $value;
        return $this;
    }
    
    /**
     * Get Transaction
     * Transaction linked to this payout item. Can be null
     * @return object
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set Transaction
     * Transaction linked to this payout item. Can be null
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
     * ID of the transaction linked to this payout item. Can be null
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set TransactionId
     * ID of the transaction linked to this payout item. Can be null
     * @param  string $value
     * @return $this
     */
    public function setTransactionId($value)
    {
        $this->transactionId = $value;
        return $this;
    }
    
    /**
     * Get Type
     * Type of the payout item
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Type of the payout item
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get GatewayId
     * ID of the payout item from the payment gateway
     * @return string
     */
    public function getGatewayId()
    {
        return $this->gatewayId;
    }

    /**
     * Set GatewayId
     * ID of the payout item from the payment gateway
     * @param  string $value
     * @return $this
     */
    public function setGatewayId($value)
    {
        $this->gatewayId = $value;
        return $this;
    }
    
    /**
     * Get Fee
     * Fee linked to this specific payout item. Can be null or 0.
     * @return string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set Fee
     * Fee linked to this specific payout item. Can be null or 0.
     * @param  string $value
     * @return $this
     */
    public function setFee($value)
    {
        $this->fee = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the payout item, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the payout item, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the payout item was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the payout item was created
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
     * @return PayoutItem
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['payout']))
            $this->setPayout($data['payout']);

        if(! empty($data['payout_id']))
            $this->setPayoutId($data['payout_id']);

        if(! empty($data['transaction']))
            $this->setTransaction($data['transaction']);

        if(! empty($data['transaction_id']))
            $this->setTransactionId($data['transaction_id']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['gateway_id']))
            $this->setGatewayId($data['gateway_id']);

        if(! empty($data['fee']))
            $this->setFee($data['fee']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
}
