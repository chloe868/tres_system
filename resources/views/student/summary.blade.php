@extends('student.layout')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

h1{
    text-decoration:underline
}
.title{
    margin-top:-25%;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 20%;
  margin-left:5%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-top:15%

}

#myTable {
  border-collapse: collapse;
  width: 90%;
  margin-left:5%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}


</style>
</head>
<body>
<div style="margin-top:4%">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
   <th>
    <tr class="header">
        <th>Month</th>     
        <th>Year</th>
        <th>Amount</th>
        <th>Date of Payment</th>
    </tr>
   </th>
    
  <tbody>
  @foreach($students as $scholars)
            <tr>
                <td>{{$scholars->month}} {{$scholars->middle_name}} {{$scholars->last_name}}</td>
                
               
                <td>{{$scholars->year}}</td>
               
                <td>{{$scholars->amount}}</td>
               <td> {{date('F j, Y', strtotime($scholars->dateofpayment))}}</td>

                   
            </tr>
            @endforeach
  
  </tbody>

        </table>
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
