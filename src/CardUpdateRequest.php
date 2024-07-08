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
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return CardUpdateRequest
     */
    public function fillWithData($data)
    {
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
            "preferred_scheme" => $this->getPreferredScheme()
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
