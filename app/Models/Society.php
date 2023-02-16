<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Society extends Model
{
    use HasApiTokens , HasFactory;

    protected $fillable = [
        'name',
        'id_card',
        'password',
        'gender',
        'addres',
        'regional',
    ];

    protected $hidden = [
        'id_card',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'region_id',
    ];

    public function regions(){
        return $this->hasMany(Region::class);
    }
}
