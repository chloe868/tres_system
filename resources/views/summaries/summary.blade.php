@extends('student.layout')
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/summary_style.css')}}">

</head>

<body>
    <div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            <strong>Success: </strong>{{ Session::get('success') }}
        </div>
        @endif
        <div style="margin-top:1%">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                title="Type in a name">
            <table id="myTable">
                <tr class="header">
                    <th>Month</th>
                    <th>Year</th>
                    <th>Amount</th>
                    <th>Date of Payment</th>
                </tr>
                <tbody>
                    @foreach($students as $scholars)
                    <tr>
                        <td>{{$scholars->month}} </td>
                        <td>{{$scholars->year}}</td>

                        <td>{{$scholars->amount}}</td>
                        <td> {{date('F j, Y', strtotime($scholars->dateofpayment))}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <div>

                    <h2 style="margin-top:-3%;float:right;margin-right:5%">Total: {{$TOTAL}} pesos</h2>
                    <center>
                        <h2 style="margin-top:-14%;float:right;margin-right:15%">{{$scholars->first_name}}
                            {{$scholars->middle_name}} {{$scholars->last_name}}</h2>
                            <h3 style="margin-top:-10%;float:right">{{$scholars->email}}</h3>
                        <a href="{{url('pay',$scholars->payid)}}"><button
                                style="margin-top:-6%;float:right;margin-right:20%" class="btn btn-primary"
                                id="paybtn">PAY
                                COUNTERPART</button></a>
                    </center>
                </div>
            </table>
        </div>
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
</body>
</html>