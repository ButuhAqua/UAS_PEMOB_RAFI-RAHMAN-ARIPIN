<?php

namespace App\Filament\Admin\Resources\JadwalResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJadwalRequest extends FormRequest
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
            'materi' => 'required|string',
            'waktu' => 'required|date',
            'pengajar_id' => 'required|integer',
        ];
    }
}
