<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pocetna</title>
       <style>
           body{
               background-color: antiquewhite;
               font-family: 'Courier New', Courier, monospace;
           }
       </style>
    </head>
    <body class="antialiased">
       
        @include('layouts.navbar')
    </body>
</html>
