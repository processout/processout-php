<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceExternalFraudTools implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Forter
     * @var object
     */
    protected $forter;

    /**
     * Ravelin
     * @var object
     */
    protected $ravelin;

    /**
     * Signifyd
     * @var object
     */
    protected $signifyd;

    /**
     * Riskified
     * @var object
     */
    protected $riskified;

    /**
     * InvoiceExternalFraudTools constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Forter
     * Forter
     * @return object
     */
    public function getForter()
    {
        return $this->forter;
    }

    /**
     * Set Forter
     * Forter
     * @param  object $value
     * @return $this
     */
    public function setForter($value)
    {
        $this->forter = $value;
        return $this;
    }
    
    /**
     * Get Ravelin
     * Ravelin
     * @return object
     */
    public function getRavelin()
    {
        return $this->ravelin;
    }

    /**
     * Set Ravelin
     * Ravelin
     * @param  object $value
     * @return $this
     */
    public function setRavelin($value)
    {
        $this->ravelin = $value;
        return $this;
    }
    
    /**
     * Get Signifyd
     * Signifyd
     * @return object
     */
    public function getSignifyd()
    {
        return $this->signifyd;
    }

    /**
     * Set Signifyd
     * Signifyd
     * @param  object $value
     * @return $this
     */
    public function setSignifyd($value)
    {
        $this->signifyd = $value;
        return $this;
    }
    
    /**
     * Get Riskified
     * Riskified
     * @return object
     */
    public function getRiskified()
    {
        return $this->riskified;
    }

    /**
     * Set Riskified
     * Riskified
     * @param  object $value
     * @return $this
     */
    public function setRiskified($value)
    {
        $this->riskified = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoiceExternalFraudTools
     */
    public function fillWithData($data)
    {
        if(! empty($data['forter']))
            $this->setForter($data['forter']);

        if(! empty($data['ravelin']))
            $this->setRavelin($data['ravelin']);

        if(! empty($data['signifyd']))
            $this->setSignifyd($data['signifyd']);

        if(! empty($data['riskified']))
            $this->setRiskified($data['riskified']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return array
     */
    public function jsonSerialize(): array {
        return array(
            "forter" => $this->getForter(),
            "ravelin" => $this->getRavelin(),
            "signifyd" => $this->getSignifyd(),
            "riskified" => $this->getRiskified(),
        );
    }

    
}
