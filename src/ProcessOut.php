<?php

namespace ProcessOut;

use ProcessOut\Objects\Invoice;
use ProcessOut\Objects\TailoredInvoice;

class ProcessOut
{

    /**
     * ProcessOut host url
     */
    const HOST = 'https://api.processout.com/v1';

    /**
     * ProcesOut's project ID
     * @var string
     */
    protected $ProjectId;

    /**
     * ProcessOut's project secret
     * @var string
     */
    protected $ProjectKey;

    /**
     * ProcessOut constructor
     * @param string $projectId
     * @param string $projectKey
     */
    public function __construct($projectId, $projectKey)
    {
        $this->ProjectId  = $projectId;
        $this->ProjectKey = $projectKey;
    }

    /**
     * Get current project ID
     * @return string
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }

    /**
     * Get current project secret key
     * @return string
     */
    public function getProjectKey()
    {
        return $this->ProjectKey;
    }

    /**
     * Perform basic checks on the callback to make sure it's legit
     * @param array $data Input data (ex: php://input)
     * @return boolean
     */
    public function checkCallbackData($data)
    {
        return hash_equals(base64_decode($data['hmac_signature']), hash_hmac(
            'sha256',
            $data['transaction_id'],
            $this->ProjectKey,
            true));
    }

}
