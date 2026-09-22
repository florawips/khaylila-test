<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruRequest;
use App\Models\Guru;
use Illuminate\Http\Request;

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
}
