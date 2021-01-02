<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIILinksTrait {

	/**
	 * List all the link types the system has. These include the default ones as well as any new ones.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/listLinkType
	 */
	public function listLinkType(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/link_types", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new link type. The data required can be submitted as a JSON body or as a list of parameters (in key=value pairs, like a webform).
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/storeLinkType
	 */
	public function storeLinkType(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/link_types", $token, $requestBodyParameters);
	}

	/**
	 * Returns a single link type by its ID.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/getLinkType
	 */
	public function getLinkType(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/link_types/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update existing link type
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/updateLinkType
	 */
	public function updateLinkType(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/link_types/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Will permanently delete a link type.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/deleteLinkType
	 */
	public function deleteLinkType(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/link_types/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * List all transactions under this link type, both the inward and outward transactions.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/listTransactionByLinkType
	 */
	public function listTransactionByLinkType(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/link_types/{$id}/transactions", $token, $requestBodyParameters);
	}

	/**
	 * List all the transaction links.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/listTransactionLink
	 */
	public function listTransactionLink(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/transaction_links", $token, $requestBodyParameters);
	}

	/**
	 * Store a new link between two transactions. For this end point you need the journal_id from a transaction.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/storeTransactionLink
	 */
	public function storeTransactionLink(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/transaction_links", $token, $requestBodyParameters);
	}

	/**
	 * Returns a single link by its ID.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/getTransactionLink
	 */
	public function getTransactionLink(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/transaction_links/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Will permanently delete link. Transactions remain.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/deleteTransactionLink
	 */
	public function deleteTransactionLink(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/transaction_links/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Used to update a single existing link.
	 *
	 * @param AccessToken $token
	 * @param integer $id
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/links/updateTransactionLink
	 */
	public function updateTransactionLink(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/transaction_links/{$id}", $token, $requestBodyParameters);
	}

}