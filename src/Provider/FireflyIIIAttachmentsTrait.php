<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Token\AccessToken;

trait FireflyIIIAttachmentsTrait {

	/**
	 * List all of attachments.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/attachments/listAttachment
	 */
	public function listAttachment(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/attachments", $token, $requestBodyParameters);
	}

	/**
	 * Creates a new attachment.
	 *
	 * @param AccessToken $token
	 * @param array $requestBodyParameters
	 *
	 * @see https://api-docs.firefly-iii.org/#/attachments/storeAttachment
	 */
	public function storeAttachment(AccessToken $token, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/attachments", $token, $requestBodyParameters);
	}

	/**
	 * Get a single attachment.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 *
	 * @return array|string
	 * @see https://api-docs.firefly-iii.org/#/attachments/getAttachment
	 */
	public function getAttachment(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/attachments/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Update the meta data for an existing attachment.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 *
	 * @return array|string
	 * @see https://api-docs.firefly-iii.org/#/attachments/updateAttachment
	 */
	public function updateAttachment(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_PUT, "{$this->getBaseApiUrl()}/attachments/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Deletes an attachment, including any stored file data.
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 *
	 * @return array|string
	 * @see https://api-docs.firefly-iii.org/#/attachments/deleteAttachment
	 */
	public function deleteAttachment(AccessToken $token, $id, $requestBodyParameters = [])
	{
		return $this->executeAndParse(self::METHOD_DELETE, "{$this->getBaseApiUrl()}/attachments/{$id}", $token, $requestBodyParameters);
	}

	/**
	 * Downloads binary attachment content
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param array $requestBodyParameters
	 *
	 * @return array|string
	 * @see https://api-docs.firefly-iii.org/#/attachments/downloadAttachment
	 */
	public function downloadAttachment(AccessToken $token, $id, $requestBodyParameters = [])
	{
		$requestBodyParameters['binaryDownload'] = true;
		return $this->executeAndParse(self::METHOD_GET, "{$this->getBaseApiUrl()}/attachments/{$id}/download", $token, $requestBodyParameters);
	}

	/**
	 * Uploads binary attachment content
	 *
	 * @param AccessToken $token
	 * @param $id
	 * @param string $binaryData
	 *
	 * @return array|string
	 * @see https://api-docs.firefly-iii.org/#/attachments/uploadAttachment
	 */
	public function uploadAttachment(AccessToken $token, $id, $binaryData = null)
	{
		return $this->executeAndParse(self::METHOD_POST, "{$this->getBaseApiUrl()}/attachments/{$id}/upload", $token, [], $binaryData);
	}
}