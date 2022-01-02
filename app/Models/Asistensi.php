<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistensi extends Model
{
    use HasFactory;

    protected $table = 'asistensis';
    protected $fillable = ['mengajar_id', 'asisten_id'];

    public function mengajar()
    {
        return $this->belongsTo(Mengajar::class);
    }

    public function asisten()
    {
        return $this->belongsTo(Asisten::class);
    }

    public function alternative_scores()
    {
        return $this->hasMany(AlternativeScore::class);
    }
}
