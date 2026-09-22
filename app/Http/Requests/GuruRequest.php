<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class GuruRequest extends FormRequest
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
            'nip'           => [
                'required',
                'string',
                'max:20',
                Rule::unique('gurus','nip_active')->ignore($this->route('id'))
            ],
            'nama_guru'    => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'no_hp'         => 'nullable|string|max:20',
            'email'        => 'nullable|string',
        ];

    }
    public function messages(): array
    {
        return [
            'nip.required'           => 'NIP wajib diisi.',
            'nip.unique'             => 'NIP sudah terdaftar, gunakan NIP lain.',
            'nama_guru.required'    => 'Nama guru wajib diisi.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
            'jenis_kelamin.in'       => 'Jenis kelamin harus berupa L (Laki-laki) atau P (Perempuan).',
            'no_hp.string' => 'Nomor HP harus berupa teks atau angka.',
            'no_hp.max'    => 'Nomor HP tidak boleh lebih dari 20 karakter.',
            'alamat.string' => 'Alamat harus berupa teks.',
        ];
    }
}
