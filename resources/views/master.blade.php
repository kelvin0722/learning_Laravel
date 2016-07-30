<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .navigation{
                display:inline;
            }
        </style>
    </head>
    <body>
    <nav>
      <div class="navigation">
        <ul><a href="{{ url('/') }}"> Home</a></ul>
           <ul><a href="{{ url('/about') }}">About</a></ul>
         <ul><a href="{{ url('/contact')}}">Contact</a></ul>
         <ul><a href="{{ url('/view')}}">View</a></ul>
      </div>
    </nav>
    <div class="container">

        @yield('content')
    </div>
    </body>
</html>
