<?php

namespace ProcessOut\Invoice;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Response;
use ProcessOut\Invoice\TailoredInvoice;

class Invoice extends InvoiceAbstract
{

    /**
     * Unique id of the invoice
     * @var string
     */
    protected $id;

    /**
     * Link to the invoice
     * @var string
     */
    protected $url;

    /**
     * Tailored invoice id from which this invoice is herited from
     * @var ProcessOut\Invoice\TailoredInvoice
     */
    protected $tailoredInvoiceId;

    /**
     * Invoice constructor
     * @param ProcessOut|null $processOut
     */
    public function __construct(ProcessOut $processOut = null)
    {
        if(is_null($processOut))
            $processOut = ProcessOut::getDefault();

        parent::__construct($processOut);
    }

    /**
     * Create a new invoice from a tailored invoice
     * @param  TailoredInvoice $tailoredInvoice
     * @return Invoice
     */
    public function fromTailored(TailoredInvoice $tailoredInvoice)
    {
        $this->tailoredInvoiceId = $tailoredInvoice->getId();

        return $this;
    }

    /**
     * Perform the ProcessOut's request to create the invoice
     * @return ProcessOut\Invoice\Invoice
     */
    public function save()
    {
        if(empty($this->getTailoredInvoiceId()))
            $this->saveNew();
        else
            $this->saveFromTailored();

        $this->id  = $this->lastResponse->getBody()->id;
        $this->url = $this->lastResponse->getBody()->url;

        return $this;
    }

    /**
     * Create a new invoice
     * @return void
     */
    protected function saveNew()
    {
        $this->lastResponse = new Response($this->ProcessOut->getCurl()
            ->newRequest('POST',
                ProcessOut::HOST . '/invoices',
                $this->_generateData()
            )->setOptions(array(
                CURLOPT_USERPWD  => $this->ProcessOut->getProjectId() . ':' .
                    $this->ProcessOut->getProjectKey()
            ))->send());
    }

    /**
     * Create a new invoice from a tailored invoice
     * @return void
     */
    protected function saveFromTailored()
    {
        $this->lastResponse = new Response($this->ProcessOut->getCurl()
            ->newRequest('POST',
                ProcessOut::HOST . '/invoices/from-tailored/' .
                    $this->getTailoredInvoiceId(),
                $this->_generateData()
            )->setOptions(array(
                CURLOPT_USERPWD => $this->ProcessOut->getProjectId() . ':' .
                    $this->ProcessOut->getProjectKey()
            ))->send());
    }

    /**
     * Return the ID of the created invoice
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Return the URL to the created invoice
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get the tailored invoice id
     * @return string
     */
    public function getTailoredInvoiceId()
    {
        return $this->tailoredInvoiceId;
    }

}
