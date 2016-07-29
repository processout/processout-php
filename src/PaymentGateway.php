<?php

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Networking\RequestProcessoutPrivate;
use ProcessOut\Networking\RequestProcessoutPublic;


class PaymentGateway
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $instance;

    /**
     * Internal name of the payment gateway
     * @var string
     */
    protected $name;

    /**
     * Name of the payment gateway to be displayed
     * @var string
     */
    protected $displayName;

    /**
     * Determine if the gateway's integration is still in beta
     * @var boolean
     */
    protected $beta;

    /**
     * 
     * @var list
     */
    protected $publicKeys;

    /**
     * Settings of the payment gateway, in the form of a dictionary
     * @var dictionary
     */
    protected $settings;

    /**
     * PaymentGateway constructor
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
     * Get Name
     * Internal name of the payment gateway
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Internal name of the payment gateway
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get DisplayName
     * Name of the payment gateway to be displayed
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set DisplayName
     * Name of the payment gateway to be displayed
     * @param  string $value
     * @return $this
     */
    public function setDisplayName($value)
    {
        $this->displayName = $value;
        return $this;
    }
    
    /**
     * Get Beta
     * Determine if the gateway's integration is still in beta
     * @return bool
     */
    public function getBeta()
    {
        return $this->beta;
    }

    /**
     * Set Beta
     * Determine if the gateway's integration is still in beta
     * @param  bool $value
     * @return $this
     */
    public function setBeta($value)
    {
        $this->beta = $value;
        return $this;
    }
    
    /**
     * Get PublicKeys
     * 
     * @return array
     */
    public function getPublicKeys()
    {
        return $this->publicKeys;
    }

    /**
     * Set PublicKeys
     * 
     * @param  array $value
     * @return $this
     */
    public function setPublicKeys($value)
    {
        if (count($value) > 0 && is_object($value[0]))
            $this->publicKeys = $value;
        else
        {
            $a = array();
            foreach ($value as $v)
            {
                $obj = new PaymentGatewayPublicKey($this->instance);
                $obj->fillWithData($v);
                $a[] = $obj;
            }
            $this->publicKeys = $a;
        }
        return $this;
    }
    
    /**
     * Get Settings
     * Settings of the payment gateway, in the form of a dictionary
     * @return array
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set Settings
     * Settings of the payment gateway, in the form of a dictionary
     * @param  array $value
     * @return $this
     */
    public function setSettings($value)
    {
        $this->settings = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return PaymentGateway
     */
    public function fillWithData($data)
    {
        if(! empty($data["name"]))
            $this->setName($data["name"]);

        if(! empty($data["display_name"]))
            $this->setDisplayName($data["display_name"]);

        if(! empty($data["beta"]))
            $this->setBeta($data["beta"]);

        if(! empty($data["public_keys"]))
            $this->setPublicKeys($data["public_keys"]);

        if(! empty($data["settings"]))
            $this->setSettings($data["settings"]);

        return $this;
    }

    /**
     * Update or set the payment gateway settings.
	 * @param string $gatewayName
     * @param array $options
     * @return PaymentGateway
     */
    public function save($gatewayName, $options = array())
    {
        $cur = new PaymentGateway();
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/gateways/" . urlencode($gatewayName) . "";

        $data = array(
			"settings" => $this->getSettings()
        );

        $response = new Response($request->put($path, $data, $options));
        $body = $response->getBody();
        $body = $body['gateway'];
        $paymentGateway = new PaymentGateway($cur->instance);
        return $paymentGateway->fillWithData($body);
        
    }

    /**
     * Remove the payment gateway and its settings from the current project.
	 * @param string $gatewayName
     * @param array $options
     * @return bool
     */
    public static function delete($gatewayName, $options = array())
    {
        $cur = $this;
        $request = new RequestProcessoutPrivate($cur->instance);
        $path    = "/gateways/" . urlencode($gatewayName) . "";

        $data = array(

        );

        $response = new Response($request->delete($path, $data, $options));
        return $response->isSuccess();
        
    }

    
}
