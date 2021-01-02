<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIAutocompleteTrait {

	/**
	 * All accounts of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getAccountsAC
	 */
	public function getAccountsAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/accounts", $token, $requestBodyParameters);
	}

	/**
	 * All bills of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getBillsAC
	 */
	public function getBillsAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/bills", $token, $requestBodyParameters);
	}

	/**
	 * All budgets of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getBudgetsAC
	 */
	public function getBudgetsAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/budgets", $token, $requestBodyParameters);
	}

	/**
	 * All categories of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getCategoriesAC
	 */
	public function getCategoriesAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/categories", $token, $requestBodyParameters);
	}

	/**
	 * All currencies of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getCurrenciesAC
	 */
	public function getCurrenciesAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/currencies", $token, $requestBodyParameters);
	}

	/**
	 * All currencies with code of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getCurrenciesCodeAC
	 */
	public function getCurrenciesCodeAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/currencies-with-code", $token, $requestBodyParameters);
	}

	/**
	 * All object groups of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getObjectGroupsAC
	 */
	public function getObjectGroupsAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/object-groups", $token, $requestBodyParameters);
	}

	/**
	 * All piggy banks of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getPiggiesAC
	 */
	public function getPiggiesAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/piggy-banks", $token, $requestBodyParameters);
	}

	/**
	 * All piggy banks with balance of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getPiggiesBalanceAC
	 */
	public function getPiggiesBalanceAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/piggy-banks-with-balance", $token, $requestBodyParameters);
	}

	/**
	 * All rules of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getRulesAC
	 */
	public function getRulesAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/rules", $token, $requestBodyParameters);
	}

	/**
	 * All rule groups of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getRuleGroupsAC
	 */
	public function getRuleGroupsAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/rule-groups", $token, $requestBodyParameters);
	}

	/**
	 * All tags of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getTagAC
	 */
	public function getTagAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/tags", $token, $requestBodyParameters);
	}

	/**
	 * All transaction description of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getTransactionsAC
	 */
	public function getTransactionsAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/transactions", $token, $requestBodyParameters);
	}

	/**
	 * All transaction complimented with their ID of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getTransactionsIDAC
	 */
	public function getTransactionsIDAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/transactions-with-id", $token, $requestBodyParameters);
	}

	/**
	 * All transaction types of the user returned in a basic auto-complete array
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/autocomplete/getTransactionTypesAC
	 */
	public function getTransactionTypesAC(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/autocomplete/transaction-types", $token, $requestBodyParameters);
	}
}