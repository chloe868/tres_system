@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Register</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('firstLand')}}"> 
                   @csrf
                       <div class="input-group form-group">
                           <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                               @if ($errors->has('name'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('name') }}</strong>
                                   </span>
                               @endif
                       </div>
                       <div class="input-group form-group">
                           <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
                               @if ($errors->has('username'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('username') }}</strong>
                                   </span>
                               @endif
                       </div>
                       <div class="input-group form-group">
                           <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                               @if ($errors->has('password'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('password') }}</strong>
                                   </span>
                               @endif
                       </div>
                       <div class="input-group form-group">
                           <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                       </div>
                       <div class="card-footer">
                           <div class="form-group">
                               <center>
                               <input type="submit" class="btn login_btn" value="Register">
                           </center>  
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
 
