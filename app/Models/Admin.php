<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\User as Authenticatable;

// class Admin extends Authenticatable
class Admin extends Model
{
    use HasFactory;
    protected $table='admin_login';


}
