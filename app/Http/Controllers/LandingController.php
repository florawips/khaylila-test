<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // GET
    public function index()
    {
        // Ambil data kegiatan dari database (sesuaikan dengan model Anda)
        $kegiatan = Kegiatan::with('foto')->get(); 
        $siswa = Siswa::with('foto')->get();
    
        // Kirim variabel $kegiatan menggunakan compact() atau array
        return view('landing.konten.index', compact('kegiatan','siswa'));
    }
   // POST
   public function store(Request $request)
   {
       return "Data mahasiswa berhasil ditambahkan";
   }
   // PUT
   public function update(Request $request, $id)
   {
       return "Data mahasiswa dengan ID $id berhasil diubah";
   }
   // PATCH
   public function patch(Request $request, $id)
   {
       return "Sebagian data mahasiswa dengan ID $id berhasil diubah";
   }
   // DELETE
   public function destroy($id)
   {
       return "Data mahasiswa dengan ID $id berhasil dihapus";
   }
   public function test_route()
   {
    return view('test-route');
   }
   
}
