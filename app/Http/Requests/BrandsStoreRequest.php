<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandsStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (!auth()->check()) {
            abort(403,"Bu işlem için yetkiniz bulunmamaktadır.");
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
            'name'=>'required|max:100',
            'image'=>'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'link'=>'max:255'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Marka Adı alanı zorunludur.',
            'name.max' => 'Marka Adı en fazla 100 karakter olabilir.',

            'image.image' => 'Yüklenen dosya bir resim olmalıdır.',
            'image.mimes' => 'Resim sadece jpeg, png, jpg, gif veya webp formatında olmalıdır.',
            'image.max' => 'Resim en fazla 2MB (2048 KB) boyutunda olabilir.',

            'link.max' => 'Link en fazla 255 karakter olabilir.',
        ];
    }
}
