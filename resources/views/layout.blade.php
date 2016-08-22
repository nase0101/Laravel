<!DOCTYPE html>
<html>
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="UTF-8">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        

        @yield('header')
    </head>
    <body>
        <div class="container">
        @yield('content')
        @yield('footer')
    </body>
</html>
