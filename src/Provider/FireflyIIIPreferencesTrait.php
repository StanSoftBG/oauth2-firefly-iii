<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIPreferencesTrait {

	/**
	 * List all preferences of the user.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/preferences/listPreference
	 */
	public function listPreference(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/preferences", $token, $requestBodyParameters);
	}

	/**
	 * Return a single preference.
	 *
	 * @param AccessToken $token
	 * @param string $name
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/preferences/getPreference
	 */
	public function getPreference(AccessToken $token, $name, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/preferences/{$name}", $token, $requestBodyParameters);
	}

	/**
	 * Update a user's preference.
	 *
	 * @param AccessToken $token
	 * @param string $name
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/preferences/updatePreference
	 */
	public function updatePreference(AccessToken $token, $name, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/preferences/{$name}", $token, $requestBodyParameters);
	}

}