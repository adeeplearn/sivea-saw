<?php

namespace Database\Seeders;

use App\Models\CriteriaRating;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        return $this->call([
            ProdiSeeder::class,
            MatakuliahSeeder::class,
            DosenSeeder::class,
            AsistenSeeder::class,
            CriteriaWeightSeeder::class,
            SubCriteriaSeeder::class,
//            CriteriaRatingSeeder::class,
        ]);
    }
}
