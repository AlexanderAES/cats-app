<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Это поле необходимо заполнить',
            'email.email' => 'Это поле должно быть формата электронной почты',
        ];
    }

}
