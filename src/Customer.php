<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;
use ProcessOut\Networking\RequestProcessoutPublic;


class Customer
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * Id of the customer
     * @var string
     */
    protected $id;

    /**
     * First name of the customer
     * @var string
     */
    protected $firstName;

    /**
     * Last name of the customer
     * @var string
     */
    protected $lastName;

    /**
     * Main address of the customer
     * @var string
     */
    protected $address1;

    /**
     * Secondary address of the customer
     * @var string
     */
    protected $address2;

    /**
     * Shipping city of the customer
     * @var string
     */
    protected $city;

    /**
     * Shipping state of the customer
     * @var string
     */
    protected $state;

    /**
     * Shipping ZIP code of the customer
     * @var string
     */
    protected $zip;

    /**
     * Shipping country code of the customer
     * @var string
     */
    protected $countryCode;

    /**
     * Customer constructor
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
     * Id of the customer
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * Id of the customer
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get FirstName
     * First name of the customer
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set FirstName
     * First name of the customer
     * @param  string $value
     * @return $this
     */
    public function setFirstName($value)
    {
        $this->firstName = $value;
        return $this;
    }
    
    /**
     * Get LastName
     * Last name of the customer
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set LastName
     * Last name of the customer
     * @param  string $value
     * @return $this
     */
    public function setLastName($value)
    {
        $this->lastName = $value;
        return $this;
    }
    
    /**
     * Get Address1
     * Main address of the customer
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set Address1
     * Main address of the customer
     * @param  string $value
     * @return $this
     */
    public function setAddress1($value)
    {
        $this->address1 = $value;
        return $this;
    }
    
    /**
     * Get Address2
     * Secondary address of the customer
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set Address2
     * Secondary address of the customer
     * @param  string $value
     * @return $this
     */
    public function setAddress2($value)
    {
        $this->address2 = $value;
        return $this;
    }
    
    /**
     * Get City
     * Shipping city of the customer
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set City
     * Shipping city of the customer
     * @param  string $value
     * @return $this
     */
    public function setCity($value)
    {
        $this->city = $value;
        return $this;
    }
    
    /**
     * Get State
     * Shipping state of the customer
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set State
     * Shipping state of the customer
     * @param  string $value
     * @return $this
     */
    public function setState($value)
    {
        $this->state = $value;
        return $this;
    }
    
    /**
     * Get Zip
     * Shipping ZIP code of the customer
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set Zip
     * Shipping ZIP code of the customer
     * @param  string $value
     * @return $this
     */
    public function setZip($value)
    {
        $this->zip = $value;
        return $this;
    }
    
    /**
     * Get CountryCode
     * Shipping country code of the customer
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set CountryCode
     * Shipping country code of the customer
     * @param  string $value
     * @return $this
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Customer
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["first_name"]))
            $this->setFirstName($data["first_name"]);

        if(! empty($data["last_name"]))
            $this->setLastName($data["last_name"]);

        if(! empty($data["address1"]))
            $this->setAddress1($data["address1"]);

        if(! empty($data["address2"]))
            $this->setAddress2($data["address2"]);

        if(! empty($data["city"]))
            $this->setCity($data["city"]);

        if(! empty($data["state"]))
            $this->setState($data["state"]);

        if(! empty($data["zip"]))
            $this->setZip($data["zip"]);

        if(! empty($data["country_code"]))
            $this->setCountryCode($data["country_code"]);

        return $this;
    }

    /**
     * Get the customers list belonging to the project.
     * @param array $options
     * @return array
     */
    public static function all($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['customers'] as $v)
        {
            $tmp = new Customer($this->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Create a new customer.
     * @param array $options
     * @return Customer
     */
    public function create($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers";

        $data = array(
			"email" => $this->getEmail(), 
			"first_name" => $this->getFirstName(), 
			"last_name" => $this->getLastName(), 
			"address1" => $this->getAddress1(), 
			"address2" => $this->getAddress2(), 
			"city" => $this->getCity(), 
			"zip" => $this->getZip(), 
			"country_code" => $this->getCountryCode()
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($this->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Get the customer data.
	 * @param string $id
     * @param array $options
     * @return $this
     */
    public static function find($id, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers/" . urlencode($id) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        return $this->fillWithData($body);
        
    }

    /**
     * Update the customer data.
     * @param array $options
     * @return Customer
     */
    public function save($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "";

        $data = array(
			"email" => $this->getEmail(), 
			"first_name" => $this->getFirstName(), 
			"last_name" => $this->getLastName(), 
			"address1" => $this->getAddress1(), 
			"address2" => $this->getAddress2(), 
			"city" => $this->getCity(), 
			"zip" => $this->getZip(), 
			"country_code" => $this->getCountryCode()
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($this->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Delete the customer.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    /**
     * Get all the authorization tokens of the customer.
     * @param array $options
     * @return array
     */
    public function tokens($options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "/tokens";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['tokens'] as $v)
        {
            $tmp = new CustomerToken($this->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Find a specific customer token.
	 * @param string $tokenId
     * @param array $options
     * @return CustomerToken
     */
    public function findToken($tokenId, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "/tokens/" . urlencode($tokenId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['token'];
        $customerToken = new CustomerToken($this->instance);
        return $customerToken->fillWithData($body);
        
    }

    /**
     * Revoke (delete) a specific customer token.
	 * @param string $tokenId
     * @param array $options
     * @return bool
     */
    public function revokeToken($tokenId, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "/tokens/" . urlencode($tokenId) . "";

        $data = array(

        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    /**
     * Authorize (create) a new customer token.
	 * @param string $gatewayName
	 * @param string $name
	 * @param string $token
     * @param array $options
     * @return CustomerToken
     */
    public function authorize($gatewayName, $name, $token, $options = array())
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "/gateways/" . urlencode($gatewayName) . "/tokens";

        $data = array(
			"name" => $name, 
			"token" => $token
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['token'];
        $customerToken = new CustomerToken($this->instance);
        return $customerToken->fillWithData($body);
        
    }

    
}
