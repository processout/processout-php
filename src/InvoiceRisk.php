<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceRisk implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Scoring of the invoice
     * @var string
     */
    protected $score;

    /**
     * Define whether or not the invoice is legit
     * @var boolean
     */
    protected $isLegit;

    /**
     * InvoiceRisk constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Score
     * Scoring of the invoice
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set Score
     * Scoring of the invoice
     * @param  string $value
     * @return $this
     */
    public function setScore($value)
    {
        $this->score = $value;
        return $this;
    }
    
    /**
     * Get IsLegit
     * Define whether or not the invoice is legit
     * @return bool
     */
    public function getIsLegit()
    {
        return $this->isLegit;
    }

    /**
     * Set IsLegit
     * Define whether or not the invoice is legit
     * @param  bool $value
     * @return $this
     */
    public function setIsLegit($value)
    {
        $this->isLegit = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoiceRisk
     */
    public function fillWithData($data)
    {
        if(! empty($data['score']))
            $this->setScore($data['score']);

        if(! empty($data['is_legit']))
            $this->setIsLegit($data['is_legit']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "score" => $this->getScore(),
        "is_legit" => $this->getIsLegit(),
        );
    }

    
}
