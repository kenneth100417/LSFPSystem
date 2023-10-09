<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductFormRequest extends FormRequest
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
            'category_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'required',
                'string',
            ],
            'original_price' => [
                'required',
                'integer',
                'min:1'
            ],
            'selling_price' => [
                'required',
                'integer',
                'min:1'
            ],
            'quantity' => [
                'required',
                'integer',
                'min:1'
            ],
            'quantity_sold' => [
                'nullable',
                'integer'
            ],
            'description' => [
                'nullable',
                'string'
            ],
            'expiry_date' => [
                'required',
            ],
            'trending' => [
                'nullable',
                'integer'
            ],
            'status' => [
                'nullable',
                'integer'
            ],
            'slug' => [
                'required',
                'string'
            ],
            'meta_title' => [
                'nullable',
                'string'
            ],
            'meta_keyword' => [
                'nullable',
                'string'
            ],
            'meta_description' => [
                'nullable',
                'string'
            ],
            
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Product name is required',
            'image.required' => 'Product image is required.',
            'category_id.required' => 'Please select product category.',
            'original_price.min' => 'The minimum amount required is :min',
            'selling_price.min' => 'The minimum amount required is :min',
            'quantity.min' => 'The minimum quantity required is :min',

        ];
    }
}
