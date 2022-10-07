<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'telephone' => ['required', 'string'],
            'profile_details' => ['required', 'string'],
            'profile_image' => ['required', 'string'],
            'last_login_at' => ['required'],
            'last_login_ip' => ['required', 'string', 'max:45'],
            'user_id' => ['required', 'integer'],
        ];
    }
}
