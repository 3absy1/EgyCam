<?php

namespace App\Http\Requests\Register;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCustomer extends FormRequest
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
            'phone' =>['required'],
            'password' =>['required'],
            'confirmPassword' => ['required'],

        ];

    }

    protected function prepareForValidation()
    {
        $this->merge([
            'confirm_password' =>$this->confirmPassword
        ]);
    }
}
