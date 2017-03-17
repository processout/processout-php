<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class WebhookEndpoint
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the webhook endpoint
     * @var string
     */
    protected $id;

    /**
     * Project to which the webhook endpoint belongs
     * @var object
     */
    protected $project;

    /**
     * ID of the project to which the webhook belongs
     * @var string
     */
    protected $projectId;

    /**
     * URL to which the webhook endpoint points to
     * @var string
     */
    protected $url;

    /**
     * Slice of string representing the whitelisted events posted to the endpoint
     * @var object
     */
    protected $eventsWhitelist;

    /**
     * Define whether or not the webhook endpoint is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the webhook endpoint was created
     * @var string
     */
    protected $createdAt;

    /**
     * WebhookEndpoint constructor
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
     * ID of the webhook endpoint
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the webhook endpoint
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Project
     * Project to which the webhook endpoint belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the webhook endpoint belongs
     * @param  object $value
     * @return $this
     */
    public function setProject($value)
    {
        if (is_object($value))
            $this->project = $value;
        else
        {
            $obj = new Project($this->client);
            $obj->fillWithData($value);
            $this->project = $obj;
        }
        return $this;
    }
    
    /**
     * Get ProjectId
     * ID of the project to which the webhook belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the webhook belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get Url
     * URL to which the webhook endpoint points to
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which the webhook endpoint points to
     * @param  string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->url = $value;
        return $this;
    }
    
    /**
     * Get EventsWhitelist
     * Slice of string representing the whitelisted events posted to the endpoint
     * @return object
     */
    public function getEventsWhitelist()
    {
        return $this->eventsWhitelist;
    }

    /**
     * Set EventsWhitelist
     * Slice of string representing the whitelisted events posted to the endpoint
     * @param  object $value
     * @return $this
     */
    public function setEventsWhitelist($value)
    {
        $this->eventsWhitelist = $value;
        return $this;
    }
    
    /**
     * Get Sandbox
     * Define whether or not the webhook endpoint is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the webhook endpoint is in sandbox environment
     * @param  bool $value
     * @return $this
     */
    public function setSandbox($value)
    {
        $this->sandbox = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the webhook endpoint was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the webhook endpoint was created
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
     * @return WebhookEndpoint
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['url']))
            $this->setUrl($data['url']);

        if(! empty($data['events_whitelist']))
            $this->setEventsWhitelist($data['events_whitelist']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
}
