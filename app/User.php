<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 
    protected $remember_token = false;

    protected $fillable = [
        'first_name','middle_name','last_name','contact_number','batch', 'email', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
