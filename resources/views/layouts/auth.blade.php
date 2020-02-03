<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Tres_System') }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('css/form.css')}}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    </head>
    <body>
        <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
            <div class="container">
                    <a class="navbar-brand">
                        Tres_System
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('httpL//localhost:8000')}}">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('mail')}}">Payments</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{url('/list')}}">Students</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{url('/csv_file')}}">Add Batch</a>
                            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Summary

                        </button>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <!-- <li class="dropdown-item"><a href="#">Some action</a></li>
                <li class="dropdown-item"><a href="#">Some other action</a></li> -->
                            <!-- <li class="dropdown-divider"></li> -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">Batch</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a tabindex="-1"
                                            href="{{url('summarybatch','2022')}}">Batch 2022</a></li>
                                    <li class="dropdown-item"><a href="{{url('summarybatch','2021')}}">Batch 2021</a>
                                    </li>
                                    <li class="dropdown-item"><a href="{{url('summarybatch','2020')}}">Batch 2020 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">Date</a>
                                <ul class="dropdown-menu">
                                    <p>Date:</p>
                                    <input type="text" id="datepicker" class="date">
                                </ul>
                            </li>
                        </ul>
                    </div>
                           <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Admin <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
    </html>