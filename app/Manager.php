<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable = [
        'fname', 'lname', 'username', 'password', 'email', 'phone', 'is_enable', 'last_login_at', 'login_at',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
