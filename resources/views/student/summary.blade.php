@extends('student.layout')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{url('css/summary_style.css')}}">

</head>
<body>
@if(Session::has('success'))

<div class="alert alert-success">

<strong>Success: </strong>{{ Session::get('success') }}

</div>

@endif
<div style="margin-top:4%">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

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

        </table>
        <footer >
        @include('student.footer')
    </footer>
        <div class="title"> 
        <center>
<h1> {{$scholars->first_name}} {{$scholars->middle_name}} {{$scholars->last_name}}</h1>
   <h2>Total is : {{$TOTAL}} pesos</h2>
      
        <a href="{{url('pay',$scholars->payid)}}"><button class="btn btn-primary" id="paybtn">PAY COUNTERPART</button></a>
        </center>
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
