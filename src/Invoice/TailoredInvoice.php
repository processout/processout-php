<?php

namespace ProcessOut\Invoice;

use ProcessOut\ProcessOut;

class TailoredInvoice extends InvoiceAbstract
{

    /**
     * ProcessOut's tailored invoice ID
     * @var string
     */
    protected $TailoredInvoiceId;

    /**
     * TailoredInvoice constructor
     * @param ProcessOut $processOut
     * @param string $tailoredInvoiceId
     */
    public function __construct(ProcessOut $processOut, $tailoredInvoiceId)
    {
        $this->TailoredInvoiceId = $tailoredInvoiceId;
        parent::__construct($processOut);
    }

    /**
     * Get the current tailored invoice id
     * @return string
     */
    public function getTailoredInvoiceId()
    {
        return $this->TailoredInvoiceId;
    }

    /**
     * Set the current tailored invoice id
     * @param string $tailoredInvoiceId
     */
    public function setTailoredInvoiceId($tailoredInvoiceId)
    {
        $this->TailoredInvoiceId = $tailoredInvoiceId;
        return $this;
    }

    /**
     * Perform the ProcessOut's request to generate the invoice
     * @return array
     */
    protected function create()
    {
        $this->lastResponse = $this->cURL->newRequest(
            'POST',
            ProcessOut::HOST . '/invoices/from-tailored/' .
                $this->getTailoredInvoiceId(),
            $this->_generateData()
        )->setOptions(array(
            CURLOPT_USERPWD  => $this->ProcessOut->getProjectId() . ':' .
                $this->ProcessOut->getProjectKey()
        ))->send();

        if($this->lastResponse->statusCode != '200')
        {
            throw new \Exception("Processout returned an error code,
                please verify your inputs. Error: " .
                $this->lastResponse->code);
        }

        $this->lastData = json_decode($this->lastResponse->body);

        return $this->lastData;
    }

    /**
     * Return the URL to the created invoice
     * @return string
     */
    public function getLink()
    {
        return $this->create()->url;
    }

    /**
     * Return the ID of the created invoice
     * @return string
     */
    public function getId()
    {
        return $this->create()->id;
    }

    /**
     * Generate the data used during the ProcessOut's request
     * @return array
     */
    protected function _generateData()
    {
        return array_merge(parent::_generateData());
    }

}