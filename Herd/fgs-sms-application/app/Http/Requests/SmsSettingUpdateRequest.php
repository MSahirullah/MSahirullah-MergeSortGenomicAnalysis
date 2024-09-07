<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SmsSettingUpdateRequest extends FormRequest
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
            'login_username' => ['required', 'string', 'max:255'],
            'login_password' => ['required', 'string', 'max:255'],
            'access_token' => ['required', 'string',],
            'refresh_token' => ['required', 'string',],
        ];
    }
}