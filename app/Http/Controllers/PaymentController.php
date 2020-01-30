<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblscholars;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PaymentRequest;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(PaymentRequest $request)
    {

        $student = [];
        $data = $request->all();
        $student['first_name'] = $data['first_name'];
        $student['middle_name'] = $data['middle_name'];
        $student['last_name'] = $data['last_name'];
        $student['batch'] = $data['batch'];
        $student['contact_number'] = $data['contact_number'];
        $student['email'] = $data['email'];
       
        
        $save = tblscholars::create($student);
        $save->save();
        return redirect('/welcome');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $scholars = tblscholars::find($id);
        if(!$scholars){
            return abort(404);
        }
        
        return view('scholars.edit',compact('scholars'));
    }

    public function update(PaymentRequest $request, $id)
    {

        $data = $request->all();
        $student = tblscholars::find($id);
        $student->first_name = $data['first_name'];
        $student->middle_name= $data['middle_name'];
        $student->last_name = $data['last_name'];
        $student->age =$data['age'];
        $student->gender = $data['gender'];
        $student->email = $data['email'];
        
        $student->save();
        return redirect('/welcome')->with('success','Student Updated');
    }

    public function destroy($id)
    {
        //
    }
    public function welcome(Request $request){
        $scholars= tblscholars::orderBy('batch','desc')->get();
        return view('student.welcome',compact('scholars'));
    }

    public function searchcontent(Request $request){

        $student =tblscholars::where('last_name','like','%' .$request.'%')->orderBy('id')->paginate(5); 
        return view('student.searchcontent',['student'=>$student]);
    }

    public function delete($id){
        DB::table('students')->where('id',$id)->delete();
        return redirect('/welcome');

    }

}