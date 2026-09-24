<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KegiatanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'siswa_id'      => 'required|integer|exists:siswas,id',
            'nama_kegiatan' => 'required|string|max:100',
            'deskripsi'     => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'siswa_id.required'      => 'Siswa wajib dipilih.',
            'siswa_id.integer'       => 'Siswa tidak valid.',
            'siswa_id.exists'        => 'Data siswa tidak ditemukan.',
            'nama_kegiatan.required' => 'Nama kegiatan wajib diisi.',
            'nama_kegiatan.max'      => 'Nama kegiatan maksimal 100 karakter.',
            'deskripsi.required'     => 'Deskripsi wajib diisi.',
        ];
    }
}