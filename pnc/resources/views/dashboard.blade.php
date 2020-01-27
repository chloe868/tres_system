<!DOCTYPE html>
<html>

<head>
</head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="{{url('css/form.css')}}">

<body>

<center><h2>LIST OF PAYEE</h2></center>
@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif

  
  <table id="myTable">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Batch</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($scholar as $scholars)
      <tr>
      <td>{{$scholars->first_name}}</td>
      <td>{{$scholars->middle_name}}</td>
      <td>{{$scholars->last_name}}</td>
      <td>{{$scholars->batch}}</td>
      <td>{{$scholars->phone_number}}</td>
      <td>{{$scholars->email}}</td>
      <td>
      
      <a href="{{route('edit', $scholars->id)}}" class="btn btn-warning" type="button" value="EDIT">EDIT</a>
      <a href="{{route('mail', $scholars->id)}}" class="btn btn-primary" type="button" value="EDIT">MESSAGE</a>
      <!-- <a href="{{route('delete', ['id'=>$scholars->id])}}" class="btn btn-danger" type="button" value="DELETE">VIEW SUMMARY</a> -->
      <form action="">
        
      </form>
      </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  <center><a href="{{route ('add')}}" class="btn btn-success" type="button" value="ADD">ADD LIST</a></center>
 

</body>
<script>
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
</script>

</html>