<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateParentProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'father_name' => 'sometimes|string|max:255',

            'mother_name' => 'sometimes|string|max:255',

            'father_mobile' => 'sometimes|string|max:20',

            'mother_mobile' => 'nullable|string|max:20',

            'email' => 'nullable|email',

            'national_code' => 'nullable|string|max:10',

            'city' => 'nullable|string|max:255',

            'address' => 'nullable|string',

        ];
    }
}