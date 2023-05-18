<?php

namespace App\Http\Requests\Admin\Corner;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'image' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Enter The Name',
            'name.string'   => 'The Field Value Must Be Text'
        ];
    }
}
