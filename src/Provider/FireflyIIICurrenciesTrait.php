<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIICurrenciesTrait {

	/**
	 * List all currencies.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/listCurrency
	 */
	public function listCurrency(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new currency.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/storeCurrency
	 */
	public function storeCurrency(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/currencies", $token, $requestBodyParameters);
	}

	/**
	 * Enable a single currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/enableCurrency
	 */
	public function enableCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/currencies/{$code}/enable", $token, $requestBodyParameters);
	}

	/**
	 * Disable a currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/disableCurrency
	 */
	public function disableCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/currencies/{$code}/disable", $token, $requestBodyParameters);
	}

	/**
	 * Make this currency the default currency. If the currency is not enabled, it will be enabled as well.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/defaultCurrency
	 */
	public function defaultCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/currencies/{$code}/default", $token, $requestBodyParameters);
	}

	/**
	 * Get a single currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/getCurrency
	 */
	public function getCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/{$code}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/updateCurrency
	 */
	public function updateCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/currencies/{$code}", $token, $requestBodyParameters);
	}

	/**
	 * Delete a currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/deleteCurrency
	 */
	public function deleteCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/currencies/{$code}", $token, $requestBodyParameters);
	}

	/**
	 * List all accounts with this currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/listAccountByCurrency
	 */
	public function listAccountByCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/{$code}/accounts", $token, $requestBodyParameters);
	}

	/**
	 * List all available budgets with this currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/listAvailableBudgetByCurrency
	 */
	public function listAvailableBudgetByCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/{$code}/available_budgets", $token, $requestBodyParameters);
	}

	/**
	 * List all bills with this currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/listBillByCurrency
	 */
	public function listBillByCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/{$code}/bills", $token, $requestBodyParameters);
	}

	/**
	 * List all budget limits with this currency
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/listBudgetLimitByCurrency
	 */
	public function listBudgetLimitByCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/{$code}/budget_limits", $token, $requestBodyParameters);
	}

	/**
	 * List all known exchange rates.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/listExchangeRateByCurrency
	 */
	public function listExchangeRateByCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/{$code}/cer", $token, $requestBodyParameters);
	}

	/**
	 * List all recurring transactions with this currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/listRecurrenceByCurrency
	 */
	public function listRecurrenceByCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/{$code}/recurrences", $token, $requestBodyParameters);
	}

	/**
	 * List all rules with this currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/listRuleByCurrency
	 */
	public function listRuleByCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/{$code}/rules", $token, $requestBodyParameters);
	}

	/**
	 * List all transactions with this currency.
	 *
	 * @param AccessToken $token
	 * @param string $code
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/listTransactionByCurrency
	 */
	public function listTransactionByCurrency(AccessToken $token, $code, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/{$code}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * Get the user's default currency.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/currencies/getDefaultCurrency
	 */
	public function getDefaultCurrency(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/currencies/default", $token, $requestBodyParameters);
	}


}