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
                font-family: 'Arial';
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
   
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Aliens</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/contact')}}">Contact</a></li> 
      <li><a href="{{ url('/view')}}">View</a></li>
      <li><a href="{{ url('/new')}}">New</a></li>  
    </ul>
  </div>
</nav>

   @if(Session::has('flash_message'))
   <div class="alert alert-success">
     {{ Session::get('flash_message') }}
   </div>
   @endif

    <div class="container">

        @yield('content')
    </div>
    </body>
</html>
 <!--
      <div class="navigation">
        <ul><a href="{{ url('/') }}"> Home</a></ul>
           <ul><a href="{{ url('/about') }}">About</a></ul>
         <ul><a href="{{ url('/contact')}}">Contact</a></ul>
         <ul><a href="{{ url('/view')}}">View</a></ul>
         <ul><a href="{{ url('/new')}}">new</a></ul>
      </div>
    </nav>
    -->