# Arkesel SMS API Package

## Budge Goes Here

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vendor_name/package_name.svg?style=flat-square)](https://packagist.org/packages/vendor_name/package_name)

[![GitHub Tests Status](https://img.shields.io/github/workflow/status/vendor_name/package_name/Tests?label=Tests)](https://github.com/vendor_name/package_name/actions?query=workflow%3ATests+branch%3Amaster)


## Installation

You can install the package via composer:

```bash
composer require appiersign/arkesel-sms
```

## Usage

```php
$sms = new Appiersign\ArkeselSms\ArkeselSms('YOUR API KEY');
$response = $sms->send('YOUR SEND ID', ['LIST', 'OF', 'RECIPIENTS'], 'YOUR MESSAGE!');;
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Authors
- Solomon APPIER-SIGN [github](https://github.com/appiersign)

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
