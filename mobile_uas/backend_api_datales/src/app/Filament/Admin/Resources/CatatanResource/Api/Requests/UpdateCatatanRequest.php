<?php

namespace App\Filament\Admin\Resources\CatatanResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCatatanRequest extends FormRequest
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
            'tanggal' => 'required|date',
            'pengajar_id' => 'required|integer',
            'siswa_id' => 'required|integer',
            'catatan' => 'required|string',
        ];
    }
}
