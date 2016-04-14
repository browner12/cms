# Content Management System

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is the Clarity Content Management System (CMS).

## Install

Via Composer

``` bash
$ composer require claritytech/cms
```

## Setup

Add the `CmsServiceProvider` to your `config/app.php` file.

``` php
'providers' => [
    claritytech\cms\CmsServiceProvider::class,
],
```

## Publishing

You can choose to publish everything at once

``` bash
php artisan vendor:publish --provider="claritytech\cms\CmsServiceProvider"
```

or you can publish them individually.

``` bash
php artisan vendor:publish --provider="claritytech\cms\CmsServiceProvider" --tag="config"
php artisan vendor:publish --provider="claritytech\cms\CmsServiceProvider" --tag="migrations"
php artisan vendor:publish --provider="claritytech\cms\CmsServiceProvider" --tag="views"
php artisan vendor:publish --provider="claritytech\cms\CmsServiceProvider" --tag="public"
```

## Migrations

After package updates, make sure you run the migrations to update your database schema.

``` bash
php artisan migrate
```

## Updating

To update the package start with composer.

``` bash
composer update
```

Then publish and run all new migrations.

``` bash
php artisan vendor:publish --provider="claritytech\cms\CmsServiceProvider" --tag="migrations"
php artisan migrate
```

If upgrading a major version, please take note of any breaking changes and address them as need be.

## Assumptions

While we try to stay as independent as possible, there are specific assumptions this package makes in order to function correctly and still be useful. Make sure your application meets all of these assumptions.

+ Bootstrap v4 is available.
+ FontAwesome v4.5 is available.
+ A middleware called 'web' is available.
+ A base controller exists that is autoloadable from `App\Http\Controllers\Controller`. This base controller accepts `Illuminate\Http\Request` as the first parameter in its constructor.
+ Layout called 'master'.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email andy@claritytech.com instead of using the issue tracker.

## Credits

- [Andrew Brown][link-author]
- [All Contributors][link-contributors]

## License

Clarity Technology Group License. Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/claritytech/cms.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/License-Proprietary-green.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/claritytech/cms/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/claritytech/cms.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/claritytech/cms.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/claritytech/cms.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/claritytech/cms
[link-travis]: https://travis-ci.org/claritytech/cms
[link-scrutinizer]: https://scrutinizer-ci.com/g/claritytech/cms/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/claritytech/cms
[link-downloads]: https://packagist.org/packages/claritytech/cms
[link-author]: https://github.com/
[link-contributors]: ../../contributors
