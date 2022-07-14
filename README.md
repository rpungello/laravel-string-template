# String template engine for Laravel applications

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rpungello/laravel-string-template.svg?style=flat-square)](https://packagist.org/packages/rpungello/laravel-string-template)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rpungello/laravel-string-template/run-tests?label=tests)](https://github.com/rpungello/laravel-string-template/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/rpungello/laravel-string-template/Check%20&%20fix%20styling?label=code%20style)](https://github.com/rpungello/laravel-string-template/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rpungello/laravel-string-template.svg?style=flat-square)](https://packagist.org/packages/rpungello/laravel-string-template)

Basic string templating engine for Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require rpungello/laravel-string-template
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-string-template-config"
```

This is the contents of the published config file:

```php
return [
    'left' => '{',
    'right' => '}',
];
```

## Usage

```php
\Rpungello\LaravelStringTemplate\Facades\LaravelStringTemplate::format('{value1} - {value2}', [
    'value1' => 1,
    'value2' => 2,
]));
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/rpungello/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rob Pungello](https://github.com/rpungello)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
