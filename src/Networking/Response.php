<?php

namespace ProcessOut\Networking;

use \ProcessOut\Exceptions\ApiException;
use \ProcessOut\Exceptions\NotFoundException;
use \ProcessOut\Exceptions\ApiAuthenticationException;

class Response
{

    /**
     * Raw response
     * @var anlutro\cURL\Response
     */
    protected $raw;

    /**
     * Status code
     * @var string
     */
    protected $statusCode;

    /**
     * Response headers
     * @var array
     */
    protected $headers;

    /**
     * Raw body
     * @var string
     */
    protected $rawBody;

    /**
     * Json decoded body
     * @var StdClass
     */
    protected $body;

    /**
     * Response's constructor
     * @param anlutro\cURL\Response $raw
     * @param bool|true $checkStatusCode
     */
    public function __construct(\anlutro\cURL\Response $raw,
        $checkStatusCode = true)
    {
        $this->raw          = $raw;
        $this->statusCode   = $raw->statusCode;
        $this->headers      = $raw->headers;
        $this->body         = json_decode($raw->body);
        $this->rawObject    = $raw->body;

        if($checkStatusCode)
            $this->checkStatusCode();
    }

    /**
     * Return the raw response
     * @return anlutro\cURL\Response
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * Get the status code
     * @return int
     */
    public function getStatusCode()
    {
        return (int) $this->statusCode;
    }

    /**
     * Get the string status code
     * @return string
     */
    public function getStatusString()
    {
        return $this->statusCode;
    }

    /**
     * Get the json decoded body
     * @return StdClass
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Get the raw body
     * @return string
     */
    public function getRawBody()
    {
        return $this->rawBody;
    }

    /**
     * Check if the response says it's a success
     * @return boolean
     */
    public function isSuccess()
    {
        if(! isset($this->body->success))
            return false;

        return $this->body->success;
    }

    /**
     * Get the error message from the body
     * @return string
     */
    public function getMessage()
    {
        if(! isset($this->body->message))
            return null;

        return $this->body->message;
    }

    /**
     * Throw an exception if there's been an error in the current response
     * @return void
     */
    protected function checkStatusCode()
    {
        switch($this->getStatusCode())
        {
            case 400:
                throw new ApiException(
                    $this->getMessage());
            case 404:
                throw new NotFoundException(
                    $this->getMessage());
            case 401:
            case 402:
                throw new ApiAuthenticationException(
                    $this->getMessage());
        }

        if($this->getStatusCode() < 200 || $this->getStatusCode() > 206 ||
            !$this->isSuccess())
        {
            throw new ApiException(
                'ProcessOut returned an error which couldn\'t be identified (' .
                    $this->getStatusCode() . '): ' . $this->getMessage());
        }
    }
}