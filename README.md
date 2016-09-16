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

## Installed packages
- doctrine/dbal
- barryvdh/laravel-ide-helper
- itsgoingd/clockwork
- garygreen/pretty-routes
- fadion/sanitizer

## Things you probably want to change manually
- name of your app in `config/app.php`
- `timezone` in `config/app.php`
- `locale` in `config/app.php`
- enable laravel-plugin in PhpStorm
- enable phpmd and phpcs inspections in PhpStorm
- configure phpunit in PhpStorm
