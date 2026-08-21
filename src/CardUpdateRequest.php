<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class CardUpdateRequest implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Customer preferred scheme, such as carte bancaire vs visa. Can be set to none to clear the previous value
     * @var string
     */
    protected $preferredScheme;

    /**
     * Preferred card type for combo cards, such as credit or debit.
     * @var string
     */
    protected $preferredCardType;

    /**
     * Scheme details for transaction chaining (e.g. scheme transaction ID)
     * @var object
     */
    protected $schemeDetails;

    /**
     * CardUpdateRequest constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get PreferredScheme
     * Customer preferred scheme, such as carte bancaire vs visa. Can be set to none to clear the previous value
     * @return string
     */
    public function getPreferredScheme()
    {
        return $this->preferredScheme;
    }

    /**
     * Set PreferredScheme
     * Customer preferred scheme, such as carte bancaire vs visa. Can be set to none to clear the previous value
     * @param  string $value
     * @return $this
     */
    public function setPreferredScheme($value)
    {
        $this->preferredScheme = $value;
        return $this;
    }
    
    /**
     * Get PreferredCardType
     * Preferred card type for combo cards, such as credit or debit.
     * @return string
     */
    public function getPreferredCardType()
    {
        return $this->preferredCardType;
    }

    /**
     * Set PreferredCardType
     * Preferred card type for combo cards, such as credit or debit.
     * @param  string $value
     * @return $this
     */
    public function setPreferredCardType($value)
    {
        $this->preferredCardType = $value;
        return $this;
    }
    
    /**
     * Get SchemeDetails
     * Scheme details for transaction chaining (e.g. scheme transaction ID)
     * @return object
     */
    public function getSchemeDetails()
    {
        return $this->schemeDetails;
    }

    /**
     * Set SchemeDetails
     * Scheme details for transaction chaining (e.g. scheme transaction ID)
     * @param  object $value
     * @return $this
     */
    public function setSchemeDetails($value)
    {
        if (is_object($value))
            $this->schemeDetails = $value;
        else
        {
            $obj = new CardSchemeDetails($this->client);
            $obj->fillWithData($value);
            $this->schemeDetails = $obj;
        }
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CardUpdateRequest
     */
    public function fillWithData($data)
    {
        if(! empty($data['preferred_scheme']))
            $this->setPreferredScheme($data['preferred_scheme']);

        if(! empty($data['preferred_card_type']))
            $this->setPreferredCardType($data['preferred_card_type']);

        if(! empty($data['scheme_details']))
            $this->setSchemeDetails($data['scheme_details']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return array
     */
    public function jsonSerialize(): array {
        return array(
            "preferred_scheme" => $this->getPreferredScheme(),
            "preferred_card_type" => $this->getPreferredCardType(),
            "scheme_details" => $this->getSchemeDetails(),
        );
    }

    
    /**
     * Update a card by its ID.
     * @param string $cardId
     * @param array $options
     * @return $this
     */
    public function update($cardId, $options = array())
    {
        $this->fillWithData($options);

        $request = new Request($this->client);
        $path    = "/cards/" . urlencode($cardId) . "";

        $data = array(
            "preferred_scheme" => $this->getPreferredScheme(), 
            "scheme_details" => $this->getSchemeDetails()
        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field card
        $body = $response->getBody();
        if (isset($body['card'])) {
            $body = $body['card'];
            $returnValues['update'] = $this->fillWithData($body);
        }
        
        return array_values($returnValues)[0];
    }
    
}
