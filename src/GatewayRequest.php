<?php

namespace ProcessOut;

class GatewayRequest {
    // We're leaving the variables as public so the merchants can still change
    // or set those if needed
    public $gatewayConfigurationID;
    public $url;
    public $method;
    public $headers = array('_map' => '_fix');
    public $body;

    public function __construct($confID) {
        $this->gatewayConfigurationID = $confID;

        // Build request variables
        $this->body   = file_get_contents('php://input');
        $this->url    = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];

        // We need to manually fetch the headers
        foreach ($_SERVER as $name => $value)
        {
            if (substr($name, 0, 5) == 'HTTP_')
                $this->headers[str_replace(' ', '-', ucwords(strtolower(
                    str_replace('_', ' ', substr($name, 5)))))] = $value;
        }
    }

    /**
     * getString returns the gateway request token generated from this object
     * @return string
     */
    public function getString() {
        return 'gway_req_' . base64_encode(json_encode(array(
            'gateway_configuration_id' => $this->gatewayConfigurationID,
            'url'                      => $this->url,
            'method'                   => strtoupper($this->method),
            'headers'                  => $this->headers,
            'body'                     => $this->body
        )));
    }
}
