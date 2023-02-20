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
        'doctor_notes',
        'doctor',
        'user_id',
        'name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }
}
