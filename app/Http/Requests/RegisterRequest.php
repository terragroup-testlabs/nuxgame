<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string','max:255'],
            'phone' => ['required', 'digits:10']
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        return response()->redirectToRoute('home')->with('validation', $validator->errors()->messages());
    }


}
