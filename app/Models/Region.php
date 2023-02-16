<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = [
        'province',
        'district',
        'user_id'
    ];

    public function societies(){
        return $this->hasMany(Society::class);
    }
}
