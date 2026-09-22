<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama_mapel' => 'required|string|max:100',
            'jumlah_jam' => 'required|integer|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'nama_mapel.required' => 'Nama mapel wajib diisi.',
            'nama_mapel.max'      => 'Nama mapel maksimal 100 karakter.',
            'jumlah_jam.required' => 'Jumlah jam wajib diisi.',
            'jumlah_jam.integer'  => 'Jumlah jam harus berupa angka.',
            'jumlah_jam.min'      => 'Jumlah jam minimal 1.',
        ];
    }
}