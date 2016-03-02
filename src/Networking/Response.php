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
     * Json decoded body
     * @var StdClass
     */
    protected $body;

    /**
     * Response's constructor
     * @param anlutro\cURL\Response $raw
     * @param bool|true $checkStatusCode
     */
    public function __construct(\anlutro\cURL\Response $raw)
    {
        $this->raw        = $raw;
        $this->statusCode = $raw->statusCode;
        $this->headers    = array_change_key_case($raw->headers, CASE_LOWER);
        $this->rawObject  = $raw->body;

        switch($this->headers['content-type'])
        {
        case 'application/json':
            $this->body = (array) json_decode($raw->body, true);
            break;

        default:
            $this->body = (array) parse_str($raw->body);
            break;
        }

        $this->check();
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
     * Check whether the request was successful or not
     * @return boolean
     */
    public function isSuccess()
    {
        if(! isset($this->body["success"]) || ! $this->body["success"])
            return false;

        return true;
    }

    /**
     * Get the error messages, if any. If there's multiple error messages,
     * they'll be appended to each others
     * @return string
     */
    public function getMessage()
    {
        $message = '';
        if(! empty($this->body["message"]))
            $message .= $this->body["message"];

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
                throw new ApiAuthenticationException(
                    'Your ProcessOut credentials could not be verified (401): ' .
                        $this->getMessage());
            }

            throw new ApiException(
                'ProcessOut returned an error (' .
                    $this->getStatusCode() . '): ' . $this->getMessage());
        }
    }
}
