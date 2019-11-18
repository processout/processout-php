<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Payout implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the payout
     * @var string
     */
    protected $id;

    /**
     * Project to which the payout belongs
     * @var object
     */
    protected $project;

    /**
     * ID of the project to which the payout belongs
     * @var string
     */
    protected $projectId;

    /**
     * Status of the payout
     * @var string
     */
    protected $status;

    /**
     * Amount of the payout
     * @var decimal
     */
    protected $amount;

    /**
     * Currency of the payout
     * @var string
     */
    protected $currency;

    /**
     * Metadata related to the payout, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Name of the bank to which the payout was issued, if available
     * @var string
     */
    protected $bankName;

    /**
     * Summary of the bank to which the payout was issued, if available
     * @var string
     */
    protected $bankSummary;

    /**
     * Number of completed transactions linked to the payout, if available
     * @var integer
     */
    protected $salesTransactions;

    /**
     * Volume of completed transactions linked to the payout, if available
     * @var decimal
     */
    protected $salesVolume;

    /**
     * Number of refunded transactions linked to the payout, if available
     * @var integer
     */
    protected $refundsTransactions;

    /**
     * Volume of refunded transactions linked to the payout, if available
     * @var decimal
     */
    protected $refundsVolume;

    /**
     * Number of chargebacked transactions linked to the payout, if available
     * @var integer
     */
    protected $chargebacksTransactions;

    /**
     * Volume of chargebacked transactions linked to the payout, if available
     * @var decimal
     */
    protected $chargebacksVolume;

    /**
     * Fees linked to the payout, if available
     * @var decimal
     */
    protected $fees;

    /**
     * Adjustments linked to the payout, if available
     * @var decimal
     */
    protected $adjustments;

    /**
     * Reserve kept on the payout, if available
     * @var decimal
     */
    protected $reserve;

    /**
     * Date at which the payout was settled
     * @var string
     */
    protected $settledAt;

    /**
     * Date at which the payout was created
     * @var string
     */
    protected $createdAt;

    /**
     * Payout constructor
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
     * ID of the payout
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the payout
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
     * Project to which the payout belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the payout belongs
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
     * ID of the project to which the payout belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the payout belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get Status
     * Status of the payout
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set Status
     * Status of the payout
     * @param  string $value
     * @return $this
     */
    public function setStatus($value)
    {
        $this->status = $value;
        return $this;
    }
    
    /**
     * Get Amount
     * Amount of the payout
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount of the payout
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
     * Currency of the payout
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the payout
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the payout, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the payout, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get BankName
     * Name of the bank to which the payout was issued, if available
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set BankName
     * Name of the bank to which the payout was issued, if available
     * @param  string $value
     * @return $this
     */
    public function setBankName($value)
    {
        $this->bankName = $value;
        return $this;
    }
    
    /**
     * Get BankSummary
     * Summary of the bank to which the payout was issued, if available
     * @return string
     */
    public function getBankSummary()
    {
        return $this->bankSummary;
    }

    /**
     * Set BankSummary
     * Summary of the bank to which the payout was issued, if available
     * @param  string $value
     * @return $this
     */
    public function setBankSummary($value)
    {
        $this->bankSummary = $value;
        return $this;
    }
    
    /**
     * Get SalesTransactions
     * Number of completed transactions linked to the payout, if available
     * @return int
     */
    public function getSalesTransactions()
    {
        return $this->salesTransactions;
    }

    /**
     * Set SalesTransactions
     * Number of completed transactions linked to the payout, if available
     * @param  int $value
     * @return $this
     */
    public function setSalesTransactions($value)
    {
        $this->salesTransactions = $value;
        return $this;
    }
    
    /**
     * Get SalesVolume
     * Volume of completed transactions linked to the payout, if available
     * @return string
     */
    public function getSalesVolume()
    {
        return $this->salesVolume;
    }

    /**
     * Set SalesVolume
     * Volume of completed transactions linked to the payout, if available
     * @param  string $value
     * @return $this
     */
    public function setSalesVolume($value)
    {
        $this->salesVolume = $value;
        return $this;
    }
    
    /**
     * Get RefundsTransactions
     * Number of refunded transactions linked to the payout, if available
     * @return int
     */
    public function getRefundsTransactions()
    {
        return $this->refundsTransactions;
    }

    /**
     * Set RefundsTransactions
     * Number of refunded transactions linked to the payout, if available
     * @param  int $value
     * @return $this
     */
    public function setRefundsTransactions($value)
    {
        $this->refundsTransactions = $value;
        return $this;
    }
    
    /**
     * Get RefundsVolume
     * Volume of refunded transactions linked to the payout, if available
     * @return string
     */
    public function getRefundsVolume()
    {
        return $this->refundsVolume;
    }

    /**
     * Set RefundsVolume
     * Volume of refunded transactions linked to the payout, if available
     * @param  string $value
     * @return $this
     */
    public function setRefundsVolume($value)
    {
        $this->refundsVolume = $value;
        return $this;
    }
    
    /**
     * Get ChargebacksTransactions
     * Number of chargebacked transactions linked to the payout, if available
     * @return int
     */
    public function getChargebacksTransactions()
    {
        return $this->chargebacksTransactions;
    }

    /**
     * Set ChargebacksTransactions
     * Number of chargebacked transactions linked to the payout, if available
     * @param  int $value
     * @return $this
     */
    public function setChargebacksTransactions($value)
    {
        $this->chargebacksTransactions = $value;
        return $this;
    }
    
    /**
     * Get ChargebacksVolume
     * Volume of chargebacked transactions linked to the payout, if available
     * @return string
     */
    public function getChargebacksVolume()
    {
        return $this->chargebacksVolume;
    }

    /**
     * Set ChargebacksVolume
     * Volume of chargebacked transactions linked to the payout, if available
     * @param  string $value
     * @return $this
     */
    public function setChargebacksVolume($value)
    {
        $this->chargebacksVolume = $value;
        return $this;
    }
    
    /**
     * Get Fees
     * Fees linked to the payout, if available
     * @return string
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Set Fees
     * Fees linked to the payout, if available
     * @param  string $value
     * @return $this
     */
    public function setFees($value)
    {
        $this->fees = $value;
        return $this;
    }
    
    /**
     * Get Adjustments
     * Adjustments linked to the payout, if available
     * @return string
     */
    public function getAdjustments()
    {
        return $this->adjustments;
    }

    /**
     * Set Adjustments
     * Adjustments linked to the payout, if available
     * @param  string $value
     * @return $this
     */
    public function setAdjustments($value)
    {
        $this->adjustments = $value;
        return $this;
    }
    
    /**
     * Get Reserve
     * Reserve kept on the payout, if available
     * @return string
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    /**
     * Set Reserve
     * Reserve kept on the payout, if available
     * @param  string $value
     * @return $this
     */
    public function setReserve($value)
    {
        $this->reserve = $value;
        return $this;
    }
    
    /**
     * Get SettledAt
     * Date at which the payout was settled
     * @return string
     */
    public function getSettledAt()
    {
        return $this->settledAt;
    }

    /**
     * Set SettledAt
     * Date at which the payout was settled
     * @param  string $value
     * @return $this
     */
    public function setSettledAt($value)
    {
        $this->settledAt = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the payout was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the payout was created
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
     * @return Payout
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['status']))
            $this->setStatus($data['status']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['currency']))
            $this->setCurrency($data['currency']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['bank_name']))
            $this->setBankName($data['bank_name']);

        if(! empty($data['bank_summary']))
            $this->setBankSummary($data['bank_summary']);

        if(! empty($data['sales_transactions']))
            $this->setSalesTransactions($data['sales_transactions']);

        if(! empty($data['sales_volume']))
            $this->setSalesVolume($data['sales_volume']);

        if(! empty($data['refunds_transactions']))
            $this->setRefundsTransactions($data['refunds_transactions']);

        if(! empty($data['refunds_volume']))
            $this->setRefundsVolume($data['refunds_volume']);

        if(! empty($data['chargebacks_transactions']))
            $this->setChargebacksTransactions($data['chargebacks_transactions']);

        if(! empty($data['chargebacks_volume']))
            $this->setChargebacksVolume($data['chargebacks_volume']);

        if(! empty($data['fees']))
            $this->setFees($data['fees']);

        if(! empty($data['adjustments']))
            $this->setAdjustments($data['adjustments']);

        if(! empty($data['reserve']))
            $this->setReserve($data['reserve']);

        if(! empty($data['settled_at']))
            $this->setSettledAt($data['settled_at']);

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
            "project" => $this->getProject(),
            "project_id" => $this->getProjectId(),
            "status" => $this->getStatus(),
            "amount" => $this->getAmount(),
            "currency" => $this->getCurrency(),
            "metadata" => $this->getMetadata(),
            "bank_name" => $this->getBankName(),
            "bank_summary" => $this->getBankSummary(),
            "sales_transactions" => $this->getSalesTransactions(),
            "sales_volume" => $this->getSalesVolume(),
            "refunds_transactions" => $this->getRefundsTransactions(),
            "refunds_volume" => $this->getRefundsVolume(),
            "chargebacks_transactions" => $this->getChargebacksTransactions(),
            "chargebacks_volume" => $this->getChargebacksVolume(),
            "fees" => $this->getFees(),
            "adjustments" => $this->getAdjustments(),
            "reserve" => $this->getReserve(),
            "settled_at" => $this->getSettledAt(),
            "created_at" => $this->getCreatedAt(),
            );
    }

    
    /**
     * Get all the items linked to the payout.
     * @param array $options
     * @return array
     */
    public function fetchItems($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/payouts/" . urlencode($this->getId()) . "/items";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field items
        $a    = array();
        $body = $response->getBody();
        foreach($body['items'] as $v)
        {
            $tmp = new PayoutItem($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Items'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get all the payouts.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/payouts";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field payouts
        $a    = array();
        $body = $response->getBody();
        foreach($body['payouts'] as $v)
        {
            $tmp = new Payout($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Payouts'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a payout by its ID.
     * @param string $payoutId
     * @param array $options
     * @return $this
     */
    public function find($payoutId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/payouts/" . urlencode($payoutId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field payout
        $body = $response->getBody();
        $body = $body['payout'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
