<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vozilo</title>
</head>

<style>
  body {
    background-color: antiquewhite;
    color: brown;
    font-family: 'Courier New', Courier, monospace;
  }
</style>

<body>

  @include('layouts.navbar')
  
  @yield('sadrzaj')

  @include('layouts.errors')

</body>
</html>