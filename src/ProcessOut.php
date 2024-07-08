<?php

namespace ProcessOut;

use ProcessOut\Exceptions\ApiAuthenticationException;

class ProcessOut
{

    /**
     * ProcessOut host url
     */
    protected $host = 'https://api.processout.com';

    /**
     * ProcessOut project ID
     * @var string
     */
    protected $projectID;

    /**
     * ProcessOut project secret key
     * @var string
     */
    protected $projectSecret;

    /**
     * ProcessOut constructor
     * @param string $projectID
     * @param string $projectSecret
     */
    public function __construct($projectID, $projectSecret)
    {
        $this->projectID     = $projectID;
        $this->projectSecret = $projectSecret;
    }

    /**
     * Get the library host URL
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the library host URL
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Get the ProcessOut project ID
     * @return string
     */
    public function getProjectID()
    {
        return $this->projectID;
    }

    /**
     * Get the ProcessOut project secret
     * @return string
     */
    public function getProjectSecret()
    {
        return $this->projectSecret;
    }

    
    /**
     * Create a new Activity instance
     * @param array|null $prefill array used to prefill the object
     * @return Activity
     */
	public function newActivity($prefill = array()) {
        return new Activity($this, $prefill);
    }
	
    /**
     * Create a new Addon instance
     * @param array|null $prefill array used to prefill the object
     * @return Addon
     */
	public function newAddon($prefill = array()) {
        return new Addon($this, $prefill);
    }
	
    /**
     * Create a new APIVersion instance
     * @param array|null $prefill array used to prefill the object
     * @return APIVersion
     */
	public function newAPIVersion($prefill = array()) {
        return new APIVersion($this, $prefill);
    }
	
    /**
     * Create a new ApplePayAlternativeMerchantCertificates instance
     * @param array|null $prefill array used to prefill the object
     * @return ApplePayAlternativeMerchantCertificates
     */
	public function newApplePayAlternativeMerchantCertificates($prefill = array()) {
        return new ApplePayAlternativeMerchantCertificates($this, $prefill);
    }
	
    /**
     * Create a new AlternativeMerchantCertificate instance
     * @param array|null $prefill array used to prefill the object
     * @return AlternativeMerchantCertificate
     */
	public function newAlternativeMerchantCertificate($prefill = array()) {
        return new AlternativeMerchantCertificate($this, $prefill);
    }
	
    /**
     * Create a new Balances instance
     * @param array|null $prefill array used to prefill the object
     * @return Balances
     */
	public function newBalances($prefill = array()) {
        return new Balances($this, $prefill);
    }
	
    /**
     * Create a new Balance instance
     * @param array|null $prefill array used to prefill the object
     * @return Balance
     */
	public function newBalance($prefill = array()) {
        return new Balance($this, $prefill);
    }
	
    /**
     * Create a new Card instance
     * @param array|null $prefill array used to prefill the object
     * @return Card
     */
	public function newCard($prefill = array()) {
        return new Card($this, $prefill);
    }
	
    /**
     * Create a new CardInformation instance
     * @param array|null $prefill array used to prefill the object
     * @return CardInformation
     */
	public function newCardInformation($prefill = array()) {
        return new CardInformation($this, $prefill);
    }
	
    /**
     * Create a new Phone instance
     * @param array|null $prefill array used to prefill the object
     * @return Phone
     */
	public function newPhone($prefill = array()) {
        return new Phone($this, $prefill);
    }
	
    /**
     * Create a new Coupon instance
     * @param array|null $prefill array used to prefill the object
     * @return Coupon
     */
	public function newCoupon($prefill = array()) {
        return new Coupon($this, $prefill);
    }
	
    /**
     * Create a new Customer instance
     * @param array|null $prefill array used to prefill the object
     * @return Customer
     */
	public function newCustomer($prefill = array()) {
        return new Customer($this, $prefill);
    }
	
    /**
     * Create a new CustomerPhone instance
     * @param array|null $prefill array used to prefill the object
     * @return CustomerPhone
     */
	public function newCustomerPhone($prefill = array()) {
        return new CustomerPhone($this, $prefill);
    }
	
    /**
     * Create a new Token instance
     * @param array|null $prefill array used to prefill the object
     * @return Token
     */
	public function newToken($prefill = array()) {
        return new Token($this, $prefill);
    }
	
