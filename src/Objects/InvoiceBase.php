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
	public function getEnableCoupon() {
	    return $this->EnableCoupon;
	}

	/**
	 * Determine if the coupons are allowed (true) or not (false)
	 * @param boolean $EnableCoupon
	 */
	public function setEnableCoupon($EnableCoupon) {
	    $this->EnableCoupon = $EnableCoupon;
	    return $this;
	}

	/**
	 * Get the URL where the user will be redirected upon purchase
	 * @return string
	 */
	public function getReturnUrl() {
	    return $this->ReturnUrl;
	}

	/**
	 * Set the URL where the user will be redirected upon purchase
	 * @param string $ReturnUrl
	 */
	public function setReturnUrl($ReturnUrl) {
	    $this->ReturnUrl = $ReturnUrl;
	    return $this;
	}

	/**
	 * Get the URL where the user will be redirected when the transaction gets
	 * 	canceled
	 * @return string
	 */
	public function getCancelUrl() {
	    return $this->CancelUrl;
	}

	/**
	 * Set the URL where the user will be redirected when the transaction gets
	 * 	canceled
	 * @param string $CancelUrl
	 */
	public function setCancelUrl($CancelUrl) {
	    $this->CancelUrl = $CancelUrl;
	    return $this;
	}

	/**
	 * Get the URL called by the callback
	 * @return string
	 */
	public function getNotifyUrl() {
	    return $this->NotifyUrl;
	}

	/**
	 * Set the URL called by the callback
	 * @param string $NotifyUrl
	 */
	public function setNotifyUrl($NotifyUrl) {
	    $this->NotifyUrl = $NotifyUrl;
	    return $this;
	}

	/**
	 * Get the custom value sent in the callback
	 * @return string
	 */
	public function getCustom() {
	    return $this->Custom;
	}

	/**
	 * Set the custom value sent in the callback
	 * @param string $Custom
	 */
	public function setCustom($Custom) {
	    $this->Custom = $Custom;
	    return $this;
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
