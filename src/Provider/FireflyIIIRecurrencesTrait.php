<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIRecurrencesTrait {

	/**
	 * List all recurring transactions.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/recurrences/listRecurrence
	 */
	public function listRecurrence(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/recurrences", $token, $requestBodyParameters);
	}

	/**
	 * Get a single recurring transaction.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/recurrences/getRecurrence
	 */
	public function getRecurrence(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/recurrences/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing recurring transaction.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/recurrences/updateRecurrence
	 */
	public function updateRecurrence(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/recurrences/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Delete a recurring transaction. Transactions created will not be deleted.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/recurrences/deleteRecurrence
	 */
	public function deleteRecurrence(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/recurrences/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * List all transactions created by a recurring transaction, optionally limited to the date ranges specified.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/recurrences/listTransactionByRecurrence
	 */
	public function listTransactionByRecurrence(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/recurrences/{$id}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * Triggers the recurring transactions, like a cron job would. If the schedule does not call for a new transaction to be created, nothing will happen.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/recurrences/triggerRecurrence
	 */
	public function triggerRecurrence(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/recurrences/trigger", $token, $requestBodyParameters);
	}

}