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
            'restaurant_id' => ['required', 'numeric'],
            'description' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:50'],
            'image' => ['string', 'max:255'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'price' => ['required', 'numeric'],
            'is_active' => ['boolean'],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'description.required' => 'Description is mandatory.',
            'restaurant_id.required' => 'Restaurant ID is mandatory.',
            'price.numeric' => 'Price must be a number.',
        ];
    }
}
