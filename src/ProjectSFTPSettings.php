<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class ProjectSFTPSettings implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * SFTP server endpoint, port is required.
     * @var string
     */
    protected $endpoint;

    /**
     * SFTP server username
     * @var string
     */
    protected $username;

    /**
     * SFTP server password, required when no 'private_key' is passed
     * @var string
     */
    protected $password;

    /**
     * SFTP server private key, required when no 'password' is passed
     * @var string
     */
    protected $privateKey;

    /**
     * ProjectSFTPSettings constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Endpoint
     * SFTP server endpoint, port is required.
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Set Endpoint
     * SFTP server endpoint, port is required.
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
     * Get Password
     * SFTP server password, required when no 'private_key' is passed
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set Password
     * SFTP server password, required when no 'private_key' is passed
     * @param  string $value
     * @return $this
     */
    public function setPassword($value)
    {
        $this->password = $value;
        return $this;
    }
    
    /**
     * Get PrivateKey
     * SFTP server private key, required when no 'password' is passed
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * Set PrivateKey
     * SFTP server private key, required when no 'password' is passed
     * @param  string $value
     * @return $this
     */
    public function setPrivateKey($value)
    {
        $this->privateKey = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return ProjectSFTPSettings
     */
    public function fillWithData($data)
    {
        if(! empty($data['endpoint']))
            $this->setEndpoint($data['endpoint']);

        if(! empty($data['username']))
            $this->setUsername($data['username']);

        if(! empty($data['password']))
            $this->setPassword($data['password']);

        if(! empty($data['private_key']))
            $this->setPrivateKey($data['private_key']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "endpoint" => $this->getEndpoint(),
            "username" => $this->getUsername(),
            "password" => $this->getPassword(),
            "private_key" => $this->getPrivateKey(),
        );
    }

    
    /**
     * Save the SFTP settings for the project.
     * @param string $id
     * @param array $options
     * @return bool
     */
    public function saveSftpSettings($id, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/projects/" . urlencode($id) . "/sftp-settings";

        $data = array(
            "endpoint" => $this->getEndpoint(), 
            "username" => $this->getUsername(), 
            "password" => $this->getPassword(), 
            "private_key" => $this->getPrivateKey()
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Delete the SFTP settings for the project.
     * @param string $id
     * @param array $options
     * @return bool
     */
    public function deleteSftpSettings($id, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/projects/" . urlencode($id) . "/sftp-settings";

        $data = array(

        );

        $response = $request->delete($path, $data, $options);
        $returnValues = array();

        $returnValues['success'] = $response->isSuccess();
        
        return array_values($returnValues)[0];
    }
    
}
