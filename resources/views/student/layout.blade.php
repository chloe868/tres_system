<head>
    <title>App name - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{url('css/form.css')}}">
</head>

<style>

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: left;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 2px 0 2px 2px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 5px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
.date{
  float:left;
  width:90%;
}</style>
<div  >
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top ">
  <div class="container" >
    <a class="navbar-brand" href="#">Tres_System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('http://localhost:8000')}}">Home</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/list')}}" >Students</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/csv_file')}}" >Add Batch</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
 
    
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Summary
            </button>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                <!-- <li class="dropdown-item"><a href="#">Some action</a></li>
                <li class="dropdown-item"><a href="#">Some other action</a></li> -->
                <!-- <li class="dropdown-divider"></li> -->
                <li class="dropdown-submenu">
                  <a  class="dropdown-item" tabindex="-1" href="#">Batch</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a tabindex="-1" href="{{url('summarybatch','2022')}}">Batch 2022</a></li>
                    <li class="dropdown-item"><a href="{{url('summarybatch','2021')}}">Batch 2021</a></li>
                    <li class="dropdown-item"><a href="{{url('summarybatch','2020')}}">Batch 2020 </a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a  class="dropdown-item" tabindex="-1" href="#">Month</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a tabindex="-1" href="{{url('summarymonth','January')}}">January</a></li>
                    <li class="dropdown-item"><a href="{{url('summarymonth','February')}}">February</a></li>
                    <li class="dropdown-item"><a href="{{url('summarymonth','March')}}">March</a></li>
                    <li class="dropdown-item"><a tabindex="-1" href="{{url('summarymonth','April')}}">April</a></li>
                    <li class="dropdown-item"><a href="{{url('summarymonth','May')}}">May</a></li>
                    <li class="dropdown-item"><a href="{{url('summarymonth','June')}}">June</a></li>
                    <li class="dropdown-item"><a tabindex="-1" href="{{url('summarymonth','July')}}">July</a></li>
                    <li class="dropdown-item"><a href="{{url('summarymonth','August')}}">August</a></li>
                    <li class="dropdown-item"><a href="{{url('summarymonth','September')}}">September</a></li>
                    <li class="dropdown-item"><a tabindex="-1" href="{{url('summarymonth','October')}}">October</a></li>
                    <li class="dropdown-item"><a href="{{url('summarymonth','November')}}">November</a></li>
                    <li class="dropdown-item"><a href="{{url('summarymonth','December')}}">December</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a  class="dropdown-item" tabindex="-1" href="#">Date</a>
                  <ul class="dropdown-menu">
                    <form Method="get" action="{{url('summaryDate')}}">
                    <p>Date:</p>
                   <input type="text" id="datepicker" class="date" name="datesearch">
                 <button typr="submit">Search</button>
                   </form >
                  </ul>
                </li>
              </ul>
          </div>
        <li class="nav-item">
          <a class="nav-link active" >Logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</div>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

@yield('content')