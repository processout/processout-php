<?php

namespace ProcessOut;

use anlutro\cURL\cURL;
use ProcessOut\Exceptions\ApiAuthenticationException;

class ProcessOut
{

    /**
     * ProcessOut host url
     */
    const HOST = 'https://api.processout.com/v1';

    /**
     * Contains cURL instance
     * @var anlutro\cURL\cURL
     */
    protected $cURL;

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
     * Default ProcessOut's instance
     * @var ProcessOut
     */
    protected static $default;

    /**
     * ProcessOut constructor
     * @param string $projectId
     * @param string $projectKey
     */
    public function __construct($projectId, $projectKey)
    {
        $this->ProjectId  = $projectId;
        $this->ProjectKey = $projectKey;

        $this->cURL = new cURL;
    }

    /**
     * Get the cURL instance
     * @return anlutro\cURL\cURL
     */
    public function getCurl()
    {
        return $this->cURL;
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
     * Set the default ProcessOut's instance
     * @param  ProcessOut $processOut
     * @return ProcessOut
     */
    public static function setDefault(ProcessOut $processOut)
    {
        self::$default = $processOut;

        return $processOut;
    }

    /**
     * Get the default ProcessOut's instance
     * @return ProcessOut
     */
    public static function getDefault()
    {
        if(! (self::$default instanceof ProcessOut))
            throw new ApiAuthenticationException(
                'You need to define a default ProcessOut object (ProcessOut::setDefault()).');

        return self::$default;
    }

}
