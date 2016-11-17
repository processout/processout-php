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
     * Get the error messages, if any. If there's multiple error messages,
     * they'll be appended to each others
     * @return string
     */
    public function getMessage()
    {
        $message = '';
        if(! empty($this->body['message']))
            $message .= $this->body['message'];

        return $message;
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
                throw new NotFoundException(
                    'The resource could not be found (404): ' .
                        $this->getMessage());
            }
            if($this->getStatusCode() == 401)
            {
                throw new AuthenticationException(
                    'Your ProcessOut credentials could not be verified (401): ' .
                        $this->getMessage());
            }
            if($this->getStatusCode() == 400)
            {
                throw new ValidationException(
                    'Your request could not be processed (400): ' .
                        $this->getMessage());
            }
            if($this->getStatusCode() >= 500)
            {
                throw new InternalException(
                    'ProcessOut returned an internal error (' .
                        $this->getStatusString() . '): ' . $this->getMessage());
            }

            throw new GenericException(
                'ProcessOut returned an error (' .
                    $this->getStatusString() . '): ' . $this->getMessage());
        }
    }
}
