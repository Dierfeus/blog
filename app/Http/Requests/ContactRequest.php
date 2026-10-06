<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:6|max:100',
            'email' => 'required|email|min:5|max:100',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:5|max:1000'
        ];
    }

    public function messages(): array
    {
        return array(
            'name.required' => 'Имя обязательно для ввода',
            "name.min" => "Имя должно содержать больше 6 символов",
            "name.max" => "Имя должно содержать не больше 100 символов",
            'email.required' => 'Почта обязательна для ввода',
            'email.email' => 'Неизвестный формат почты',
            'email.min' => "Почта должна содержать больше 5 символов",
            'email.max' => "Почта должна содержать не больше 100 символов",
            'subject.required' => 'Заголвоок обязателен для ввода',
            'subject.min' => "Заголвоок должна содержать больше 5 символов",
            'subject.max' => "Заголвоок должна содержать не больше 100 символов",
            'message.required' => 'Сообщение обязательно для ввода',
            'message.min' => "Сообщение должна содержать больше 5 символов",
            'message.max' => "Сообщение должна содержать не больше 100 символов",

        );
    }
}
