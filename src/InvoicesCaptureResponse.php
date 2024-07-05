<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoicesCaptureResponse implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Transaction linked to the invoice
     * @var object
     */
    protected $transaction;

    /**
     * Customer action to be performed
     * @var object
     */
    protected $customerAction;

    /**
     * InvoicesCaptureResponse constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Transaction
     * Transaction linked to the invoice
     * @return object
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set Transaction
     * Transaction linked to the invoice
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
     * Get CustomerAction
     * Customer action to be performed
     * @return object
     */
    public function getCustomerAction()
    {
        return $this->customerAction;
    }

    /**
     * Set CustomerAction
     * Customer action to be performed
     * @param  object $value
     * @return $this
     */
    public function setCustomerAction($value)
    {
        if (is_object($value))
            $this->customerAction = $value;
        else
        {
            $obj = new CustomerAction($this->client);
            $obj->fillWithData($value);
            $this->customerAction = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoicesCaptureResponse
     */
    public function fillWithData($data)
    {
        if(! empty($data['transaction']))
            $this->setTransaction($data['transaction']);

        if(! empty($data['customer_action']))
            $this->setCustomerAction($data['customer_action']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "transaction" => $this->getTransaction(),
            "customer_action" => $this->getCustomerAction(),
        );
    }

    
}
