<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    use HasFactory;

    protected $table = 'mengajar';

    protected $fillable = ['dosen_id', 'matakuliah_id', 'tahun', 'semester'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }

    // public function asisten_matakuliah()
    // {
    //     return $this->belongsTo(AsistenMatakuliah::class);
    // }

    public function asisten()
    {
        return $this->belongsToMany(Asisten::class, 'asisten_matakuliah');
    }
}
