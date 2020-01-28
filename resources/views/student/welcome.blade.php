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

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<a href="student/create" class="btn btn-info" role="button">Add Student</a>

<br><br>
<link rel="stylesheet" href="{{url('css/form.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<a href="{{url('summarybatch','2022')}}" class="btn btn-info" role="button">Batch 2022</a>
<a href="{{url('summarybatch','2021')}}" class="btn btn-info" role="button">Batch 2021</a>

<a href="{{url('summarybatch','2020')}}" class="btn btn-info" role="button">Batch 2020</a>
<br><br>

<form method="Get" action="{{url('displayByDate')}}">
<p>Date: <input type="text" id="datepicker" name="date"></p>
<button type="submit">SUMMARY</button>
</form>


      
     
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
        <div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">

   @foreach($datas as $data)
  
            <a href="{{url('displayByMonth',$data)}}">{{$data}}</a>

            
            
        @endforeach

  </div>
</div>
       
         
    </table>
@endsection('content')
@section('footer','Facebook   Twitter    Instagram     Youtube')   

