<?php

namespace ProcessOut\Exceptions;

use \Exception;

class InternalException extends Exception
{

    /**
     * Exception representing an API error
     * @param string         $message
     * @param integer        $code
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}
