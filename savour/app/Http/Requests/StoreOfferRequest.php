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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'restaurant_id' => ['required', 'numeric', 'max:9'],
            'description' => ['required', 'string', 'email', 'max:255', 'unique:restaurants'],
            'name' => ['required', 'string', 'max:50'],
            'image' => ['string', 'max:255'],
            'quantity' => ['required', 'numeric', 'max:2'],
            'price' => ['required', 'numeric', 'max:10'],
            'is_active' => ['boolean'],
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is mandatory !',
            'price.numeric' => 'Price must be numeric between 2 and 100e',
            'price.between' => 'Price must be numeric between 2 and 100e'
        ];
    }
}
