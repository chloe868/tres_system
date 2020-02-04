<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblpayments extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'payid',
        'month',
        'year',
        'amount',
        'dateofpayment',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

   
}
