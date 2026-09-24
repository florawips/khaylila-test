<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'hari'           => ['required', 'in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu'],
            'jam_ke'         => ['required', 'integer', 'min:1'],
            'guru_id'  => ['required', 'exists:gurus,id'],
            'mapel_id'  => ['required', 'exists:mapels,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'hari.required'          => 'Hari pelajaran wajib dipilih.',
            'hari.in'               => 'Pilihan hari tidak valid.',
            'jam_ke.required'        => 'Jam ke wajib diisi.',
            'jam_ke.integer'         => 'Jam ke harus berupa angka.',
            'jam_ke.min'             => 'Jam ke minimal 1.',
            'guru_id.required'      => 'Guru wajib dipilih',
            'guru_id.exists'      => 'Guru yang dipilih tidak terdaftar di sistem.',
            'mapel_id.required'      => 'Mapel wajib dipilih',
            'mapel_id.exists'      => 'Mapel yang dipilih tidak terdaftar di sistem.',
        ];
    }
}