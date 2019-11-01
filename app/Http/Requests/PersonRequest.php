<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'first_name' => 'required|max:100',
            'surname' => 'required|max:100',
            'address' => 'max100',
            'phone' => 'numeric|min:10|max:10',
            'email' => 'email|max:100'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First name is required',
            'surname.required' => 'Surname is required',
            // 'address.required' => 'Address is required',
            // 'phone.required' => 'Phone number is required',
            'phone.numeric' => 'Number is not in the requested format',
            'phone.min' => 'Phone number is not complete',
            'phone.max' => 'Phone number exceeds max number of digits',
            // 'email.required' => 'E-mail address is required',
            'email.email' => 'E-mail address is not in the requested format'
        ];
    }
}
