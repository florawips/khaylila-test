<?php

namespace App\Http\Controllers;

use App\Http\Requests\KegiatanRequest;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

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
        return view('admin.konten.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KegiatanRequest $request)
    {
        $query = Kegiatan::create([
            'siswa_id'      => $request->siswa_id,
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi'     => $request->deskripsi,
        ]);

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
        $data = Kegiatan::findOrFail($id);
        if ($data->delete()) {
            return redirect()->route('kegiatan.index')->with('success', 'Data Berhasil Dihapus.');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Saat Menghapus Data');
        }
    }
}