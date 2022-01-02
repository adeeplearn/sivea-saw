<?php

namespace App\Imports;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DosenImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $this->createUser(
                $this->firstOrCreateDosen($row['nik'], $row['nama']),
                $row['email'],
                $row['password']
            );
        }
    }

    private function firstOrCreateDosen($nik, $nama)
    {
        return $this->dosen[$nik] = Dosen::firstOrCreate(['nik' => $nik], ['nama_dosen' => $nama]);
    }

    private function createUser(Dosen $dosen, $email, $password)
    {
        return User::create([
            'username' => $email,
            'password' => Hash::make($password),
            'dosen_id' => $dosen->id,
            'role' => 'penilai',
        ]);
    }
}
