<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblscholars;
use App\tblpayments;
use Illuminate\Support\Facades\DB;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     //Store the inputed data in the db
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
        // $ID=$student->id;
        // $students = new tblpayments([
        //     'month' => '0',
        //     'payid' => $ID,
        //     'year' => 0,
        //     'amount' => 0,
        //     'dateofpayment' => date('Y-m-d H:i:s'),   
        // ]);
        // $students->save();     
        // return redirect()->route('welcome');
        return redirect('/welcome');

        // return redirect()->routes('student.create')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id){
        $student = tblscholars::find($id);
        if(!$student){
            return abort(404);
        }
        // DB::table('students')->where('id',$id)->update();
        return view('student.edit',compact('student'));
        // return view('student.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //update 
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'batch' => 'required',
            'contact_number'=> 'required|numeric|min:11|max:12',
            'email' => 'required','unique',
            

        ]); 
        $student = tblscholars::find($id);
        $student->first_name = $request->get('first_name');
        $student->middle_name= $request->get('middle_name');
        $student->last_name = $request->get('last_name');
        $student->age =$request->get('batch');
        $student->gender = $request->get('contact_number');
    
        $student->email = $request->get('email');
        
        $student->save();
        return redirect('/welcome')->with('success','Student Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     //welcome Home page
    
    public function welcome(Request $request){
        $students = Tblscholars::with('payment')->orderBy('batch','DESC')->get();
            return view('student.welcome',compact('students'));
      
        
      
    }
    //Delete function

    public function delete($id){
        DB::table('students')->where('id',$id)->delete();
        return redirect('/welcome');

    }
public function summaries(){
    $students = Tblscholars::with('payment')->orderBy('batch','DESC')->get();
    $payments = Tblpayments::all();
    $batch="";
    $batchdatas=[];
    foreach($students as $stud){
        if(($stud->batch)!=$batch){
            $batch=$stud->batch;
            
        }else{
            continue;
        }  
        array_push($batchdatas,$stud->batch); 
    }
    return view('student.summaries',compact('students','batchdatas'));

}



    



    
}
