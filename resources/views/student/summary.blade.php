



@extends('student.layout')
@section('title','Training')
@section('sidebar')
    Home(sidebar)
@endsection('sidebar')

@section('content')

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('css/form.css')}}">
<a href="student/create" id="add">Add Data</a>


<br><br>


        
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
        <h1>{{$student->first_name.' '.$student->middle_name.' '.$student->last_name}}</h1>
        

       
        <a href="/welcome"><button class="btn btn-info">BAck</button></a> &nbsp&nbsp
        <a href="{{url('pay',$student->payid)}}"><button class="btn btn-info">Pay</button></a>
        <a href="{{url('total',$student->payid)}}"><button class="btn btn-info">total</button></a>

       
     
    </table>

    

     
   
@endsection('content')
@section('footer','Facebook   Twitter    Instagram     Youtube')   

