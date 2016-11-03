<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class Webhook
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the recurring invoice
     * @var string
     */
    protected $id;

    /**
     * Project to which the webhook belongs
     * @var object
     */
    protected $project;

    /**
     * Event the webhook is linked to
     * @var object
     */
    protected $event;

    /**
     * URL to which the webhook will be posted
     * @var string
     */
    protected $requestUrl;

    /**
     * Method used to send the webhook (GET or POST)
     * @var string
     */
    protected $requestMethod;

    /**
     * The response body the webhook received when sending its payload
     * @var string
     */
    protected $responseBody;

    /**
     * The response code the webhook received when sending its payload
     * @var string
     */
    protected $responseCode;

    /**
     * The response headers the webhook received when sending its payload
     * @var string
     */
    protected $responseHeaders;

    /**
     * The time it took for the webhook to send its payload
     * @var integer
     */
    protected $responseTimeMs;

    /**
     * The status of the webhook. 0: pending, 1: success, 2: error
     * @var integer
     */
    protected $status;

    /**
     * Date at which the webhook was created
     * @var string
     */
    protected $createdAt;

    /**
     * Date at webhook will be/is released
     * @var string
     */
    protected $releaseAt;

    /**
     * Webhook constructor
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
     * ID of the recurring invoice
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the recurring invoice
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
     * Project to which the webhook belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the webhook belongs
     * @param  object $value
     * @return $this
     */
    public function setProject($value)
    {
        if (is_object($value))
            $this->project = $value;
        else
        {
            $obj = new Project($this->instance);
            $obj->fillWithData($value);
            $this->project = $obj;
        }
        return $this;
    }
    
    /**
     * Get Event
     * Event the webhook is linked to
     * @return object
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set Event
     * Event the webhook is linked to
     * @param  object $value
     * @return $this
     */
    public function setEvent($value)
    {
        if (is_object($value))
            $this->event = $value;
        else
        {
            $obj = new Event($this->instance);
            $obj->fillWithData($value);
            $this->event = $obj;
        }
        return $this;
    }
    
    /**
     * Get RequestUrl
     * URL to which the webhook will be posted
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->requestUrl;
    }

    /**
     * Set RequestUrl
     * URL to which the webhook will be posted
     * @param  string $value
     * @return $this
     */
    public function setRequestUrl($value)
    {
        $this->requestUrl = $value;
        return $this;
    }
    
    /**
     * Get RequestMethod
     * Method used to send the webhook (GET or POST)
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * Set RequestMethod
     * Method used to send the webhook (GET or POST)
     * @param  string $value
     * @return $this
     */
    public function setRequestMethod($value)
    {
        $this->requestMethod = $value;
        return $this;
    }
    
    /**
     * Get ResponseBody
     * The response body the webhook received when sending its payload
     * @return string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Set ResponseBody
     * The response body the webhook received when sending its payload
     * @param  string $value
     * @return $this
     */
    public function setResponseBody($value)
    {
        $this->responseBody = $value;
        return $this;
    }
    
    /**
     * Get ResponseCode
     * The response code the webhook received when sending its payload
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Set ResponseCode
     * The response code the webhook received when sending its payload
     * @param  string $value
     * @return $this
     */
    public function setResponseCode($value)
    {
        $this->responseCode = $value;
        return $this;
    }
    
    /**
     * Get ResponseHeaders
     * The response headers the webhook received when sending its payload
     * @return string
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Set ResponseHeaders
     * The response headers the webhook received when sending its payload
     * @param  string $value
     * @return $this
     */
    public function setResponseHeaders($value)
    {
        $this->responseHeaders = $value;
        return $this;
    }
    
    /**
     * Get ResponseTimeMs
     * The time it took for the webhook to send its payload
     * @return int
     */
    public function getResponseTimeMs()
    {
        return $this->responseTimeMs;
    }

    /**
     * Set ResponseTimeMs
     * The time it took for the webhook to send its payload
     * @param  int $value
     * @return $this
     */
    public function setResponseTimeMs($value)
    {
        $this->responseTimeMs = $value;
        return $this;
    }
    
    /**
     * Get Status
     * The status of the webhook. 0: pending, 1: success, 2: error
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set Status
     * The status of the webhook. 0: pending, 1: success, 2: error
     * @param  int $value
     * @return $this
     */
    public function setStatus($value)
    {
        $this->status = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the webhook was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the webhook was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    
    /**
     * Get ReleaseAt
     * Date at webhook will be/is released
     * @return string
     */
    public function getReleaseAt()
    {
        return $this->releaseAt;
    }

    /**
     * Set ReleaseAt
     * Date at webhook will be/is released
     * @param  string $value
     * @return $this
     */
    public function setReleaseAt($value)
    {
        $this->releaseAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Webhook
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["project"]))
            $this->setProject($data["project"]);

        if(! empty($data["event"]))
            $this->setEvent($data["event"]);

        if(! empty($data["request_url"]))
            $this->setRequestUrl($data["request_url"]);

        if(! empty($data["request_method"]))
            $this->setRequestMethod($data["request_method"]);

        if(! empty($data["response_body"]))
            $this->setResponseBody($data["response_body"]);

        if(! empty($data["response_code"]))
            $this->setResponseCode($data["response_code"]);

        if(! empty($data["response_headers"]))
            $this->setResponseHeaders($data["response_headers"]);

        if(! empty($data["response_time_ms"]))
            $this->setResponseTimeMs($data["response_time_ms"]);

        if(! empty($data["status"]))
            $this->setStatus($data["status"]);

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        if(! empty($data["release_at"]))
            $this->setReleaseAt($data["release_at"]);

        return $this;
    }

    
}
