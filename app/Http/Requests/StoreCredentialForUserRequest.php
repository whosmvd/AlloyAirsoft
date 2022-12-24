<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCredentialForUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'namePlayer' => ['nullable', 'max:20'],
            'surnamePlayer' => ['nullable', 'max:20'],
            'callsignPlayer' => ['nullable', 'max:20'],
            'phonePlayer' => ['nullable', 'max:20'],
        ];
    }
}
