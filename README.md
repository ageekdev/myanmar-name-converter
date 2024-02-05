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

Convert Names
```php
use \AgeekDev\MMName\Facades\MMName;

// From Myanmar Name To Myan-glish

$name = "ကိုကျော်";

MMName::convertToEn($name); // Ko Kyaw

MMName::convertToEn($name, isUcWords: false); // ko kyaw

// From Myan-glish Name To Myanmar

$name = "Tun Tun";

MMName::convertToMm($name); // ထွန်းထွန်း

// With Helper Function

$name = "ကိုကျော်";

mm_name_to_en($name); // Ko Kyaw

$name = "Tun Tun";

en_name_to_mm($name); // ထွန်းထွန်း
```

Compare Names
```php
use \AgeekDev\MMName\Facades\MMName;

MMName::compare('khaing', 'khine'); // true

MMName::compare('သီဟကျော်', 'thi ha kyaw'); // true

// With Helper Function
compare_names('khaing', 'khine'); // true
```

Checking Names
```php
use \AgeekDev\MMName\Facades\MMName;

MMName::isEnName('Thiha'); // true

MMName::isEnName('သီဟ'); // false

MMName::isMmName('သီဟ'); // true

MMName::isMmName('Thiha'); // false

// With Helper Function
is_en_name('Thiha'); // true

is_mm_name('သီဟ'); // true
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
