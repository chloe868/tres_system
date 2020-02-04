<head>
    <title>Tres System - PN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{url('css/form.css')}}">
    <link rel="stylesheet" href="{{url('css/nav.css')}}">
    <script>
    $(function() {
        $("#datepicker").datepicker();
    });
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top ">
            <div class="container">
                <a class="navbar-brand" href="#">Tres_System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/home')}}">Home</a>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/list')}}">Students</a>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/csv_file')}}">Add Batch</a>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Summary
                            </button>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">

                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" tabindex="-1" href="#">Batch</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a tabindex="-1"
                                                href="{{url('summarybatch','2022')}}">Batch 2022</a></li>
                                        <li class="dropdown-item"><a href="{{url('summarybatch','2021')}}">Batch
                                                2021</a>
                                        </li>
                                        <li class="dropdown-item"><a href="{{url('summarybatch','2020')}}">Batch 2020
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" tabindex="-1" href="#">Month</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a tabindex="-1"
                                                href="{{url('summarymonth','January')}}">January</a></li>
                                        <li class="dropdown-item"><a
                                                href="{{url('summarymonth','February')}}">February</a>
                                        </li>
                                        <li class="dropdown-item"><a href="{{url('summarymonth','March')}}">March</a>
                                        </li>
                                        <li class="dropdown-item"><a tabindex="-1"
                                                href="{{url('summarymonth','April')}}">April</a></li>
                                        <li class="dropdown-item"><a href="{{url('summarymonth','May')}}">May</a></li>
                                        <li class="dropdown-item"><a href="{{url('summarymonth','June')}}">June</a></li>
                                        <li class="dropdown-item"><a tabindex="-1"
                                                href="{{url('summarymonth','July')}}">July</a></li>
                                        <li class="dropdown-item"><a href="{{url('summarymonth','August')}}">August</a>
                                        </li>
                                        <li class="dropdown-item"><a
                                                href="{{url('summarymonth','September')}}">September</a></li>
                                        <li class="dropdown-item"><a tabindex="-1"
                                                href="{{url('summarymonth','October')}}">October</a></li>
                                        <li class="dropdown-item"><a
                                                href="{{url('summarymonth','November')}}">November</a>
                                        </li>
                                        <li class="dropdown-item"><a
                                                href="{{url('summarymonth','December')}}">December</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" tabindex="-1" href="#">Date</a>
                                    <ul class="dropdown-menu">
                                        <form Method="get" action="{{url('summaryDate')}}">
                                            <p>Date:</p>
                                            <input type="text" id="datepicker" class="date" name="datesearch">
                                            <button typr="submit">Search</button>
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Admin <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>

@yield('content')