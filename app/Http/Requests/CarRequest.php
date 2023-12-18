<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
        if (request()->routeIs('cars.store')) {
            return [
                'plate_number' => 'required|string|unique:cars',
                'car_name' => 'required|string',
                'description' => 'required|string',
                'car_model_year' => 'required|integer',
                'color' => 'required|string',
                'rate' => 'required|numeric',
            ];
        }
        else if (request()->routeIs('cars.update')) {
            return [
                'plate_number' => 'required|string',
                'car_name' => 'required|string',
                'description' => 'required|string',
                'car_model_year' => 'required|integer',
                'color' => 'required|string',
                'rate' => 'required|numeric',
            ];
        }
        else {
            return [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        }
    }
}
