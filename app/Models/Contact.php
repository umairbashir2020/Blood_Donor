<?php

namespace App\Models;

use App\Mail\contactUsMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;
    protected $table='contact';

    protected $fillable = [
        'name',
        'email',
        'phone_Number',
        'address',
        'message',
    ];
}
