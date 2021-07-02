<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

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
        $payment_methods = ['Direct bank transfer','Check payments','Cash on delivery','PayPal'];

        return [ //regex:/^[a-zA-Z0-9 ]+$/
            'name'      => 'string|regex:/^[a-zA-Z ]+$/',
            'country'   => 'string|regex:/^[a-zA-Z ]+$/',
            'street'    => 'string|regex:/^[a-zA-Z ]+$/',
            'city'      => 'string|regex:/^[a-zA-Z ]+$/',
            'postcode'  => 'integer',
            'phone'     => 'numeric',
            'payment_method' => 'required|in:'. implode(',',$payment_methods),
            'order_notes' => 'nullable',
        ];
    }
}
