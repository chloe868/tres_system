@extends('student.layout')
@section('title','Training')
@section('sidebar')
    Home(sidebar)
@endsection('sidebar')

@section('content')


<a href="student/create" class="btn btn-info" role="button">Add Student</a>

<br><br>
<link rel="stylesheet" href="{{url('css/form.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<a href="{{url('summarybatch','2022')}}" class="btn btn-info" role="button">Batch 2022</a>
<a href="{{url('summarybatch','2021')}}" class="btn btn-info" role="button">Batch 2021</a>

<a href="{{url('summarybatch','2020')}}" class="btn btn-info" role="button">Batch 2020</a>
<br><br>

      
      <div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="{{url('welcome','January')}}">January</a>
    <a href="{{url('summaryMonth','February')}}">February</a>
    <a href="{{url('summaryMonth','March')}}">March</a>
    <a href="{{url('summaryMonth','April')}}">April</a>
    <a href="{{url('summaryMonth','May')}}">May</a>
    <a href="{{url('summaryMonth','June')}}">June</a>
    <a href="{{url('summaryMonth','July')}}">July</a>
    <a href="{{url('summaryMonth','August')}}">August</a>
    <a href="{{url('summaryMonth','September')}}">September</a>
    <a href="{{url('summaryMonth','October')}}">October</a>
    <a href="{{url('summaryMonth','November')}}">November</a>
    <a href="{{url('summaryMonth','December')}}">December</a>
  </div>
</div>
         <button type="submit"  >Summary</button>
         
        </div>
        <br><br>
        

      



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
    </table>
@endsection('content')
@section('footer','Facebook   Twitter    Instagram     Youtube')   

