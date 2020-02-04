<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('css/create.css')}}">

@extends('student.layout')
<body class="bg">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header"><b>Add Student</b>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('store')}}">
                        @csrf
                        <div class="input-group form-group">
                            <i class="fa fa-user icon"></i>
                            <input type="text" name="first_name" class="form-control"
                                placeholder="Enter Your Firstname " value="" />
                        </div>
                        <div class="input-group form-group">
                            <i class="fa fa-user icon"></i>
                            <input type="text" name="middle_name" class="form-control"
                                placeholder="Enter Your Middlename " value="" />
                        </div>
                        <div class="input-group form-group">
                            <i class="fa fa-user icon"></i>
                            <input type="text" name="last_name" class="form-control" placeholder="Enter Your Lastname "
                                value="" />
                        </div>
                        <div class="input-group form-group">
                            <i class="fa fa-envelope icon"></i>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email "
                                value="" />
                        </div>
                        <div class="input-group form-group">
                            <i class="fa fa-users icon"></i>
                            <input type="number" name="batch" class="form-control" placeholder="Batch" value="" />
                        </div>
                        <div class="input-group form-group">
                            <i class="fa fa-phone icon"></i>
                            <input type="number" name="contact_number" class="form-control"
                                placeholder="Contact number " value="" />
                        </div>
                        <div class="input-group form-group">
                            <center><button type="submit" class="btn btn-primary">Add Student</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        @include('student.footer')
    </footer>
</body>
