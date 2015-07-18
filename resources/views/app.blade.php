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

    <title>Tamilnadu Books</title>

    <link rel="icon" sizes="16x16 32x32 64x64" href="{{ asset('favicon.ico') }}">

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
	
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="{{ route('index') }}">Tamilnadu Books</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav nav-left">
            <li class="logo_icon active">
              <h1>
                <a href="{{ route('index') }}">
                  <img src="{{ asset('/img/logo.png') }}">
                  <span>Tamilnadu Books</span>
                </a>
              </h1>
            </li>
          </ul>

      		<ul class="nav navbar-nav nav-right">
      		  <li class="<?php echo ( Route::currentRouteName() == 'index' ) ? 'active' : ''; ?>"><a href="{{ route('index') }}">Home</a></li>
      		  <li class="<?php echo ( Route::currentRouteName() == 'about' ) ? 'active' : ''; ?>"><a href="{{ route('about') }}">About Us</a></li>
      		  <li class="<?php echo ( Route::currentRouteName() == 'contact' ) ? 'active' : ''; ?>"><a href="{{ route('contact') }}">Contact Us</a></li>
      		</ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  	 
  	@yield('content')

    <!-- begin:footer -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- <h3>dodolan manuk</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis lectus metus,<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->

            <div class="col-md-4 col-md-push-1">
              <div class="sitemap">
                <ul>
                  <li><a href="{{ route('index') }}">HOME</a></li>
                  <li><a href="{{ route('about') }}">ABOUT</a></li>
                  <li><a href="{{ route('contact') }}">CONTACT</a></li>
                </ul>
              </div>
            </div>


            <div class="col-md-4 col-md-push-4">
              <ul class="list-unstyled social-icon text-center">
                <!-- <li><a href="#" rel="tooltip" title="Facebook" class="icon-facebook"><span><i class="fa fa-facebook-square"></i></span></a></li>
                <li><a href="#" rel="tooltip" title="Twitter" class="icon-twitter"><span><i class="fa fa-twitter"></i></span></a></li>
                <li><a href="#" rel="tooltip" title="Linkedin" class="icon-linkedin"><span><i class="fa fa-linkedin"></i></span></a></li> -->
                <li><a href="https://plus.google.com/113686365323491279002/about" rel="tooltip" title="Google" class="icon-gplus" target="_blank"><span><i class="fa fa-google-plus"></i></span></a></li>
                <!-- <li><a href="#" rel="tooltip" title="Instagram" class="icon-instagram"><span><i class="fa fa-instagram"></i></span></a></li> -->
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- end:footer -->

    <!-- begin:copyright -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <small>Copyright &copy; {{ date('Y') }} Tamilnadu Books All Right Reserved.</small>
          </div>
        </div>
      </div>
    </div>
    <!-- end:copyright -->

    <a href="#top" class="scrollup" title="Scroll to top"><i class="fa fa-chevron-circle-up"></i></a>

	  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="{{ asset('/js/gmap3.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>

  </body>
</html>