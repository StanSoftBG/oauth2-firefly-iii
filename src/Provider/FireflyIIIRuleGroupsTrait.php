<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIRuleGroupsTrait {

	/**
	 * List all rule groups.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rule_groups/listRuleGroup
	 */
	public function listRuleGroup(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/rule_groups", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new rule group.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rule_groups/storeRuleGroup
	 */
	public function storeRuleGroup(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/rule_groups", $token, $requestBodyParameters);
	}

	/**
	 * Get a single rule group.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rule_groups/getRuleGroup
	 */
	public function getRuleGroup(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/rule_groups/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing rule group.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rule_groups/updateRuleGroup
	 */
	public function updateRuleGroup(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/rule_groups/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Test which transactions would be hit by the rule group. No changes will be made. Limit the result if you want to.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rule_groups/testRuleGroup
	 */
	public function testRuleGroup(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/rule_groups/{$id}/test", $token, $requestBodyParameters);
	}

	/**
	 * List rules in this rule group.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rule_groups/listRuleByGroup
	 */
	public function listRuleByGroup(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/rule_groups/{$id}/rules", $token, $requestBodyParameters);
	}

	/**
	 * Fire the rule group on your transactions. Changes will be made by the rules in the rule group! Limit the result if you want to.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/rule_groups/fireRuleGroup
	 */
	public function fireRuleGroup(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/rule_groups/{$id}/trigger", $token, $requestBodyParameters);
	}

}