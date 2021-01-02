<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIAvailableBudgetsTrait {

	/**
	 * Firefly III allows users to set the amount that is available to be budgeted in so-called "available budgets".
	 * For example, the user could have 1200,- available to be divided during the coming month.
	 * This amount is used on the /budgets page. This endpoint returns all of these amounts and the periods for which they are set.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/available_budgets/listAvailableBudget
	 */
	public function listAvailableBudget(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/available_budgets", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new available budget for a specified period.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/available_budgets/storeAvailableBudget
	 */
	public function storeAvailableBudget(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/available_budgets", $token, $requestBodyParameters);
	}

	/**
	 * Get a single available budget, by ID.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/available_budgets/getAvailableBudget
	 */
	public function getAvailableBudget(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/available_budgets/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing available budget.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/available_budgets/updateAvailableBudget
	 */
	public function updateAvailableBudget(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/available_budgets/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Delete an available budget.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/available_budgets/deleteAvailableBudget
	 */
	public function deleteAvailableBudget(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/available_budgets/{$id}", $token, $requestBodyParameters);
	}
}