<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParentProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'father_name' => 'required|string|max:255',

            'mother_name' => 'required|string|max:255',

            'father_mobile' => 'required|string|max:20',

            'mother_mobile' => 'nullable|string|max:20',

            'email' => 'nullable|email',

            'national_code' => 'nullable|string|max:10',

            'city' => 'nullable|string|max:255',

            'address' => 'nullable|string',

        ];
    }
}