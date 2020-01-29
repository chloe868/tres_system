@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Login</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('login')}}"><br>
                @csrf
                       <div class="input-group form-group">
                       <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('name') }}" placeholder="Username" required autofocus>
                               @if ($errors->has('username'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('username') }}</strong>
                                   </span>
                               @endif
                       </div>
                       <div class="input-group form-group">
                           <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" placeholder="Password" required autofocus>
                               @if ($errors->has('password'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('password') }}</strong>
                                   </span>
                               @endif
                       </div>                   
 
                       <div class="form-group row">
                           <div class="col-md-6 offset-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                   <label class="form-check-label" for="remember">
                                       Remember Me
                                   </label>
                               </div>
                           </div>
                       </div>
                       <div class="card-footer">
                           <div class="form-group">
                               <center>
                               <input type="submit" class="btn login_btn" value="Login">
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
