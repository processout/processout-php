<?php

namespace ProcessOut\Exceptions;

interface ProcessOutExceptionInterface
{

    /**
     * Return the error code stored by the ProcessOut exception
     * @return string
     */
    public function getErrorCode();

}