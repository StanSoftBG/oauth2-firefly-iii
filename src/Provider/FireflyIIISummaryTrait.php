<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIISummaryTrait {

	/**
	 * Returns basic sums of the users data, like the net worth, spent and earned amounts. It is multi-currency, and is in Firefly III to populate the dashboard.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/summary/getBasicSummary
	 */
	public function getBasicSummary(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/summary/basic", $token, $requestBodyParameters);
	}


}