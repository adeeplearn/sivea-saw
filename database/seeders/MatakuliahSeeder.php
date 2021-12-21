<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::where('kode', '01')->first()->matakuliah()->saveMany([
            new Matakuliah(['alias' => 'DT015', 'sks'=>'2', 'nama_matakuliah' => 'STRUKTUR DATA']),
            new Matakuliah(['alias' => 'DT019', 'sks'=>'2', 'nama_matakuliah' => 'SISTEM OPERASI']),
            new Matakuliah(['alias' => 'DT026', 'sks'=>'2', 'nama_matakuliah' => 'PRAKTIKUM HARDWARE/SOFTWARE']),
            new Matakuliah(['alias' => 'DT029', 'sks'=>'2', 'nama_matakuliah' => 'KOMPUTER GRAFIS']),
            new Matakuliah(['alias' => 'DT063', 'sks'=>'2', 'nama_matakuliah' => 'PEMROGRAMAN BERORIENTASI OBJEK I']),
            new Matakuliah(['alias' => 'DT068', 'sks'=>'2', 'nama_matakuliah' => 'PEMROGRAMAN BERORIENTASI OBJEK II']),
            new Matakuliah(['alias' => 'DT082', 'sks'=>'2', 'nama_matakuliah' => 'PEMROGRAMAN BERBASIS CLIENT/SERVER']),
            new Matakuliah(['alias' => 'DT087', 'sks'=>'2', 'nama_matakuliah' => 'PROYEK PEMROGRAMAN WEB']),
            new Matakuliah(['alias' => 'DT089', 'sks'=>'2', 'nama_matakuliah' => 'STATISTIK']),
            new Matakuliah(['alias' => 'DT073', 'sks'=>'2', 'nama_matakuliah' => 'JARINGAN KOMPUTER III']),
            new Matakuliah(['alias' => 'DT086', 'sks'=>'2', 'nama_matakuliah' => 'PROYEK MULTIMEDIA']),
        ]);

        Prodi::where('kode', '12')->first()->matakuliah()->saveMany([
            new Matakuliah(['alias' => 'SI037', 'sks'=>'2', 'nama_matakuliah' => 'PEMROGRAMAN CLIENT SERVER']),
            new Matakuliah(['alias' => 'SI017', 'sks'=>'2', 'nama_matakuliah' => 'KOMPUTER GRAFIS']),
            new Matakuliah(['alias' => 'SI021', 'sks'=>'2', 'nama_matakuliah' => 'PENGELELOLAAN INSTALASI KOMPUTER']),
            new Matakuliah(['alias' => 'SI032', 'sks'=>'2', 'nama_matakuliah' => 'JARINGAN KOMPUTER']),
            new Matakuliah(['alias' => 'SI069', 'sks'=>'2', 'nama_matakuliah' => 'STATISTIKA']),
            new Matakuliah(['alias' => 'SI076', 'sks'=>'2', 'nama_matakuliah' => 'PERANCANGAN BASIS DATA']),
            new Matakuliah(['alias' => 'SI085', 'sks'=>'2', 'nama_matakuliah' => 'BAHASA PEMROGRAMAN II']),
            new Matakuliah(['alias' => 'SI091', 'sks'=>'2', 'nama_matakuliah' => 'SISTEM INFORMASI AKUNTANSI']),
            new Matakuliah(['alias' => 'SI018', 'sks'=>'2', 'nama_matakuliah' => 'PEMROGRAMAN TERSTRUKTUR']),
            new Matakuliah(['alias' => 'SI087', 'sks'=>'2', 'nama_matakuliah' => 'PEMROGRAMAN WEB LANJUT']),
            new Matakuliah(['alias' => 'SI094', 'sks'=>'2', 'nama_matakuliah' => 'CREATIVE MULTIMEDIA']),
            new Matakuliah(['alias' => 'SI095', 'sks'=>'2', 'nama_matakuliah' => 'CONCEPT ART ANIMATION']),
            new Matakuliah(['alias' => 'SI096', 'sks'=>'2', 'nama_matakuliah' => 'GAME PROGRAMMING']),
            new Matakuliah(['alias' => 'SI054', 'sks'=>'2', 'nama_matakuliah' => 'E-COMMERCE']),
        ]);
    }
}
