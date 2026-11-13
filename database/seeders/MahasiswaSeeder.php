<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
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
            Mahasiswa::firstOrCreate(
                ['nim' => $mahasiswa['nim']],
                $mahasiswa
            );
        }
    }
}
