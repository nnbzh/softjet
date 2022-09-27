<?php

namespace App\Http\Requests\Genre;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Request as RequestHelper;

class StoreOrUpdateGenreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'          => [
                Rule::requiredIf(fn() => $this->getMethod() == RequestHelper::METHOD_POST)
            ],
            'games'        => 'nullable|array',
            'games.*'      => 'required|int|exists:games,id'
        ];
    }
}
