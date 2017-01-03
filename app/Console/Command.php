<?php

namespace App\Console\Commands;

use Illuminate\Console\Command as IlluminateCommand;
use Illuminate\Support\Facades\App;

abstract class Command extends IlluminateCommand
{
    public function __construct()
    {
        parent::__construct();

        App::setLocale('en');
    }
}