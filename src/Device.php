<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Device implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Request origin. Use "backend" if the request is not coming directly from the frontend
     * @var string
     */
    protected $requestOrigin;

    /**
     * Device identifier
     * @var string
     */
    protected $id;

    /**
     * Device channel. Possible values: "web", "ios", "android", "other"
     * @var string
     */
    protected $channel;

    /**
     * Device IP address. Use if request origin is "backend"
     * @var string
     */
    protected $ipAddress;

    /**
     * Device user agent. Use if request origin is "backend"
     * @var string
     */
    protected $userAgent;

    /**
     * Device accept header. Use if request origin is "backend"
     * @var string
     */
    protected $headerAccept;

    /**
     * Device referer header. Use if request origin is "backend"
     * @var string
     */
    protected $headerReferer;

    /**
     * Device color depth. Use if request origin is "backend"
     * @var integer
     */
    protected $appColorDepth;

    /**
     * Device Java enabled. Use if request origin is "backend"
     * @var boolean
     */
    protected $appJavaEnabled;

    /**
     * Device language. Use if request origin is "backend"
     * @var string
     */
    protected $appLanguage;

    /**
     * Device screen height. Use if request origin is "backend"
     * @var integer
     */
    protected $appScreenHeight;

    /**
     * Device screen width. Use if request origin is "backend"
     * @var integer
     */
    protected $appScreenWidth;

    /**
     * Device timezone offset. Use if request origin is "backend"
     * @var integer
     */
    protected $appTimezoneOffset;

    /**
     * Device constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get RequestOrigin
     * Request origin. Use "backend" if the request is not coming directly from the frontend
     * @return string
     */
    public function getRequestOrigin()
    {
        return $this->requestOrigin;
    }

    /**
     * Set RequestOrigin
     * Request origin. Use "backend" if the request is not coming directly from the frontend
     * @param  string $value
     * @return $this
     */
    public function setRequestOrigin($value)
    {
        $this->requestOrigin = $value;
        return $this;
    }
    
    /**
     * Get Id
     * Device identifier
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * Device identifier
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Channel
     * Device channel. Possible values: "web", "ios", "android", "other"
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set Channel
     * Device channel. Possible values: "web", "ios", "android", "other"
     * @param  string $value
     * @return $this
     */
    public function setChannel($value)
    {
        $this->channel = $value;
        return $this;
    }
    
    /**
     * Get IpAddress
     * Device IP address. Use if request origin is "backend"
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set IpAddress
     * Device IP address. Use if request origin is "backend"
     * @param  string $value
     * @return $this
     */
    public function setIpAddress($value)
    {
        $this->ipAddress = $value;
        return $this;
    }
    
    /**
     * Get UserAgent
     * Device user agent. Use if request origin is "backend"
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set UserAgent
     * Device user agent. Use if request origin is "backend"
     * @param  string $value
     * @return $this
     */
    public function setUserAgent($value)
    {
        $this->userAgent = $value;
        return $this;
    }
    
    /**
     * Get HeaderAccept
     * Device accept header. Use if request origin is "backend"
     * @return string
     */
    public function getHeaderAccept()
    {
        return $this->headerAccept;
    }

    /**
     * Set HeaderAccept
     * Device accept header. Use if request origin is "backend"
     * @param  string $value
     * @return $this
     */
    public function setHeaderAccept($value)
    {
        $this->headerAccept = $value;
        return $this;
    }
    
    /**
     * Get HeaderReferer
     * Device referer header. Use if request origin is "backend"
     * @return string
     */
    public function getHeaderReferer()
    {
        return $this->headerReferer;
    }

    /**
     * Set HeaderReferer
     * Device referer header. Use if request origin is "backend"
     * @param  string $value
     * @return $this
     */
    public function setHeaderReferer($value)
    {
        $this->headerReferer = $value;
        return $this;
    }
    
    /**
     * Get AppColorDepth
     * Device color depth. Use if request origin is "backend"
     * @return int
     */
    public function getAppColorDepth()
    {
        return $this->appColorDepth;
    }

    /**
     * Set AppColorDepth
     * Device color depth. Use if request origin is "backend"
     * @param  int $value
     * @return $this
     */
    public function setAppColorDepth($value)
    {
        $this->appColorDepth = $value;
        return $this;
    }
    
    /**
     * Get AppJavaEnabled
     * Device Java enabled. Use if request origin is "backend"
     * @return bool
     */
    public function getAppJavaEnabled()
    {
        return $this->appJavaEnabled;
    }

    /**
     * Set AppJavaEnabled
     * Device Java enabled. Use if request origin is "backend"
     * @param  bool $value
     * @return $this
     */
    public function setAppJavaEnabled($value)
    {
        $this->appJavaEnabled = $value;
        return $this;
    }
    
    /**
     * Get AppLanguage
     * Device language. Use if request origin is "backend"
     * @return string
     */
    public function getAppLanguage()
    {
        return $this->appLanguage;
    }

    /**
     * Set AppLanguage
     * Device language. Use if request origin is "backend"
     * @param  string $value
     * @return $this
     */
    public function setAppLanguage($value)
    {
        $this->appLanguage = $value;
        return $this;
    }
    
    /**
     * Get AppScreenHeight
     * Device screen height. Use if request origin is "backend"
     * @return int
     */
    public function getAppScreenHeight()
    {
        return $this->appScreenHeight;
    }

    /**
     * Set AppScreenHeight
     * Device screen height. Use if request origin is "backend"
     * @param  int $value
     * @return $this
     */
    public function setAppScreenHeight($value)
    {
        $this->appScreenHeight = $value;
        return $this;
    }
    
    /**
     * Get AppScreenWidth
     * Device screen width. Use if request origin is "backend"
     * @return int
     */
    public function getAppScreenWidth()
    {
        return $this->appScreenWidth;
    }

    /**
     * Set AppScreenWidth
     * Device screen width. Use if request origin is "backend"
     * @param  int $value
     * @return $this
     */
    public function setAppScreenWidth($value)
    {
        $this->appScreenWidth = $value;
        return $this;
    }
    
    /**
     * Get AppTimezoneOffset
     * Device timezone offset. Use if request origin is "backend"
     * @return int
     */
    public function getAppTimezoneOffset()
    {
        return $this->appTimezoneOffset;
    }

    /**
     * Set AppTimezoneOffset
     * Device timezone offset. Use if request origin is "backend"
     * @param  int $value
     * @return $this
     */
    public function setAppTimezoneOffset($value)
    {
        $this->appTimezoneOffset = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Device
     */
    public function fillWithData($data)
    {
        if(! empty($data['request_origin']))
            $this->setRequestOrigin($data['request_origin']);

        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['channel']))
            $this->setChannel($data['channel']);

        if(! empty($data['ip_address']))
            $this->setIpAddress($data['ip_address']);

        if(! empty($data['user_agent']))
            $this->setUserAgent($data['user_agent']);

        if(! empty($data['header_accept']))
            $this->setHeaderAccept($data['header_accept']);

        if(! empty($data['header_referer']))
            $this->setHeaderReferer($data['header_referer']);

        if(! empty($data['app_color_depth']))
            $this->setAppColorDepth($data['app_color_depth']);

        if(! empty($data['app_java_enabled']))
            $this->setAppJavaEnabled($data['app_java_enabled']);

        if(! empty($data['app_language']))
            $this->setAppLanguage($data['app_language']);

        if(! empty($data['app_screen_height']))
            $this->setAppScreenHeight($data['app_screen_height']);

        if(! empty($data['app_screen_width']))
            $this->setAppScreenWidth($data['app_screen_width']);

        if(! empty($data['app_timezone_offset']))
            $this->setAppTimezoneOffset($data['app_timezone_offset']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "request_origin" => $this->getRequestOrigin(),
            "id" => $this->getId(),
            "channel" => $this->getChannel(),
            "ip_address" => $this->getIpAddress(),
            "user_agent" => $this->getUserAgent(),
            "header_accept" => $this->getHeaderAccept(),
            "header_referer" => $this->getHeaderReferer(),
            "app_color_depth" => $this->getAppColorDepth(),
            "app_java_enabled" => $this->getAppJavaEnabled(),
            "app_language" => $this->getAppLanguage(),
            "app_screen_height" => $this->getAppScreenHeight(),
            "app_screen_width" => $this->getAppScreenWidth(),
            "app_timezone_offset" => $this->getAppTimezoneOffset(),
        );
    }

    
}
