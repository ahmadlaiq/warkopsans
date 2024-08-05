<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'meja_id' => ['required', 'exists:mejas,id'],
            'invoice_number' => ['required', 'string', 'max:255'],
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_request' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'total_amount' => ['required', 'numeric'],
            'payment_method' => ['required', 'string', 'max:255'],
        ];
    }
}
