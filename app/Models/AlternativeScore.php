<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativeScore extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'alternativescores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'asistensi_id',
        'subcriteria_id',
        'rating_id',
        'pesan',
    ];

    public function asistensi()
    {
        return $this->belongsToMany(Asistensi::class);
    }

    public function rating()
    {
        return $this->belongsTo(CriteriaRating::class);
    }

    public function subcriteria()
    {
        return $this->belongsTo(SubCriteria::class);
    }
}
