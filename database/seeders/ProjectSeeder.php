<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi untuk mengelola data akademik mahasiswa, termasuk pendaftaran mata kuliah, penilaian, dan transkrip.',
                'teknologi' => 'laravel & bootstrap',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'e-Commerce SEO Optimization',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'in progress',
            ],
            [
                'title' => 'Redesign Cover dan Branding',
                'description' => 'perancangan elemen element grafis personal branding dan design sampul buku rekayasa web',
                'teknologi' => 'figma & Canva',
                'image' => 'project3.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Portal Berita Mahasiswa',
                'description' => 'Aplikasi portal berita untuk mahasiswa, menyediakan berita terkini, artikel, dan forum diskusi.',
                'teknologi' => 'laravel & bootstrap',
                'image' => 'project4.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Aplikasi Manajemen Tugas',
                'description' => 'Aplikasi untuk mengelola tugas dan proyek, memungkinkan pengguna untuk membuat, mengatur, dan melacak tugas mereka.',
                'teknologi' => 'laravel & bootstrap',
                'image' => 'project5.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Sistem Informasi Perpustakaan',
                'description' => 'Aplikasi untuk mengelola data buku, peminjaman, dan pengembalian di perpustakaan.',
                'teknologi' => 'laravel & bootstrap',
                'image' => 'project6.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Aplikasi Reservasi Hotel',
                'description' => 'Aplikasi untuk memesan kamar hotel secara online, termasuk fitur pencarian, pemesanan, dan pembayaran.',
                'teknologi' => 'laravel & bootstrap',
                'image' => 'project7.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Sistem Informasi Kesehatan',
                'description' => 'Aplikasi untuk mengelola data pasien, jadwal dokter, dan rekam medis di fasilitas kesehatan.',
                'teknologi' => 'laravel & bootstrap',
                'image' => 'project8.jpg',
                'status' => 'selesai',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
