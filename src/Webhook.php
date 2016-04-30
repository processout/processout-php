<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;


class Webhook
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * Customer constructor
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
     * Make sure a given webhook is valid (coming from ProcessOut)
     * @param string reqBody
     * @param string b
     * @return boolean
     */
    public function validate($reqBody, $hmacInput)
    {
        $hash = hash_hmac(
            'sha256',
            $reqBody,
            $this->instance->getProjectSecret(),
            true);
        $original = base64_decode($hmacInput);

        // md5 hashing makes timing attacks useless
        return md5($hash) == md5($original);
    }

}
