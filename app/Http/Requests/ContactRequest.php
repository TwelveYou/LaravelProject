<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'Поле "Имя" является обязательным',
            'email.required' => 'Поле "email" является обязательным',
            'email.email' => 'Данные, введенный в поле "email" не являются электронной почтой',
            'subject.required' => 'Поле "Тема сообщения" является обязательным',
            'message.required' => 'Поле "Сообщение" является обязательным',
            'subject.min:5' => 'Тема должна быть более 5 символов',
            'subject.max:50' => 'Тема должна быть не более 50 символов',
            'message.min:15' => 'Сообщение должно быть длинной не менее 15 и не более 500 символов',
            'message.max:500' => 'Сообщение должно быть длинной не менее 15 и не более 500 символов'
        ];
    }
}
