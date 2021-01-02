<?php

namespace StanSoft\OAuth2\Client\Provider;

use Exception;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Utils;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Token\AccessTokenInterface;
use Psr\Http\Message\ResponseInterface;

require_once __DIR__ . '/../fallback_functions.php';

/**
 * Class FireflyIII
 * @package StanSoft\OAuth2\Client\Provider
 * @see https://docs.firefly-iii.org/api/api
 * @see http://oauth2-client.thephpleague.com/providers/implementing
 */
class FireflyIII extends AbstractProvider
{
	use FireflyIIIAboutTrait;
	use FireflyIIIAccountsTrait;
	use FireflyIIIAttachmentsTrait;
	use FireflyIIIAutocompleteTrait;
	use FireflyIIIAvailableBudgetsTrait;
	use FireflyIIIBillsTrait;
	use FireflyIIIBudgetsTrait;
	use FireflyIIIChartsTrait;
	use FireflyIIICategoriesTrait;
	use FireflyIIIConfigurationTrait;
	use FireflyIIICurrenciesTrait;
	use FireflyIIImportTrait;
	use FireflyIIILinksTrait;
	use FireflyIIIPiggyBanksTrait;
	use FireflyIIIPreferencesTrait;
	use FireflyIIIRecurrencesTrait;
	use FireflyIIIRulesTrait;
	use FireflyIIIRuleGroupsTrait;
	use FireflyIIISearchTrait;
	use FireflyIIISummaryTrait;
	use FireflyIIITagsTrait;
	use FireflyIIITransactionsTrait;
	use FireflyIIIUsersTrait;
	use FireflyIIIDataTrait;

	const METHOD_PUT = 'PUT';
	const METHOD_DELETE = 'DELETE';
	const METHOD_POST = 'POST';
	const METHOD_GET = 'GET';

	private $endpoint = null;

	public function __construct(array $options = [], array $collaborators = [])
	{
		parent::__construct($options, $collaborators);
		if (array_key_exists('fireflyUri', $options)) {
			$this->endpoint = $options['fireflyUri'];
		} else {
			throw new Exception('fireflyUri param is mandatory!');
		}
	}

    /**
     * Used for public scoped requests
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getBaseAuthorizationUrl()
    {
        return $this->endpoint . '/oauth/authorize';
    }

    /**
     * @param array $params
     * @return string
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        return $this->endpoint . '/oauth/token';
    }

    public function getBaseApiUrl() {
    	return $this->endpoint . '/api/v1';
	}

	private function parseRequest($request, $isRaw = false) {
		$response = $this->getParsedResponse($request);
		if (!$isRaw && false === is_array($response)) {
			throw new Exception(
				'Invalid response received from Authorization Server. Expected JSON.'
			);
		}
		return $response;
	}

    /**
     * @param AccessToken $token
     * @return string
     */
    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return $this->getBaseApiUrl() . '/about/user';
    }

    /**
     * @return array
     */
    protected function getDefaultScopes()
    {
        return [];
    }

    /**
     * @param ResponseInterface $response
     * @param array|string $data
     * @throws Exception
     */
    protected function checkResponse(ResponseInterface $response, $data)
    {
        if (! empty($data['error'])) {
            $message = $data['error'].": ".$data['error_description'];
            throw new Exception($message);
        }
    }

    /**
     * @param array $response
     * @param AccessToken $token
     * @return FireflyIIIResourceOwner
     */
    protected function createResourceOwner(array $response, AccessToken $token)
    {
        return new FireflyIIIResourceOwner($response);
    }

    /**
     * @return string
     */
    protected function getScopeSeparator()
    {
        return ' ';
    }

	public function getAuthenticatedRequest($method, $url, $token, array $options = [])
	{
		if (!array_key_exists('headers', $options) ||
			(!array_key_exists('accept', $options['headers']) && !array_key_exists('Accept', $options['headers']))
		) {
			$options['headers']['Accept'] = 'application/json';
		}
		return $this->createRequest($method, $url, $token, $options);
	}

	/**
	 * Returns authorization headers for the 'bearer' grant.
	 *
	 * @param AccessTokenInterface|string|null $token Either a string or an access token instance
	 * @return array
	 */
	public function getAuthorizationHeaders($token = null)
	{
		return ['Authorization' => 'Bearer ' . $token];
	}

	public function executeAndParse($method, $url, $token, $requestBodyParameters = [], $uploadBinaryData = null) {
		if ($uploadBinaryData !== null) {
			// we need to upload something
			$request = $this->getAuthenticatedRequest($method, $url, $token, [
				'headers' => ['Content-Type' => 'multipart/form-data']
			]);
			$stream = new MultipartStream([[
				'name' => $uploadBinaryData['name'],
				'contents' => $uploadBinaryData['content'],
				'filename' => $uploadBinaryData['name']
			]]);
			try {
				return $this->parseRequest($request->withBody($stream));
			} catch (Exception $e) {
				die($e->getMessage());
			}
		} else {
			$request = $this->getAuthenticatedRequest($method, $url, $token, [
				'headers' => ['Content-Type' => 'application/x-www-form-urlencoded']
			]);

			try {
				return $this->parseRequest(
					$request->withBody(Utils::streamFor(http_build_query($requestBodyParameters))),
					array_key_exists('binaryDownload', $requestBodyParameters) && $requestBodyParameters['binaryDownload'] === true
				);
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
	}
	
}