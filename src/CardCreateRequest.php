<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class CardCreateRequest implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Device used to create the card
     * @var object
     */
    protected $device;

    /**
     * Cardholder name
     * @var string
     */
    protected $name;

    /**
     * Card PAN (raw)
     * @var string
     */
    protected $number;

    /**
     * Card expiration day. Used for Apple Pay
     * @var string
     */
    protected $expDay;

    /**
     * Card expiration month
     * @var string
     */
    protected $expMonth;

    /**
     * Card expiration year
     * @var string
     */
    protected $expYear;

    /**
     * CVC2
     * @var string
     */
    protected $cvc2;

    /**
     * Preferred card scheme
     * @var string
     */
    protected $preferredScheme;

    /**
     * Metadata related to the card, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * This field defines if the card was tokenized with a 3rd party tokenization method: applepay, googlepay
     * @var string
     */
    protected $tokenType;

    /**
     * ECI indicator. Used if the card was tokenized with a 3rd party tokenization method
     * @var string
     */
    protected $eci;

    /**
     * Cryptogram (Base64-encoded). Used if the card was tokenized with a 3rd party tokenization method
     * @var string
     */
    protected $cryptogram;

    /**
     * Raw ApplePay card tokenization response. Used if the card was tokenized with a 3rd party tokenization method
     * @var string
     */
    protected $applepayResponse;

    /**
     * ApplePay MID. Used if the card was tokenized with a 3rd party tokenization method
     * @var string
     */
    protected $applepayMid;

    /**
     * Google payment token. Used if the card was tokenized with a 3rd party tokenization method
     * @var string
     */
    protected $paymentToken;

    /**
     * Cardholder contact information
     * @var object
     */
    protected $contact;

    /**
     * Cardholder shipping information
     * @var object
     */
    protected $shipping;

    /**
     * CardCreateRequest constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Device
     * Device used to create the card
     * @return object
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Set Device
     * Device used to create the card
     * @param  object $value
     * @return $this
     */
    public function setDevice($value)
    {
        if (is_object($value))
            $this->device = $value;
        else
        {
            $obj = new Device($this->client);
            $obj->fillWithData($value);
            $this->device = $obj;
        }
        return $this;
    }
    
    /**
     * Get Name
     * Cardholder name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Cardholder name
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Number
     * Card PAN (raw)
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set Number
     * Card PAN (raw)
     * @param  string $value
     * @return $this
     */
    public function setNumber($value)
    {
        $this->number = $value;
        return $this;
    }
    
    /**
     * Get ExpDay
     * Card expiration day. Used for Apple Pay
     * @return string
     */
    public function getExpDay()
    {
        return $this->expDay;
    }

    /**
     * Set ExpDay
     * Card expiration day. Used for Apple Pay
     * @param  string $value
     * @return $this
     */
    public function setExpDay($value)
    {
        $this->expDay = $value;
        return $this;
    }
    
    /**
     * Get ExpMonth
     * Card expiration month
     * @return string
     */
    public function getExpMonth()
    {
        return $this->expMonth;
    }

    /**
     * Set ExpMonth
     * Card expiration month
     * @param  string $value
     * @return $this
     */
    public function setExpMonth($value)
    {
        $this->expMonth = $value;
        return $this;
    }
    
    /**
     * Get ExpYear
     * Card expiration year
     * @return string
     */
    public function getExpYear()
    {
        return $this->expYear;
    }

    /**
     * Set ExpYear
     * Card expiration year
     * @param  string $value
     * @return $this
     */
    public function setExpYear($value)
    {
        $this->expYear = $value;
        return $this;
    }
    
    /**
     * Get Cvc2
     * CVC2
     * @return string
     */
    public function getCvc2()
    {
        return $this->cvc2;
    }

    /**
     * Set Cvc2
     * CVC2
     * @param  string $value
     * @return $this
     */
    public function setCvc2($value)
    {
        $this->cvc2 = $value;
        return $this;
    }
    
    /**
     * Get PreferredScheme
     * Preferred card scheme
     * @return string
     */
    public function getPreferredScheme()
    {
        return $this->preferredScheme;
    }

    /**
     * Set PreferredScheme
     * Preferred card scheme
     * @param  string $value
     * @return $this
     */
    public function setPreferredScheme($value)
    {
        $this->preferredScheme = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the card, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the card, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get TokenType
     * This field defines if the card was tokenized with a 3rd party tokenization method: applepay, googlepay
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * Set TokenType
     * This field defines if the card was tokenized with a 3rd party tokenization method: applepay, googlepay
     * @param  string $value
     * @return $this
     */
    public function setTokenType($value)
    {
        $this->tokenType = $value;
        return $this;
    }
    
    /**
     * Get Eci
     * ECI indicator. Used if the card was tokenized with a 3rd party tokenization method
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * Set Eci
     * ECI indicator. Used if the card was tokenized with a 3rd party tokenization method
     * @param  string $value
     * @return $this
     */
    public function setEci($value)
    {
        $this->eci = $value;
        return $this;
    }
    
    /**
     * Get Cryptogram
     * Cryptogram (Base64-encoded). Used if the card was tokenized with a 3rd party tokenization method
     * @return string
     */
    public function getCryptogram()
    {
        return $this->cryptogram;
    }

    /**
     * Set Cryptogram
     * Cryptogram (Base64-encoded). Used if the card was tokenized with a 3rd party tokenization method
     * @param  string $value
     * @return $this
     */
    public function setCryptogram($value)
    {
        $this->cryptogram = $value;
        return $this;
    }
    
    /**
     * Get ApplepayResponse
     * Raw ApplePay card tokenization response. Used if the card was tokenized with a 3rd party tokenization method
     * @return string
     */
    public function getApplepayResponse()
    {
        return $this->applepayResponse;
    }

    /**
     * Set ApplepayResponse
     * Raw ApplePay card tokenization response. Used if the card was tokenized with a 3rd party tokenization method
     * @param  string $value
     * @return $this
     */
    public function setApplepayResponse($value)
    {
        $this->applepayResponse = $value;
        return $this;
    }
    
    /**
     * Get ApplepayMid
     * ApplePay MID. Used if the card was tokenized with a 3rd party tokenization method
     * @return string
     */
    public function getApplepayMid()
    {
        return $this->applepayMid;
    }

    /**
     * Set ApplepayMid
     * ApplePay MID. Used if the card was tokenized with a 3rd party tokenization method
     * @param  string $value
     * @return $this
     */
    public function setApplepayMid($value)
    {
        $this->applepayMid = $value;
        return $this;
    }
    
    /**
     * Get PaymentToken
     * Google payment token. Used if the card was tokenized with a 3rd party tokenization method
     * @return string
     */
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }

    /**
     * Set PaymentToken
     * Google payment token. Used if the card was tokenized with a 3rd party tokenization method
     * @param  string $value
     * @return $this
     */
    public function setPaymentToken($value)
    {
        $this->paymentToken = $value;
        return $this;
    }
    
    /**
     * Get Contact
     * Cardholder contact information
     * @return object
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set Contact
     * Cardholder contact information
     * @param  object $value
     * @return $this
     */
    public function setContact($value)
    {
        if (is_object($value))
            $this->contact = $value;
        else
        {
            $obj = new CardContact($this->client);
            $obj->fillWithData($value);
            $this->contact = $obj;
        }
        return $this;
    }
    
    /**
     * Get Shipping
     * Cardholder shipping information
     * @return object
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set Shipping
     * Cardholder shipping information
     * @param  object $value
     * @return $this
     */
    public function setShipping($value)
    {
        if (is_object($value))
            $this->shipping = $value;
        else
        {
            $obj = new CardShipping($this->client);
            $obj->fillWithData($value);
            $this->shipping = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CardCreateRequest
     */
    public function fillWithData($data)
    {
        if(! empty($data['device']))
            $this->setDevice($data['device']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['number']))
            $this->setNumber($data['number']);

        if(! empty($data['exp_day']))
            $this->setExpDay($data['exp_day']);

        if(! empty($data['exp_month']))
            $this->setExpMonth($data['exp_month']);

        if(! empty($data['exp_year']))
            $this->setExpYear($data['exp_year']);

        if(! empty($data['cvc2']))
            $this->setCvc2($data['cvc2']);

        if(! empty($data['preferred_scheme']))
            $this->setPreferredScheme($data['preferred_scheme']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['token_type']))
            $this->setTokenType($data['token_type']);

        if(! empty($data['eci']))
            $this->setEci($data['eci']);

        if(! empty($data['cryptogram']))
            $this->setCryptogram($data['cryptogram']);

        if(! empty($data['applepay_response']))
            $this->setApplepayResponse($data['applepay_response']);

        if(! empty($data['applepay_mid']))
            $this->setApplepayMid($data['applepay_mid']);

        if(! empty($data['payment_token']))
            $this->setPaymentToken($data['payment_token']);

        if(! empty($data['contact']))
            $this->setContact($data['contact']);

        if(! empty($data['shipping']))
            $this->setShipping($data['shipping']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "device" => $this->getDevice(),
            "name" => $this->getName(),
            "number" => $this->getNumber(),
            "exp_day" => $this->getExpDay(),
            "exp_month" => $this->getExpMonth(),
            "exp_year" => $this->getExpYear(),
            "cvc2" => $this->getCvc2(),
            "preferred_scheme" => $this->getPreferredScheme(),
            "metadata" => $this->getMetadata(),
            "token_type" => $this->getTokenType(),
            "eci" => $this->getEci(),
            "cryptogram" => $this->getCryptogram(),
            "applepay_response" => $this->getApplepayResponse(),
            "applepay_mid" => $this->getApplepayMid(),
            "payment_token" => $this->getPaymentToken(),
            "contact" => $this->getContact(),
            "shipping" => $this->getShipping(),
        );
    }

    
    /**
     * Create a new card.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/cards";

        $data = array(
            "device" => $this->getDevice(), 
            "name" => $this->getName(), 
            "number" => $this->getNumber(), 
            "exp_day" => $this->getExpDay(), 
            "exp_month" => $this->getExpMonth(), 
            "exp_year" => $this->getExpYear(), 
            "cvc2" => $this->getCvc2(), 
            "preferred_scheme" => $this->getPreferredScheme(), 
            "metadata" => $this->getMetadata(), 
            "token_type" => $this->getTokenType(), 
            "eci" => $this->getEci(), 
            "cryptogram" => $this->getCryptogram(), 
            "applepay_response" => $this->getApplepayResponse(), 
            "applepay_mid" => $this->getApplepayMid(), 
            "payment_token" => $this->getPaymentToken(), 
            "contact" => $this->getContact(), 
            "shipping" => $this->getShipping()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field card
        $body = $response->getBody();
        if (isset($body['card'])) {
            $body = $body['card'];
            $returnValues['create'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
}
