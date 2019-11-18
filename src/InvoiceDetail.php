<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceDetail implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Name of the invoice detail
     * @var string
     */
    protected $name;

    /**
     * Type of the invoice detail. Can be a string containing anything, up to 30 characters
     * @var string
     */
    protected $type;

    /**
     * Amount represented by the invoice detail
     * @var decimal
     */
    protected $amount;

    /**
     * Quantity of items represented by the invoice detail
     * @var integer
     */
    protected $quantity;

    /**
     * Metadata related to the invoice detail, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Reference of the product
     * @var string
     */
    protected $reference;

    /**
     * Description of the invoice detail
     * @var string
     */
    protected $description;

    /**
     * Brand of the product
     * @var string
     */
    protected $brand;

    /**
     * Model of the product
     * @var string
     */
    protected $model;

    /**
     * Discount amount represented by the invoice detail
     * @var decimal
     */
    protected $discountAmount;

    /**
     * Condition of the product
     * @var string
     */
    protected $condition;

    /**
     * Marketplace merchant of the invoice detail
     * @var string
     */
    protected $marketplaceMerchant;

    /**
     * Define whether or not the marketplace merchant is a business
     * @var boolean
     */
    protected $marketplaceMerchantIsBusiness;

    /**
     * Date at which the merchant was created
     * @var string
     */
    protected $marketplaceMerchantCreatedAt;

    /**
     * Category of the product
     * @var string
     */
    protected $category;

    /**
     * InvoiceDetail constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Name
     * Name of the invoice detail
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the invoice detail
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
     * Type of the invoice detail. Can be a string containing anything, up to 30 characters
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     * Type of the invoice detail. Can be a string containing anything, up to 30 characters
     * @param  string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    /**
     * Get Amount
     * Amount represented by the invoice detail
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount represented by the invoice detail
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get Quantity
     * Quantity of items represented by the invoice detail
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set Quantity
     * Quantity of items represented by the invoice detail
     * @param  int $value
     * @return $this
     */
    public function setQuantity($value)
    {
        $this->quantity = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the invoice detail, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the invoice detail, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get Reference
     * Reference of the product
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set Reference
     * Reference of the product
     * @param  string $value
     * @return $this
     */
    public function setReference($value)
    {
        $this->reference = $value;
        return $this;
    }
    
    /**
     * Get Description
     * Description of the invoice detail
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Description
     * Description of the invoice detail
     * @param  string $value
     * @return $this
     */
    public function setDescription($value)
    {
        $this->description = $value;
        return $this;
    }
    
    /**
     * Get Brand
     * Brand of the product
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set Brand
     * Brand of the product
     * @param  string $value
     * @return $this
     */
    public function setBrand($value)
    {
        $this->brand = $value;
        return $this;
    }
    
    /**
     * Get Model
     * Model of the product
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set Model
     * Model of the product
     * @param  string $value
     * @return $this
     */
    public function setModel($value)
    {
        $this->model = $value;
        return $this;
    }
    
    /**
     * Get DiscountAmount
     * Discount amount represented by the invoice detail
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * Set DiscountAmount
     * Discount amount represented by the invoice detail
     * @param  string $value
     * @return $this
     */
    public function setDiscountAmount($value)
    {
        $this->discountAmount = $value;
        return $this;
    }
    
    /**
     * Get Condition
     * Condition of the product
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set Condition
     * Condition of the product
     * @param  string $value
     * @return $this
     */
    public function setCondition($value)
    {
        $this->condition = $value;
        return $this;
    }
    
    /**
     * Get MarketplaceMerchant
     * Marketplace merchant of the invoice detail
     * @return string
     */
    public function getMarketplaceMerchant()
    {
        return $this->marketplaceMerchant;
    }

    /**
     * Set MarketplaceMerchant
     * Marketplace merchant of the invoice detail
     * @param  string $value
     * @return $this
     */
    public function setMarketplaceMerchant($value)
    {
        $this->marketplaceMerchant = $value;
        return $this;
    }
    
    /**
     * Get MarketplaceMerchantIsBusiness
     * Define whether or not the marketplace merchant is a business
     * @return bool
     */
    public function getMarketplaceMerchantIsBusiness()
    {
        return $this->marketplaceMerchantIsBusiness;
    }

    /**
     * Set MarketplaceMerchantIsBusiness
     * Define whether or not the marketplace merchant is a business
     * @param  bool $value
     * @return $this
     */
    public function setMarketplaceMerchantIsBusiness($value)
    {
        $this->marketplaceMerchantIsBusiness = $value;
        return $this;
    }
    
    /**
     * Get MarketplaceMerchantCreatedAt
     * Date at which the merchant was created
     * @return string
     */
    public function getMarketplaceMerchantCreatedAt()
    {
        return $this->marketplaceMerchantCreatedAt;
    }

    /**
     * Set MarketplaceMerchantCreatedAt
     * Date at which the merchant was created
     * @param  string $value
     * @return $this
     */
    public function setMarketplaceMerchantCreatedAt($value)
    {
        $this->marketplaceMerchantCreatedAt = $value;
        return $this;
    }
    
    /**
     * Get Category
     * Category of the product
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set Category
     * Category of the product
     * @param  string $value
     * @return $this
     */
    public function setCategory($value)
    {
        $this->category = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoiceDetail
     */
    public function fillWithData($data)
    {
        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['type']))
            $this->setType($data['type']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['quantity']))
            $this->setQuantity($data['quantity']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['reference']))
            $this->setReference($data['reference']);

        if(! empty($data['description']))
            $this->setDescription($data['description']);

        if(! empty($data['brand']))
            $this->setBrand($data['brand']);

        if(! empty($data['model']))
            $this->setModel($data['model']);

        if(! empty($data['discount_amount']))
            $this->setDiscountAmount($data['discount_amount']);

        if(! empty($data['condition']))
            $this->setCondition($data['condition']);

        if(! empty($data['marketplace_merchant']))
            $this->setMarketplaceMerchant($data['marketplace_merchant']);

        if(! empty($data['marketplace_merchant_is_business']))
            $this->setMarketplaceMerchantIsBusiness($data['marketplace_merchant_is_business']);

        if(! empty($data['marketplace_merchant_created_at']))
            $this->setMarketplaceMerchantCreatedAt($data['marketplace_merchant_created_at']);

        if(! empty($data['category']))
            $this->setCategory($data['category']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "name" => $this->getName(),
            "type" => $this->getType(),
            "amount" => $this->getAmount(),
            "quantity" => $this->getQuantity(),
            "metadata" => $this->getMetadata(),
            "reference" => $this->getReference(),
            "description" => $this->getDescription(),
            "brand" => $this->getBrand(),
            "model" => $this->getModel(),
            "discount_amount" => $this->getDiscountAmount(),
            "condition" => $this->getCondition(),
            "marketplace_merchant" => $this->getMarketplaceMerchant(),
            "marketplace_merchant_is_business" => $this->getMarketplaceMerchantIsBusiness(),
            "marketplace_merchant_created_at" => $this->getMarketplaceMerchantCreatedAt(),
            "category" => $this->getCategory(),
            );
    }

    
}
