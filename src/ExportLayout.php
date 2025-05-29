<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ExportLayout implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the export layout
     * @var string
     */
    protected $id;

    /**
     * Project to which the export layout belongs
     * @var object
     */
    protected $project;

    /**
     * ID of the project to which the export layout belongs
     * @var string
     */
    protected $projectId;

    /**
     * Date at which the export layout was created
     * @var string
     */
    protected $createdAt;

    /**
     * Name of the export layout.
     * @var string
     */
    protected $name;

    /**
     * Type of the export layout.
     * @var string
     */
    protected $type;

    /**
     * Whether the export layout is the default one for the project. It will be used for automatic exports.
     * @var boolean
     */
    protected $isDefault;

    /**
     * Configuration of the export layout.
     * @var object
     */
    protected $configuration;

    /**
     * ExportLayout constructor
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
     * ID of the export layout
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the export layout
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Project
     * Project to which the export layout belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the export layout belongs
     * @param  object $value
     * @return $this
     */
    public function setProject($value)
    {
        if (is_object($value))
            $this->project = $value;
        else
        {
            $obj = new Project($this->client);
            $obj->fillWithData($value);
            $this->project = $obj;
        }
        return $this;
    }
    
    /**
     * Get ProjectId
     * ID of the project to which the export layout belongs
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set ProjectId
     * ID of the project to which the export layout belongs
     * @param  string $value
     * @return $this
     */
    public function setProjectId($value)
    {
        $this->projectId = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the export layout was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the export layout was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the export layout.
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the export layout.
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Type
     * Type of the export layout.
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Type of the export layout.
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get IsDefault
     * Whether the export layout is the default one for the project. It will be used for automatic exports.
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Set IsDefault
     * Whether the export layout is the default one for the project. It will be used for automatic exports.
     * @param  bool $value
     * @return $this
     */
    public function setIsDefault($value)
    {
        $this->isDefault = $value;
        return $this;
    }
    
    /**
     * Get Configuration
     * Configuration of the export layout.
     * @return object
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Set Configuration
     * Configuration of the export layout.
     * @param  object $value
     * @return $this
     */
    public function setConfiguration($value)
    {
        if (is_object($value))
            $this->configuration = $value;
        else
        {
            $obj = new ExportLayoutConfiguration($this->client);
            $obj->fillWithData($value);
            $this->configuration = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ExportLayout
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['project_id']))
            $this->setProjectId($data['project_id']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['is_default']))
            $this->setIsDefault($data['is_default']);

        if(! empty($data['configuration']))
            $this->setConfiguration($data['configuration']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "id" => $this->getId(),
            "project" => $this->getProject(),
            "project_id" => $this->getProjectId(),
            "created_at" => $this->getCreatedAt(),
            "name" => $this->getName(),
            "type" => $this->getType(),
            "is_default" => $this->getIsDefault(),
            "configuration" => $this->getConfiguration(),
        );
    }

    
    /**
     * Get all the export layouts.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/exports/layouts";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field export_layouts
        $a    = array();
        $body = $response->getBody();
        foreach($body['export_layouts'] as $v)
        {
            $tmp = new ExportLayout($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['ExportLayouts'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find an export layout by its ID.
     * @param string $exportLayoutId
     * @param array $options
     * @return $this
     */
    public function find($exportLayoutId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/exports/layouts/" . urlencode($exportLayoutId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field export_layout
        $body = $response->getBody();
        if (isset($body['export_layout'])) {
            $body = $body['export_layout'];
            $returnValues['find'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find the default export layout for given export type.
     * @param string $exportType
     * @param array $options
     * @return $this
     */
    public function findDefault($exportType, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/exports/layouts/default/" . urlencode($exportType) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field export_layout
        $body = $response->getBody();
        if (isset($body['export_layout'])) {
            $body = $body['export_layout'];
            $returnValues['findDefault'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new export layout.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/exports/layouts";

        $data = array(
            "name" => $this->getName(), 
            "type" => $this->getType(), 
            "is_default" => $this->getIsDefault(), 
            "configuration" => $this->getConfiguration()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field export_layout
        $body = $response->getBody();
        if (isset($body['export_layout'])) {
            $body = $body['export_layout'];
            $returnValues['create'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Update the export layout.
     * @param string $exportLayoutId
     * @param array $options
     * @return $this
     */
    public function update($exportLayoutId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/exports/layouts/" . urlencode($exportLayoutId) . "";

        $data = array(
            "name" => $this->getName(), 
            "is_default" => $this->getIsDefault(), 
            "configuration" => $this->getConfiguration()
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field export_layout
        $body = $response->getBody();
        if (isset($body['export_layout'])) {
            $body = $body['export_layout'];
            $returnValues['update'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete the export layout.
     * @param string $exportLayoutId
     * @param array $options
     * @return bool
     */
    public function delete($exportLayoutId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/exports/layouts/" . urlencode($exportLayoutId) . "";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
