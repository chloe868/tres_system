<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  
head,body{
    background-image: url('https://st4.depositphotos.com/1400069/25524/i/450/depositphotos_255240340-stock-photo-blurred-blue-background-gradient-fresh.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font-family: 'Numans', sans-serif;
    margin-top:0%;
    }
    .icon {
        padding: 10px;
        background: dodgerblue;
        color: white;
        min-width: 50px;
        text-align: center;
      }
    .container{
    height: 60%;
    align-content: center;
    }
    
    .card{
    height: 700px;
    margin-top: 15%;
    margin-bottom: auto;
    width: 600px;
    background-color: rgba(220,220,220,.3) !important;
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        height: 20px;
        height: 2.25rem;
    }

    .card-header h3{
    color: black;
    }

    .remember{
    color: black;
    }
    
    .remember input
    {
    width: 20px;
    height: 20px;
    margin-left: 15px;
    margin-right: 5px;
    }
    
    .login_btn {
    color: black;
    background-color: orange;
    width: 100px;
    border-radius: 20px;
    margin-top: -3%;
    }   
    
    .login_btn:hover{
    color: black;
    background-color: orange;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }
    
    .links{
    color: black;
    }

    a {
        color: whitesmoke;
        text-decoration: none;
        background-color: transparent;
    }

    .error {
        margin-top:5%; 
    }

    .form-check-label {
        margin-bottom: 9px;
    }
</style>


@extends('student.layout')
@section ('content')




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
            <input type="text" name="first_name" class="form-control" placeholder="Enter Your Firstname " value=""/>
          </div>
          <div class="input-group form-group">
            <i class="fa fa-user icon"></i>
            <input type="text" name="middle_name" class="form-control" placeholder="Enter Your Middlename " value=""/>
          </div>
          <div class="input-group form-group">
            <i class="fa fa-user icon"></i>
            <input type="text" name="last_name" class="form-control" placeholder="Enter Your Lastname " value=""/>  
          </div>
          <div class="input-group form-group">
            <i class="fa fa-envelope icon"></i>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email " value=""/>
          </div>
          <div class="input-group form-group">
            <i class="fa fa-users icon"></i>
            <input type="number" name="batch"  class="form-control" placeholder="Batch" value=""/>
          </div>
          <div class="input-group form-group">
            <i class="fa fa-phone icon"></i>
            <input type="number" name="contact_number"  class="form-control" placeholder="Contact number " value=""/>
          </div>
          <div class="input-group form-group">
            <center><button type="submit" class="btn btn-primary">Add Student</button></center>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




<footer >
        @include('student.footer')
    </footer>
</body>


@endsection