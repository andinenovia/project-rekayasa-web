<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700304',
            'nama' => 'Andine Novia Azizah',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'andinenovia12@gmail.com',
            'status' => 'aktif',
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}
