@extends ('master')
@section ('content')

<style>
  .table{
    width:50%;
    margin-left:27%;
    background-color:grey;
    margin-top:7%;
    border-radius:10%
  }
  #rows{
    margin-left:8%
  }
  .tit{
    text-align:center
  }
  .btn{
    margin-bottom:10%
  }
</style>


@if(count($errors)>0)
<div>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
@if(\Session::has('success'))
  <div class="alert alert-success">
    <p>{{Session::get('success')}}</p>
  </div>

@endif

<div class="table">
<div class="row">
  <div class="col-md-10" id="rows">
    <br/>
      <h1 class="tit">Add Data</h1>
      <br/>
      <form method="post" action="{{route('stores',$student->id)}}">  
        {{csrf_field()}}
        
  
        <div class="form-group">
          <select class="form-control" name="month">
          <option>---Choose Month---</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" name="year">
          <option>---Choose Year---</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
            <option>2025</option>
            <option>2026</option>
            <option>2027</option>
            <option>2028</option>
            <option>2029</option>
            <option>2030</option>
          </select>
        </div>
        <div class="form-group">
          <input type="number" name="amount" class="form-control" placeholder="Input Amount" value=""/>
        </div>
        <div class="form-group">
          <input type="date" name="dateofpayment" class="form-control" placeholder="Date  " value=""/>
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