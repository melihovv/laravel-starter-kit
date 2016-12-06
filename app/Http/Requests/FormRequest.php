<?php

namespace App\Http\Requests;

use Fadion\Sanitizer\FormRequest\Sanitizable;
use Illuminate\Foundation\Http\FormRequest as IlluminateFormRequest;

abstract class FormRequest extends IlluminateFormRequest
{
    use Sanitizable;

    public function authorize()
    {
        return true;
    }
}
