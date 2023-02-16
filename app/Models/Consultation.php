<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'disease_history',
        'current_symptoms',
        'doctor_note',
        'doctor',
        'user_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function user(){
        return $this->hasOne(User::class);
    }
}
