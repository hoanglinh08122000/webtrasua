<?php

namespace App\Models\Auth;

use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

class CustomerLogin extends User
{
    use Notifiable;
    protected $table = 'customer';
    protected $guard = 'customer';
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone',
        'email',
        'password'
        
    ];

    // protected $hidden = [
    //     'password'
        
    // ];
}
