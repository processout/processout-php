<?php

// The content of this file was automatically generated

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
     * Project to which the transaction belongs
     * @var object
     */
    protected $project;

    /**
     * Subscription to which this transaction belongs
     * @var object
     */
    protected $subscription;

    /**
     * Customer that was linked to this transaction
     * @var object
     */
    protected $customer;

    /**
     * Token that was used to capture the payment of this transaction
     * @var object
     */
    protected $token;

    /**
     * Card that was used to capture the payment of this transaction
     * @var object
     */
    protected $card;

    /**
     * Name of the transaction
     * @var string
     */
    protected $name;

    /**
     * Amount that was successfully authorized on the transaction
     * @var string
     */
    protected $authorizedAmount;

    /**
     * Amount that was successfully captured on the transaction
     * @var string
     */
    protected $capturedAmount;

    /**
     * Currency of the transaction
     * @var string
     */
    protected $currency;

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
     * @var string
     */
    protected $processoutFee;

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
            $obj = new Project($this->instance);
            $obj->fillWithData($value);
            $this->project = $obj;
        }
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
            $obj = new Subscription($this->instance);
            $obj->fillWithData($value);
            $this->subscription = $obj;
        }
        return $this;
    }
    
    /**
     * Get Customer
     * Customer that was linked to this transaction
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer that was linked to this transaction
     * @param  object $value
     * @return $this
     */
    public function setCustomer($value)
    {
        if (is_object($value))
            $this->customer = $value;
        else
        {
            $obj = new Customer($this->instance);
            $obj->fillWithData($value);
            $this->customer = $obj;
        }
        return $this;
    }
    
    /**
     * Get Token
     * Token that was used to capture the payment of this transaction
     * @return object
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set Token
     * Token that was used to capture the payment of this transaction
     * @param  object $value
     * @return $this
     */
    public function setToken($value)
    {
        if (is_object($value))
            $this->token = $value;
        else
        {
            $obj = new Token($this->instance);
            $obj->fillWithData($value);
            $this->token = $obj;
        }
        return $this;
    }
    
    /**
     * Get Card
     * Card that was used to capture the payment of this transaction
     * @return object
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set Card
     * Card that was used to capture the payment of this transaction
     * @param  object $value
     * @return $this
     */
    public function setCard($value)
    {
        if (is_object($value))
            $this->card = $value;
        else
        {
            $obj = new Card($this->instance);
            $obj->fillWithData($value);
            $this->card = $obj;
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
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["project"]))
            $this->setProject($data["project"]);

        if(! empty($data["subscription"]))
            $this->setSubscription($data["subscription"]);

        if(! empty($data["customer"]))
            $this->setCustomer($data["customer"]);

        if(! empty($data["token"]))
            $this->setToken($data["token"]);

        if(! empty($data["card"]))
            $this->setCard($data["card"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["authorized_amount"]))
            $this->setAuthorizedAmount($data["authorized_amount"]);

        if(! empty($data["captured_amount"]))
            $this->setCapturedAmount($data["captured_amount"]);

        if(! empty($data["currency"]))
            $this->setCurrency($data["currency"]);

        if(! empty($data["status"]))
            $this->setStatus($data["status"]);

        if(! empty($data["authorized"]))
            $this->setAuthorized($data["authorized"]);

        if(! empty($data["captured"]))
            $this->setCaptured($data["captured"]);

        if(! empty($data["processout_fee"]))
            $this->setProcessoutFee($data["processout_fee"]);

        if(! empty($data["metadata"]))
            $this->setMetadata($data["metadata"]);

        if(! empty($data["sandbox"]))
            $this->setSandbox($data["sandbox"]);

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        return $this;
    }

    /**
     * Get the transaction's refunds.
     * @param array $options
     * @return array
     */
    public function refunds($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/transactions/" . urlencode($this->getId()) . "/refunds";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $returnValues = array();

        
        // Handling for field refunds
        $a    = array();
        $body = $response->getBody();
        foreach($body['refunds'] as $v)
        {
            $tmp = new Refund($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        $returnValues["Refunds"] = $a;
                
        return array_values($returnValues)[0];
        
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
        $returnValues = array();

        
        // Handling for field transactions
        $a    = array();
        $body = $response->getBody();
        foreach($body['transactions'] as $v)
        {
            $tmp = new Transaction($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        $returnValues["Transactions"] = $a;
                
        return array_values($returnValues)[0];
        
    }

    /**
     * Find a transaction by its ID.
	 * @param string $transactionId
     * @param array $options
     * @return $this
     */
    public static function find($transactionId, $options = array())
    {
        $cur = new Transaction();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/transactions/" . urlencode($transactionId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $returnValues = array();

        
        // Handling for field transaction
        $body = $response->getBody();
                    $body = $body['transaction'];
                    
        $returnValues["find"] = $cur->fillWithData($body);
        return array_values($returnValues)[0];
        
    }

    
}
