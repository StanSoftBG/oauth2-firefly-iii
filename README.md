# Firefly-III Provider for OAuth 2.0 Client
[![Build Status](https://travis-ci.com/StanSoftBG/oauth2-firefly-iii.svg?branch=master)](https://travis-ci.com/StanSoftBG/oauth2-firefly-iii)

Provides Firefly-III OAuth 2.0 support as an implementation of PHP League's [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client)

## Covered APIs
- About 
- Accounts
- Attachments
- Auto-complete
- Available budgets
- Bills
- Budgets
- Tags
- Transactions

## Installation

To install, use composer:

```
composer require stansoft/oauth2-firefly-iii
```

## Usage

Usage is the same as The League's OAuth client, using `\StanSoft\OAuth2\Client\Provider\FireflyIII` as the provider.

### Authorization Code Flow

```php
<?php

require_once('./vendor/autoload.php');

use StanSoft\OAuth2\Client\Provider\FireflyIII;

session_start();

try {
	$provider = new FireflyIII([
		'fireflyUri' => 'https://REPLACE.WITH.YOUR.FIREFLY.INSTANCE.URL',
		'clientId' => 'REPLACE_WITH_CLIENT_ID',
		'clientSecret' => 'REPLACE_WITH_CLIENT_SECRET',
		'redirectUri' => 'http://REPLACE.WITH.YOUR.WEB.APP.URL'
	]);
} catch (Exception $e) {
	echo $e->getMessage();
	exit;
}


if (!isset($_GET['code'])) {
    // If we don't have an authorization code then get one
    $authUrl = $provider->getAuthorizationUrl();
    $_SESSION['oauth2state'] = $provider->getState();
    header('Location: ' . $authUrl);
    exit;
}

if (isset($_GET['code']) && !isset($_SESSION['token'])) {
    try {
        // Try to get an access token (using the authorization code grant)
        $token = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);
        $_SESSION['token'] = $token;

    } catch (Exception $e) {
        print($e->getMessage());
        exit;
    }
}
if (isset($_SESSION['token'])) {
	try {
		$user = $provider->getCurrentUser($_SESSION['token']);
		printf('Hello %d!', $user->getId());
	} catch (UnexpectedValueException $e) {
		echo $e->getMessage();
		exit;
	}
    return;
}
```

## Testing

``` bash
$ ./vendor/bin/phpunit
```

## Credits

- [Stanimir Stoyanov](https://github.com/stratoss)
