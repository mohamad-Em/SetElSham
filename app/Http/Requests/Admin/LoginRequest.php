<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|exists:admins,email',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Enter The Email',
            'email.exists' => 'The Email Dose Not Exists',
            'password.required' => 'Enter The Password',

        ];
    }
}
