<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
        return [ //regex:/^[a-zA-Z0-9 ]+$/
            'name'      => 'string|regex:/^[a-zA-Z ]+$/',
            'country'   => 'string|regex:/^[a-zA-Z ]+$/',
            'street'    => 'string|regex:/^[a-zA-Z ]+$/',
            'city'      => 'string|regex:/^[a-zA-Z ]+$/',
            'postcode'  => 'integer',
            'phone'     => 'string|regex:/^[a-zA-Z ]+$/',
            'order_notes' => 'nullable',
        ];
    }
}
