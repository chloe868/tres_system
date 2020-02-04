<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tblscholars;
use App\tblpayments;
use Session;
use Illuminate\Support\Facades\DB;
class PaymentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    //This is a function to store the students information to the database
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'batch' => 'required',
            'contact_number'=> 'required|digits:11',
            'email' => 'required','unique',
        ]);
        $student = new tblscholars([
            'first_name' => $request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'last_name' => $request->get('last_name'),
            'batch' => $request->get('batch'),
            'contact_number' => $request->get('contact_number'),
            'email' => $request->get('email'), 
        ]);
        $student->save();
        Session::flash('success','Student Successfully Added');
        return redirect('/list');
    }

    //This is a function to wiew all list of student in the database
    
    public function welcome(Request $request){
        $students = tblscholars::with('payment')->orderBy('batch','DESC')->get();
            return view('student.welcome',compact('students'))->with('no',1); 
    }
    
}