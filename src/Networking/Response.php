<?php

namespace ProcessOut\Networking;

use \ProcessOut\Exceptions\AuthenticationException;
use \ProcessOut\Exceptions\GenericException;
use \ProcessOut\Exceptions\InternalException;
use \ProcessOut\Exceptions\NotFoundException;
use \ProcessOut\Exceptions\ValidationException;

class Response
{

    /**
     * Status code
     * @var string
     */
    protected $statusCode;

    /**
     * Json decoded body
     * @var StdClass
     */
    protected $body;

    /**
     * Response's constructor
     * @param string $raw
     * @param in     $status
     */
    public function __construct($raw, $status)
    {
        $this->statusCode = $status;
        $this->body       = (array) json_decode($raw, true);

        $this->check();
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
        return (string) $this->statusCode;
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
     * Check whether the request was successful or not
     * @return boolean
     */
    public function isSuccess()
    {
        return (isset($this->body['success']) && $this->body['success']);
    }

    /**
     * Get the error code, if any
     * @return string
     */
    public function getCode()
    {
        if(! empty($this->body['error_type']))
            return $this->body['error_type'];

        return '';
    }

    /**
     * Get the error message, if any
     * @return string
     */
    public function getMessage()
    {
        if(! empty($this->body['message']))
            return $this->body['message'];

        return '';
    }

    /**
     * Throw an exception if there's been an error in the current response
     * @return void
     */
    protected function check()
    {
        if(! $this->isSuccess())
        {
            if($this->getStatusCode() == 404)
            {
                throw new NotFoundException($this->getCode(), $this->getMessage());
            }
            if($this->getStatusCode() == 401)
            {
                throw new AuthenticationException($this->getCode(), $this->getMessage());
            }
            if($this->getStatusCode() == 400)
            {
                throw new ValidationException($this->getCode(), $this->getMessage());
            }
            if($this->getStatusCode() >= 500)
            {
                throw new InternalException($this->getCode(), $this->getMessage());
            }

            throw new GenericException($this->getCode(), $this->getMessage());
        }
    }
}
