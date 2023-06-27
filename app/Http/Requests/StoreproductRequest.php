<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreproductRequest extends FormRequest
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
     * 
     */
    public function rules(): array
    {
        return [
            'product-name'=>['required','string'],
            'product-description'=> ['required', 'string', 'max:255'],
            'price'=> ['required', 'integer'],
            'quantity'=>['required', 'integer'],
            'product-image' => ['sometimes', 'file', 'mimes:jpg,jpeg,png,pdf'],
        ];
    }
}
