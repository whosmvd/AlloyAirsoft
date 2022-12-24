<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'emailPlayerForReg' => ['required', 'email:rfc,dns', 'unique:users,email'],
            'passwordForReg' => ['required', 'min:8', 'max:32'],
        ];
    }
}
