<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (!auth()->check()) {
            abort(403, "Bu işlem için yetkiniz bulunmamaktadır.");
        }
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
            'question' => 'required|max:250',
            'answer' => 'required|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'question.required' => 'Soru alanı zorunludur.',
            'question.max' => 'Soru en fazla 250 karakter olabilir.',

            'answer.required' => 'Cevap alanı zorunludur.',
            'answer.max' => 'Cevap en fazla 500 karakter olabilir.',
        ];
    }


}
