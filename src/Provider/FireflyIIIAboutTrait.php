<?php

namespace StanSoft\OAuth2\Client\Provider;

use Exception;
use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIAboutTrait {

	/**
	 * Returns the currently authenticated user.
	 *
	 * @param $token
	 * @return array|mixed|string
	 * @see https://api-docs.firefly-iii.org/#/about/getCurrentUser
	 */
	public function getCurrentUser($token)
	{
		return $this->fetchResourceOwnerDetails($token);
	}

	/**
	 * Returns general system information and versions of the (supporting) software.
	 *
	 * @param AccessToken $token
	 * @return array|string
	 * @throws Exception
	 * @see https://api-docs.firefly-iii.org/#/about/getAbout
	 */
	public function getAbout(AccessToken $token)
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/about", $token);
	}
}