<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Event
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the event
     * @var string
     */
    protected $id;

    /**
     * Project to which the event belongs
     * @var object
     */
    protected $project;

    /**
     * ID of the project to which the event belongs
     * @var string
     */
    protected $projectId;

    /**
     * Name of the event
     * @var string
     */
    protected $name;

    /**
     * Data object associated to the event
     * @var object
     */
    protected $data;

    /**
     * Define whether or not the event is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the event was fired
     * @var string
     */
    protected $firedAt;

    /**
     * Event constructor
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
     * ID of the event
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the event
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
     * Project to which the event belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the event belongs
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
     * ID of the project to which the event belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the event belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the event
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the event
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Data
     * Data object associated to the event
     * @return object
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set Data
     * Data object associated to the event
     * @param  object $value
     * @return $this
     */
    public function setData($value)
    {
        $this->data = $value;
        return $this;
    }
    
    /**
     * Get Sandbox
     * Define whether or not the event is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the event is in sandbox environment
     * @param  bool $value
     * @return $this
     */
    public function setSandbox($value)
    {
        $this->sandbox = $value;
        return $this;
    }
    
    /**
     * Get FiredAt
     * Date at which the event was fired
     * @return string
     */
    public function getFiredAt()
    {
        return $this->firedAt;
    }

    /**
     * Set FiredAt
     * Date at which the event was fired
     * @param  string $value
     * @return $this
     */
    public function setFiredAt($value)
    {
        $this->firedAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Event
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['data']))
            $this->setData($data['data']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['fired_at']))
            $this->setFiredAt($data['fired_at']);

        return $this;
    }

    
    /**
     * Get all the webhooks of the event.
     * @param array $options
     * @return array
     */
    public function fetchWebhooks($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/events/" . urlencode($this->getId()) . "/webhooks";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field webhooks
        $a    = array();
        $body = $response->getBody();
        foreach($body['webhooks'] as $v)
        {
            $tmp = new Webhook($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Webhooks'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get all the events.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/events";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field events
        $a    = array();
        $body = $response->getBody();
        foreach($body['events'] as $v)
        {
            $tmp = new Event($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Events'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find an event by its ID.
     * @param string $eventId
     * @param array $options
     * @return $this
     */
    public function find($eventId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/events/" . urlencode($eventId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field event
        $body = $response->getBody();
        $body = $body['event'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find an event by the Resource ID that generated it.
     * @param string $resourceId
     * @param array $options
     * @return array
     */
    public function findByResourceId($resourceId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/events/by_resource_id/" . urlencode($resourceId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field events
        $a    = array();
        $body = $response->getBody();
        foreach($body['events'] as $v)
        {
            $tmp = new Event($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Events'] = $a;
        
        return array_values($returnValues)[0];
    }
    
}
