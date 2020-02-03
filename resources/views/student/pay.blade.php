<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('css/addform.css')}}">



@extends('student.layout')




@if(Session::has('success'))


<div class="alert alert-success">

    <strong>Success: </strong>{{ Session::get('success') }}

</div>

@endif


<body class="bg">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header"><b>Pay a counterpart</b></div>

                <div class="card-body">
                    <form method="post" action="{{route('stores',$student->id)}}">
                        {{csrf_field()}}
                      <br>
                        <div class="input-group form-group">
                            <i class="fa fa-calendar icon"></i>
                            <input type="text" name="month" class="form-control" placeholder="Enter Month"
                                value="" />
                        </div>
                        <div class="input-group form-group">
                            <i class="fa fa-calendar icon"></i>
                            <input type="number" name="year" class="form-control" placeholder="Enter Year"
                                value="" />
                        </div>
                        <div class="input-group form-group">
                            <i class="fa fa-money icon"></i>
                            <input type="number" name="amount" class="form-control" min=0 placeholder="Enter Amount to pay"
                                value="" />
                        </div>


         
                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" >Submit</button>




                   
                                </div>

                                <!-- Modal footer -->
                            </div>
                        </div>
                    </div>

                  
                </div>
            </div>
        </div>

      