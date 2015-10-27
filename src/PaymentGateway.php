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
        
        if(! empty($data["settings"]))
        {
            $this->setSettings($data["settings"]);
        }
        

        return $this;
    }

    
    /**
     * Update or set the payment gateway settings.
	 * @param string $name
     * @return bool
     */
    
    public function save($name)
    
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/payment-gateway/" . urlencode($name) . "";

        $data = array(
			"settings" => $this->getSettings()
        );

        
        $response = new Response($request->put($path, $data));
        

        
        return $response->isSuccess();
        
    }
    
    /**
     * Remove the payment gateway and its settings from the current project.
	 * @param string $name
     * @return bool
     */
    
    public static function delete($name)
    
    {
        $request = new RequestProcessoutPrivate($this->instance);
        $path    = "/payment-gateway/" . urlencode($name) . "";

        $data = array(

        );

        
        $response = new Response($request->delete($path, $data));
        

        
        return $response->isSuccess();
        
    }
    

}
