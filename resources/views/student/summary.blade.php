@extends('student.layout')
@section('title','Training')
@section('sidebar')
    Home(sidebar)
@endsection('sidebar')

@section('content')


<a href="student/create" id="add">Add Data</a>
<br><br>
<link rel="stylesheet" href="{{url('css/form.css')}}">

</form>
    <table border=1 id="customers">
        <tr>
            <th>Month</th>
            <th>Year</th>
            <th>Amount</th>
            <th>Date</th>
        
            
        </tr>
        @foreach($students as $student)
        <tr>

            <td>{{$student->month}}</td>
            <td>{{$student->year}}</td>
            <td>{{$student->amount}}</td>
            <td>{{$student->dateofpayment}}</td>
        </tr>
        @endforeach

        <a href="{{url('pay',$student->payid)}}"><button>Pay</button></a></td>
    </table>

     
   
@endsection('content')
@section('footer','Facebook   Twitter    Instagram     Youtube')   

