<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prodi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'prodi';

    protected $fillable = ['kode', 'nama_prodi', 'jenjang', 'alias'];

    public function matakuliah(){
        return $this->hasMany(Matakuliah::class);
    }
}
