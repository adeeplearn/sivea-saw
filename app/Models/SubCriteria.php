<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCriteria extends Model
{
    use HasFactory;

    protected $table = 'subcriterias';
    protected $fillable = ['criteria_id', 'poin_penilaian'];

    public function criteria(){
        return $this->belongsTo(CriteriaWeight::class, 'criteria_id');
    }
}
