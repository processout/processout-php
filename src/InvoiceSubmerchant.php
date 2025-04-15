<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceSubmerchant implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the invoice submerchant
     * @var string
     */
    protected $id;

    /**
     * Name of the submerchant
     * @var string
     */
    protected $name;

    /**
     * Submerchant's reference ID
     * @var string
     */
    protected $reference;

    /**
     * Submerchant's MCC (Merchant Category Code).
     * @var string
     */
    protected $mcc;

    /**
     * Submerchant's phone number
     * @var object
     */
    protected $phoneNumber;

    /**
     * Email address
     * @var string
     */
    protected $email;

    /**
     * Submerchant's address
     * @var object
     */
    protected $address;

    /**
     * Tax reference
     * @var string
     */
    protected $taxReference;

    /**
     * Service establishment number
     * @var string
     */
    protected $serviceEstablishmentNumber;

    /**
     * InvoiceSubmerchant constructor
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
     * ID of the invoice submerchant
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the invoice submerchant
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
     * Name of the submerchant
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the submerchant
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Reference
     * Submerchant's reference ID
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set Reference
     * Submerchant's reference ID
     * @param  string $value
     * @return $this
     */
    public function setReference($value)
    {
        $this->reference = $value;
        return $this;
    }
    
    /**
     * Get Mcc
     * Submerchant's MCC (Merchant Category Code).
     * @return string
     */
    public function getMcc()
    {
        return $this->mcc;
    }

    /**
     * Set Mcc
     * Submerchant's MCC (Merchant Category Code).
     * @param  string $value
     * @return $this
     */
    public function setMcc($value)
    {
        $this->mcc = $value;
        return $this;
    }
    
    /**
     * Get PhoneNumber
     * Submerchant's phone number
     * @return object
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set PhoneNumber
     * Submerchant's phone number
     * @param  object $value
     * @return $this
     */
    public function setPhoneNumber($value)
    {
        if (is_object($value))
            $this->phoneNumber = $value;
        else
        {
            $obj = new SubmerchantPhoneNumber($this->client);
            $obj->fillWithData($value);
            $this->phoneNumber = $obj;
        }
        return $this;
    }
    
    /**
     * Get Email
     * Email address
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set Email
     * Email address
     * @param  string $value
     * @return $this
     */
    public function setEmail($value)
    {
        $this->email = $value;
        return $this;
    }
    
    /**
     * Get Address
     * Submerchant's address
     * @return object
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set Address
     * Submerchant's address
     * @param  object $value
     * @return $this
     */
    public function setAddress($value)
    {
        if (is_object($value))
            $this->address = $value;
        else
        {
            $obj = new SubmerchantAddress($this->client);
            $obj->fillWithData($value);
            $this->address = $obj;
        }
        return $this;
    }
    
    /**
     * Get TaxReference
     * Tax reference
     * @return string
     */
    public function getTaxReference()
    {
        return $this->taxReference;
    }

    /**
     * Set TaxReference
     * Tax reference
     * @param  string $value
     * @return $this
     */
    public function setTaxReference($value)
    {
        $this->taxReference = $value;
        return $this;
    }
    
    /**
     * Get ServiceEstablishmentNumber
     * Service establishment number
     * @return string
     */
    public function getServiceEstablishmentNumber()
    {
        return $this->serviceEstablishmentNumber;
    }

    /**
     * Set ServiceEstablishmentNumber
     * Service establishment number
     * @param  string $value
     * @return $this
     */
    public function setServiceEstablishmentNumber($value)
    {
        $this->serviceEstablishmentNumber = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoiceSubmerchant
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['reference']))
            $this->setReference($data['reference']);

        if(! empty($data['mcc']))
            $this->setMcc($data['mcc']);

        if(! empty($data['phone_number']))
            $this->setPhoneNumber($data['phone_number']);

        if(! empty($data['email']))
            $this->setEmail($data['email']);

        if(! empty($data['address']))
            $this->setAddress($data['address']);

        if(! empty($data['tax_reference']))
            $this->setTaxReference($data['tax_reference']);

        if(! empty($data['service_establishment_number']))
            $this->setServiceEstablishmentNumber($data['service_establishment_number']);

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
            "reference" => $this->getReference(),
            "mcc" => $this->getMcc(),
            "phone_number" => $this->getPhoneNumber(),
            "email" => $this->getEmail(),
            "address" => $this->getAddress(),
            "tax_reference" => $this->getTaxReference(),
            "service_establishment_number" => $this->getServiceEstablishmentNumber(),
        );
    }

    
}
