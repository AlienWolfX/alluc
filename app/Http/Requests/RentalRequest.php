<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentalRequest extends FormRequest
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
        if (request()->method() === 'PUT') {
            return [
                'return_date' => 'required|date',
                'return_time' => 'required',
                'rental_status' => 'required|string',
            ];
        }
        else if (request()->method() === 'POST') {
            return [
                'staff_id' => 'required',
                'car_id' => 'required',
                'rental_date' => 'required|date',
                'rental_time' => 'required',
                'rental_status' => 'required|string',
            ];
        }
        else {
            return [];
        }
    }
}
