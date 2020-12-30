<?php

namespace StanSoft\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

class FireflyIIIResourceOwner implements ResourceOwnerInterface
{
    use ArrayAccessorTrait;

    /**
     * @var array
     */
    private $response;

    /**
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getValueByKey($this->response['data'], 'id');
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}