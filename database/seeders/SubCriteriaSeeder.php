<?php

namespace Database\Seeders;

use App\Models\CriteriaWeight;
use App\Models\SubCriteria;
use Illuminate\Database\Seeder;

class SubCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CriteriaWeight::where('name','Microteach')->first()->subcriteria()->saveMany([
            new SubCriteria(['poin_penilaian'=>'Menilai kemampuan presentasi dan memberi penjelasan']),
            new SubCriteria(['poin_penilaian'=>'Menilai penguasaan materi praktikum']),
        ]);
        CriteriaWeight::where('name','Perilaku')->first()->subcriteria()->saveMany([
            new SubCriteria(['poin_penilaian'=>'Menilai kerapian penampilan asisten praktikum']),
            new SubCriteria(['poin_penilaian'=>'Menilai sikap asisten terhadap dosen dan mahasiswa/praktikan']),
        ]);
        CriteriaWeight::where('name','Kedisiplinan')->first()->subcriteria()->saveMany([
            new SubCriteria(['poin_penilaian'=>'Respon ketepatan waktu asisten serta kehadiran sesuai jadwal']),
            new SubCriteria(['poin_penilaian'=>'Ketaatan sesuai peraturan asisten yang berlaku']),
        ]);
        CriteriaWeight::where('name','Keahlian')->first()->subcriteria()->saveMany([
            new SubCriteria(['poin_penilaian'=>'Mengoperasikan properti lab praktikum dengan baik']),
            new SubCriteria(['poin_penilaian'=>'Keaktifan asisten serta kontribusi yang diberikan']),
        ]);
        CriteriaWeight::where('name','Rekomendasi')->first()->subcriteria()->saveMany([
            new SubCriteria(['poin_penilaian'=>'Rekomendasi asisten terbaik']),
        ]);
    }
}
