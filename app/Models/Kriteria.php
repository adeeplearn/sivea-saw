<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriteria';
    protected $fillable = ['name', 'type','weight','description'];

    public function subcriteria(){
        return $this->hasMany(SubCriteria::class);
    }

    public function criteriarating(){
        return $this->hasMany(CriteriaRating::class);
    }
}
