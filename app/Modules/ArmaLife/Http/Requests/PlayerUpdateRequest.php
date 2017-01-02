<?php

namespace ArmaWorks\Modules\ArmaLife\Http\Requests;

use ArmaWorks\Http\Requests\Request;

class PlayerUpdateRequest extends Request
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'uid' => 'required',
            'name' => 'required'
        ];
    }
}
