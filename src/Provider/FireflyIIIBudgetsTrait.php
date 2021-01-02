<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIBudgetsTrait {

	/**
	 * List all the budgets the user has made. If the start date and end date are submitted as well, the "spent" array will be updated accordingly.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/listBudget
	 */
	public function listBudget(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/budgets", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new budget
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/storeBudget
	 */
	public function storeBudget(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/budgets", $token, $requestBodyParameters);
	}

	/**
	 * Get a single budget
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/getBudget
	 */
	public function getBudget(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/budgets/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing budget
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/updateBudget
	 */
	public function updateBudget(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/budgets/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Delete a budget
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/deleteBudget
	 */
	public function deleteBudget(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/budgets/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Get all transactions linked to a budget, possibly limited by start and end
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/listTransactionByBudget
	 */
	public function listTransactionByBudget(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/budgets/{$id}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * Get all budget limits for this budget and the money spent, and money left.
	 * You can limit the list by submitting a date range as well.
	 * The "spent" array for each budget limit is NOT influenced by the start and end date of your query,
	 * but by the start and end date of the budget limit itself.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/listBudgetLimitByBudget
	 */
	public function listBudgetLimitByBudget(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/budgets/{$id}/limits", $token, $requestBodyParameters);
	}

	/**
	 * Store a new budget limit.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/storeBudgetLimit
	 */
	public function storeBudgetLimit(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/budgets/{$id}/limits", $token, $requestBodyParameters);
	}

	/**
	 * Get a single budget limit
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/getBudgetLimit
	 */
	public function getBudgetLimit(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/budgets/limits/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing budget limit.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/updateBudgetLimit
	 */
	public function updateBudgetLimit(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/budgets/limits/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Delete a budget limit.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/deleteBudgetLimit
	 */
	public function deleteBudgetLimit(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/budgets/limits/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * List all the transactions within one budget limit. The start and end date are dictated by the budget limit.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/listTransactionByBudgetLimit
	 */
	public function listTransactionByBudgetLimit(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/budgets/limits/{$id}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * Lists all attachments within a budget limit
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/budgets/listAttachmentByBudget
	 */
	public function listAttachmentByBudget(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/budgets/{$id}/attachments", $token, $requestBodyParameters);
	}

}