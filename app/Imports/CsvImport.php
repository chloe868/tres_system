<?php

namespace App\Imports;

use App\User;
use App\Tblscholars;
use Maatwebsite\Excel\Concerns\ToModel;

class CsvImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public $TimeStamps=false;
    public function model(array $row)
    {

        
        return new Tblscholars([

            'first_name'=>$row[0],
            'middle_name'=>$row[1],
            'last_name'=>$row[2],
            'email'=>$row[3],
            'batch'=>($row[4]),
            'contact_number'=>$row[5]
            
            //
        ]);
    }
}
