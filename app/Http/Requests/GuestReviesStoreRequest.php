<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestReviesStoreRequest extends FormRequest
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
            "name" => "required|max:255",
            "email" => "nullable|email|max:255",
            "comment" => "required",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "İsim Alanını Boş Bırakmayın.",
            "name.max" => "İsim Alanı En Fazla 255 Karakter Olabilir.",
            "email.email" => "Geçerli Bir E-mail Girin.",
            "email.max" => "E-mail Adresi En Fazla 255 Karakter Olabilir.",
            "commet.required" => "Mesaj Alanını Boş Bırakmayın."
        ];
    }
}
