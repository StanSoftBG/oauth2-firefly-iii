<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIBillsTrait {

	/**
	 * List all bills
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/bills/listBill
	 */
	public function listBill(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/bills", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new bill.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/bills/storeBill
	 */
	public function storeBill(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/bills", $token, $requestBodyParameters);
	}

	/**
	 * Get a single bill.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/bills/getBill
	 */
	public function getBill(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/bills/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing bill.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/bills/updateBill
	 */
	public function updateBill(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/bills/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Delete a bill. This will not delete any associated rules. Will not remove associated transactions. WILL remove all associated attachments.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/bills/deleteBill
	 */
	public function deleteBill(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/bills/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * This endpoint will list all attachments linked to the bill.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/bills/listAttachmentByBill
	 */
	public function listAttachmentByBill(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/bills/{$id}/attachments", $token, $requestBodyParameters);
	}

	/**
	 * This endpoint will list all rules that have an action to set the bill to this bill.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/bills/listRuleByBill
	 */
	public function listRuleByBill(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/bills/{$id}/rules", $token, $requestBodyParameters);
	}

	/**
	 * This endpoint will list all transactions linked to this bill.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/bills/listTransactionByBill
	 */
	public function listTransactionByBill(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/bills/{$id}/transactions", $token, $requestBodyParameters);
	}

}