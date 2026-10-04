<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $mahasiswas = [
            [
                'nim' => '251011700304',
                'nama' => 'Andine Novia Azizah',
                'prodi' => 'Sistem Informasi',
                'kampus' => 'Universitas Pamulang',
                'email' => 'andinenovia12@gmail.com',
                'status' => 'aktif',
            ],
        ];

        foreach ($mahasiswas as $mahasiswa) {
            \App\Models\Mahasiswa::create($mahasiswa);
        }
                
    }
}
