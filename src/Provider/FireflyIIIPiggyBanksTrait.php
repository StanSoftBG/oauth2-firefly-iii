<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIPiggyBanksTrait {

	/**
	 * List all piggy banks.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/piggy_banks/listPiggyBank
	 */
	public function listPiggyBank(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/piggy_banks", $token, $requestBodyParameters);
	}

	/**
	 * Store a new piggy bank
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/piggy_banks/storePiggyBank
	 */
	public function storePiggyBank(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/piggy_banks", $token, $requestBodyParameters);
	}

	/**
	 * Get a single piggy bank.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/piggy_banks/getPiggyBank
	 */
	public function getPiggyBank(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/piggy_banks/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing piggy bank.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/piggy_banks/updatePiggyBank
	 */
	public function updatePiggyBank(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/piggy_banks/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Delete a piggy bank.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/piggy_banks/deletePiggyBank
	 */
	public function deletePiggyBank(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/piggy_banks/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * List all events linked to a piggy bank (adding and removing money).
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/piggy_banks/listEventByPiggyBank
	 */
	public function listEventByPiggyBank(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/piggy_banks/{$id}/events", $token, $requestBodyParameters);
	}

	/**
	 * List all attachments linked to a piggy bank.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/piggy_banks/listAttachmentByPiggyBank
	 */
	public function listAttachmentByPiggyBank(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/piggy_banks/{$id}/attachments", $token, $requestBodyParameters);
	}

}