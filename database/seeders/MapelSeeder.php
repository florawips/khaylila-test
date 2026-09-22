<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    Mapel::insert([
        ['nama_mapel' => 'PAI', 'jumlah_jam' => 3],
        ['nama_mapel' => 'PKN', 'jumlah_jam' => 2],
        ['nama_mapel' => 'Bahasa Indonesia', 'jumlah_jam' => 3],
        ['nama_mapel' => 'PJOK', 'jumlah_jam' => 3],
        ['nama_mapel' => 'Sejarah', 'jumlah_jam' => 2],
        ['nama_mapel' => 'Seni', 'jumlah_jam' => 2],
        ['nama_mapel' => 'Bahasa Jawa', 'jumlah_jam' => 2],
        ['nama_mapel' => 'Matematika', 'jumlah_jam' => 3],
        ['nama_mapel' => 'Bahasa Inggris', 'jumlah_jam' => 3],
        ['nama_mapel' => 'Informatika', 'jumlah_jam' => 4],
        ['nama_mapel' => 'Projek IPAS', 'jumlah_jam' => 3],
        ['nama_mapel' => 'Pemrograman Web', 'jumlah_jam' => 7],
        ['nama_mapel' => 'Basis Data', 'jumlah_jam' => 4],
        ['nama_mapel' => 'Pemodelan Perangkat Lunak', 'jumlah_jam' => 7],
        ['nama_mapel' => 'PKWU', 'jumlah_jam' => 4],
        ['nama_mapel' => 'Robotika', 'jumlah_jam' => 2],
    ]);
    }
}