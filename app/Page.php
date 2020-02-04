<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends Model {

   // Fetch all users
   public static function getUsers(){

     $records = DB::table('tblscholars')->select('first_name','middle_name','last_name','batch','contact_number','email')->orderBy('id', 'asc')->get()->toArray();

     return $records;
   }

}