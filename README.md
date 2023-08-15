# Myanmar Name Converter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ageekdev/myanmar-name-converter.svg?style=flat-square)](https://packagist.org/packages/ageekdev/myanmar-name-converter)

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

\AgeekDev\MMName\MMName::name($name)->convertToEn(); // Ko Kyaw
```

From Myan-glish Name To Myanmar

```php
$name = "Tun Tun";

\AgeekDev\MMName\MMName::name($name)->convertToMm(); // ထွန်းထွန်း
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [AgeekDev](https://github.com/AgeekDev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
