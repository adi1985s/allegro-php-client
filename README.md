Allegro WebAPI PHP Client
==========================
> The bridge between your app and [Allegro Group](https://en.wikipedia.org/wiki/Allegro_%28auction_website%29) servers

[![Latest Version](https://img.shields.io/github/release/rindeal/allegro-php-client.svg?style=flat-square)](https://github.com/rindeal/allegro-php-client/releases/latest)
[![License](https://img.shields.io/badge/license-LGPL--3.0-blue.svg?style=flat-square)](https://tldrlegal.com/license/gnu-general-public-license-v3-%28gpl-3%29)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/rindeal/allegro-php-client/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/rindeal/allegro-php-client/?branch=master)
[![Codacy Code Quality](https://img.shields.io/codacy/7b16f96aa2494763b210bd07823210a2.svg?style=flat-square)](https://www.codacy.com/app/dev-rindeal/allegro-php-client)


Features
------------
  - full **IDE autocompletion** thanks to [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator)
  - simple, fluent, robust yet flexible, **OOP interface**
  - support for **custom logger**
    - library then writes some info to it to ease debugging
  - support for **custom cache**
    - caching is then enabled on a per call bases like this `$client->call()->cacheFor(10 * 60)->doSomeMethod()`
  - support for **parameter injection**
    - eg. session ID, country code, user ID, ...
    - such info will be prepended to all requests that support it, so that you don't have to write them by hand all the time
  - support for **custom SOAP client**
    - this feature requires some tiny hacks (rerunning wsdl2phpgenerator with your custom config)


Testers needed
----------------
This project is currently in beta and is looking for testers who would provide feedback on its design and functionality,
so that this library could reach a stable version. If you have any sugestions or complaints please [fill an issue](https://github.com/rindeal/allegro-php-client/issues/new).


Quick start
-----------
#### Installing
Add as a dependency to your `composer.json`
```json
"require": {
  "rindeal/allegro-php-client": "*"
}
```
or run `composer require rindeal/allegro-php-client` to do everything automagically

#### Usage
```php
require_once PATH_TO_AUTOLOADER;

// import appropriate tools
...
```
```php
// Ok, first you need to provide your credentials which are required to use WebAPI.
// This library doesn't support logins with plain text passwords so in case you have one,
// use `hash_password.php` utility found in the `bin` directory
$credentials = new ApiCredentials(WEBAPI_KEY, USER_LOGIN, HASHED_PASSWORD);

// then you need to keep them in a session which is also bound to a specific region
$session = new Session($credentials, new Country('cz'));

// and as soon as you have provided us this info, you may set up the final client object
$client = new Client($session);
```
```php
// you can call methods even when not authenticated yet
$res = $client->call()->doGetCountries(new DoGetCountriesRequest());

// but to do some real work you need to authenticate
$client->authenticate();

$res = $client->call()->doGetMyData(new DoGetMyDataRequest());
$userData = $res->getUserData();
printf("Hello %s %s!\n", $userData->getUserFirstName(), $userData->getUserLastName());
```

Another version of the authentication worklfow:
```php
...
$credentials = new ApiCredentials(WEBAPI_KEY);
...
$client = new Client($session);
...
$client->authenticate(USER_LOGIN, HASHED_PASSWORD);
```
or
```php
...
$credentials = new ApiCredentials(WEBAPI_KEY);
...
$credentials->userLogin = USER_LOGIN;
...
$client = new Client($session);
...
$credentials->hashedPassword = HASHED_PASSWORD;
...
$client->authenticate();
```


Library documentation
----------------
  - [ApiGen generated docs](http://rindeal.github.io/allegro-php-client/docs/api/latest/class-Rindeal.Allegro.Client.html)
  - [official WebAPI docs](http://allegro.pl/webapi/documentation.php?lang=en)


Regions supported
----------
Primary targets of this client are _[Allegro.pl](http://allegro.pl/)_ and _[Aukro.cz](http://aukro.cz/)_, but feel free to adopt it for your region.


Legal Stuff
------

### License
  - Licensed under **LGPL-3.0** ([human readable form](https://tldrlegal.com/license/gnu-lesser-general-public-license-v3-%28lgpl-3%29), [full license](https://github.com/rindeal/allegro-php-client/blob/develop/LICENSE.md#lgpl-30))
  - generally put, the license should allow anyone to use this library (even in commercial projects) as long as its source code stays untouched and its usage disclosed

### Disclaimer
This project is not affiliated with nor supported by _Allegro Group_ in any way.
