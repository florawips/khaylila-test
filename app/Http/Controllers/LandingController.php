<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
   // GET
   public function index()
   {
       return "Menampilkan data mahasiswa";
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
