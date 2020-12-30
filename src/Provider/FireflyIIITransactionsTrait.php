<?php

namespace StanSoft\OAuth2\Client\Provider;

use GuzzleHttp\Psr7\Utils;
use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIITransactionsTrait {

	/**
	 * List all the user's transactions.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/transactions/listTransaction
	 */
	public function listTransaction(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new transaction.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/transactions/storeTransaction
	 */
	public function storeTransaction(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * Get a single transaction.
	 *
	 * @param AccessToken $token
	 * @param int $id
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/transactions/getTransaction
	 */
	public function getTransaction(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/transactions/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update an existing transaction.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/transactions/updateTransaction
	 */
	public function updateTransaction(AccessToken $token, $id, $requestBodyParameters)
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/transactions/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Delete a transaction.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/transactions/deleteTransaction
	 */
	public function deleteTransaction(AccessToken $token, $id)
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/transactions/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Lists all attachments.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/transactions/listAttachmentByTransaction
	 */
	public function listAttachmentByTransaction(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/transactions/{$id}/attachments", $token, $requestBodyParameters);
	}

	/**
	 * Lists all piggy bank events.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/transactions/listEventByTransaction
	 */
	public function listEventByTransaction(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/transactions/{$id}/piggy_bank_events", $token, $requestBodyParameters);
	}

	/**
	 * Get a single transaction by underlying journal.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/transactions/getTransactionByJournal
	 */
	public function getTransactionByJournal(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/transaction-journals/{$id}", $token, $requestBodyParameters);
	}
}