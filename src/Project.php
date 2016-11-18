<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Project
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the project
     * @var string
     */
    protected $id;

    /**
     * Name of the project
     * @var string
     */
    protected $name;

    /**
     * Name of the project
     * @var string
     */
    protected $logoUrl;

    /**
     * Email of the project
     * @var string
     */
    protected $email;

    /**
     * Date at which the project was created
     * @var string
     */
    protected $createdAt;

    /**
     * Project constructor
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
     * ID of the project
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the project
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
     * Name of the project
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the project
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get LogoUrl
     * Name of the project
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Set LogoUrl
     * Name of the project
     * @param  string $value
     * @return $this
     */
    public function setLogoUrl($value)
    {
        $this->logoUrl = $value;
        return $this;
    }
    
    /**
     * Get Email
     * Email of the project
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set Email
     * Email of the project
     * @param  string $value
     * @return $this
     */
    public function setEmail($value)
    {
        $this->email = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the project was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the project was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Project
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['logo_url']))
            $this->setLogoUrl($data['logo_url']);

        if(! empty($data['email']))
            $this->setEmail($data['email']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
    /**
     * Get all the gateway configurations of the project
     * @param array $options
     * @return array
     */
    public function fetchGatewayConfigurations($options = array())
    {
        $request = new Request($this->client);
        $path    = "/projects/" . urlencode($this->getId()) . "/gateway-configurations";

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
