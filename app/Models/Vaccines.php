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
            "created_at",
            "updated_at",
    ];

    public function spot(){
        return $this->hasMany(Spot::class);
    }
}

