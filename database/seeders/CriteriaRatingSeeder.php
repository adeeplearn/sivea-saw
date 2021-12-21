<?php

namespace Database\Seeders;

use App\Models\CriteriaRating;
use App\Models\CriteriaWeight;
use Illuminate\Database\Seeder;

class CriteriaRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CriteriaWeight::where('name','Microteach')->first()->subcriteria()->saveMany([
            new CriteriaRating(['rating'=>'0.2','description'=>'Kurang Baik']),
            new CriteriaRating(['rating'=>'0.4','description'=>'Cukup Baik']),
            new CriteriaRating(['rating'=>'0.6','description'=>'Baik']),
            new CriteriaRating(['rating'=>'0.8','description'=>'Sangat Baik']),
            new CriteriaRating(['rating'=>'1','description'=>'Memuaskan']),
        ]);
        CriteriaWeight::where('name','Perilaku')->first()->subcriteria()->saveMany([
            new CriteriaRating(['rating'=>'0.2','description'=>'Kurang Baik']),
            new CriteriaRating(['rating'=>'0.4','description'=>'Cukup Baik']),
            new CriteriaRating(['rating'=>'0.6','description'=>'Baik']),
            new CriteriaRating(['rating'=>'0.8','description'=>'Sangat Baik']),
            new CriteriaRating(['rating'=>'1','description'=>'Memuaskan']),
        ]);
        CriteriaWeight::where('name','Kedisiplinan')->first()->subcriteria()->saveMany([
            new CriteriaRating(['rating'=>'0.2','description'=>'Kurang Baik']),
            new CriteriaRating(['rating'=>'0.4','description'=>'Cukup Baik']),
            new CriteriaRating(['rating'=>'0.6','description'=>'Baik']),
            new CriteriaRating(['rating'=>'0.8','description'=>'Sangat Baik']),
            new CriteriaRating(['rating'=>'1','description'=>'Memuaskan']),
        ]);
        CriteriaWeight::where('name','Keahlian')->first()->subcriteria()->saveMany([
            new CriteriaRating(['rating'=>'0.2','description'=>'Kurang Baik']),
            new CriteriaRating(['rating'=>'0.4','description'=>'Cukup Baik']),
            new CriteriaRating(['rating'=>'0.6','description'=>'Baik']),
            new CriteriaRating(['rating'=>'0.8','description'=>'Sangat Baik']),
            new CriteriaRating(['rating'=>'1','description'=>'Memuaskan']),
        ]);
        CriteriaWeight::where('name','Rekomendasi')->first()->subcriteria()->saveMany([
            new CriteriaRating(['rating'=>'0.2','description'=>'Tidak']),
            new CriteriaRating(['rating'=>'0.6','description'=>'Ya']),
        ]);
    }
}
