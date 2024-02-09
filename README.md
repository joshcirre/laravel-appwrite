# Laravel Appwrite Helper for the Appwrite PHP SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/joshcirre/laravel-appwrite.svg?style=flat-square)](https://packagist.org/packages/joshcirre/laravel-appwrite)
[![Total Downloads](https://img.shields.io/packagist/dt/joshcirre/laravel-appwrite.svg?style=flat-square)](https://packagist.org/packages/joshcirre/laravel-appwrite)

This package allows you to use the [Appwrite](https://appwrite.io) PHP SDK as a Laravel Facade. While the Facade has current support for Databases, Account, and Storage, there are a lot of goals for this package in the near future.

A lot of inspiration will be taken from the [Laravel MongoDB](https://github.com/mongodb/laravel-mongodb) package in order to seamlessly integrate Appwrite and it's offerings into your Laravel application.

Plans for the Future:
- [ ] Direct storage integration using the Laravel Storage facade
- [ ] Model integration similar to Laravel MongoDB to create collections programmatically and then use the Model to access the data.
- [ ] Laravel Breeze user authentication scaffold for Appwrite Accounts

## Installation

You can install the package via composer:

```bash
composer require joshcirre/laravel-appwrite
```

## Usage

After installation, you'll have global access to the `LaravelAppwrite` facade. This facade will allow you to access the Appwrite SDK anywhere in your application.

First, ensure that your .env variables are set:

```env
APPWRITE_ENDPOINT=https://cloud.appwrite.io/v1
APPWRITE_PROJECT=projectId
APPWRITE_KEY=yourkey
```

Here's how the helper function would look in your Laravel application:
```php
LaravelAppwrite::databases()->createDocument('65b56d9b46ba4fbb32d0', '65bc8de91b474a7627b5', $id, [
    'title' => $this->title,
    'description' => $this->description,
]);

LaravelAppwrite::account()

LaravelAppwrite::storage()
```

All of the methods available in the [Appwrite API](https://appwrite.io/docs/references) are available to the `LaravelAppwrite::` facade.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email josh@cir.re instead of using the issue tracker.

## Credits

-   [Josh Cirre](https://github.com/joshcirre)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
