<?php

namespace ProcessOut\Invoice;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;

class TailoredInvoice extends InvoiceAbstract
{

    /**
     * ProcessOut's tailored invoice ID
     * @var string
     */
    protected $id;

    /**
     * TailoredInvoice constructor
     * @param ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
            $processOut = ProcessOut::getDefault();

        parent::__construct($processOut);
    }

    protected function setFields(Response $response)
    {
        $body = $response->getBody();

        $this->ItemName      = $body->item_name;
        $this->ItemPrice     = $body->item_price;
        $this->ItemQuantity  = $body->item_quantity;
        $this->Taxes         = $body->taxes;
        $this->Shipping      = $body->shipping;
        $this->RecurringDays = $body->recurring_days;
        $this->Currency      = $body->currency;
        $this->ReturnUrl     = $body->return_url;
        $this->CancelUrl     = $body->cancel_url;
        $this->NotifyUrl     = $body->notify_url;
    }

    /**
     * Set the tailored invoice id and fetch its data from ProcessOut
     * @param string $tailoredInvoiceId
     * @return TailoredInvoice $this
     */
    public function from($tailoredInvoiceId)
    {
        if(! empty($this->id))
            throw new \Exception('You may not set the tailored invoice id again.');

        $this->id = $tailoredInvoiceId;

        $this->lastResponse = new Response($this->ProcessOut->getCurl()
            ->newRequest('GET',
                ProcessOut::HOST . '/tailored-invoices/' .
                    $this->getId()
            )->setOptions(array(
                CURLOPT_USERPWD => $this->ProcessOut->getProjectId() . ':' .
                    $this->ProcessOut->getProjectKey()
            ))->send());

        $this->setFields($this->lastResponse);

        return $this;
    }

    /**
     * Get the current tailored invoice id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Perform the ProcessOut's request to generate the invoice
     * @return array
     */
    public function invoice()
    {
        $invoice = new Invoice($this->ProcessOut);

        $invoice->setItemName($this->ItemName);
        $invoice->setItemPrice($this->ItemPrice);
        $invoice->setItemQuantity($this->ItemQuantity);
        $invoice->setTaxes($this->Taxes);
        $invoice->setShipping($this->Shipping);
        $invoice->setRecurringDays($this->RecurringDays);
        $invoice->setCurrency($this->Currency);
        $invoice->setReturnUrl($this->ReturnUrl);
        $invoice->setCancelUrl($this->CancelUrl);
        $invoice->setNotifyUrl($this->NotifyUrl);

        return $invoice;
    }

}