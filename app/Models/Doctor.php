<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_card', 'nama', 'password', 'status', 'consultation_id',
    ];


    public function consulation(){
        return $this->belongsTo(Consultation::class);
    }
}