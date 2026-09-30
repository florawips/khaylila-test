<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruRequest;
use App\Http\Requests\UploadRequest;
use App\Models\Guru;
use App\Models\MapelGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $search = $request->get('search');
        $data = Guru::when($search, function ($query, $search){
            return $query->where('nama_guru', 'like',"%{$search}%")
            ->orWhere('nip', 'like',"%{$search}%")
            ->orWhere('no_hp', 'like',"%{$search}%")
            ->orWhere('email', 'like',"%{$search}%")
            ;
        })->paginate($perPage);
        return view('admin.konten.guru.index', compact('data', 'perPage', 'search'));
    }

    public function create() {
        return view('admin.konten.guru.create'); 
    }

    public function store(GuruRequest $request)
    {
       $query  = Guru::create([
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'jenis_kelamin' => $request->jenis_kelamin,
           'no_hp' => $request->no_hp,
            'email' => $request->email,
            
        ]);
        
        if ($query) {
            return redirect()->route('guru.index')->with('success', 'Data berhasil ditambah.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function show(string $id)
    {
        $data = Guru::findOrFail($id);
        return view('admin.konten.guru.show', compact('data'));
    }

    public function edit(string $id)
    {
        $data = Guru::findOrFail($id);
        return view('admin.konten.guru.edit', compact('data'));
    }

    public function update(GuruRequest $request, string $id)
    {
        $data = Guru::findOrFail($id);
        $query  = $data->update([
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);
        if ($query) {
            return redirect()->route('guru.index')->with('success', 'Data berhasil diubah.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengubah data.');
        }
    }

    public function destroy(string $id)
    {
        $id = Guru::findOrfail($id);
        if ($id->delete()) {
            return redirect()->route('guru.index')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }
    public function mapel(string $id){
        $data = MapelGuru::where('guru_id', $id)
        ->with('mapel')
        ->get();
        return view('admin.konten.guru.mapel', compact('data'));
    }
    public function upload(UploadRequest $request, string $id){
        $query = Guru::findOrFail($id);
        if ($request->hasFile('foto')) {
            $gambar_mentah = $request->file('foto');
            $nama_mentah = 'guru_' . Str::uuid();
            $format_gambar = $gambar_mentah->getClientOriginalExtension();
            $gambar_matang = $nama_mentah . '.' . $format_gambar;
            $lokasi_gambar = $gambar_mentah->storeAs(
                    'upload/guru',
                $gambar_matang,
                'dir_public'
            );
        } else {
                $lokasi_gambar = '';
        }
        // Jika guru sudah memiliki foto
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
            // Jika guru belum memiliki foto
            $query->foto()->create([
                'path' => $lokasi_gambar,
                'nama_file' => $gambar_matang ?? null,
            ]);
        }
        return redirect()->back()->with('success', 'Foto berhasil diupload.');
    }
}
