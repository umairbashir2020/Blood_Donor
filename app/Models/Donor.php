<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $table='donor';

    public function city()
    {
        return $this->hasOne(City::class,'id','city_id');
    }

    public function donor()
    {
        return $this->hasOne(Blood::class,'id','blood_group_id');
    }


}

