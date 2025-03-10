<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class RegistrationRequest extends FormRequest
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
            'name' => 'required|string|unique:organizations,name',
            'address' => 'string|required',
            'city' => 'string|required',
            'state' => 'string|required',
            'zip' => "string|regex:/^(\d{5}(-\d{4})?)$/|required",
            'phone' => 'string|required',
            'email' => 'string|email|required',
            'website' => 'string|url',
            'logo_path' => 'string',
        ];
    }
}
