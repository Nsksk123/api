<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccines extends Model
{
    use HasFactory;
    protected $fillable = [
        'Sinovac',
        'Astrazenaca',
        'Moderna',
        'Pfizer',
        'Sinnopharm',
    ];

    protected $hidden = [
        "id",
            "spot_id",
            "created_at",
            "updated_at",
    ];

    public function vaccines(){
        return $this->belongsTo(Vaccines::class);
    }
}

