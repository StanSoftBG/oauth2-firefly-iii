<?php

namespace StanSoft\OAuth2\Client\Test\Provider;

use Exception;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use League\OAuth2\Client\Token\AccessToken;
use Mockery;
use PHPUnit\Framework\TestCase;
use StanSoft\OAuth2\Client\Provider\FireflyIII;
use StanSoft\OAuth2\Client\Provider\FireflyIIIResourceOwner;

class FireflyIIITest extends TestCase
{
    /**
     * @var FireflyIII
     */
    protected $provider;

    protected function setUp() : void
    {
    	try {
			$this->provider = new FireflyIII([
				'fireflyUri' => 'mock_firefly_uri',
				'clientId' => 'mock_client_id',
				'clientSecret' => 'mock_secret',
				'redirectUri' => 'none',
			]);
		} catch (Exception $e) {
    		echo $e->getMessage();
    		exit;
		}
    }
    public function tearDown() : void
    {
        Mockery::close();
        parent::tearDown();
    }

    /**
     * Test authorizationUrl has correct query parameters
     * @return void
     */
    public function testAuthorizationUrl()
    {
        $url = $this->provider->getAuthorizationUrl();
        $uri = parse_url($url);
        parse_str($uri['query'], $query);
        $this->assertArrayHasKey('client_id', $query);
        $this->assertArrayHasKey('redirect_uri', $query);
        $this->assertArrayHasKey('state', $query);
        $this->assertArrayHasKey('scope', $query);
        $this->assertArrayHasKey('response_type', $query);
        $this->assertArrayHasKey('approval_prompt', $query);
        $this->assertNotNull($this->provider->getState());
    }

    /**
     * Test access token URL
     * @return void
     */
    public function testGetBaseAccessTokenUrl()
    {
        $params = [];
        $url = $this->provider->getBaseAccessTokenUrl($params);
        $uri = parse_url($url);
        $this->assertEquals('mock_firefly_uri/oauth/token', $uri['path']);
    }

    /**
     * Test resource owner url
     * @return void
     */
    public function testGetResourceOwnerDetailsUrl()
    {
        $url = $this->provider->getResourceOwnerDetailsUrl(new AccessToken([
            'access_token' => 'accessToken123',
        ]));
        $uri = parse_url($url);
        $this->assertEquals('mock_firefly_uri/api/v1/about/user', $uri['path']);
    }

	/**
	 * Test bearer token
	 * @return void
	 */
	public function testBearerToken()
	{
		$headers = $this->provider->getAuthorizationHeaders(new AccessToken([
			'access_token' => 'accessToken123',
		]));
		$this->assertArrayHasKey('Authorization', $headers);
		$this->assertEquals('Bearer accessToken123', $headers['Authorization']);
	}

    /**
     * Test creating a resource owner, assert returned object returns correct data
     * @return void
     */
    public function testCreateResourceOwner()
    {
        $mockProvider = Mockery::mock('StanSoft\OAuth2\Client\Provider\FireflyIII')
            ->shouldDeferMissing()
            ->shouldAllowMockingProtectedMethods()
            ->shouldReceive('fetchResourceOwnerDetails')
            ->andReturn([
            	'data' => [
                	'id' => '1'
				]
            ])
            ->getMock();
        $resourceOwner = $mockProvider->getResourceOwner(new AccessToken(['access_token' => '123']));
        $this->assertInstanceOf(FireflyIIIResourceOwner::class, $resourceOwner);
        $this->assertEquals('1', $resourceOwner->getId());
        $this->assertIsArray($resourceOwner->toArray());
    }

    /**
     * Assert exception thrown during bad request
     */
    public function testGetResponseException()
    {
        $this->expectException('Exception');
        $mockProvider = Mockery::mock('StanSoft\OAuth2\Client\Provider\FireflyIII')
            ->shouldAllowMockingProtectedMethods()
            ->shouldDeferMissing()
            ->shouldReceive(['getResponse' => new Response(403, [], json_encode(['error' => 'Unauthorized', 'error_description' => 'Bad request']))])
            ->getMock();
        $mockProvider->getParsedResponse(new Request('GET', '/', [], '/'));
    }

    /**
     * Assert good response
     * @return void
     */
    public function testGetResponseNoException()
    {
        $mockProvider = Mockery::mock('StanSoft\OAuth2\Client\Provider\FireflyIII')
            ->shouldAllowMockingProtectedMethods()
            ->shouldDeferMissing()
            ->shouldReceive(['getResponse' => new Response(200, [], json_encode(['foo' => 'bar']))])
            ->getMock();
        $mockProvider->getParsedResponse(new Request('GET', '/', [], '/'));
        // should not trigger exceptions so the next assert will succeed
		$this->assertEquals(1, 1);
    }
}