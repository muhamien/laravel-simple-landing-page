<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
    @yield('include-css')
  </head>
  <body>
    @include('layouts._header')

    @yield('content')
    
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('include-js')
  </body>
</html>