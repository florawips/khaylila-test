<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Guru::insert([
                ['nip' => '198501012010011001', 'nama_guru' => 'Dindin Jalaludin', 'jenis_kelamin' => 'L', 'no_hp' => '081234567801', 'email' => 'dindin.jalaludin@example.com'],
                ['nip' => '198402152009021002', 'nama_guru' => 'Hendri Puryantono', 'jenis_kelamin' => 'L', 'no_hp' => '081234567802', 'email' => 'hendri.puryantono@example.com'],
                ['nip' => '197903102008011003', 'nama_guru' => 'Moh. Talifin', 'jenis_kelamin' => 'L', 'no_hp' => '081234567803', 'email' => 'moh.talifin@example.com'],
                ['nip' => '198608202011011004', 'nama_guru' => 'Doni Hermawan', 'jenis_kelamin' => 'L', 'no_hp' => '081234567804', 'email' => 'doni.hermawan@example.com'],
                ['nip' => '198912122012022005', 'nama_guru' => 'Fatimah Qurota Aini', 'jenis_kelamin' => 'P', 'no_hp' => '081234567805', 'email' => 'fatimah.qurotaaini@example.com'],
                ['nip' => '199001182013022006', 'nama_guru' => 'Seffy Kusuma Ningrum', 'jenis_kelamin' => 'P', 'no_hp' => '081234567806', 'email' => 'seffy.kusumaningrum@example.com'],
                ['nip' => '197811052006022007', 'nama_guru' => 'MM Endang Lugyanti', 'jenis_kelamin' => 'P', 'no_hp' => '081234567807', 'email' => 'endang.lugyanti@example.com'],
                ['nip' => '197605142005011008', 'nama_guru' => 'Sumarjo', 'jenis_kelamin' => 'L', 'no_hp' => '081234567808', 'email' => 'sumarjo@example.com'],
                ['nip' => '198305252009022009', 'nama_guru' => 'Nur Hidayati', 'jenis_kelamin' => 'P', 'no_hp' => '081234567809', 'email' => 'nur.hidayati@example.com'],
                ['nip' => '198707102010011010', 'nama_guru' => 'Heru Tri Septiyanto', 'jenis_kelamin' => 'L', 'no_hp' => '081234567810', 'email' => 'heru.septiyanto@example.com'],
                ['nip' => '199105152014022011', 'nama_guru' => 'Alis Nihlatin Nisa', 'jenis_kelamin' => 'P', 'no_hp' => '081234567811', 'email' => 'alis.nisa@example.com'],
                ['nip' => '199211202015022012', 'nama_guru' => 'Nur Aisyah', 'jenis_kelamin' => 'P', 'no_hp' => '081234567812', 'email' => 'nur.aisyah@example.com'],
                ['nip' => '199304082016022013', 'nama_guru' => 'Mia Lestari', 'jenis_kelamin' => 'P', 'no_hp' => '081234567813', 'email' => 'mia.lestari@example.com'],
        ]);
    }
}
