<?php

namespace ProcessOut\Objects;

class ProductInvoice extends InvoiceBase
{

	/**
	 * ProcessOut's product ID
	 * @var string
	 */
	protected $ProductId;

	/**
	 * ProductInvoice constructor
	 * @param string $projectId
	 * @param string $projectSecret
	 * @param string $productId
	 */
	public function __construct($projectId, $projectSecret, $productId)
	{
        $this->ProductId = $productId;

        parent::__construct($projectId, $projectSecret);
	}

	/**
	 * Get the current product ID
	 * @return string
	 */
	public function getProductId()
	{
		return $this->ProductId;
	}

	/**
	 * Set the current product ID
	 * @param string $ProductId
	 */
	public function setProductid($ProductId)
	{
		$this->ProductId = $ProductId;
		return $this;
	}

	/**
	 * Perform the ProcessOut's request to generate the invoice, and return the
	 * URL to that invoice
	 * @return string
	 */
	public function getLink()
	{
		$this->lastResponse = $this->cURL->newRequest(
			'post',
			$this->HOST . '/invoices/product/' . $this->ProductId,
			$this->_generateData()
		)->setOptions(array(
			CURLOPT_USERPWD  => $this->ProjectId . ':' .
				$this->ProjectSecret
		))->send();

		if($this->lastResponse->statusCode != '200')
		{
			throw new \Exception("Processout returned an error code,
				please verify your inputs. Error: " .
				$this->lastResponse->code);
		}

		$data = json_decode($this->lastResponse->body, true);

		return $data['url'];
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
