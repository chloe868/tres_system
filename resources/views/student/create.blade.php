@extends ('master')
@section ('content')

<link rel="stylesheet" href="{{url('css/form.css')}}">

<div class="table">
<div class="row">
  <div class="col-md-10" id="rows">
    <br/>
      <h1 class="tit">Add Data</h1>
      <br/>
      <form method="post" action="{{route('store')}}">  
        {{csrf_field()}}
        <div class="form-group">
          <input type="text" name="first_name" class="form-control" placeholder="Enter Your Firstname " value=""/>
          <span class="error">
                    @if($errors->has('first_name'))
                    {{ $errors->first('first_name') }}
                    @endif
                </span>
        </div>
        <div class="form-group">
          <input type="text" name="middle_name" class="form-control" placeholder="Enter Your Middlename " value=""/>
          <span class="error">
                    @if($errors->has('middle_name'))
                    {{ $errors->first('middle_name') }}
                    @endif
                </span>
        </div>
        <div class="form-group">
          <input type="text" name="last_name" class="form-control" placeholder="Enter Your Lastname " value=""/>
          <span class="error">
                    @if($errors->has('last_name'))
                    {{ $errors->first('last_name') }}
                    @endif
                </span>
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Enter Your Email " value=""/>
          <span class="error">
                    @if($errors->has('email'))
                    {{ $errors->first('email') }}
                    @endif
                </span>
        </div>
        <div class="form-group">
          <input type="number" min=0 name="batch" class="form-control" placeholder="Batch"  value=""/>
          <span class="error">
                    @if($errors->has('batch'))
                    {{ $errors->first('batch') }}
                    @endif
                </span>
        </div>
        <div class="form-group">
          <input type="number" name="contact_number"  class="form-control" placeholder="Contact number " value=""/>
          <span class="error">
                    @if($errors->has('contact_number'))
                    {{ $errors->first('contact_number') }}
                    @endif
                </span>
        </div>
       
        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button> 
      <!-- <div class="form-group">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" large>  
      </div> -->
        
  
</form>

  </div>
</div>
</div>

@endsection