<?php

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('post-update-cmd', function () {
    if (App::environment() !== 'production') {
        Artisan::call('ide-helper:generate');
        Artisan::call('ide-helper:meta');
    }
})->describe('Runs artisan commands which must run only in not production mode');
