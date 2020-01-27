<link rel="stylesheet" href="{{url('css/form.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


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
<a href="{{url('student/create')}}" class="btn btn-info" role="button">Add Student</a>


<br><br>



<form >  
        {{csrf_field()}}


</form>
    <table border=1 id="customers">
        <tr>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Batch</th>
           
            <th>Action</th>
            
        </tr>
        @foreach($students as $student)
        <tr>

            <td>{{$student['first_name']}}</td>
            <td>{{$student['middle_name']}}</td>
            <td>{{$student['last_name']}}</td>
            <td>{{$student['email']}}</td>
            <td>{{$student['contact_number']}}</td>
            <td>
           {{$student['batch']}}
            </td>
            
            <td><a href="{{url('summary',$student->id)}}"><button>View Summary</button>
           </a></td>
        </tr>

        @endforeach
<a href="{{url('summaryYear','2020')}}" class="btn btn-info" role="button">Total Amount for Batch {{$student->batch}}</a>
<a href="/welcome" class="btn btn-info" role="button">Back</a>

    </table>
@endsection('content')
@section('footer','Facebook   Twitter    Instagram     Youtube')   

