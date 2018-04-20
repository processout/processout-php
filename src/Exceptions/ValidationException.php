<?php

namespace ProcessOut\Exceptions;

use \Exception;

class ValidationException extends Exception implements ProcessOutExceptionInterface
{

    protected $errorCode;

    /**
     * Exception representing an API error
     * @param string         $code
     * @param string         $message
     * @param integer        $code
     * @param Exception|null $previous
     */
    public function __construct($errorCode, $message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->errorCode = $errorCode;
    }

    public function getErrorCode() {
        return $this->errorCode;
    }

}
