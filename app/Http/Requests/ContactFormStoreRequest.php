<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormStoreRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'message' => 'required|min:20',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'İsim alanı zorunludur.',
            'name.string' => 'İsim alanı metin olmalıdır.',
            'name.max' => 'İsim en fazla 100 karakter olabilir.',

            'phone.string' => 'Telefon numarası metin olmalıdır.',
            'phone.max' => 'Telefon numarası en fazla 20 karakter olabilir.',

            'message.required' => 'Mesaj alanı zorunludur.',
            'message.min' => 'Mesaj en az 20 karakter olmalıdır.',

        ];
    }

}
