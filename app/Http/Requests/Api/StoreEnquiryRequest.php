<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnquiryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => ['required', 'string', 'in:product,gifting,general'],
            'name' => ['required', 'string', 'max:200'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:200'],
            'product_id' => ['nullable', 'integer', 'exists:products,id'],
            'message' => ['nullable', 'string', 'max:5000'],
        ];
    }

    public function messages(): array
    {
        return [
            'type.in' => 'Invalid enquiry type. Must be product, gifting, or general.',
            'product_id.exists' => 'The selected product does not exist.',
            'email.email' => 'Please provide a valid email address.',
        ];
    }
}
