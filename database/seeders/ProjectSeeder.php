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
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
