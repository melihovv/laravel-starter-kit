# laravel-starter-kit
Laravel starter kit

## Changes
- `local_providers` and `local_aliases` keys in config/app.php
- `app/User.php` move to `app/Models/User.php`
- `AdditionalMethods` trait for Eloquent models
- sqlite database connection for in-memory tests
- `TestHelpers` trait
- `Hash::setRounds(5)` in `TestCase.php` for tests speed up
- `DatabaseTestCase.php` for really fast tests which use database

## Installed packages
- doctrine/dbal
- barryvdh/laravel-ide-helper
- itsgoingd/clockwork
- garygreen/pretty-routes

## Things you probably want to change manually
- name of your app in `config/app.php`
- `timezone` in `config/app.php`
- `locale` in `config/app.php`
