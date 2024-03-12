<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class PayoutItemAmountBreakdowns implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Amount relating to scheme fee
     * @var string
     */
    protected $schemeFee;

    /**
     * Amount relating to interchange fee
     * @var string
     */
    protected $interchangeFee;

    /**
     * Amount relating to gateway fee
     * @var string
     */
    protected $gatewayFee;

    /**
     * Amount relating to markup fee
     * @var string
     */
    protected $markupFee;

    /**
     * Amount relating to acquirer fee
     * @var string
     */
    protected $acquirerFee;

    /**
     * Amount relating to other fee
     * @var string
     */
    protected $otherFee;

    /**
     * PayoutItemAmountBreakdowns constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get SchemeFee
     * Amount relating to scheme fee
     * @return string
     */
    public function getSchemeFee()
    {
        return $this->schemeFee;
    }

    /**
     * Set SchemeFee
     * Amount relating to scheme fee
     * @param  string $value
     * @return $this
     */
    public function setSchemeFee($value)
    {
        $this->schemeFee = $value;
        return $this;
    }
    
    /**
     * Get InterchangeFee
     * Amount relating to interchange fee
     * @return string
     */
    public function getInterchangeFee()
    {
        return $this->interchangeFee;
    }

    /**
     * Set InterchangeFee
     * Amount relating to interchange fee
     * @param  string $value
     * @return $this
     */
    public function setInterchangeFee($value)
    {
        $this->interchangeFee = $value;
        return $this;
    }
    
    /**
     * Get GatewayFee
     * Amount relating to gateway fee
     * @return string
     */
    public function getGatewayFee()
    {
        return $this->gatewayFee;
    }

    /**
     * Set GatewayFee
     * Amount relating to gateway fee
     * @param  string $value
     * @return $this
     */
    public function setGatewayFee($value)
    {
        $this->gatewayFee = $value;
        return $this;
    }
    
    /**
     * Get MarkupFee
     * Amount relating to markup fee
     * @return string
     */
    public function getMarkupFee()
    {
        return $this->markupFee;
    }

    /**
     * Set MarkupFee
     * Amount relating to markup fee
     * @param  string $value
     * @return $this
     */
    public function setMarkupFee($value)
    {
        $this->markupFee = $value;
        return $this;
    }
    
    /**
     * Get AcquirerFee
     * Amount relating to acquirer fee
     * @return string
     */
    public function getAcquirerFee()
    {
        return $this->acquirerFee;
    }

    /**
     * Set AcquirerFee
     * Amount relating to acquirer fee
     * @param  string $value
     * @return $this
     */
    public function setAcquirerFee($value)
    {
        $this->acquirerFee = $value;
        return $this;
    }
    
    /**
     * Get OtherFee
     * Amount relating to other fee
     * @return string
     */
    public function getOtherFee()
    {
        return $this->otherFee;
    }

    /**
     * Set OtherFee
     * Amount relating to other fee
     * @param  string $value
     * @return $this
     */
    public function setOtherFee($value)
    {
        $this->otherFee = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return PayoutItemAmountBreakdowns
     */
    public function fillWithData($data)
    {
        if(! empty($data['scheme_fee']))
            $this->setSchemeFee($data['scheme_fee']);

        if(! empty($data['interchange_fee']))
            $this->setInterchangeFee($data['interchange_fee']);

        if(! empty($data['gateway_fee']))
            $this->setGatewayFee($data['gateway_fee']);

        if(! empty($data['markup_fee']))
            $this->setMarkupFee($data['markup_fee']);

        if(! empty($data['acquirer_fee']))
            $this->setAcquirerFee($data['acquirer_fee']);

        if(! empty($data['other_fee']))
            $this->setOtherFee($data['other_fee']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "scheme_fee" => $this->getSchemeFee(),
            "interchange_fee" => $this->getInterchangeFee(),
            "gateway_fee" => $this->getGatewayFee(),
            "markup_fee" => $this->getMarkupFee(),
            "acquirer_fee" => $this->getAcquirerFee(),
            "other_fee" => $this->getOtherFee(),
        );
    }

    
}
