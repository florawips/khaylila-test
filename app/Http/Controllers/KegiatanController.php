<?php

namespace App\Http\Controllers;

use App\Http\Requests\KegiatanRequest;
use App\Models\Kegiatan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $search = $request->get('search');
        $data = Kegiatan::when($search, function ($query, $search) {
            return $query->where('nama_kegiatan', 'like', "%{$search}%")
                          ->orWhere('deskripsi', 'like', "%{$search}%");
        })->paginate($perPage);

        return view('admin.konten.kegiatan.index', compact('data', 'perPage', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Siswa::where('nis', session('user')['username'])->first();
        return view('admin.konten.kegiatan.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $query = Kegiatan::create([
            'siswa_id'      => $request->siswa_id,
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi'     => $request->deskripsi,
        ]);
            $gambar_mentah = $request->file('foto');
            $nama_mentah = 'kegiatan_' . Str::uuid();
            $format_gambar = $gambar_mentah->getClientOriginalExtension();
            $gambar_matang = $nama_mentah . '.' . $format_gambar;
            $lokasi_gambar = $gambar_mentah->storeAs(
                'upload/kegiatan',
                $gambar_matang,
                'dir_public'
            );
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
        
        return redirect()->route('kegiatan.index')->with('success', 'Data kegiatan berhasil disimpan.');
        if ($query) {
            return redirect()->route('kegiatan.index')->with('success', 'Data Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Saat Menyimpan Data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Kegiatan::findOrFail($id);
        return view('admin.konten.kegiatan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kegiatan::findOrFail($id);
        return view('admin.konten.kegiatan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KegiatanRequest $request, string $id)
    {
        $data = Kegiatan::findOrFail($id);
        $query = $data->update([
            'siswa_id'      => $request->siswa_id,
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi'     => $request->deskripsi,
        ]);

        if ($query) {
            return redirect()->route('kegiatan.index')->with('success', 'Data Berhasil Dirubah.');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Saat Mengubah Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Kegiatan::with('foto')->findOrFail($id);
    
        // Hapus file foto jika ada
        if ($data->foto) {
            Storage::disk('dir_public')->delete(
                str_replace('/', '', $data->foto->path)
            );
    
            // Hapus data foto dari database
            $data->foto->delete();
        }
    
        // Hapus data kegiatan
        $data->delete();
    
        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Data kegiatan berhasil dihapus.');
    }
}