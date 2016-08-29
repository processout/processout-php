<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;


class Customer
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * ID of the customer
     * @var string
     */
    protected $id;

    /**
     * Project to which the customer belongs
     * @var object
     */
    protected $project;

    /**
     * Email of the customer
     * @var string
     */
    protected $email;

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
     * Address of the customer
     * @var string
     */
    protected $address1;

    /**
     * Secondary address of the customer
     * @var string
     */
    protected $address2;

    /**
     * City of the customer
     * @var string
     */
    protected $city;

    /**
     * State of the customer
     * @var string
     */
    protected $state;

    /**
     * ZIP code of the customer
     * @var string
     */
    protected $zip;

    /**
     * Country code of the customer
     * @var string
     */
    protected $countryCode;

    /**
     * Metadata related to the customer, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Wether the customer has a PIN set or not
     * @var boolean
     */
    protected $hasPin;

    /**
     * Define whether or not the customer is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the customer was created
     * @var string
     */
    protected $createdAt;

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

        $this->setMetadata(array('_library' => 'php'));
        
    }

    
    /**
     * Get Id
     * ID of the customer
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the customer
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
     * Project to which the customer belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the customer belongs
     * @param  object $value
     * @return $this
     */
    public function setProject($value)
    {
        if (is_object($value))
            $this->project = $value;
        else
        {
            $obj = new Project($this->instance);
            $obj->fillWithData($value);
            $this->project = $obj;
        }
        return $this;
    }
    
    /**
     * Get Email
     * Email of the customer
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set Email
     * Email of the customer
     * @param  string $value
     * @return $this
     */
    public function setEmail($value)
    {
        $this->email = $value;
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
     * Address of the customer
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set Address1
     * Address of the customer
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
     * City of the customer
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set City
     * City of the customer
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
     * State of the customer
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set State
     * State of the customer
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
     * ZIP code of the customer
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set Zip
     * ZIP code of the customer
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
     * Country code of the customer
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set CountryCode
     * Country code of the customer
     * @param  string $value
     * @return $this
     */
    public function setCountryCode($value)
    {
        $this->countryCode = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the customer, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the customer, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get HasPin
     * Wether the customer has a PIN set or not
     * @return bool
     */
    public function getHasPin()
    {
        return $this->hasPin;
    }

    /**
     * Set HasPin
     * Wether the customer has a PIN set or not
     * @param  bool $value
     * @return $this
     */
    public function setHasPin($value)
    {
        $this->hasPin = $value;
        return $this;
    }
    
    /**
     * Get Sandbox
     * Define whether or not the customer is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the customer is in sandbox environment
     * @param  bool $value
     * @return $this
     */
    public function setSandbox($value)
    {
        $this->sandbox = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the customer was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the customer was created
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
     * @return Customer
     */
    public function fillWithData($data)
    {
        if(! empty($data["id"]))
            $this->setId($data["id"]);

        if(! empty($data["project"]))
            $this->setProject($data["project"]);

        if(! empty($data["email"]))
            $this->setEmail($data["email"]);

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

        if(! empty($data["metadata"]))
            $this->setMetadata($data["metadata"]);

        if(! empty($data["has_pin"]))
            $this->setHasPin($data["has_pin"]);

        if(! empty($data["sandbox"]))
            $this->setSandbox($data["sandbox"]);

        if(! empty($data["created_at"]))
            $this->setCreatedAt($data["created_at"]);

        return $this;
    }

    /**
     * Get the recurring invoices linked to the customer.
     * @param array $options
     * @return array
     */
    public function recurringInvoices($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "/recurring-invoices";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['recurring_invoices'] as $v)
        {
            $tmp = new RecurringInvoice($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Get the customer's tokens.
     * @param array $options
     * @return array
     */
    public function tokens($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "/tokens";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['tokens'] as $v)
        {
            $tmp = new Token($cur->instance);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }

        return $a;
    }

    /**
     * Get a specific customer's token by its ID.
	 * @param string $tokenId
     * @param array $options
     * @return Token
     */
    public function token($tokenId, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "/tokens/" . urlencode($tokenId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['token'];
        $token = new Token($cur->instance);
        return $token->fillWithData($body);
        
    }

    /**
     * Get all the customers.
     * @param array $options
     * @return array
     */
    public static function all($options = array())
    {
        $cur = new Customer();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $a    = array();
        $body = $response->getBody();
        foreach($body['customers'] as $v)
        {
            $tmp = new Customer($cur->instance);
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
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers";

        $data = array(
			"email" => $this->getEmail(), 
			"first_name" => $this->getFirstName(), 
			"last_name" => $this->getLastName(), 
			"address1" => $this->getAddress1(), 
			"address2" => $this->getAddress2(), 
			"city" => $this->getCity(), 
			"state" => $this->getState(), 
			"zip" => $this->getZip(), 
			"country_code" => $this->getCountryCode(), 
			"metadata" => $this->getMetadata()
        );

        $response = new Response($request->post($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($cur->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Find a customer by its ID.
	 * @param string $customerId
     * @param array $options
     * @return Customer
     */
    public static function find($customerId, $options = array())
    {
        $cur = new Customer();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($customerId) . "";

        $data = array(

        );

        $response = new Response($request->get($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($cur->instance);
        return $customer->fillWithData($body);
        
    }

    /**
     * Save the updated customer attributes.
     * @param array $options
     * @return $this
     */
    public function save($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = new Response($request->put($path, $data, $options));
        $body = $response->getBody();
        $body = $body['customer'];
        return $cur->fillWithData($body);
        
    }

    /**
     * Delete the customer.
     * @param array $options
     * @return bool
     */
    public function delete($options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/customers/" . urlencode($this->getId()) . "";

        $data = array(

        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    
}
