<?php

namespace ProcessOut\Exceptions;

use \Exception;

class NotFoundException extends Exception
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

    public function getCode() {
        return $this->errorCode;
    }

}
