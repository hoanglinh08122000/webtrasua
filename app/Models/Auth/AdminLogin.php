<?php

namespace App\Models\Auth;

use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

class AdminLogin extends User
{
    use Notifiable;
    protected $table = 'admin';
    protected $guard = 'admin';
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone',
        'level',
        'email',
        'password'
        
    ];

    protected $hidden = [
        'password',
        
    ];
}