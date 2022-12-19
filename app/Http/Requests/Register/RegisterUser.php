<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUser extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'name' =>['required'],
            'username' =>['required'],
            'email' =>['required','email'],
            'phone' =>['required', 'digits:11'],
//            'otp'=>['required'],
            'password' =>['required'],
            'confirm_password' =>['required'],



        ];

    }
}
