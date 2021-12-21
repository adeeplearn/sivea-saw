<?php

namespace Database\Seeders;

use App\Models\CriteriaWeight;
use Illuminate\Database\Seeder;

class CriteriaWeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CriteriaWeight::create(
            [
                'name'=>'Microteach',
                'type'=>'benefit',
                'weight'=>'0.25',
                'description'=>'Kemampuan microteach merupakan modal utama yang sangat diperlukan
oleh seorang asisten praktikum untuk membantu proses kegiatan kelas
praktikum. Ketentuan kriteria microteach yang dimaksud untuk menilai
sejauh mana kemampuan seorang asisten praktikum dalam menguasai materi
perkuliahan dan bagaimana caranya merepresentasikan kepada praktikan.'
            ]
        );
        CriteriaWeight::create(
            [
                'name'=>'Perilaku',
                'type'=>'benefit',
                'weight'=>'0.25',
                'description'=>'Perilaku merupakan faktor penting yang sudah seharusnya perlu perhatian
setiap asisten praktikum. karena faktor ini dapat menjadi suatu hal yang
dapat dijadikan contoh teladan oleh para mahasiswa/praktikan. seorangasisten praktikum diharapkan bisa memberikan contoh berpenampilan rapi,
bersikap yang baik serta mampu memotivasi untuk hal-hal yang baik.'
            ]
        );
        CriteriaWeight::create(
            [
                'name'=>'Kedisiplinan',
                'type'=>'benefit',
                'weight'=>'0.20',
                'description'=>'Ketentuan kriteria kedisiplinan yang dimaksud disini adalah bagaimanakah
respon seorang asisten praktikum terhadap ketepatan waktu, tanggung jawab
terhadap jadwal yang dimiliki dan kesadaran akan atribut yang wajib
digunakan ketika di lab sesuai dengan peraturan yang dimiliki forum asisten.'
            ]
        );
        CriteriaWeight::create(
            [
                'name'=>'Keahlian',
                'type'=>'benefit',
                'weight'=>'0.15',
                'description'=>'Keahlian tidak lain berkaitan dengan kinerja asisten dalam sebelum dan
sesudah kegiatan kelas praktikum berlangsung. Keahlian yang dimaksud
adalah bagaimana seorang asisten praktikum memberikan kemampuan
terbaik yang dimiliki untuk membantu dalam kegiatan kelas praktikum.'
            ]
        );
        CriteriaWeight::create(
            [
                'name'=>'Rekomendasi',
                'type'=>'benefit',
                'weight'=>'0.15',
                'description'=>'Ketentuan kriteria rekomendasi yang dimaksud disini ialah apresiasi nilai
tambah atau rekomendasi asisten terbaik yang diberikan oleh penilai kepada
salah satu asisten praktikum yang dinilai telah memberikan kemampuan
secara optimal selama satu semester.'
            ]
        );
    }
}
