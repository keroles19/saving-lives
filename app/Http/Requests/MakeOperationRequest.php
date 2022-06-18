<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeOperationRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'donor_id'                => 'Donor',
            'receiver_id'             => 'Receiver',
        ];
    }

    public function rules()
    {
        return [
            'donor_id'=>'sometimes|required|digits:14|exists:donors,national_number',
            'receiver_id'=>'sometimes|required|digits:14|exists:receivers,national_number'
        ];
    }

    public function messages()
    {
       return [
           'donor_id.exists' => 'Invalid National Number For Donor',
           'receiver_id.exists' => 'Invalid National Number For Receiver',
       ];
    }
}
