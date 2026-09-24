<?php

namespace App\Http\Controllers;

use App\Http\Requests\JadwalRequest;
use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Mapel;
use App\Models\MapelGuru;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $search = $request->get('search');
        $data = Jadwal::when($search, function ($query, $search) {
            return $query->where('hari', 'like', "%{$search}%")
                          ->orWhere('jam_ke', 'like', "%{$search}%");
        })->paginate($perPage);

        return view('admin.konten.jadwal.index', compact('data', 'perPage', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['guru'] = Guru::all();
        $data ['mapel'] = Mapel::all();
        return view('admin.konten.jadwal.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JadwalRequest $request)
    {
        $mapelGuru = MapelGuru::firstOrcreate([
            'guru_id'          => $request['guru_id'],
            'mapel_id'          => $request['mapel_id'],
        ]);
        if ($mapelGuru) {
            $jadwal =Jadwal::create([
                'hari'  => $request['hari'],
                'jam_ke'  => $request['jam_ke'],
                'mapel_guru_id'  => $mapelGuru->id,
            ]);
        }
        if ($jadwal) {
            return redirect()->route('jadwal.index')->with('success', 'Data Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Saat Menyimpan Data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Jadwal::findOrFail($id);
        return view('admin.konten.jadwal.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
        public function edit(string $id)
    {
        $data['data'] = Jadwal::findOrFail($id);
        $data['guru'] = Guru::all();
        $data['mapel'] = Mapel::all();
        return view('admin.konten.jadwal.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(JadwalRequest $request, $id)
    {
        // 1. Cari data jadwal berdasarkan ID
        $jadwal = Jadwal::findOrFail($id);
        // Simpan relasi MapelGuru lama (opsional, jika ingin mengecek orphaned data nanti)
        $oldMapelGuruId = $jadwal->mapel_guru_id;
        // 2. Cari data MapelGuru berdasarkan input baru, atau buat jika belum ada kombinasi tersebut
        $mapelGuru = MapelGuru::firstOrCreate([
            'guru_id'  => $request->guru_id,
            'mapel_id' => $request->mapel_id,
        ]);
        // 3. Update data jadwal yang ditemukan
        $updateStatus = $jadwal->update([
            'hari'          => $request->hari,
            'jam_ke'        => $request->jam_ke,
            'mapel_guru_id' => $mapelGuru->id,
        ]);
        // 4. Cek status update dan kembalikan response
        if ($updateStatus) {
            // (Opsional) Cek apakah MapelGuru lama tidak dipakai lagi, lalu hapus agar tabel tetap bersih
            $sisaJadwalLama = Jadwal::where('mapel_guru_id', $oldMapelGuruId)->count();
            if ($sisaJadwalLama === 0 && $oldMapelGuruId !== $mapelGuru->id) {
                MapelGuru::where('id', $oldMapelGuruId)->delete();
            }
            return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data jadwal.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(string $id)
    {
        // 1. Cari data jadwal yang ingin dihapus
        $jadwal = Jadwal::findOrFail($id);

        // Simpan instance MapelGuru sebelum jadwal dihapus
        $mapelGuru = $jadwal->mapelGuru;

        // 2. Hapus data Jadwal terlebih dahulu agar tidak terjadi error relasi database
        $jadwal->delete();

        // 3. Evaluasi dan hapus MapelGuru
        if ($mapelGuru) {
            // Cek apakah MapelGuru ini masih dipakai oleh jadwal lain?
            // (Misal: Guru mengajar mapel yang sama di hari/jam yang berbeda)
            $sisaJadwal = Jadwal::where('mapel_guru_id', $mapelGuru->id)->count();

            // Jika tidak ada jadwal lain yang memakai, hapus MapelGuru
            if ($sisaJadwal === 0) {
                $mapelGuru->delete();
            }
        }

        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil dihapus.');
    }

}