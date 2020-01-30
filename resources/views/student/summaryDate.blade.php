<link rel="stylesheet" href="{{url('css/form.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


@extends('student.layout')


@section('content')

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<a href="{{url('student/create')}}" class="btn btn-info" role="button">Add Student</a>


<br><br>



<form >  
        {{csrf_field()}}


</form>
    <table border=1 id="customers">
        <tr>
            <th>Month</th>
            <th>Year</th>
            <th>Amount</th>
            <th>Date of Payments</th>
            <th>Action</th>
           
            
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student['month']}}</td>
            <td>{{$student['year']}}</td>
            <td>{{$student['amount']}}</td>
            <td>{{$student['dateofpayment']}}</td>
            <td><a href="{{url('summary',$student->id)}}"><button>View Summary</button></a></td>
        </tr>

        @endforeach
            <a href="{{url('summaryMonth',$student->month)}}" class="btn btn-info" role="button">Total Amount for  {{$student->dateofpayment}}</a>
            <a href="/welcome" class="btn btn-info" role="button">Back</a>

    </table>
@endsection('content')
@section('footer','Facebook   Twitter    Instagram     Youtube')   