    /**
     * Create a new Discount instance
     * @param array|null $prefill array used to prefill the object
     * @return Discount
     */
	public function newDiscount($prefill = array()) {
        return new Discount($this, $prefill);
    }
	
    /**
     * Create a new Event instance
     * @param array|null $prefill array used to prefill the object
     * @return Event
     */
	public function newEvent($prefill = array()) {
        return new Event($this, $prefill);
    }
	
    /**
     * Create a new Gateway instance
     * @param array|null $prefill array used to prefill the object
     * @return Gateway
     */
	public function newGateway($prefill = array()) {
        return new Gateway($this, $prefill);
    }
	
    /**
     * Create a new GatewayConfiguration instance
     * @param array|null $prefill array used to prefill the object
     * @return GatewayConfiguration
     */
	public function newGatewayConfiguration($prefill = array()) {
        return new GatewayConfiguration($this, $prefill);
    }
	
    /**
     * Create a new Invoice instance
     * @param array|null $prefill array used to prefill the object
     * @return Invoice
     */
	public function newInvoice($prefill = array()) {
        return new Invoice($this, $prefill);
    }
	
    /**
     * Create a new NativeAPMRequest instance
     * @param array|null $prefill array used to prefill the object
     * @return NativeAPMRequest
     */
	public function newNativeAPMRequest($prefill = array()) {
        return new NativeAPMRequest($this, $prefill);
    }
	
    /**
     * Create a new NativeAPMParameterValue instance
     * @param array|null $prefill array used to prefill the object
     * @return NativeAPMParameterValue
     */
	public function newNativeAPMParameterValue($prefill = array()) {
        return new NativeAPMParameterValue($this, $prefill);
    }
	
    /**
     * Create a new InvoiceTax instance
     * @param array|null $prefill array used to prefill the object
     * @return InvoiceTax
     */
	public function newInvoiceTax($prefill = array()) {
        return new InvoiceTax($this, $prefill);
    }
	
    /**
     * Create a new InvoiceExternalFraudTools instance
     * @param array|null $prefill array used to prefill the object
     * @return InvoiceExternalFraudTools
     */
	public function newInvoiceExternalFraudTools($prefill = array()) {
        return new InvoiceExternalFraudTools($this, $prefill);
    }
	
    /**
     * Create a new InvoiceRisk instance
     * @param array|null $prefill array used to prefill the object
     * @return InvoiceRisk
     */
	public function newInvoiceRisk($prefill = array()) {
        return new InvoiceRisk($this, $prefill);
    }
	
    /**
     * Create a new InvoiceDevice instance
     * @param array|null $prefill array used to prefill the object
     * @return InvoiceDevice
     */
	public function newInvoiceDevice($prefill = array()) {
        return new InvoiceDevice($this, $prefill);
    }
	
    /**
     * Create a new InvoiceShipping instance
     * @param array|null $prefill array used to prefill the object
     * @return InvoiceShipping
     */
	public function newInvoiceShipping($prefill = array()) {
        return new InvoiceShipping($this, $prefill);
    }
	
    /**
     * Create a new InvoiceShippingPhone instance
     * @param array|null $prefill array used to prefill the object
     * @return InvoiceShippingPhone
     */
	public function newInvoiceShippingPhone($prefill = array()) {
        return new InvoiceShippingPhone($this, $prefill);
    }
	
    /**
     * Create a new InvoiceBilling instance
     * @param array|null $prefill array used to prefill the object
     * @return InvoiceBilling
     */
	public function newInvoiceBilling($prefill = array()) {
        return new InvoiceBilling($this, $prefill);
    }
	
    /**
     * Create a new UnsupportedFeatureBypass instance
     * @param array|null $prefill array used to prefill the object
     * @return UnsupportedFeatureBypass
     */
	public function newUnsupportedFeatureBypass($prefill = array()) {
        return new UnsupportedFeatureBypass($this, $prefill);
    }
	
    /**
     * Create a new InvoiceDetail instance
     * @param array|null $prefill array used to prefill the object
     * @return InvoiceDetail
     */
	public function newInvoiceDetail($prefill = array()) {
        return new InvoiceDetail($this, $prefill);
    }
	
    /**
     * Create a new CustomerAction instance
     * @param array|null $prefill array used to prefill the object
     * @return CustomerAction
     */
	public function newCustomerAction($prefill = array()) {
        return new CustomerAction($this, $prefill);
    }
	
