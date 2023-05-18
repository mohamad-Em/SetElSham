<?php

namespace App\Http\Requests\Admin\Corner\Varietie;

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
            'image' => 'required',
            'type' => 'nullable',
            'price' => 'required|numeric',
            'size' => 'nullable',
            'extras' => 'nullable',
            'corner_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Enter The Name',
            'name.string'   => 'The Field Value Must Be Text',
            'type.string'   => 'The Field Value Must Be Text',
            'price.required' => 'Enter The Price',
            'price.numeric'   => 'The Field Value Must Be Number',
            'size.nullable'   => 'The Field Value Must Be Text',
            'extras.nullable'   => 'The Field Value Must Be Text',
        ];
    }
}
