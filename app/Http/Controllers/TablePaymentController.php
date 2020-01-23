<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\tblpayments;
use App\tblscholars;
class TablePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function summary($id)
    {
          // $students = tblscholars::all();
        
   $students= DB::table('tblscholars as t1')

       ->join("tblpayments as t2", "t2.payid","=","t1.id")  
       ->where('t1.id', '=', $id)

  ->select("t2.month","t2.year","t2.amount","t2.dateofpayment","t2.payid")
       
  
        
   
  
         ->get()->toArray();
       return view('student.summary',compact('students'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stores(Request $request,$id)
    {
        $this->validate($request,[
          
            'month' => 'required',
            'year' => 'required',
            'amount' => 'required',
            'dateofpayment'=> 'required',
         
            
            

        ]);
        $student = new tblpayments([
            'payid' => $id,
            'month' => $request->get('month'),
            'year' => $request->get('year'),
            'amount' => $request->get('amount'),
            'dateofpayment' => $request->get('dateofpayment'),
            
            
           
            
        ]);
        $student->save();
        // return redirect()->route('welcome');
        return redirect('/welcome');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function pay($id){

        $student = tblscholars::find($id);
        return view('student.pay',compact('student'));
    }

   
        
      
}
