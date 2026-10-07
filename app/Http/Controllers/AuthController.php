<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('landing.auth.login');
    }

    public function registrasi(Request $request, $id)
    {
        // Username berupa NIS untuk siswa atau NIP untuk guru
        $username = $request->username;

        // Cek siswa berdasarkan NIS
        $data = Siswa::where('nis', $username)->first();

        $role = 'siswa';

        // Kalau bukan siswa, cek guru berdasarkan NIP
        if (!$data) {
            $data = Guru::where('nip', $username)->first();

            $role = 'guru';
        }

        // Kalau NIS/NIP tidak ditemukan
        if (!$data) {
            return redirect()
                ->back()
                ->with('error', 'Data NIS / NIP tidak ditemukan!');
        }

        // Membuat / memperbarui akun user
        $query = User::updateOrCreate(
            [
                'username' => $username
            ],
            [
                'password' => Hash::make($request->password),
                'role' => $role,
            ]
        );

        // Hubungkan user_id dengan siswa/guru
        $update = $data->update([
            'user_id' => $query->id
        ]);

        if ($update) {

            return redirect()
                ->back()
                ->with('success', 'Data akun berhasil diterbitkan.');
        }

        return redirect()
            ->back()
            ->with('error', 'Data akun gagal diterbitkan.');
    }
}