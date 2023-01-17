<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class APIRequest implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the API request
     * @var string
     */
    protected $id;

    /**
     * Project used to send the API request
     * @var object
     */
    protected $project;

    /**
     * API version used to process the request
     * @var object
     */
    protected $apiVersion;

    /**
     * Idempotency key used to identify the request
     * @var string
     */
    protected $idempotencyKey;

    /**
     * URL called
     * @var string
     */
    protected $url;

    /**
     * HTTP verb used in the request (GET, POST etc)
     * @var string
     */
    protected $method;

    /**
     * Headers sent with the request (client to server)
     * @var dictionary
     */
    protected $headers;

    /**
     * Body of the request (client to server)
     * @var string
     */
    protected $body;

    /**
     * Response code (such as 200 for a successful request)
     * @var integer
     */
    protected $responseCode;

    /**
     * Headers sent in the response (server to client)
     * @var dictionary
     */
    protected $responseHeaders;

    /**
     * Body of the response (client to server)
     * @var string
     */
    protected $responseBody;

    /**
     * Number of milliseconds needed to process the request
     * @var float
     */
    protected $responseMs;

    /**
     * Define whether or not the API request was made in the sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the API request was made
     * @var string
     */
    protected $createdAt;

    /**
     * APIRequest constructor
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
     * ID of the API request
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the API request
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
     * Project used to send the API request
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project used to send the API request
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
     * Get ApiVersion
     * API version used to process the request
     * @return object
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Set ApiVersion
     * API version used to process the request
     * @param  object $value
     * @return $this
     */
    public function setApiVersion($value)
    {
        if (is_object($value))
            $this->apiVersion = $value;
        else
        {
            $obj = new APIVersion($this->client);
            $obj->fillWithData($value);
            $this->apiVersion = $obj;
        }
        return $this;
    }
    
    /**
     * Get IdempotencyKey
     * Idempotency key used to identify the request
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->idempotencyKey;
    }

    /**
     * Set IdempotencyKey
     * Idempotency key used to identify the request
     * @param  string $value
     * @return $this
     */
    public function setIdempotencyKey($value)
    {
        $this->idempotencyKey = $value;
        return $this;
    }
    
    /**
     * Get Url
     * URL called
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL called
     * @param  string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->url = $value;
        return $this;
    }
    
    /**
     * Get Method
     * HTTP verb used in the request (GET, POST etc)
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set Method
     * HTTP verb used in the request (GET, POST etc)
     * @param  string $value
     * @return $this
     */
    public function setMethod($value)
    {
        $this->method = $value;
        return $this;
    }
    
    /**
     * Get Headers
     * Headers sent with the request (client to server)
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set Headers
     * Headers sent with the request (client to server)
     * @param  array $value
     * @return $this
     */
    public function setHeaders($value)
    {
        $this->headers = $value;
        return $this;
    }
    
    /**
     * Get Body
     * Body of the request (client to server)
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set Body
     * Body of the request (client to server)
     * @param  string $value
     * @return $this
     */
    public function setBody($value)
    {
        $this->body = $value;
        return $this;
    }
    
    /**
     * Get ResponseCode
     * Response code (such as 200 for a successful request)
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Set ResponseCode
     * Response code (such as 200 for a successful request)
     * @param  int $value
     * @return $this
     */
    public function setResponseCode($value)
    {
        $this->responseCode = $value;
        return $this;
    }
    
    /**
     * Get ResponseHeaders
     * Headers sent in the response (server to client)
     * @return array
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Set ResponseHeaders
     * Headers sent in the response (server to client)
     * @param  array $value
     * @return $this
     */
    public function setResponseHeaders($value)
    {
        $this->responseHeaders = $value;
        return $this;
    }
    
    /**
     * Get ResponseBody
     * Body of the response (client to server)
     * @return string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Set ResponseBody
     * Body of the response (client to server)
     * @param  string $value
     * @return $this
     */
    public function setResponseBody($value)
    {
        $this->responseBody = $value;
        return $this;
    }
    
    /**
     * Get ResponseMs
     * Number of milliseconds needed to process the request
     * @return double
     */
    public function getResponseMs()
    {
        return $this->responseMs;
    }

    /**
     * Set ResponseMs
     * Number of milliseconds needed to process the request
     * @param  double $value
     * @return $this
     */
    public function setResponseMs($value)
    {
        $this->responseMs = $value;
        return $this;
    }
    
    /**
     * Get Sandbox
     * Define whether or not the API request was made in the sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the API request was made in the sandbox environment
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
     * Date at which the API request was made
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the API request was made
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
     * @return APIRequest
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['api_version']))
            $this->setApiVersion($data['api_version']);

        if(! empty($data['idempotency_key']))
            $this->setIdempotencyKey($data['idempotency_key']);

        if(! empty($data['url']))
            $this->setUrl($data['url']);

        if(! empty($data['method']))
            $this->setMethod($data['method']);

        if(! empty($data['headers']))
            $this->setHeaders($data['headers']);

        if(! empty($data['body']))
            $this->setBody($data['body']);

        if(! empty($data['response_code']))
            $this->setResponseCode($data['response_code']);

        if(! empty($data['response_headers']))
            $this->setResponseHeaders($data['response_headers']);

        if(! empty($data['response_body']))
            $this->setResponseBody($data['response_body']);

        if(! empty($data['response_ms']))
            $this->setResponseMs($data['response_ms']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

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
            "id" => $this->getId(),
            "project" => $this->getProject(),
            "api_version" => $this->getApiVersion(),
            "idempotency_key" => $this->getIdempotencyKey(),
            "url" => $this->getUrl(),
            "method" => $this->getMethod(),
            "headers" => $this->getHeaders(),
            "body" => $this->getBody(),
            "response_code" => $this->getResponseCode(),
            "response_headers" => $this->getResponseHeaders(),
            "response_body" => $this->getResponseBody(),
            "response_ms" => $this->getResponseMs(),
            "sandbox" => $this->getSandbox(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
    /**
     * Get all the API requests.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/api-requests";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field api_requests
        $a    = array();
        $body = $response->getBody();
        foreach($body['api_requests'] as $v)
        {
            $tmp = new APIRequest($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['ApiRequests'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find an API request by its ID.
     * @param string $apiRequestId
     * @param array $options
     * @return $this
     */
    public function find($apiRequestId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/api-requests/{request_id}";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field api_request
        $body = $response->getBody();
        $body = $body['api_request'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
