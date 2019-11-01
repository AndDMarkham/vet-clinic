<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha|max:100',
            'species' => 'required|alpha|max:100',
            'breed' => 'required|alpha|max:100',
            'weight' => 'required|numeric|max:50000',
            'age' => 'numeric|max:100'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Pet name is required',
            'name.alpha' => 'Name may only contain latin characters',
            'species.required' => 'Species is required',
            'species.alpha' => 'Species may only contain latin characters',
            'breed.required' => 'Breed is required',
            'breed.alpha' => 'Breed may only contain latin characters',
            // 'address.required' => 'Address is required',
            // 'phone.required' => 'Phone number is required',
            'weight.numeric' => 'Weight is not in the requested format',
            'age.numberic' => 'Age is not in a numeric format',
            // 'email.required' => 'E-mail address is required',
            'email.email' => 'E-mail address is not in the requested format'
        ];
    }
}
