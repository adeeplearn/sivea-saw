<?php

namespace App\Imports;

use App\Models\Asisten;
use App\Models\Asistensi;
use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Mengajar;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToCollection, WithHeadingRow
{
    private $dosen = [];
    private $matakuliah = [];
    private $mengajar = [];
    private $asisten = [];

    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $this->createAsistensi($this->firstOrCreateMengajar(
                $this->firstOrCreateDosen($row['nik_dosen'], $row['nama_dosen']),
                $this->firstOrCreateMatakuliah($row['kode_matakuliah'], $row['nama_matakuliah'])
            ), $this->firstOrCreateAsisten($row['npm_asisten'], $row['nama_asisten']));
        }
    }

    private function firstOrCreateDosen($nik, $nama)
    {
        if (!isset($this->dosen[$nik])) {
            $this->dosen[$nik] = Dosen::firstOrCreate(['nik' => $nik], ['nama_dosen' => $nama]);
        }

        return $this->dosen[$nik];
    }

    private function firstOrCreateMatakuliah($kode, $nama)
    {
        if (!isset($this->matakuliah[$kode])) {
            $this->matakuliah[$kode] = Matakuliah::firstOrCreate(['alias' => $kode], ['prodi_id' => 1, 'nama_matakuliah' => $nama]);
        }

        return $this->matakuliah[$kode];
    }

    private function firstOrCreateMengajar(Dosen $dosen, Matakuliah $matakuliah)
    {
        $key = $dosen->id . '-' . $matakuliah->id;

        if (!isset($this->mengajar[$key])) {
            $this->mengajar[$key] = Mengajar::firstOrCreate([
                'dosen_id' => $dosen->id,
                'matakuliah_id' => $matakuliah->id,
            ], [
                'tahun' => 2021,
                'semester' => 1,
            ]);
        }

        return $this->mengajar[$key];
    }

    private function firstOrCreateAsisten($npm, $nama)
    {
        if (!isset($this->asisten[$npm])) {
            $this->asisten[$npm] = Asisten::firstOrCreate(['npm' => $npm], ['nama_asisten' => $nama]);
        }

        return $this->asisten[$npm];
    }

    private function createAsistensi(Mengajar $mengajar, Asisten $asisten)
    {
        return Asistensi::create([
            'mengajar_id' => $mengajar->id,
            'asisten_id' => $asisten->id
        ]);
    }
}
