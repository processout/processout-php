<?php

namespace ProcessOut\Networking;

use ProcessOut\ProcessOut;
use anlutro\cURL\cURL;

class RequestProcessoutPrivate
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
        $auth .= $this->processOut->getProjectSecret();
        $request->setOptions(array(CURLOPT_USERPWD => $auth));

        return $request;
    }

    /**
     * Prepare the request
     * @param  anlutro\cURL\Request $request
     * @param  array                $options
     * @return anlutro\cURL\Request $request
     */
    protected function prepare($request, $options)
    {
        $request = $this->authenticate($request);
        $request = $request->setHeader('API-Version', '1.3.0.0');
        if (! empty($options['idempotency_key']))
            $request = $request->setHeader('Idempotency-Key',
                $options['idempotency_key']);

        return $request;
    }

    /**
     * Prepare the request data
     * @param  array $data
     * @param  array $options
     * @return array $data
     */
    protected function getData($data, $options)
    {
        if (! empty($options['expand']))
            $data['expand'] = $data['expand'];

        return $data;
    }

    /**
     * Generate a get request
     * @param  string $path
     * @param  array  $data
     * @param  array  $options
     * @return return anlutro\cURL\Response
     */
    public function get($path, $data, $options)
    {
        $request = $this->cURL->newJsonRequest('GET',
            $this->processOut->getHost() . $path . "?" .
            http_build_query($this->getData($data, $options))
        );
        $this->prepare($request, $options);

        return $request->send();
    }

    /**
     * Generate a POST request
     * @param  string $path
     * @param  array  $data
     * @param  array  $options
     * @return return anlutro\cURL\Response
     */
    public function post($path, $data, $options)
    {
        $request = $this->cURL->newJsonRequest('POST',
            $this->processOut->getHost() . $path,
            $this->getData($data, $options)
        );
        $this->prepare($request, $options);

        return $request->send();
    }

    /**
     * Generate a PUT request
     * @param  string $path
     * @param  array  $data
     * @param  array  $options
     * @return return anlutro\cURL\Response
     */
    public function put($path, $data, $options)
    {
        $request = $this->cURL->newJsonRequest('PUT',
            $this->processOut->getHost() . $path,
            $this->getData($data, $options)
        );
        $this->prepare($request, $options);

        return $request->send();
    }

    /**
     * Generate a DELETE request
     * @param  string $path
     * @param  array  $data
     * @param  array  $options
     * @return return anlutro\cURL\Response
     */
    public function delete($path, $data, $options)
    {
        $request = $this->cURL->newJsonRequest('DELETE',
            $this->processOut->getHost() . $path . "?" .
            http_build_query($this->getData($data, $options))
        );
        $this->prepare($request, $options);

        return $request->send();
    }

}
