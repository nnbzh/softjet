<?php

namespace App\Http\Requests\Game;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Request as RequestHelper;

class StoreOrUpdateGameRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'          => [
                Rule::requiredIf(fn() => $this->getMethod() == RequestHelper::METHOD_POST)
            ],
            'description'   => [
                Rule::requiredIf(fn() => $this->getMethod() == RequestHelper::METHOD_POST)
            ],
            'genres'        => 'nullable|array',
            'genres.*'      => 'required|int|exists:genres,id'
        ];
    }
}
