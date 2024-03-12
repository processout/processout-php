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
     * Card update type. Possible values: "new-cvc2" or "other"
     * @var string
     */
    protected $updateType;

    /**
     * Card update reason.
     * @var string
     */
    protected $updateReason;

    /**
     * Customer preferred scheme, such as carte bancaire vs visa
     * @var string
     */
    protected $preferredScheme;

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
     * Get UpdateType
     * Card update type. Possible values: "new-cvc2" or "other"
     * @return string
     */
    public function getUpdateType()
    {
        return $this->updateType;
    }

    /**
     * Set UpdateType
     * Card update type. Possible values: "new-cvc2" or "other"
     * @param  string $value
     * @return $this
     */
    public function setUpdateType($value)
    {
        $this->updateType = $value;
        return $this;
    }
    
    /**
     * Get UpdateReason
     * Card update reason.
     * @return string
     */
    public function getUpdateReason()
    {
        return $this->updateReason;
    }

    /**
     * Set UpdateReason
     * Card update reason.
     * @param  string $value
     * @return $this
     */
    public function setUpdateReason($value)
    {
        $this->updateReason = $value;
        return $this;
    }
    
    /**
     * Get PreferredScheme
     * Customer preferred scheme, such as carte bancaire vs visa
     * @return string
     */
    public function getPreferredScheme()
    {
        return $this->preferredScheme;
    }

    /**
     * Set PreferredScheme
     * Customer preferred scheme, such as carte bancaire vs visa
     * @param  string $value
     * @return $this
     */
    public function setPreferredScheme($value)
    {
        $this->preferredScheme = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CardUpdateRequest
     */
    public function fillWithData($data)
    {
        if(! empty($data['update_type']))
            $this->setUpdateType($data['update_type']);

        if(! empty($data['update_reason']))
            $this->setUpdateReason($data['update_reason']);

        if(! empty($data['preferred_scheme']))
            $this->setPreferredScheme($data['preferred_scheme']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "update_type" => $this->getUpdateType(),
            "update_reason" => $this->getUpdateReason(),
            "preferred_scheme" => $this->getPreferredScheme(),
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

        );

        $response = $request->put($path, $data, $options);
        $returnValues = array();

        
        // Handling for field card
        $body = $response->getBody();
        $body = $body['card'];
        $returnValues['update'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
