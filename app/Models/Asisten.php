<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asisten extends Model
{
    use HasFactory;

    protected $table = 'asisten';
    protected $fillable = ['npm','nama_asisten','phone'];

    public function asisten_matakuliah(){
        return $this->belongsTo(AsistenMatakuliah::class);
    }
}
