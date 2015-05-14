<?php

namespace ProcessOut\Callback;

use ProcessOut\ProcessOut;

class Callback
{

    /**
     * ProcessOut instanciated object
     * @var ProcessOut
     */
    protected $ProcessOut;

    /**
     * Callback constructor
     * @param ProcessOut $processOut
     */
    public function __construct(ProcessOut $processOut)
    {
        $this->ProcessOut = $processOut;
    }

    public function validate($data)
    {
        return hash_equals(base64_decode($data['hmac_signature']), hash_hmac(
            'sha256',
            $data['transaction_id'],
            $this->ProcessOut->getProjectKey(),
            true));
    }

}