<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;
use ProcessOut\Networking\RequestProcessoutPublic;


class Event
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the event
     * @var string
     */
    protected $id;

    /**
     * Name of the event
     * @var string
     */
    protected $name;

    /**
     * Data associated to the event, in the form of a dictionary
     * @var dictionary
     */
    protected $data;

    /**
     * Define whether or not event was processed
     * @var boolean
     */
    protected $processed;

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
     * Data associated to the event, in the form of a dictionary
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set Data
     * Data associated to the event, in the form of a dictionary
     * @param  array $value
     * @return $this
     */
    public function setData($value)
    {
        $this->data = $value;
        return $this;
    }
    
    /**
     * Get Processed
     * Define whether or not event was processed
     * @return bool
     */
    public function getProcessed()
    {
        return $this->processed;
    }

    /**
     * Set Processed
     * Define whether or not event was processed
     * @param  bool $value
     * @return $this
     */
    public function setProcessed($value)
    {
        $this->processed = $value;
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
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["data"]))
            $this->setData($data["data"]);

        if(! empty($data["processed"]))
            $this->setProcessed($data["processed"]);

        if(! empty($data["sandbox"]))
            $this->setSandbox($data["sandbox"]);

        if(! empty($data["fired_at"]))
            $this->setFiredAt($data["fired_at"]);

        return $this;
    }

    /**
     * Get all the events.
     * @param array $options
     * @return array
     */
    public static function all($options = array())
    {
        $cur = new Event();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/events";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['events'] as $v)
        {
            $tmp = new Event($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Find an event by its ID.
	 * @param string $eventId
     * @param array $options
     * @return Event
     */
    public static function find($eventId, $options = array())
    {
        $cur = new Event();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/events/" . urlencode($eventId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['event'];
        $event = new Event($cur->instance);
        return $event->fillWithData($body);
        
    }

    /**
     * Mark the event as processed.
     * @param array $options
     * @return bool
     */
    public function markProcessed($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/events/" . urlencode($this->getEventId()) . "";

        $data = array(

        );

        $response = new Response($request->put($path, $data, $options));
        return $response->isSuccess();
        
    }

    
}
