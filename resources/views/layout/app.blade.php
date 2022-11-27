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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Book Tracker</a>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Login </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Register</a>
  </li>

</ul>
</nav>
@yield('content')

</body>
</html>