<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomePageManagementStoreRequest extends FormRequest
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
            "title" => "required|max:255",
            "video_link" => "nullable|max:255",
            "image_link" => "nullable|max:255",
        ];
    }
}
