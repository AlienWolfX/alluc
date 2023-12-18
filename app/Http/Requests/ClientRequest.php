<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        if (request()->routeIs("clients.update")) {
            return [
                'first_name' => 'string',
                'last_name' => 'string',
                'age' => 'integer',
                'email' => 'email|string',
                'password' => 'string|min:8',
                'contact_number' => 'string',
            ];
        }
        else if (request()->routeIs("clients.store")) {
            return [
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'age' => 'required|integer',
                'email' => 'required|email|string|unique:clients',
                'password' => 'required|string|min:8',
                'contact_number' => 'required|string',
            ];
        }
        else {
            return [
                'email' => 'required|email',
                'password' => 'required|string|min:8',
            ];
        }
    }
}
