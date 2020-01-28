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
        ->select("t2.month","t2.year","t2.amount","t2.dateofpayment","t2.payid","t1.last_name","t1.first_name","t1.middle_name")
        ->get()
        ->toArray();

        
        if($students!=[]){
            return view('student.summary',compact('students'));
        }else{
            return redirect()->back()->with('alert', 'Wala paygibayad');
        }
            
          
            
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
    public function pay($id){
        $student = tblscholars::find($id);
        return view('student.pay',compact('student'));
    }
    public function summarybatch($batch){
        // $students= tblscholars::orderBy('batch','desc')->get();
        $students =tblscholars::where('batch',$batch)->get();
        $student = DB::table('tblpayments')
        ->join('tblscholars', 'tblpayments.payid', '=', 'tblscholars.id')
        ->where('tblscholars.batch', '=', $batch)
        ->sum('tblpayments.amount');
        // return redirect()->back()->with('alert', 'The total amount is '.$students.' pesos');
        return view('student.summarybatch',compact('students'));
    }
    public function total($id)
    {
          // $students = tblscholars::all();
          $students = DB::table('tblpayments')
          ->join('tblscholars', 'tblpayments.payid', '=', 'tblscholars.id')
          ->where('tblscholars.id', '=', $id)
          ->sum('tblpayments.amount');
          return redirect()->back()->with('alert', 'The total amount is '.$students.' pesos');             
    }
    function summaryYear($batch ){
        // $myMonth = $request->get('year');
        $students = DB::table('tblpayments')
        ->join('tblscholars', 'tblpayments.payid', '=', 'tblscholars.id')
        ->where('tblscholars.batch', '=', $batch)
        ->sum('tblpayments.amount');
        return redirect()->back()->with('alert', 'The total amount is '.$students.' pesos');
    }
    function summaryMonth($month ){
        // $myMonth = $request->get('year');
        $students = DB::table('tblpayments')
        ->join('tblscholars', 'tblpayments.payid', '=', 'tblscholars.id')
        ->where('tblpayments.month', '=', $month)
        ->sum('tblpayments.amount');
        return redirect()->back()->with('alert', 'The total amount is '.$students.' pesos');
        // dd($students);
    }
    function displayByMonth($month){
        $students =tblpayments::where('month',$month)->get();
        // return redirect()->back()->with('alert', 'The total amount is '.$students.' pesos');
        return view('student.summaryMonth',compact('students'));
    }
    function summaryDate(Request $request){
        $date=strtotime($request->get('date'));
        $dates=date('Y-m-d',$date);
        $student = DB::table('tblpayments')
        ->join('tblscholars', 'tblpayments.payid', '=', 'tblscholars.id')
        ->select('tblpayments.dateofpayment')
        ->where('tblpayments.dateofpayment', '=', $dates)
        ->sum('tblpayments.amount');
        return redirect()->back()->with('alert', 'The total amount is '.$students.' pesos');
    }
    function displayByDate(Request $request){
        $date=strtotime($request->get('date'));
        $dates=date('Y-m-d',$date);
        $students =tblpayments::where('dateofpayment',$dates)->get();
        return view('student.summaryDate',compact('students'));
    }
        
      
}
