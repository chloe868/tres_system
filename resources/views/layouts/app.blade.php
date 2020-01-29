<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <title>App name - @yield('title')</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="{{url('css/form.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
 <div class="container">
   <div class="collapse navbar-collapse" id="navbarResponsive">
     <ul class="navbar-nav ml-auto">
     @guest
       <li class="nav-item active">
         <a class="nav-link" href="{{route('login')}}">Login</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="{{route('register')}}">Register</a>
       </li>
     @else
     <li class="nav-item dropdown">
     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
     {{ Auth::user()->name }} <span class="caret"></span>
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
     @endguest
     </ul>
   </div>
 </div>
</nav>
   <main class="py-4">
       @yield('content')
   </main>
</body>
</html>
