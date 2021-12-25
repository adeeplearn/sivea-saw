<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriaWeight extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'criteriaweights';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'weight',
        'description',
    ];

    public function subcriteria()
    {
        return $this->hasMany(SubCriteria::class);
    }

    public function criteriarating()
    {
        return $this->hasMany(CriteriaRating::class, 'criteria_id');
    }
}
