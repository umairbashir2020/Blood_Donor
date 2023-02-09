<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\feedBackMail;

class Feedback extends Model
{
    use HasFactory;
    protected $table='feedback';
    // mycode
    public static function boot() {

        parent::boot();

        static::created(function ($data) {
            $adminEmail = "umairbashir2020@gmail.com";
            Mail::to($adminEmail)->send(new feedBackMail($data));
        });
    }
    // mycode ends
}
