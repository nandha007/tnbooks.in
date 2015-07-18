<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="dodolan manuk responsive catalog themes built with twitter bootstrap">
    <meta name="keywords" content="responsive, catalog, cart, themes, twitter bootstrap, bootstrap">
    <meta name="author" content="afriq yasin ramadhan">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Tamilnadu Books | Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/waitMe.min.css') }}" rel="stylesheet">

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/waitMe.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	
    <div class="container privilege"> 
  	   @yield('content')
    </div>   

	  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="{{ asset('/js/gmap3.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>

  </body>
</html>