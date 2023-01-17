<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class APIVersion implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Name used to identify the API version
     * @var string
     */
    protected $name;

    /**
     * Description of the API version. Can contain a changelog
     * @var string
     */
    protected $description;

    /**
     * Date at which the API version was released
     * @var string
     */
    protected $createdAt;

    /**
     * APIVersion constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Name
     * Name used to identify the API version
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name used to identify the API version
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Description
     * Description of the API version. Can contain a changelog
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Description
     * Description of the API version. Can contain a changelog
     * @param  string $value
     * @return $this
     */
    public function setDescription($value)
    {
        $this->description = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the API version was released
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the API version was released
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
     * @return APIVersion
     */
    public function fillWithData($data)
    {
        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['description']))
            $this->setDescription($data['description']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize(): mixed {
        return array(
            "name" => $this->getName(),
            "description" => $this->getDescription(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
}
