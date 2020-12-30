<?php

namespace StanSoft\OAuth2\Client\Provider;

use GuzzleHttp\Psr7\Utils;
use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIAccountsTrait {

	/**
	 * Returns a list of all the accounts owned by the authenticated user.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/accounts/listAccount
	 */
	public function listAccount(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/accounts", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new account
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/accounts/storeAccount
	 */
	public function storeAccount(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/accounts", $token, $requestBodyParameters);
	}

	/**
	 * Returns a single account by its ID.
	 *
	 * @param AccessToken $token
	 * @param int $id
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/accounts/getAccount
	 */
	public function getAccount(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/accounts/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Used to update a single account. All fields that are not submitted will be cleared (set to NULL).
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/accounts/updateAccount
	 */
	public function updateAccount(AccessToken $token, $id, $requestBodyParameters)
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/accounts/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Will permanently delete an account. Any associated transactions and piggy banks are ALSO deleted. Cannot be recovered from.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/accounts/deleteAccount
	 */
	public function deleteAccount(AccessToken $token, $id)
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/accounts/{$id}", $token);
	}

	/**
	 * Returns a list of all the piggy banks connected to the account.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/accounts/listPiggyBankByAccount
	 */
	public function listPiggyBankByAccount(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/accounts/{$id}/piggy_banks", $token, $requestBodyParameters);
	}

	/**
	 * Returns a list of all the transactions connected to the account.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/accounts/listTransactionByAccount
	 */
	public function listTransactionByAccount(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/accounts/{$id}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * Lists all attachments.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/accounts/listAttachmentByAccount
	 */
	public function listAttachmentByAccount(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/accounts/{$id}/attachments", $token, $requestBodyParameters);
	}
}