<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class DunningAction implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Dunning action. Can be either retry, cancel, set_past_due or leave_unchanged
     * @var string
     */
    protected $action;

    /**
     * Delay in days that should be waited before executing the next dunning action
     * @var integer
     */
    protected $delayInDays;

    /**
     * DunningAction constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Action
     * Dunning action. Can be either retry, cancel, set_past_due or leave_unchanged
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set Action
     * Dunning action. Can be either retry, cancel, set_past_due or leave_unchanged
     * @param  string $value
     * @return $this
     */
    public function setAction($value)
    {
        $this->action = $value;
        return $this;
    }
    
    /**
     * Get DelayInDays
     * Delay in days that should be waited before executing the next dunning action
     * @return int
     */
    public function getDelayInDays()
    {
        return $this->delayInDays;
    }

    /**
     * Set DelayInDays
     * Delay in days that should be waited before executing the next dunning action
     * @param  int $value
     * @return $this
     */
    public function setDelayInDays($value)
    {
        $this->delayInDays = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return DunningAction
     */
    public function fillWithData($data)
    {
        if(! empty($data['action']))
            $this->setAction($data['action']);

        if(! empty($data['delay_in_days']))
            $this->setDelayInDays($data['delay_in_days']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "action" => $this->getAction(),
            "delay_in_days" => $this->getDelayInDays(),
            );
    }

    
}
