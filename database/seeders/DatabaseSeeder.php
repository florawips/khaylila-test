<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => '198501012010011001',
            'nama' => 'Dindin Jalaludin',
            'password' => '$2y$12$553W6cjRvS3K8CJHCfK4kuxbiZUp357on0pDo8pUCpQ2Xm6uG6Icq',
            'role' => 'guru'
        ]);
                                                                                          
        $this->call([
            SiswaSeeder::class,
            MapelSeeder::class,
            GuruSeeder::class,
        ]);
    }
}
