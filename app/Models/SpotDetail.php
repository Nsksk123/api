<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpotDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'spot',
        'vaccinations_count',
        'spot_id',
    ];

    protected $hidden = [

    ];
}