    /**
     * Create a new DunningAction instance
     * @param array|null $prefill array used to prefill the object
     * @return DunningAction
     */
	public function newDunningAction($prefill = array()) {
        return new DunningAction($this, $prefill);
    }
	
    /**
     * Create a new Payout instance
     * @param array|null $prefill array used to prefill the object
     * @return Payout
     */
	public function newPayout($prefill = array()) {
        return new Payout($this, $prefill);
    }
	
    /**
     * Create a new PayoutItem instance
     * @param array|null $prefill array used to prefill the object
     * @return PayoutItem
     */
	public function newPayoutItem($prefill = array()) {
        return new PayoutItem($this, $prefill);
    }
	
    /**
     * Create a new PayoutItemAmountBreakdowns instance
     * @param array|null $prefill array used to prefill the object
     * @return PayoutItemAmountBreakdowns
     */
	public function newPayoutItemAmountBreakdowns($prefill = array()) {
        return new PayoutItemAmountBreakdowns($this, $prefill);
    }
	
    /**
     * Create a new Plan instance
     * @param array|null $prefill array used to prefill the object
     * @return Plan
     */
	public function newPlan($prefill = array()) {
        return new Plan($this, $prefill);
    }
	
    /**
     * Create a new Product instance
     * @param array|null $prefill array used to prefill the object
     * @return Product
     */
	public function newProduct($prefill = array()) {
        return new Product($this, $prefill);
    }
	
    /**
     * Create a new Project instance
     * @param array|null $prefill array used to prefill the object
     * @return Project
     */
	public function newProject($prefill = array()) {
        return new Project($this, $prefill);
    }
	
    /**
     * Create a new ProjectSFTPSettings instance
     * @param array|null $prefill array used to prefill the object
     * @return ProjectSFTPSettings
     */
	public function newProjectSFTPSettings($prefill = array()) {
        return new ProjectSFTPSettings($this, $prefill);
    }
	
    /**
     * Create a new ProjectSFTPSettingsPublic instance
     * @param array|null $prefill array used to prefill the object
     * @return ProjectSFTPSettingsPublic
     */
	public function newProjectSFTPSettingsPublic($prefill = array()) {
        return new ProjectSFTPSettingsPublic($this, $prefill);
    }
	
    /**
     * Create a new Refund instance
     * @param array|null $prefill array used to prefill the object
     * @return Refund
     */
	public function newRefund($prefill = array()) {
        return new Refund($this, $prefill);
    }
	
    /**
     * Create a new Subscription instance
     * @param array|null $prefill array used to prefill the object
     * @return Subscription
     */
	public function newSubscription($prefill = array()) {
        return new Subscription($this, $prefill);
    }
	
    /**
     * Create a new Transaction instance
     * @param array|null $prefill array used to prefill the object
     * @return Transaction
     */
	public function newTransaction($prefill = array()) {
        return new Transaction($this, $prefill);
    }
	
    /**
     * Create a new NativeAPMResponse instance
     * @param array|null $prefill array used to prefill the object
     * @return NativeAPMResponse
     */
	public function newNativeAPMResponse($prefill = array()) {
        return new NativeAPMResponse($this, $prefill);
    }
	
    /**
     * Create a new NativeAPMParameterDefinition instance
     * @param array|null $prefill array used to prefill the object
     * @return NativeAPMParameterDefinition
     */
	public function newNativeAPMParameterDefinition($prefill = array()) {
        return new NativeAPMParameterDefinition($this, $prefill);
    }
	
    /**
     * Create a new NativeAPMParameterValueDefinition instance
     * @param array|null $prefill array used to prefill the object
     * @return NativeAPMParameterValueDefinition
     */
	public function newNativeAPMParameterValueDefinition($prefill = array()) {
        return new NativeAPMParameterValueDefinition($this, $prefill);
    }
	
    /**
     * Create a new ThreeDS instance
     * @param array|null $prefill array used to prefill the object
     * @return ThreeDS
     */
	public function newThreeDS($prefill = array()) {
        return new ThreeDS($this, $prefill);
    }
	
    /**
     * Create a new PaymentDataThreeDSRequest instance
     * @param array|null $prefill array used to prefill the object
     * @return PaymentDataThreeDSRequest
     */
	public function newPaymentDataThreeDSRequest($prefill = array()) {
        return new PaymentDataThreeDSRequest($this, $prefill);
    }
	
