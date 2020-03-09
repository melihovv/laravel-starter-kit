# laravel-starter-kit
[![GitHub Workflow Status](https://github.com/melihovv/laravel-starter-kit/workflows/Default/badge.svg)](https://github.com/melihovv/laravel-starter-kit/actions)
[![styleci](https://styleci.io/repos/67811396/shield)](https://styleci.io/repos/67811396)

[![Packagist](https://img.shields.io/packagist/v/melihovv/laravel-starter-kit.svg)](https://packagist.org/packages/melihovv/laravel-starter-kit)
[![Packagist](https://poser.pugx.org/melihovv/laravel-starter-kit/d/total.svg)](https://packagist.org/packages/melihovv/laravel-starter-kit)
[![Packagist](https://img.shields.io/packagist/l/melihovv/laravel-starter-kit.svg)](https://packagist.org/packages/melihovv/laravel-starter-kit)

Laravel starter kit

## Installation

```
composer create-project melihovv/laravel-starter-kit super-project
```

## Changes
- `app/User.php` move to `app/Models/User.php`
- `AdditionalMethods` trait for Eloquent models
- sqlite database connection for in-memory tests by default in `phpunit.xml`
- `TestHelpers` trait
- additional helpers
- custom configs for phpcs
- abstract `FormRequest` class
- abstract console `Command` class
- commands to run phpunit tests, phpcs and phpcpd analysis
- don't allow mocking of non existent methods ([Mockery](http://docs.mockery.io/en/latest/reference/mockery/configuration.html))
- required extensions in composer.json

## Installed packages
- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) `[dev]` - Integrates PHP Debug Bar to laravel.
- [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) `[dev]` - Laravel support for your IDE `php artisan post-update-cmd`.
- [doctrine/dbal](https://github.com/doctrine/dbal) `[dev]` - laravel-ide-helper requires it.
- [garygreen/pretty-routes](https://github.com/garygreen/pretty-routes) `[dev]` - Go to `/routes`.
- [laravel/telescope](https://github.com/laravel/telecope) `[dev]` - Elegant debug assistant.
- [laravel/ui](https://github.com/laravel/ui) - Generate ui for laravel `php artisan ui vue --auth`.
- [lorisleiva/laravel-actions](https://github.com/lorisleiva/laravel-actions) - Authorize, validate and execute in one place.
- [melihovv/laravel-env-validator](https://github.com/melihovv/laravel-env-validator) - Validate your .env file `php artisan config:env-validator`.
- [melihovv/laravel-starter-kit](https://github.com/melihovv/laravel-starter-kit) `[dev]` - Quickly scaffold new laravel packages `php artisan package:new -i Vendor PackageName`.
- [mpociot/laravel-test-factory-helper](https://github.com/mpociot/laravel-test-factory-helper) `[dev]` - `php artisan generate:model-factory --dir app/Models -- User Team`

## Things you may want to do manually
- name of your app in `config/app.php`
- `timezone` in `config/app.php`
- `locale` in `config/app.php`
- enable laravel-plugin in PhpStorm
