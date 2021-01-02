<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIChartsTrait {

	/**
	 * This endpoint returns the data required to generate a pie chart for the available budget.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/charts/getChartABOverview
	 */
	public function getChartABOverview(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/chart/ab/overview/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * This endpoint returns the data required to generate a chart with basic asset account balance information.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/charts/getChartAccountOverview
	 */
	public function getChartAccountOverview(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/chart/ab/account/overview", $token, $requestBodyParameters);
	}

	/**
	 * This endpoint returns the data required to generate a chart that shows the user how much they've spent on their expense accounts.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/charts/getChartAccountExpense
	 */
	public function getChartAccountExpense(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/chart/ab/account/expense", $token, $requestBodyParameters);
	}

	/**
	 * This endpoint returns the data required to generate a chart that shows the user how much they've earned from their revenue accounts.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/charts/getChartAccountRevenue
	 */
	public function getChartAccountRevenue(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/chart/ab/account/revenue", $token, $requestBodyParameters);
	}

	/**
	 * This endpoint returns the data required to generate a bar chart for the expenses and incomes on the users categories.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/charts/getChartCategoryOverview
	 */
	public function getChartCategoryOverview(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/chart/ab/account/overview", $token, $requestBodyParameters);
	}

}