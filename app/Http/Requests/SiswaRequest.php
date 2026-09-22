<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Override;

class SiswaRequest extends FormRequest
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
            'nis'           => [
                'required',
                'string',
                'max:20',
                Rule::unique('siswas','nis_active')->ignore($this->route('id'))
            ],
            'nisn'          => [
                'required',
                'string',
                'max:20',
                Rule::unique('siswas','nisn_active')->ignore($this->route('id'))
            ],
            'nama_siswa'    => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_lahir'  => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat'        => 'nullable|string',
            'no_hp'         => 'nullable|string|max:20',
        ];

    }
    public function messages(): array
    {
        return [
            'nis.required'           => 'NIS wajib diisi.',
            'nis.unique'             => 'NIS sudah terdaftar, gunakan NIS lain.',
            'nisn.required'          => 'NISN wajib diisi.',
            'nisn.unique'            => 'NISN sudah terdaftar, gunakan NISN lain.',
            'nama_siswa.required'    => 'Nama siswa wajib diisi.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi.',
            'jenis_kelamin.in'       => 'Jenis kelamin harus berupa L (Laki-laki) atau P (Perempuan).',
            'tempat_lahir.required'  => 'Tempat lahir wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.date'     => 'Format tanggal lahir tidak valid.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'no_hp.string' => 'Nomor HP harus berupa teks atau angka.',
            'no_hp.max'    => 'Nomor HP tidak boleh lebih dari 20 karakter.',
        ];
    }
}
