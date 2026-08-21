<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class CardSchemeDetails implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Scheme transaction ID associated with the card for transaction chaining (e.g. SCA)
     * @var string
     */
    protected $transactionId;

    /**
     * Transaction Link Identifier for Mastercard transaction chaining
     * @var string
     */
    protected $transactionLinkId;

    /**
     * CardSchemeDetails constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get TransactionId
     * Scheme transaction ID associated with the card for transaction chaining (e.g. SCA)
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set TransactionId
     * Scheme transaction ID associated with the card for transaction chaining (e.g. SCA)
     * @param  string $value
     * @return $this
     */
    public function setTransactionId($value)
    {
        $this->transactionId = $value;
        return $this;
    }
    
    /**
     * Get TransactionLinkId
     * Transaction Link Identifier for Mastercard transaction chaining
     * @return string
     */
    public function getTransactionLinkId()
    {
        return $this->transactionLinkId;
    }

    /**
     * Set TransactionLinkId
     * Transaction Link Identifier for Mastercard transaction chaining
     * @param  string $value
     * @return $this
     */
    public function setTransactionLinkId($value)
    {
        $this->transactionLinkId = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CardSchemeDetails
     */
    public function fillWithData($data)
    {
        if(! empty($data['transaction_id']))
            $this->setTransactionId($data['transaction_id']);

        if(! empty($data['transaction_link_id']))
            $this->setTransactionLinkId($data['transaction_link_id']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return array
     */
    public function jsonSerialize(): array {
        return array(
            "transaction_id" => $this->getTransactionId(),
            "transaction_link_id" => $this->getTransactionLinkId(),
        );
    }

    
}
