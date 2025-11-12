<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuctionStoreRequest extends FormRequest
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
            'name' => 'required|string|max:250',
            'location' => 'required|in:adana,trakya',
            'start_date' => 'required|date|before:end_date',
            'end_date' => 'required|date|after:start_date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Mezat başlığı zorunludur.',
            'name.string' => 'Mezat başlığı metin olmalıdır.',
            'name.max' => 'Mezat başlığı en fazla 250 karakter olabilir.',

            'location.required' => 'Mezat konumu seçilmelidir.',
            'location.in' => 'Mezat konumu sadece Adana veya Trakya olabilir.',

            'start_date.required' => 'Başlangıç tarihi ve saati zorunludur.',
            'start_date.date' => 'Başlangıç tarihi geçerli bir tarih olmalıdır.',
            'start_date.before' => 'Başlangıç tarihi, bitiş tarihinden önce olmalıdır.',

            'end_date.required' => 'Bitiş tarihi ve saati zorunludur.',
            'end_date.date' => 'Bitiş tarihi geçerli bir tarih olmalıdır.',
            'end_date.after' => 'Bitiş tarihi, başlangıç tarihinden sonra olmalıdır.',
        ];
    }
}
