<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use App\tblpayments;
use App\tblscholars;
class TablePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //This is a summary for the every student how much they pay
    
    public function summary($id)
    {
        $students= DB::table('tblscholars as t1')
            ->join("tblpayments as t2", "t2.payid","=","t1.id")  
            ->where('t1.id', '=', $id)
            ->select("t2.month","t2.year","t2.amount","t2.dateofpayment","t2.payid","t1.last_name","t1.first_name","t1.middle_name")
            ->get()
            ->toArray();
            $TOTAL = DB::table('tblpayments')
            ->join('tblscholars', 'tblpayments.payid', '=', 'tblscholars.id')
            ->where('tblscholars.id', '=', $id)
            ->sum('tblpayments.amount');
            if($TOTAL >= 12000){
                Session::flash('success','Humana Kag Bayad');   
                return redirect('/list');
            }
            else{
                if($students!=[]){
                    return view('summaries.summary',compact('students','TOTAL'));
                }else{
                    $student = tblscholars::find($id);
                    Session::flash('success','Wala pakay nabayad');
                    return view('student.pay',compact('student'));
                }
            }           
        }
    //This is a function for storing the payments of the student into a database
    public function stores(Request $request,$id)
    {
        $this->validate($request,[
            'month' => 'required',
            'year' => 'required',
            'amount' => 'required',
           
        ]);
        $students =tblscholars::where('id',$id)->get();
        $student = new tblpayments([
            'payid' => $id,
            'month' => $request->get('month'),
            'year' => $request->get('year'),
            'amount' => $request->get('amount'),
            'dateofpayment' => Carbon::now()->format('Y-m-d'), 
        ]);
        $student->save();
        Session::flash('success','Your Payment is added');

        return view('student.message',compact('students'));
    }
    //This is a  function for viewing the form to pay
    public function pay($id){
        $student = tblscholars::find($id);
        return view('student.pay',compact('student'));
    }
    // This is a function for the summary for every batch
    public function summarybatch($batch){
        $students =tblscholars::where('batch',$batch)->get();
        $student = DB::table('tblpayments')
        ->join('tblscholars', 'tblpayments.payid', '=', 'tblscholars.id')
        ->where('tblscholars.batch', '=', $batch)
        ->sum('tblpayments.amount');
        return view('summaries.summaryBatch',compact('students','student'));
    }
    //This is a function for the summary of payments every month
    function summarymonth($month ){
        $students =tblpayments::where('month',$month)->get();
        $student = DB::table('tblpayments')
        ->select('tblpayments.amount')
        ->where('tblpayments.month', '=', $month)
        ->sum('tblpayments.amount');
        return view('summaries.summarymonth',compact('students','student'));
    }
   //This is a function for the summary of the date of payment by the students
    function summaryDate(Request $request){
        $date=strtotime($request->get('datesearch'));
        $dates=date('Y-m-d',$date);
        $students =tblpayments::where('dateofpayment',$dates)->get();
        $student = DB::table('tblpayments')
        ->join('tblscholars', 'tblpayments.payid', '=', 'tblscholars.id')
        ->select('tblpayments.dateofpayment')
        ->where('tblpayments.dateofpayment', '=', $dates)
        ->sum('tblpayments.amount');
        return view('summaries.summarydate',compact('students','student'));
    }
}