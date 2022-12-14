<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reading List: Book Tracker</title>

  <!-- import gareko -->
  @vite(['resources/js/app.js'])

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light text-black">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('dashboard')}}">Book Tracker</a>


      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
        </li>

        @auth
        <a href="#" class="p-2 nav-link">{{auth()->user()->name}}</a>
        <a class="nav-link btn btn-outline-info" href="{{route('logout')}}">Logout</a>
        @endauth

        @guest
        <li class="nav-item">
          <a class="p-2 nav-link" href="{{route('login')}}">Login</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li> -->
        @endguest

    </div>
   
  </nav>
  <!-- dynamic content -->
  <!-- content naam matra deko like div ma class deko jasto -->
  @yield('content')
</body>

</html>