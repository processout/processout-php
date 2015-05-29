<?php

namespace ProcessOut\Invoice;

use ProcessOut\ProcessOut;
use anlutro\cURL\cURL;

abstract class InvoiceAbstract
{

    /**
     * Contains cURL instance
     * @var cURL
     */
    protected $cURL;

    /**
     * ProcessOut instanciated object
     * @var ProcessOut
     */
    protected $ProcessOut;

    /**
     * URL where the customer will be returned upon purchase
     * @var string
     */
    protected $ReturnUrl = NULL;

    /**
     * URL where the customer will be returned if the transaction is canceled
     * @var string
     */
    protected $CancelUrl = NULL;

    /**
     * Callback URL
     * @var string
     */
    protected $NotifyUrl = NULL;

    /**
     * String passed to the callback URL, can be anything
     * @var string
     */
    protected $Custom = NULL;

    /**
     * Sandbox mode
     * @var boolean
     */
    protected $Sandbox = false;

    /**
     * Contains the latest response from ProcessOut
     * @var array
     */
    protected $lastResponse = array();

    /**
     * Contains the latest response data from ProcessOut
     * @var array
     */
    protected $lastData = array();

    /**
     * InvoiceBase constructor
     * @param ProcessOut $processOut
     */
    public function __construct(ProcessOut $processOut)
    {
        $this->cURL = new cURL;

        $this->ProcessOut = $processOut;
    }

    /**
     * Get the URL where the user will be redirected upon purchase
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->ReturnUrl;
    }

    /**
     * Set the URL where the user will be redirected upon purchase
     * @param string $returnUrl
     */
    public function setReturnUrl($returnUrl)
    {
        $this->ReturnUrl = $returnUrl;
        return $this;
    }

    /**
     * Get the URL where the user will be redirected when the transaction gets
     *  canceled
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->CancelUrl;
    }

    /**
     * Set the URL where the user will be redirected when the transaction gets
     *  canceled
     * @param string $cancelUrl
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->CancelUrl = $cancelUrl;
        return $this;
    }

    /**
     * Get the URL called by the callback
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->NotifyUrl;
    }

    /**
     * Set the URL called by the callback
     * @param string $notifyUrl
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->NotifyUrl = $notifyUrl;
        return $this;
    }

    /**
     * Get the custom value sent in the callback
     * @return string
     */
    public function getCustom()
    {
        return $this->Custom;
    }

    /**
     * Set the custom value sent in the callback
     * @param string $custom
     */
    public function setCustom($custom)
    {
        $this->Custom = $custom;
        return $this;
    }

    /**
     * Get the status of the sandbox mode
     * @return boolean
     */
    public function getSandbox()
    {
        return $this->Sandbox;
    }

    /**
     * Set the sandbox mode
     * @param boolean $sandbox
     */
    public function setSandbox($sandbox)
    {
        $this->Sandbox = $sandbox;
        return $this;
    }

    /**
     * Enable the sandbox mode
     */
    public function enableSandbox()
    {
        return $this->setSandbox(true);
    }

    /**
     * Disable the sandbox mode
     */
    public function disableSandbox()
    {
        return $this->setSandbox(false);
    }

    /**
     * Returns the latest response from ProcessOut
     * @return array
     */
    public function getLastResponse() {
        return $this->lastResponse;
    }

    /**
     * Generates the appropriate request data
     * @return array
     */
    protected function _generateData()
    {
        return array(
            'return_url'    => $this->ReturnUrl,
            'cancel_url'    => $this->CancelUrl,
            'notify_url'    => $this->NotifyUrl,
            'custom'        => $this->Custom
        );
    }

}
