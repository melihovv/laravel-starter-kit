<?php

namespace App\Models;

trait AdditionalMethods
{
    public static function last()
    {
        return static::orderBy('id', 'desc')->first();
    }
}
