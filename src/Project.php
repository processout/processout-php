<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;

use ProcessOut\Networking\RequestProcessoutPrivate;

use ProcessOut\Networking\RequestProcessoutPublic;


class Project
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;
    
    /**
     * Email of the project
     * @var string
     */
    protected $email;
    
    /**
     * Unique ID of the project
     * @var string
     */
    protected $id;
    
    /**
     * URL of the project's logo
     * @var string
     */
    protected $logoUrl;
    
    /**
     * Name of the project
     * @var string
     */
    protected $name;
    
    /**
     * Secret key of the project
     * @var string
     */
    protected $secretKey;
    

    /**
     * Project constructor
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
     * Get Id
     * Unique ID of the project
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * Unique ID of the project
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

        return $this;
    }
    
    /**
     * Get LogoUrl
     * URL of the project's logo
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Set LogoUrl
     * URL of the project's logo
     * @param  string $value
     * @return $this
     */
    public function setLogoUrl($value)
    {
        $this->logoUrl = $value;

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
     * Get SecretKey
     * Secret key of the project
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Set SecretKey
     * Secret key of the project
     * @param  string $value
     * @return $this
     */
    public function setSecretKey($value)
    {
        $this->secretKey = $value;

        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Project
     */
    public function fillWithData($data)
    {
        
        if(! empty($data["email"]))
        {
            $this->setEmail($data["email"]);
        }
        
        if(! empty($data["id"]))
        {
            $this->setId($data["id"]);
        }
        
        if(! empty($data["logo_url"]))
        {
            $this->setLogoUrl($data["logo_url"]);
        }
        
        if(! empty($data["name"]))
        {
            $this->setName($data["name"]);
        }
        
        if(! empty($data["secret_key"]))
        {
            $this->setSecretKey($data["secret_key"]);
        }
        

        return $this;
    }

    
    /**
     * Create a new supervised project which will belong to current project.
     * 
     * @return $this
     */
    
    public function createSupervised()
    
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/projects/supervised";

        $data = array(
			"name" => $this->getName(), 
			"email" => $this->getEmail(), 
			"logo_url" => $this->getLogoUrl()
        );

        
        $response = new Response($request->post($path, $data));
        

        
        return $this->fillWithData($response->getBody());
        
    }
    

}
