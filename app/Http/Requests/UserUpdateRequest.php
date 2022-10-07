<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'isadmin' => ['required'],
            'email' => ['required', 'email'],
            'email_verified_at' => [''],
            'password' => ['required', 'password'],
            'remember_token' => ['string', 'max:100'],
        ];
    }
}
