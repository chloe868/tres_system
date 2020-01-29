<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'name',
        'username',
        'password',
    ];
}
