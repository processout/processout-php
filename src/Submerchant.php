<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Submerchant implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the submerchant at ProcessOut
     * @var string
     */
    protected $id;

    /**
     * Legal name of the submerchant
     * @var string
     */
    protected $name;

    /**
     * Time at which the submerchant was created
     * @var string
     */
    protected $createdAt;

    /**
     * Submerchant constructor
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
     * ID of the submerchant at ProcessOut
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the submerchant at ProcessOut
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Legal name of the submerchant
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Legal name of the submerchant
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Time at which the submerchant was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Time at which the submerchant was created
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
     * @return Submerchant
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return array
     */
    public function jsonSerialize(): array {
        return array(
            "id" => $this->getId(),
            "name" => $this->getName(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
}
