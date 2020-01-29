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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{url('css/form.css')}}">


<body>

    <center>
        <h2>LIST OF PAYEE</h2>
    </center>
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
                <th>Email</th>
                <th>Phone Number</th>
                <th>Batch</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($scholars as $scholar)
            <tr>
                <td>{{$scholar->first_name}}</td>
                <td>{{$scholar->middle_name}}</td>
                <td>{{$scholar->last_name}}</td>
                <td>{{$scholar->email}}</td>
                <td>{{$scholar->phone_number}}</td>
                <td>{{$scholar->batch}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        MESSAGE
                    </button>
                    
                    <form action="">

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
   
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <center><h4 class="modal-title">Send Message</h4></center>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{route('mail')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="first_name" placeholder=""
                                value="{{ old('first_name') }}">
                            <span class="error">
                                @if($errors->has('first_name'))
                                {{ $errors->first('first_name') }}
                                @endif
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="lname">Email</label>
                            <input type="text" id="lname" name="email" placeholder="" value="{{ old('email') }}">
                            <span class="error">
                                @if($errors->has('email'))
                                {{ $errors->first('email') }}
                                @endif
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="lname">Message</label>
                            <textarea class="form-control" name="message" rows="3"></textarea>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                    <a href="{{route('mail', $scholar->id)}}" class="btn btn-primary" type="button"
                        value="SEND">SEND</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</body>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>

</html>