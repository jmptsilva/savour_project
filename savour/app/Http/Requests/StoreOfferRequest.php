<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'restaurant_id' => ['required', 'integer', 'max:9'],
            'description' => ['required', 'string', 'email', 'max:255', 'unique:restaurants'],
            'name' => ['required', 'string', 'max:50'],
            'image' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'integer', 'max:2'],
            'price' => ['required', 'double', 'max:10'],
            'is-active' => ['required', 'tinyint'],
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is mandatory !',
            'restaurant_id.required' => 'Restaurant id is mandatory.',
            'price.numeric' => 'Price must be numeric between 2 and 100e',
            'price.between' => 'Price must be numeric between 2 and 100e'
        ];
    }
}
