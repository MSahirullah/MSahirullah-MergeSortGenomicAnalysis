<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sms extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'login_username',
        'login_password',
        'access_token',
        'refresh_token'
    ];
}
