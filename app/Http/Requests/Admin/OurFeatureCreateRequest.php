<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OurFeatureCreateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'icon' => ['required'],
            'title' => ['required', 'max:255'],
            'short_description' => ['required', 'max:10000'],
            'status' => ['required', 'boolean']
        ];
    }
}
