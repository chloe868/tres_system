<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\Exports\UsersExport;

use App\Imports\CsvImport;
use App\tblscholars;
use Maatwebsite\Excel\Facades\Excel;




class CsvFile extends Controller
{
    function index()
    {
        $students = tblscholars::all();
        return view('csvfiles.csv_file',compact('students'));
    }
    public function export(){

        $users = tblscholars::all();
 
        foreach ($users as $user) {
 
                $userData[] = [
                    'ID' => $user->id,
                    'first_name' => $user->first_name,
                    'middle_name' => $user->middle_name,
                    'last_name' => $user->last_name,
                    'email' => $user->email,
                    'contact_number' => $user->contact_number,
                    'batch' => $user->batch,
                ];
            }
 
        // Generate and return the spreadsheet
        Excel::create('users', function ($excel) use ($userData) {
 
            // Build the spreadsheet, passing in the users array
            $excel->sheet('sheet1', function ($sheet) use ($userData) {
                $sheet->fromArray($userData);
            });
 
        })->download('csv');
    }
    //This is a function to import another batch through cvs file
    public function csv_import(){
        Excel::import(new CsvImport,request()->file('file' ));
        $students = tblscholars::all();
        
        return view('student.welcome',compact('students'));
    }
}