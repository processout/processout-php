<?php
namespace ProcessOut;
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
     * @param ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
            $processOut = ProcessOut::getDefault();

        $this->ProcessOut = $processOut;
    }
    public function validate($data)
    {
        //TODO: Use hash_equals with forward compatibility, to avoid timing
        // based attacks.
        return base64_decode($data['hmac_signature']) == hash_hmac(
            'sha256',
            $data['transaction_id'],
            $this->ProcessOut->getProjectKey(),
            true);
    }
}
