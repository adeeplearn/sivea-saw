<?php

namespace Database\Seeders;

use App\Models\Asisten;
use Illuminate\Database\Seeder;

class AsistenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asisten::create(['npm'=>'14.02.8845', 'nama_asisten'=>'Denni Septiono', 'phone'=>'']);
        Asisten::create(['npm'=>'14.12.8270', 'nama_asisten'=>'Defri Anshory', 'phone'=>'']);
        Asisten::create(['npm'=>'14.12.8280', 'nama_asisten'=>'Galang Adi Puranto', 'phone'=>'']);
    }
}
