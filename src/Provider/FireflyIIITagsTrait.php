<?php

namespace StanSoft\OAuth2\Client\Provider;

use GuzzleHttp\Psr7\Utils;
use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIITagsTrait {

	/**
	 * Returns a list of tags, which can be used to draw a basic tag cloud.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/tags/getTagCloud
	 */
	public function getTagCloud(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/tag-cloud", $token, $requestBodyParameters);
	}

	/**
	 * List all of the user's tags.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/tags/listTag
	 */
	public function listTag(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/tags", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new tag.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/tags/storeTag
	 */
	public function storeTag(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/tags", $token, $requestBodyParameters);
	}

	/**
	 * Get a single tag.
	 *
	 * @param AccessToken $token
	 * @param string|int $tag the tag itself or its ID
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/tags/getTag
	 */
	public function getTag(AccessToken $token, $tag, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/tags/{$tag}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing tag.
	 *
	 * @param AccessToken $token
	 * @param string|int $tag tag itself or its ID
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/tags/updateTag
	 */
	public function updateTag(AccessToken $token, $tag, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/tags/{$tag}", $token, $requestBodyParameters);
	}

	/**
	 * Delete an tag.
	 *
	 * @param AccessToken $token
	 * @param string|int $tag tag itself or its ID
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/tags/deleteTag
	 */
	public function deleteTag(AccessToken $token, $tag, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/tags/{$tag}", $token, $requestBodyParameters);
	}

	/**
	 * List all transactions with this tag.
	 *
	 * @param AccessToken $token
	 * @param string|int $tag tag itself or its ID
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/tags/listTransactionByTag
	 */
	public function listTransactionByTag(AccessToken $token, $tag, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/tags/{$tag}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * Lists all attachments.
	 *
	 * @param AccessToken $token
	 * @param string|int $tag tag itself or its ID
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/tags/listAttachmentByTag
	 */
	public function listAttachmentByTag(AccessToken $token, $tag, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/tags/{$tag}/attachments", $token, $requestBodyParameters);
	}
}