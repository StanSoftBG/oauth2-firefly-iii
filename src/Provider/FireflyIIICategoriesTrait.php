<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIICategoriesTrait {

	/**
	 * List all categories.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/categories/listCategory
	 */
	public function listCategory(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/categories", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new category.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/categories/storeCategory
	 */
	public function storeCategory(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/categories", $token, $requestBodyParameters);
	}

	/**
	 * Get a single category.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/categories/getCategory
	 */
	public function getCategory(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/categories/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing category.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/categories/updateCategory
	 */
	public function updateCategory(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/categories/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Delete a category. Transactions will not be removed.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/categories/deleteCategory
	 */
	public function deleteCategory(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/categories/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * List all transactions in a category, optionally limited to the date ranges specified.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/categories/listTransactionByCategory
	 */
	public function listTransactionByCategory(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/categories/{$id}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * List all attachments in a categor.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/categories/listAttachmentByCategory
	 */
	public function listAttachmentByCategory(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/categories/{$id}/attachments", $token, $requestBodyParameters);
	}

}