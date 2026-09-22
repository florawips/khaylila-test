<?php

namespace App\Http\Controllers;

use App\Http\Requests\MapelRequest;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index (request $request){
        $perPage = $request->get('per_page', 10);
        $search = $request->get('search');
        $data= Mapel::when($search,function($query,$search ){
         return $query-> where ('nama_mapel','like',"%{$search}%")
                     -> orwhere('jumlah_jam','like',"%{$search}%")             
         ;
        })->paginate($perPage);        
        return view('admin.konten.mapel.index', compact('data', 'perPage','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.konten.mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(MapelRequest $request)
    {
     $query=Mapel::create([
     'nama_mapel' => $request->nama_mapel ,
     'jumlah_jam' => $request->jumlah_jam,
 ]);
 if($query){
    return redirect()->route('mapel.index')->with('success','Data Berhasil Disimpan.');
 }
 else{
    redirect()->back()->with('error','Terjadi Kesalahan Saat Menyimpan Data');
 }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $data = Mapel::findOrFail($id);
      return view('admin.konten.mapel.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Mapel::findOrFail($id);
      return view('admin.konten.mapel.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $data = Mapel::findOrFail($id);
         $query= $data->update([
         'nama_mapel' => $request->nama_mapel ,
         'jumlah_jam' => $request->jumlah_jam ,
         ]);
          
      if($query){
      return redirect()->route('mapel.index')->with('success','Data Berhasil Dirubah.');
      }
      else{
      return redirect()->back()->with('error','Terjadi Kesalahan Saat Mengubah Data');
      }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Mapel::findOrFail($id);
         if($id->delete()){
    return redirect()->route('mapel.index')->with('success','Data Berhasil Dihapus.');
 }
 else{
    redirect()->back()->with('error','Terjadi Kesalahan Saat Menghapus Data');
 }
    }

}