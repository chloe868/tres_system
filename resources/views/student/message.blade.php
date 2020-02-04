<!doctype html>
<html >
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{url('css/form.css')}}">
        <title>Tres_System</title>
    </head>
    

    @foreach($students as $student)
    @endforeach
    <body class="bg">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header"><b>Send a message</b></div>

                        <div class="card-body">
                            <form action="{{route('mail')}}" method="get">
                            @csrf
                            <div class="input-group form-group">
                                    <i class="fa fa-user icon"></i>
                                    <input type="text" name="first_name" class="form-control"  placeholder="Enter Your Name"
                                        value="{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}" disable/>
                                </div>
                                <div class="input-group form-group">
                                    <i class="fa fa-money icon"></i>
                                    <input type="text" name="email" class="form-control"  placeholder="Enter Your Email"
                                        value="{{$student->email}}" disable/>
                                </div>
                                <div class="input-group form-group">
                                    <i class="fa fa-comment icon"></i>
                                     <textarea name="message" id="" cols="31" rows="4" placeholder="Your message"></textarea>
                                </div>
                                <div class="input-group form-group">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" >Submit</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>





















<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('css/addform.css')}}">



@extends('student.layout')

@section ('content')
@if(Session::has('success'))


<div class="alert alert-success">

    <strong>Success: </strong>{{ Session::get('success') }}

</div>

@endif


        @endsection