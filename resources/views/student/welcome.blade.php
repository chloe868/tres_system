@extends('student.layout')
<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/batch_summary.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<body>
    <div>
        <div style="margin-top:4%">
            <div class="title">
                <br><br>
                <center>
                    <h1>Passarelles Numeriques Philippines Scholars</h1>
                </center>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                <strong>Success: </strong>{{ Session::get('success') }}
            </div>
            @endif
            <div style="float:right;margin-right:5%">
                <a href="/student/create" class="icon-block">
                    <i class="fa fa-plus-circle fa-2x"> Add Student</i>
                </a>
            </div>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        <table id="myTable">
            <tr class="header">
                <th>Name of the student</th>
                <th>Batch</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach($students as $scholars)
                <tr>
                    <td>{{$scholars->first_name}} {{$scholars->middle_name}} {{$scholars->last_name}}</td>
                    <td>{{$scholars->batch}}</td>
                    <td>{{$scholars->email}}</td>
                    <td>{{$scholars->contact_number}}</td>
                    <td><a href="{{url('summary',$scholars->id)}}"><button type="button" class="btn btn-primary">View
                                Summary</button>
                        </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <footer>
            @include('student.footer')
        </footer>
    </div>

    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <script>
        var msg = '{{Session::get('
        alert ')}}';
        var exist = '{{Session::has('
        alert ')}}';
        if (exist) {
            alert(msg);
        }
    </script>
</body>

</html>