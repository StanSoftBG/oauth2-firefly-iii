<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIConfigurationTrait {

	/**
	 * Get system configuration
	 *
	 * @param AccessToken $token
	 *
	 * @see https://api-docs.firefly-iii.org/#/configuration/getConfiguration
	 */
	public function getConfiguration(AccessToken $token)
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/configuration", $token);
	}

	/**
	 * Set a single config value.
	 *
	 * @param AccessToken $token
	 * @param string $name
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/configuration/setConfiguration
	 */
	public function setConfiguration(AccessToken $token, $name, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/configuration/{$name}", $token, $requestBodyParameters);
	}

}