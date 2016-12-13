<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as IlluminateFormRequest;

abstract class FormRequest extends IlluminateFormRequest
{
    public function authorize()
    {
        return true;
    }
}
