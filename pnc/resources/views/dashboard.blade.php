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

<body>

<center><h2>Human in List</h2></center>
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
        <th>Last Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($scholar as $scholars)
      <tr>
      <td>{{$scholars->last_name}}</td>
      <td>{{$scholars->email}}</td>
      <td>{{$scholars->age}}</td>
      <td>{{$scholars->gender}}</td>
      <td>{{$scholars->address}}</td>
      <td>
      
      <a href="{{route('edit', $scholars->id)}}" class="btn btn-warning" type="button" value="EDIT">Edit</a>
      <a href="{{route('delete', ['id'=>$scholars->id])}}" class="btn btn-danger" type="button" value="DELETE">DELETE</a>
      <form action="">
        
      </form>
      </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  <center><a href="{{route ('add')}}" class="btn btn-success" type="button" value="ADD">ADD HUMAN</a></center>
 

</body>
<script>
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
</script>

</html>