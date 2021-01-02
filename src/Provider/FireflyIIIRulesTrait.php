<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIRulesTrait {

	/**
	 * List all rules.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rules/listRule
	 */
	public function listRule(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/rules", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new rule.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rules/storeRule
	 */
	public function storeRule(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/rules", $token, $requestBodyParameters);
	}

	/**
	 * Get a single rule.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rules/getRule
	 */
	public function getRule(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/rules/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing rule.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rules/updateRule
	 */
	public function updateRule(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/rules/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Delete an rule.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rules/deleteRule
	 */
	public function deleteRule(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/rules/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Test which transactions would be hit by the rule. No changes will be made. Limit the result if you want to.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rules/testRule
	 */
	public function testRule(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/rules/{$id}/test", $token, $requestBodyParameters);
	}

	/**
	 * Fire the rule group on your transactions. Changes will be made by the rules in the group! Limit the result if you want to.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rules/fireRule
	 */
	public function fireRule(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/rules/{$id}/trigger", $token, $requestBodyParameters);
	}

}