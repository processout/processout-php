<?php

namespace ProcessOut\Objects;

use anlutro\cURL\cURL;

class InvoiceBase extends Constants
{

	/**
	 * Contains cURL instance
	 * @var cURL
	 */
	protected $cURL;

	/**
	 * ProcessOut's project id
	 * @var string
	 */
	protected $ProjectId;

	/**
	 * ProcessOut's project secret
	 * @var string
	 */
	protected $ProjectSecret;

	/**
	 * Determines if coupons will be allowed
	 * @var boolean
	 */
	protected $EnableCoupon = true;

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
	protected $lastResponse = NULL;

	/**
	 * InvoiceBase constructor
	 * @param string $projectId
	 * @param string $projectSecret
	 */
	public function __construct($projectId, $projectSecret)
	{
		$this->cURL = new cURL;

        $this->ProjectId     = $projectId;
        $this->ProjectSecret = $projectSecret;
	}

	/**
	 * Returns true if coupons are allowed, false otherwise
	 * @return boolean
	 */
	public function getEnableCoupon()
    {
	    return $this->EnableCoupon;
	}

	/**
	 * Determine if the coupons are allowed (true) or not (false)
	 * @param boolean $enableCoupon
	 */
	public function setEnableCoupon($enableCoupon)
    {
	    $this->EnableCoupon = $enableCoupon;
	    return $this;
	}

    /**
     * Enable coupons
     */
    public function enableCoupon()
    {
        return $this->setEnableCoupon(true);
    }

    /**
     * Disable coupons
     */
    public function disableCoupon()
    {
        return $this->setEnableCoupon(false);
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
	 * 	canceled
	 * @return string
	 */
	public function getCancelUrl()
    {
	    return $this->CancelUrl;
	}

	/**
	 * Set the URL where the user will be redirected when the transaction gets
	 * 	canceled
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
            'enable_coupon' => $this->EnableCoupon,
            'return_url'    => $this->ReturnUrl,
            'cancel_url'    => $this->CancelUrl,
            'notify_url'    => $this->NotifyUrl,
            'custom'        => $this->Custom
		);
	}

}
