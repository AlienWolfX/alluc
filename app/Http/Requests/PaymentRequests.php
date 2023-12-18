<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequests extends FormRequest
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
    public function rules()
    {
        return [
            'rental_id' => 'required|integer|exists:rentals,rental_id',
            'add_charges' => 'required|numeric|min:0',
            'payment_date' => 'required|date',
            'payment_time' => 'required',
            'payment_amount' => 'required|numeric|min:0',
        ];
    }
}
