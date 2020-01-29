<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Gateway implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

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
     * True if the gateway can pull old transactions into ProcessOut, false otherwise
     * @var boolean
     */
    protected $canPullTransactions;

    /**
     * True if the gateway supports refunds, false otherwise
     * @var boolean
     */
    protected $canRefund;

    /**
     * True if the gateway supports oauth authentication, false otherwise
     * @var boolean
     */
    protected $isOauthAuthentication;

    /**
     * Description of the payment gateway
     * @var string
     */
    protected $description;

    /**
     * Gateway constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
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
     * Get CanPullTransactions
     * True if the gateway can pull old transactions into ProcessOut, false otherwise
     * @return bool
     */
    public function getCanPullTransactions()
    {
        return $this->canPullTransactions;
    }

    /**
     * Set CanPullTransactions
     * True if the gateway can pull old transactions into ProcessOut, false otherwise
     * @param  bool $value
     * @return $this
     */
    public function setCanPullTransactions($value)
    {
        $this->canPullTransactions = $value;
        return $this;
    }
    
    /**
     * Get CanRefund
     * True if the gateway supports refunds, false otherwise
     * @return bool
     */
    public function getCanRefund()
    {
        return $this->canRefund;
    }

    /**
     * Set CanRefund
     * True if the gateway supports refunds, false otherwise
     * @param  bool $value
     * @return $this
     */
    public function setCanRefund($value)
    {
        $this->canRefund = $value;
        return $this;
    }
    
    /**
     * Get IsOauthAuthentication
     * True if the gateway supports oauth authentication, false otherwise
     * @return bool
     */
    public function getIsOauthAuthentication()
    {
        return $this->isOauthAuthentication;
    }

    /**
     * Set IsOauthAuthentication
     * True if the gateway supports oauth authentication, false otherwise
     * @param  bool $value
     * @return $this
     */
    public function setIsOauthAuthentication($value)
    {
        $this->isOauthAuthentication = $value;
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
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['display_name']))
            $this->setDisplayName($data['display_name']);

        if(! empty($data['logo_url']))
            $this->setLogoUrl($data['logo_url']);

        if(! empty($data['url']))
            $this->setUrl($data['url']);

        if(! empty($data['flows']))
            $this->setFlows($data['flows']);

        if(! empty($data['tags']))
            $this->setTags($data['tags']);

        if(! empty($data['can_pull_transactions']))
            $this->setCanPullTransactions($data['can_pull_transactions']);

        if(! empty($data['can_refund']))
            $this->setCanRefund($data['can_refund']);

        if(! empty($data['is_oauth_authentication']))
            $this->setIsOauthAuthentication($data['is_oauth_authentication']);

        if(! empty($data['description']))
            $this->setDescription($data['description']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "id" => $this->getId(),
        "name" => $this->getName(),
        "display_name" => $this->getDisplayName(),
        "logo_url" => $this->getLogoUrl(),
        "url" => $this->getUrl(),
        "flows" => $this->getFlows(),
        "tags" => $this->getTags(),
        "can_pull_transactions" => $this->getCanPullTransactions(),
        "can_refund" => $this->getCanRefund(),
        "is_oauth_authentication" => $this->getIsOauthAuthentication(),
        "description" => $this->getDescription(),
        );
    }

    
    /**
     * Get all the gateway configurations of the gateway
     * @param array $options
     * @return array
     */
    public function fetchGatewayConfigurations($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/gateways/" . urlencode($this->getName()) . "/gateway-configurations";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field gateway_configurations
        $a    = array();
        $body = $response->getBody();
        foreach($body['gateway_configurations'] as $v)
        {
            $tmp = new GatewayConfiguration($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['GatewayConfigurations'] = $a;
        
        return array_values($returnValues)[0];
    }
    
}
