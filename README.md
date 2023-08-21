# Myanmar Name Converter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ageekdev/myanmar-name-converter.svg?style=flat-square)](https://packagist.org/packages/ageekdev/myanmar-name-converter)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ageekdev/myanmar-name-converter/run-tests.yml?label=tests&style=flat-square)](https://github.com/ageekdev/myanmar-name-converter/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/ageekdev/myanmar-name-converter.svg?style=flat-square)](https://packagist.org/packages/ageekdev/myanmar-name-converter)

Convert Myanmar Name to English, and vice versa.

## Installation

You can install the package via composer:

```bash
composer require ageekdev/myanmar-name-converter
```

## Usage

From Myanmar Name To Myan-glish

```php
$name = "ကိုကျော်";

\AgeekDev\MMName\Facades\MMName::convertToEn($name); // Ko Kyaw
```

From Myan-glish Name To Myanmar

```php
$name = "Tun Tun";

\AgeekDev\MMName\Facades\MMName::convertToMm($name); // ထွန်းထွန်း
```

## Testing

You can run the tests with:

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AgeekDev](https://github.com/AgeekDev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
