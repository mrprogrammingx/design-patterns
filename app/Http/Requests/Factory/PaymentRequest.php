<?php

namespace App\Http\Requests\Factory;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Validation\Rule;

class PaymentRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'payType' => [
                'required',
                Rule::in(['stripe', 'paypal']),
            ]
        ];
    }
}
