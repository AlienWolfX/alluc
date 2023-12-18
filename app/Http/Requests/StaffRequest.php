<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
        if (request()->routeIs('staff.store')) {
            return [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'age' => 'required|integer',
                'email' => 'required|email|unique:staff,email',
                'password' => 'required|string|min:8',
                'contact_number' => 'required|string|max:255',
                'profile_picture_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        } elseif (request()->routeIs('staff.update')) {
            return [
                'first_name' => 'sometimes|string|max:255',
                'last_name' => 'sometimes|string|max:255',
                'age' => 'sometimes|integer',
                'email' => 'sometimes|email',
                'password' => 'sometimes|string|min:8',
                'contact_number' => 'sometimes|string|max:11',
                'profile_picture_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        }
        else {
            return [];
        }
    }
}
