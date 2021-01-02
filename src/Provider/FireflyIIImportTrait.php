<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIImportTrait {

	/**
	 * List all imports
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/import/listImport
	 */
	public function listImport(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/import/list", $token, $requestBodyParameters);
	}

	/**
	 * Show info on single import.
	 *
	 * @param AccessToken $token
	 * @param string $key
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/import/getImport
	 */
	public function getImport(AccessToken $token, $key, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/import/{$key}", $token, $requestBodyParameters);
	}

	/**
	 * list all transactions related to the import job. The correlation is made through the tag.
	 *
	 * @param AccessToken $token
	 * @param string $key
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/import/listTransactionByImport
	 */
	public function listTransactionByImport(AccessToken $token, $key, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/import/{$key}/transactions", $token, $requestBodyParameters);
	}


}