<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::create(['kode'=>'01', 'nama_prodi'=>'Teknik Infomatika', 'jenjang'=>'D3', 'alias'=>'D3TI']);
        Prodi::create(['kode'=>'02', 'nama_prodi'=>'Manajemen Informatika', 'jenjang'=>'D3', 'alias'=>'D3MI']);
        Prodi::create(['kode'=>'11', 'nama_prodi'=>'Informatika Reguler', 'jenjang'=>'S1', 'alias'=>'S1IF']);
        Prodi::create(['kode'=>'12', 'nama_prodi'=>'Sistem Informasi Reguler', 'jenjang'=>'S1', 'alias'=>'S1SI']);
        Prodi::create(['kode'=>'21', 'nama_prodi'=>'Informatika Transfer', 'jenjang'=>'S1', 'alias'=>'S1IFTR']);
        Prodi::create(['kode'=>'22', 'nama_prodi'=>'Sistem Informasi Transfer', 'jenjang'=>'S1', 'alias'=>'S1SITR']);
        Prodi::create(['kode'=>'60', 'nama_prodi'=>'Bachelor of Computer and Informatics', 'jenjang'=>'S1', 'alias'=>'BCI']);
        Prodi::create(['kode'=>'61', 'nama_prodi'=>'Bachelor of Computer and Information Technology', 'jenjang'=>'S1', 'alias'=>'BCIT']);
        Prodi::create(['kode'=>'62', 'nama_prodi'=>'Bachelor of Computer and Information System', 'jenjang'=>'S1', 'alias'=>'BCIS']);
        Prodi::create(['kode'=>'82', 'nama_prodi'=>'Teknologi Informasi', 'jenjang'=>'S1', 'alias'=>'S1TI']);
        Prodi::create(['kode'=>'83', 'nama_prodi'=>'Teknik Komputer', 'jenjang'=>'S1', 'alias'=>'S1TK']);
    }
}
