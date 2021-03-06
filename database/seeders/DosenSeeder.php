<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create(['nik'=>'190302240','nama_dosen'=>'Alfie Nur Rahmi, M.Kom.','email'=>'alfienurrahmi@amikom.ac.id','phone'=>'085878185070']);
        Dosen::create(['nik'=>'190302253','nama_dosen'=>'Donni Prabowo, M. Kom','email'=>'donniprabowo@amikom.ac.id','phone'=>'085643589725']);
        Dosen::create(['nik'=>'190302288','nama_dosen'=>'Lilis Dwi Farida, S.Kom., M.Eng.','email'=>'rida@amikom.ac.id','phone'=>'081227658433']);
        Dosen::create(['nik'=>'190302126','nama_dosen'=>'Barka Satya,M.Kom.','email'=>'barka.satya@amikom.ac.id','phone'=>'0811268949']);
        Dosen::create(['nik'=>'190302238','nama_dosen'=>'Acihmah Sidauruk M.kom.','email'=>'acihmah@amikom.ac.id','phone'=>'081225694143']);
        Dosen::create(['nik'=>'190302242','nama_dosen'=>'Agung Nugroho, M.Kom.','email'=>'agungnugroho@amikom.ac.id','phone'=>'085643857474']);
    }
}
