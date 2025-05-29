<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ProjectSFTPSettingsPublic implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Whether the SFTP settings are enabled
     * @var boolean
     */
    protected $enabled;

    /**
     * SFTP server endpoint with port
     * @var string
     */
    protected $endpoint;

    /**
     * SFTP server username
     * @var string
     */
    protected $username;

    /**
     * ProjectSFTPSettingsPublic constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Enabled
     * Whether the SFTP settings are enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set Enabled
     * Whether the SFTP settings are enabled
     * @param  bool $value
     * @return $this
     */
    public function setEnabled($value)
    {
        $this->enabled = $value;
        return $this;
    }
    
    /**
     * Get Endpoint
     * SFTP server endpoint with port
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Set Endpoint
     * SFTP server endpoint with port
     * @param  string $value
     * @return $this
     */
    public function setEndpoint($value)
    {
        $this->endpoint = $value;
        return $this;
    }
    
    /**
     * Get Username
     * SFTP server username
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set Username
     * SFTP server username
     * @param  string $value
     * @return $this
     */
    public function setUsername($value)
    {
        $this->username = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ProjectSFTPSettingsPublic
     */
    public function fillWithData($data)
    {
        if(! empty($data['enabled']))
            $this->setEnabled($data['enabled']);

        if(! empty($data['endpoint']))
            $this->setEndpoint($data['endpoint']);

        if(! empty($data['username']))
            $this->setUsername($data['username']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "enabled" => $this->getEnabled(),
            "endpoint" => $this->getEndpoint(),
            "username" => $this->getUsername(),
        );
    }

    
    /**
     * Fetch the SFTP settings for the project.
     * @param string $id
     * @param array $options
     * @return $this
     */
    public function fetchSftpSettings($id, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/projects/" . urlencode($id) . "/sftp-settings";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field sftp_settings
        $body = $response->getBody();
        if (isset($body['sftp_settings'])) {
            $body = $body['sftp_settings'];
            $returnValues['fetchSftpSettings'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
}
