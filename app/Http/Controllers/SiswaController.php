<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Http\Requests\UploadRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $search = $request->get('search');
        $data = Siswa::when($search, function ($query, $search){
            return $query->where('nama_siswa', 'like',"%{$search}%")
            ->orWhere('nis', 'like',"%{$search}%")
            ->orWhere('nisn', 'like',"%{$search}%")
            ->orWhere('tempat_lahir', 'like',"%{$search}%")
            ->orWhere('alamat', 'like',"%{$search}%")
            ;
        })->paginate($perPage);
        return view('admin.konten.siswa.index', compact('data', 'perPage', 'search'));
    }

    public function create() {
        return view('admin.konten.siswa.create'); 
    }

    public function store(SiswaRequest $request)
    {
       $query  = Siswa::create([
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);
        
        if ($query) {
            return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambah.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function show(string $id)
    {
        $data = Siswa::findOrFail($id);
        return view('admin.konten.siswa.show', compact('data'));
    }

    public function edit(string $id)
    {
        $data = Siswa::findOrFail($id);
        return view('admin.konten.siswa.edit', compact('data'));
    }

    public function update(SiswaRequest $request, string $id)
    {
        $data = Siswa::findOrFail($id);
        $query  = $data->update([
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);
        if ($query) {
            return redirect()->route('siswa.index')->with('success', 'Data berhasil diubah.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengubah data.');
        }
    }

    public function destroy(string $id)
    {
        $id = Siswa::findOrfail($id);
        if ($id->delete()) {
            return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }
    public function upload(UploadRequest $request, string $id){
        $query = Siswa::findOrFail($id);
        if ($request->hasFile('foto')) {
            $gambar_mentah = $request->file('foto');
            $nama_mentah = 'siswa_' . Str::uuid();
            $format_gambar = $gambar_mentah->getClientOriginalExtension();
            $gambar_matang = $nama_mentah . '.' . $format_gambar;
            $lokasi_gambar = $gambar_mentah->storeAs(
                    'upload/siswa',
                $gambar_matang,
                'dir_public'
            );
        } else {
                $lokasi_gambar = '';
        }
        // Jika siswa sudah memiliki foto
        if ($query->foto) {
            // Hapus file foto lama
            Storage::disk('dir_public')->delete(
                $query->foto->path
            );
            // Update data foto
            $query->foto->update([
                'path' => $lokasi_gambar,
                'nama_file' => $gambar_matang ?? null,
            ]);
        } else {
            // Jika siswa belum memiliki foto
            $query->foto()->create([
                'path' => $lokasi_gambar,
                'nama_file' => $gambar_matang ?? null,
            ]);
        }
        return redirect()->back()->with('success', 'Foto berhasil diupload.');
    }
}
