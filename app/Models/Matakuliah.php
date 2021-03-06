<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    protected $fillable = ['prodi_id', 'alias', 'nama_matakuliah', 'sks'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function mengajar()
    {
        return $this->hasMany(Mengajar::class);
    }
}
