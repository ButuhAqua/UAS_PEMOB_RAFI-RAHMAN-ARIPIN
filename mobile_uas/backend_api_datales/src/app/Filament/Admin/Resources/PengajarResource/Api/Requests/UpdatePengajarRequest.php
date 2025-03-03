<?php

namespace App\Filament\Admin\Resources\PengajarResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePengajarRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'TTL' => 'required|date',
        ];
    }
}
