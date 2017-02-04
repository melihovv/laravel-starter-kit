# laravel-starter-kit
[![styleci](https://styleci.io/repos/67811396/shield)](https://styleci.io/repos/67811396)

Laravel starter kit

If you want develop API, look at
[api](https://github.com/melihovv/laravel-starter-kit/tree/api) branch.

## Changes
- `local_providers`, `local_aliases` and `local_global_middlewares` keys in
`config/app.php`
- `app/User.php` move to `app/Models/User.php`
- `AdditionalMethods` trait for Eloquent models
- sqlite database connection for in-memory tests
- `TestHelpers` trait
- `Hash::setRounds(5)` in `TestCase.php` for tests speed up
- `DatabaseTestCase.php` for really fast tests which use database
- additional helpers
- custom configs for phpmd and phpcs
- abstract `FormRequest` class
- abstract console `Command` class
- commands to run phpunit tests, phpmd and phpcs analysis

## Installed packages
- [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) [dev] - Laravel support for your IDE
- [doctrine/dbal](https://github.com/doctrine/dbal) [dev] - laravel-ide-helper requires it
- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) [dev] - Integrates PHP Debug Bar to laravel
- [garygreen/pretty-routes](https://github.com/garygreen/pretty-routes) [dev] - Go to `/routes`
- [melihovv/laravel-log-viewer](https://github.com/melihovv/laravel-log-viewer) - Go to `/logs`
- [melihovv/laravel-env-validator](https://github.com/melihovv/laravel-env-validator) [dev] - Validate your .env file `php artisan config:env-validator`
- [illuminated/console-mutex](https://github.com/dmitry-ivanov/laravel-console-mutex) - Run your console commands without overlap
- [serafim/properties](https://github.com/SerafimArts/Properties) -  Getters or setters method and used doc-block information

## Things you may do manually
- name of your app in `config/app.php`
- `timezone` in `config/app.php`
- `locale` in `config/app.php`
- enable laravel-plugin in PhpStorm
- enable phpmd and phpcs inspections in PhpStorm
- configure phpunit in PhpStorm
- mark `app` folder as `Sources root` and specify `App` package prefix
- mark `tests` folder as `Tests root` and specify `Tests` package prefix
