<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class Gateway
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the gateway
     * @var string
     */
    protected $id;

    /**
     * Name of the payment gateway
     * @var string
     */
    protected $name;

    /**
     * Name of the payment gateway that can be displayed
     * @var string
     */
    protected $displayName;

    /**
     * Logo URL of the payment gateway
     * @var string
     */
    protected $logoUrl;

    /**
     * URL of the payment gateway
     * @var string
     */
    protected $url;

    /**
     * Supported flow by the gateway (one-off, subscription or tokenization)
     * @var slice
     */
    protected $flows;

    /**
     * Gateway tags. Mainly used to filter gateways depending on their attributes (e-wallets and such)
     * @var slice
     */
    protected $tags;

    /**
     * Description of the payment gateway
     * @var string
     */
    protected $description;

    /**
     * Gateway constructor
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
     * Get Id
     * ID of the gateway
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the gateway
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the payment gateway
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the payment gateway
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get DisplayName
     * Name of the payment gateway that can be displayed
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set DisplayName
     * Name of the payment gateway that can be displayed
     * @param  string $value
     * @return $this
     */
    public function setDisplayName($value)
    {
        $this->displayName = $value;
        return $this;
    }
    
    /**
     * Get LogoUrl
     * Logo URL of the payment gateway
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Set LogoUrl
     * Logo URL of the payment gateway
     * @param  string $value
     * @return $this
     */
    public function setLogoUrl($value)
    {
        $this->logoUrl = $value;
        return $this;
    }
    
    /**
     * Get Url
     * URL of the payment gateway
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL of the payment gateway
     * @param  string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->url = $value;
        return $this;
    }
    
    /**
     * Get Flows
     * Supported flow by the gateway (one-off, subscription or tokenization)
     * @return array
     */
    public function getFlows()
    {
        return $this->flows;
    }

    /**
     * Set Flows
     * Supported flow by the gateway (one-off, subscription or tokenization)
     * @param  array $value
     * @return $this
     */
    public function setFlows($value)
    {
        $this->flows = $value;
        return $this;
    }
    
    /**
     * Get Tags
     * Gateway tags. Mainly used to filter gateways depending on their attributes (e-wallets and such)
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set Tags
     * Gateway tags. Mainly used to filter gateways depending on their attributes (e-wallets and such)
     * @param  array $value
     * @return $this
     */
    public function setTags($value)
    {
        $this->tags = $value;
        return $this;
    }
    
    /**
     * Get Description
     * Description of the payment gateway
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Description
     * Description of the payment gateway
     * @param  string $value
     * @return $this
     */
    public function setDescription($value)
    {
        $this->description = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Gateway
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["display_name"]))
            $this->setDisplayName($data["display_name"]);

        if(! empty($data["logo_url"]))
            $this->setLogoUrl($data["logo_url"]);

        if(! empty($data["url"]))
            $this->setUrl($data["url"]);

        if(! empty($data["flows"]))
            $this->setFlows($data["flows"]);

        if(! empty($data["tags"]))
            $this->setTags($data["tags"]);

        if(! empty($data["description"]))
            $this->setDescription($data["description"]);

        return $this;
    }

    
}
