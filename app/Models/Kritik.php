<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;

    protected $table='kritik';

    protected $fillable = ['pesan'];

    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
