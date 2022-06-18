<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObligationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'full_name'=>'required|min:8|max:50',
            'national_number'=>'required|digits:14|unique:obligations,national_number',
            'obligation_accept'=>'required|in:1',
            'number'=>'required|unique:obligations,number'
        ];
    }
}
