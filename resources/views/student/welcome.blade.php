@extends('student.layout')
@section('title','Training')
@section('content')
<center>
        <h2>LIST OF PAYEE</h2>
    </center>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
        Session::forget('success');
        @endphp
    </div>
    @endif
<link rel="stylesheet" href="{{url('css/form.css')}}">
<br>
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
           </a></td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        MESSAGE
                    </button>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="student/create" id="add">Add Data</a>
        <!-- The Modal -->
        <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <center><h4 class="modal-title">Send Message</h4></center>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{route('mail')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="first_name" placeholder=""
                                value="{{ old('first_name') }}">
                            <span class="error">
                                @if($errors->has('first_name'))
                                {{ $errors->first('first_name') }}
                                @endif
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="lname">Email</label>
                            <input type="text" id="lname" name="email" placeholder="" value="{{ old('email') }}">
                            <span class="error">
                                @if($errors->has('email'))
                                {{ $errors->first('email') }}
                                @endif
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="lname">Message</label>
                            <textarea class="form-control" name="message" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                 <!-- Modal footer -->
                 <div class="modal-footer">

                <a href="{{route('mail', $scholars->id)}}" class="btn btn-primary" type="button"
                    value="SEND">SEND</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

@endsection('content')
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
<!-- @section('footer','Facebook   Twitter    Instagram     Youtube')    -->
{{Auth:user()}}
