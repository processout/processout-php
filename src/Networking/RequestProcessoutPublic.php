<?php

namespace ProcessOut\Networking;

use ProcessOut\ProcessOut;
use anlutro\cURL\cURL;

class RequestProcessoutPublic
{

    /**
     * ProcessOut's instance
     * @var ProcessOut\ProcessOut
     */
    protected $processOut;

    /**
     * Request's constructor
     * @param ProcessOut\ProcessOut $processOut
     */
    public function __construct(ProcessOut $processOut)
    {
        $this->processOut = $processOut;

        $this->cURL = $this->processOut->getCurl();
    }

    /**
     * Authenticate the request
     * @param  anlutro\cURL\Request $request
     * @return anlutro\cURL\Request $request
     */
    protected function authenticate($request)
    {
        

        $auth = '';

        
        $auth .= $this->processOut->getProjectId();
        

        $auth .= ':';

        

        $request->setOptions(array(CURLOPT_USERPWD => $auth));

        

        return $request;
    }

    /**
     * Generate a get request
     * @param  string $path
     * @param  array  $data
     * @return return anlutro\cURL\Response
     */
    public function get($path, $data)
    {
        $request = $this->cURL->newJsonRequest('GET',
            ProcessOut::HOST . $path . "?" .
            http_build_query($data)
        );
        $this->authenticate($request);

        return $request->send();
    }

    /**
     * Generate a POST request
     * @param  string $path
     * @param  array  $data
     * @return return anlutro\cURL\Response
     */
    public function post($path, $data)
    {
        $request = $this->cURL->newJsonRequest('POST',
            ProcessOut::HOST . $path,
            $data
        );
        $this->authenticate($request);

        return $request->send();
    }

    /**
     * Generate a PUT request
     * @param  string $path
     * @param  array  $data
     * @return return anlutro\cURL\Response
     */
    public function put($path, $data)
    {
        $request = $this->cURL->newJsonRequest('PUT',
            ProcessOut::HOST . $path,
            $data
        );
        $this->authenticate($request);

        return $request->send();
    }

    /**
     * Generate a DELETE request
     * @param  string $path
     * @param  array  $data
     * @return return anlutro\cURL\Response
     */
    public function delete($path, $data)
    {
        $request = $this->cURL->newJsonRequest('DELETE',
            ProcessOut::HOST . $path,
            $data
        );
        $this->authenticate($request);

        return $request->send();
    }

}
