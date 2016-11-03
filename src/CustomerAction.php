<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class CustomerAction
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * Customer action type (such as url)
     * @var string
     */
    protected $type;

    /**
     * Value of the customer action. If type is an URL, URL to which you should redirect your customer
     * @var string
     */
    protected $value;

    /**
     * CustomerAction constructor
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
     * Get Type
     * Customer action type (such as url)
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Customer action type (such as url)
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get Value
     * Value of the customer action. If type is an URL, URL to which you should redirect your customer
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Value
     * Value of the customer action. If type is an URL, URL to which you should redirect your customer
     * @param  string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CustomerAction
     */
    public function fillWithData($data)
    {
        if(! empty($data["type"]))
            $this->setType($data["type"]);

        if(! empty($data["value"]))
            $this->setValue($data["value"]);

        return $this;
    }

    
}
