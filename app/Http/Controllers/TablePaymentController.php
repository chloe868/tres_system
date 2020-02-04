<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use App\tblpayments;
use App\tblscholars;
use App\Http\Requests\TablePaymentRequest;
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
        $students = tblscholars::join('tblpayments','tblscholars.id','=','tblpayments.payid')
                    ->where('tblscholars.id','=',$id)
                    ->select('tblpayments.*','tblscholars.*')
                    ->get();
        

        $TOTAL = tblpayments::where('payid',$id)
                ->sum('amount');

        
            if($TOTAL >= 12000){
                Session::flash('success','Humana Kag Bayad');   
                return redirect('/list');
            }
            
                if(!empty($students)){
                    return view('summaries.summary',compact('students','TOTAL'));
                }else{
                    $student = tblscholars::find($id);

                    Session::flash('success','Wala pakay nabayad');
                    
                    return view('student.pay',compact('student'));
                }
            
        }


    //This is a function for storing the payments of the student into a database
    public function stores(TablePaymentRequest $request,$id)
    {
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

        $students = tblscholars::where('batch',$batch)->get();

        $student = tblpayments::join('tblscholars','tblpayments.payid','=','tblscholars.id')
                ->where('tblscholars.batch','=',$batch)
                ->sum('tblpayments.amount');
       
        return view('summaries.summaryBatch',compact('students','student'));
    }

    //This is a function for the summary of payments every month
    public function summarymonth($month ){

        $students =tblpayments::where('month',$month)->get();

        $student = tblpayments::where('month','=',$month)
                ->select('month')
                ->sum('amount');

      
        return view('summaries.summarymonth',compact('students','student'));
    }

   //This is a function for the summary of the date of payment by the students
    public function summaryDate(Request $request){

        $date=strtotime($request->get('datesearch'));

        $dates=date('Y-m-d',$date);

        $students = tblpayments::where('dateofpayment',$dates)->get();

        $student = tblpayments::where('dateofpayment','=',$dates)
                    ->join('tblscholars', 'tblpayments.payid', '=', 'tblscholars.id')
                    ->select('tblpayments.month')
                    ->sum('tblpayments.amount');

        return view('summaries.summarydate',compact('students','student'));
    }
}