<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'date' => 'required|max:100',
            'text' => 'required|max:300',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'date is required',
            'text.required' => 'text is required'
        ];
    }
}
