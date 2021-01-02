<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIDataTrait {

	/**
	 * A call to this endpoint permanently destroys the requested data type. Use it with care and always with user permission.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/data/destroyData
	 */
	public function destroyData(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/data/destroy", $token, $requestBodyParameters);
	}

}