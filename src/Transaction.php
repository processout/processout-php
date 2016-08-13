<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class Transaction
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the transaction
     * @var string
     */
    protected $id;

    /**
     * Status of the transaction
     * @var string
     */
    protected $status;

    /**
     * ProcessOut fee applied on the transaction
     * @var string
     */
    protected $fee;

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
     * @param ProcessOut\ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
        {
            $processOut = ProcessOut::getDefault();
        }

        $this->instance = $processOut;

        
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
     * Get Fee
     * ProcessOut fee applied on the transaction
     * @return string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set Fee
     * ProcessOut fee applied on the transaction
     * @param  string $value
     * @return $this
     */
    public function setFee($value)
    {
        $this->fee = $value;
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
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["status"]))
            $this->setStatus($data["status"]);

        if(! empty($data["fee"]))
            $this->setFee($data["fee"]);

        if(! empty($data["sandbox"]))
            $this->setSandbox($data["sandbox"]);

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        return $this;
    }

    /**
     * Get all the transactions.
     * @param array $options
     * @return array
     */
    public static function all($options = array())
    {
        $cur = new Transaction();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/transactions";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['transactions'] as $v)
        {
            $tmp = new Transaction($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Find a transaction by its ID.
	 * @param string $transactionId
     * @param array $options
     * @return Transaction
     */
    public static function find($transactionId, $options = array())
    {
        $cur = new Transaction();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/transactions/" . urlencode($transactionId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['transaction'];
        $transaction = new Transaction($cur->instance);
        return $transaction->fillWithData($body);
        
    }

    
}
