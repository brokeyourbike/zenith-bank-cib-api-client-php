# zenith-bank-cib-api-client

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/zenith-bank-cib-api-client-php)](https://github.com/brokeyourbike/zenith-bank-cib-api-client-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/zenith-bank-cib-api-client/downloads)](https://packagist.org/packages/brokeyourbike/zenith-bank-cib-api-client)

Zenith Bank API Client for PHP (Corporate Internet Banking)

## Installation

```bash
composer require brokeyourbike/zenith-bank-cib-api-client
```

## Usage

```php
use BrokeYourBike\ZenithBankCIB\Client;
use BrokeYourBike\ZenithBankCIB\Interfaces\ConfigInterface;

assert($config instanceof ConfigInterface);
assert($httpClient instanceof \GuzzleHttp\ClientInterface);

$client = new Client($config, $httpClient);
```

## Authors

- [Ivan Stasiuk](https://github.com/brokeyourbike) | [Twitter](https://twitter.com/brokeyourbike) | [LinkedIn](https://www.linkedin.com/in/brokeyourbike) | [stasi.uk](https://stasi.uk)
