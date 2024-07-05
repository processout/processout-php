<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Project implements \JsonSerializable
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
     * Project used to create this project
     * @var object
     */
    protected $supervisorProject;

    /**
     * ID of the project used to create this project
     * @var string
     */
    protected $supervisorProjectId;

    /**
     * Current API version of the project
     * @var object
     */
    protected $apiVersion;

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
     * Default currency of the project, used to compute analytics amounts
     * @var string
     */
    protected $defaultCurrency;

    /**
     * Private key of the project. Only returned when creating a project
     * @var string
     */
    protected $privateKey;

    /**
     * Dunning configuration of the project
     * @var list
     */
    protected $dunningConfiguration;

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
     * Get SupervisorProject
     * Project used to create this project
     * @return object
     */
    public function getSupervisorProject()
    {
        return $this->supervisorProject;
    }

    /**
     * Set SupervisorProject
     * Project used to create this project
     * @param  object $value
     * @return $this
     */
    public function setSupervisorProject($value)
    {
        if (is_object($value))
            $this->supervisorProject = $value;
        else
        {
            $obj = new Project($this->client);
            $obj->fillWithData($value);
            $this->supervisorProject = $obj;
        }
        return $this;
    }
    
    /**
     * Get SupervisorProjectId
     * ID of the project used to create this project
     * @return string
     */
    public function getSupervisorProjectId()
    {
        return $this->supervisorProjectId;
    }

    /**
     * Set SupervisorProjectId
     * ID of the project used to create this project
     * @param  string $value
     * @return $this
     */
    public function setSupervisorProjectId($value)
    {
        $this->supervisorProjectId = $value;
        return $this;
    }
    
    /**
     * Get ApiVersion
     * Current API version of the project
     * @return object
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * Set ApiVersion
     * Current API version of the project
     * @param  object $value
     * @return $this
     */
    public function setApiVersion($value)
    {
        if (is_object($value))
            $this->apiVersion = $value;
        else
        {
            $obj = new APIVersion($this->client);
            $obj->fillWithData($value);
            $this->apiVersion = $obj;
        }
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
     * Get DefaultCurrency
     * Default currency of the project, used to compute analytics amounts
     * @return string
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * Set DefaultCurrency
     * Default currency of the project, used to compute analytics amounts
     * @param  string $value
     * @return $this
     */
    public function setDefaultCurrency($value)
    {
        $this->defaultCurrency = $value;
        return $this;
    }
    
    /**
     * Get PrivateKey
     * Private key of the project. Only returned when creating a project
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * Set PrivateKey
     * Private key of the project. Only returned when creating a project
     * @param  string $value
     * @return $this
     */
    public function setPrivateKey($value)
    {
        $this->privateKey = $value;
        return $this;
    }
    
    /**
     * Get DunningConfiguration
     * Dunning configuration of the project
     * @return array
     */
    public function getDunningConfiguration()
    {
        return $this->dunningConfiguration;
    }

    /**
     * Set DunningConfiguration
     * Dunning configuration of the project
     * @param  array $value
     * @return $this
     */
    public function setDunningConfiguration($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->dunningConfiguration = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new DunningAction($this->client);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->dunningConfiguration = $a;
        }
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

        if(! empty($data['supervisor_project']))
            $this->setSupervisorProject($data['supervisor_project']);

        if(! empty($data['supervisor_project_id']))
            $this->setSupervisorProjectId($data['supervisor_project_id']);

        if(! empty($data['api_version']))
            $this->setApiVersion($data['api_version']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['logo_url']))
            $this->setLogoUrl($data['logo_url']);

        if(! empty($data['email']))
            $this->setEmail($data['email']);

        if(! empty($data['default_currency']))
            $this->setDefaultCurrency($data['default_currency']);

        if(! empty($data['private_key']))
            $this->setPrivateKey($data['private_key']);

        if(! empty($data['dunning_configuration']))
            $this->setDunningConfiguration($data['dunning_configuration']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "id" => $this->getId(),
            "supervisor_project" => $this->getSupervisorProject(),
            "supervisor_project_id" => $this->getSupervisorProjectId(),
            "api_version" => $this->getApiVersion(),
            "name" => $this->getName(),
            "logo_url" => $this->getLogoUrl(),
            "email" => $this->getEmail(),
            "default_currency" => $this->getDefaultCurrency(),
            "private_key" => $this->getPrivateKey(),
            "dunning_configuration" => $this->getDunningConfiguration(),
            "created_at" => $this->getCreatedAt(),
        );
    }

    
    /**
     * Fetch the current project information.
     * @param array $options
     * @return $this
     */
    public function fetch($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/projects/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field project
        $body = $response->getBody();
        $body = $body['project'];
        $returnValues['fetch'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Save the updated project's attributes.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/projects/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field project
        $body = $response->getBody();
        $body = $body['project'];
        $returnValues['save'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete the project. Be careful! Executing this request will prevent any further interaction with the API that uses this project.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/projects/{project_id}";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get all the supervised projects.
     * @param array $options
     * @return array
     */
    public function fetchSupervised($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/supervised-projects";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field projects
        $a    = array();
        $body = $response->getBody();
        foreach($body['projects'] as $v)
        {
            $tmp = new Project($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Projects'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new supervised project.
     * @param array $options
     * @return $this
     */
    public function createSupervised($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/supervised-projects";

        $data = array(
            "id" => $this->getId(), 
            "name" => $this->getName(), 
            "default_currency" => $this->getDefaultCurrency(), 
            "dunning_configuration" => $this->getDunningConfiguration(), 
            "applepay_settings" => (!empty($options["applepay_settings"])) ? $options["applepay_settings"] : null, 
            "public_metadata" => (!empty($options["public_metadata"])) ? $options["public_metadata"] : null
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field project
        $body = $response->getBody();
        $body = $body['project'];
        $returnValues['createSupervised'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
