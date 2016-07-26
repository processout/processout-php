<?php

namespace ProcessOut;

use anlutro\cURL\cURL;
use ProcessOut\Exceptions\ApiAuthenticationException;

class ProcessOut
{

    /**
     * ProcessOut host url
     */
    protected $host = 'https://api.processout.com/';

    /**
     * Contains cURL instance
     * @var anlutro\cURL\cURL
     */
    protected $cURL;

    /**
     * ProcessOut's project id
     * @var string
     */
    protected $projectId;

    /**
     * ProcessOut's project secret key
     * @var string
     */
    protected $projectSecret;

    /**
     * Default ProcessOut's instance
     * @var ProcessOut
     */
    protected static $default;

    /**
     * ProcessOut constructor
     */
    public function __construct()
    {
        $this->cURL = new cURL;
    }

    /**
     * Get the library host URL
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the library host URL
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Set projectId
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;

        return $this;
    }

    /**
     * Get projectId
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set projectSecret
     * @return $this
     */
    public function setProjectSecret($value)
    {
        $this->projectSecret = $value;

        return $this;
    }

    /**
     * Get projectSecret
     * @return string
     */
    public function getProjectSecret()
    {
        return $this->projectSecret;
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
