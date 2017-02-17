<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceDetail
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Type of the invoice detail. Can be a string containing anything, up to 30 characters
     * @var string
     */
    protected $type;

    /**
     * Amount represented by the invoice detail
     * @var string
     */
    protected $amount;

    /**
     * Metadata related to the invoice detail, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * InvoiceDetail constructor
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
     * Get Type
     * Type of the invoice detail. Can be a string containing anything, up to 30 characters
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Type of the invoice detail. Can be a string containing anything, up to 30 characters
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get Amount
     * Amount represented by the invoice detail
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount represented by the invoice detail
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
     * Metadata related to the invoice detail, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the invoice detail, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoiceDetail
     */
    public function fillWithData($data)
    {
        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        return $this;
    }

    
}
