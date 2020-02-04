@extends('student.layout')
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/batch_summary.css')}}">

</head>


<body>
    <div style="margin-top:4%">
        <div class="title">
            <br><br>
            <center>
                <h1>Passarelles Numeriques Philippines Scholars</h1>
            </center>
        </div>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        <strong>Success: </strong>{{ Session::get('success') }}
    </div>
    @endif
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    <table id="myTable">
        <tr class="header">
            <th>Name of the student</th>
            <th>Batch</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach($students as $scholars)
            <tr>
                <td>{{$scholars->first_name}} {{$scholars->middle_name}} {{$scholars->last_name}}</td>
                <td>{{$scholars->batch}}</td>
                <td>{{$scholars->email}}</td>
                <td><a href="{{url('summary',$scholars->id)}}"><button type="button" class="btn btn-primary">View Summary</button></a></td>
            </tr>
            @endforeach
        </tbody>
        <div>
            <h2 style="margin-top:-3%;float:right;margin-right:10%">Total: {{$student}} pesos</h2>
            <h2 style="margin-top:-3%;float:right;margin-right:20%">Batch {{$scholars->batch}}</h2>
        </div>
    </table>
    <footer>
        @include('student.footer')
    </footer>
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
</body>
</html>