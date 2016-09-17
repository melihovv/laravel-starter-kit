# laravel-starter-kit
[![styleci](https://styleci.io/repos/67811396/shield)](https://styleci.io/repos/67811396)

Laravel starter kit

## Changes
- `local_providers` and `local_aliases` keys in config/app.php
- `app/User.php` move to `app/Models/User.php`
- `AdditionalMethods` trait for Eloquent models
- sqlite database connection for in-memory tests
- `TestHelpers` trait
- `Hash::setRounds(5)` in `TestCase.php` for tests speed up
- `DatabaseTestCase.php` for really fast tests which use database
- additional helpers
- custom configs for phpmd and phpcs
- abstract FormRequest class
- pre-commit hook which runs php tests
- ExceptionServiceProvider, which converts ModelNotFoundException to NotFoundHttpException

## Installed packages
- doctrine/dbal
- barryvdh/laravel-ide-helper
- itsgoingd/clockwork
- garygreen/pretty-routes
- fadion/sanitizer

## Installed packages for API
- asvae/laravel-api-tester
- dingo/api
- tymon/jwt-auth

## Things you may do manually
- name of your app in `config/app.php`
- `timezone` in `config/app.php`
- `locale` in `config/app.php`
- api subtype in `config/api.php`
- api prefix in `config/api.php`
- `name` in `config/api.php`
- enable laravel-plugin in PhpStorm
- enable phpmd and phpcs inspections in PhpStorm
- configure phpunit in PhpStorm
- `php artisan jwt:generate` to generate secret key for jwt
- mark `app` folder as `Sources root` and specify `App` package prefix

## Things you may add to your .env file
- API_STRICT=false
- API_DEBUG=true
- JWT_TTL=999999
