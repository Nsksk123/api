<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'serve',
        'capacity',
        'available_vaccines'
    ];

    public function spot(){
        return $this->belongsTo(User::class);
    }




}