    /**
     * Create a new PaymentDataNetworkAuthentication instance
     * @param array|null $prefill array used to prefill the object
     * @return PaymentDataNetworkAuthentication
     */
	public function newPaymentDataNetworkAuthentication($prefill = array()) {
        return new PaymentDataNetworkAuthentication($this, $prefill);
    }
	
    /**
     * Create a new PaymentDataThreeDSAuthentication instance
     * @param array|null $prefill array used to prefill the object
     * @return PaymentDataThreeDSAuthentication
     */
	public function newPaymentDataThreeDSAuthentication($prefill = array()) {
        return new PaymentDataThreeDSAuthentication($this, $prefill);
    }
	
    /**
     * Create a new TransactionOperation instance
     * @param array|null $prefill array used to prefill the object
     * @return TransactionOperation
     */
	public function newTransactionOperation($prefill = array()) {
        return new TransactionOperation($this, $prefill);
    }
	
    /**
     * Create a new Webhook instance
     * @param array|null $prefill array used to prefill the object
     * @return Webhook
     */
	public function newWebhook($prefill = array()) {
        return new Webhook($this, $prefill);
    }
	
    /**
     * Create a new WebhookEndpoint instance
     * @param array|null $prefill array used to prefill the object
     * @return WebhookEndpoint
     */
	public function newWebhookEndpoint($prefill = array()) {
        return new WebhookEndpoint($this, $prefill);
    }
	
    /**
     * Create a new CardCreateRequest instance
     * @param array|null $prefill array used to prefill the object
     * @return CardCreateRequest
     */
	public function newCardCreateRequest($prefill = array()) {
        return new CardCreateRequest($this, $prefill);
    }
	
    /**
     * Create a new Device instance
     * @param array|null $prefill array used to prefill the object
     * @return Device
     */
	public function newDevice($prefill = array()) {
        return new Device($this, $prefill);
    }
	
    /**
     * Create a new CardContact instance
     * @param array|null $prefill array used to prefill the object
     * @return CardContact
     */
	public function newCardContact($prefill = array()) {
        return new CardContact($this, $prefill);
    }
	
    /**
     * Create a new CardShipping instance
     * @param array|null $prefill array used to prefill the object
     * @return CardShipping
     */
	public function newCardShipping($prefill = array()) {
        return new CardShipping($this, $prefill);
    }
	
    /**
     * Create a new CardUpdateRequest instance
     * @param array|null $prefill array used to prefill the object
     * @return CardUpdateRequest
     */
	public function newCardUpdateRequest($prefill = array()) {
        return new CardUpdateRequest($this, $prefill);
    }
	
    /**
     * Create a new ErrorCodes instance
     * @param array|null $prefill array used to prefill the object
     * @return ErrorCodes
     */
	public function newErrorCodes($prefill = array()) {
        return new ErrorCodes($this, $prefill);
    }
	
    /**
     * Create a new CategoryErrorCodes instance
     * @param array|null $prefill array used to prefill the object
     * @return CategoryErrorCodes
     */
	public function newCategoryErrorCodes($prefill = array()) {
        return new CategoryErrorCodes($this, $prefill);
    }
	
    /**
     * Create a new NativeAPMTransactionDetailsGateway instance
     * @param array|null $prefill array used to prefill the object
     * @return NativeAPMTransactionDetailsGateway
     */
	public function newNativeAPMTransactionDetailsGateway($prefill = array()) {
        return new NativeAPMTransactionDetailsGateway($this, $prefill);
    }
	
    /**
     * Create a new NativeAPMTransactionDetailsInvoice instance
     * @param array|null $prefill array used to prefill the object
     * @return NativeAPMTransactionDetailsInvoice
     */
	public function newNativeAPMTransactionDetailsInvoice($prefill = array()) {
        return new NativeAPMTransactionDetailsInvoice($this, $prefill);
    }
	
    /**
     * Create a new NativeAPMTransactionDetails instance
     * @param array|null $prefill array used to prefill the object
     * @return NativeAPMTransactionDetails
     */
	public function newNativeAPMTransactionDetails($prefill = array()) {
        return new NativeAPMTransactionDetails($this, $prefill);
    }
	
}
