<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>@yield('title')</title>  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111248522-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-111248522-1');
    </script>



    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="../assets/css/jasny-bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="../assets/css/jasny-bootstrap.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="../assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="../assets/fonts/line-icons/line-icons.css" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="../assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="../assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="../assets/extras/owl.theme.css" type="text/css">    
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="../assets/css/responsive.css" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="../assets/css/slicknav.css" type="text/css">
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">

    <style type="text/css">
        fieldset, label { margin: 0; padding: 0; }
        h1 { font-size: 1.5em; margin: 10px; }

        /****** Style Star Rating Widget *****/

        .rating { 
          border: none;
          float: left;
        }

        .rating > input { display: none; } 
        .rating > label:before { 
          margin: 5px;
          font-size: 1.25em;
          font-family: FontAwesome;
          display: inline-block;
          content: "\f005";
        }

        .rating > .half:before { 
          content: "\f089";
          position: absolute;
        }

        .rating > label { 
          color: #ddd; 
         float: right; 
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
    </style>
    
  </head>
<body>

<div id="fb-root"></div>
   <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> 
    <!-- Header Section Start -->
    <div class="header">    
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="{{ route('homepage') }}"><img src="../assets/img/logo1.png" alt="" height="60px"></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              @if(!Auth::check())
              <li><a href="{{ route('login') }}"><i class="lnr lnr-enter"></i> Login</a></li>
              <li><a href="{{ route('saveuser') }}"><i class="lnr lnr-user"></i> Signup</a></li>
              @else
              <li class="dropdown navbar-user">
				<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
					<!--<img src="../asset/img/fill.jpg" alt="" width="40px" />-->
					<span class="hidden-xs">Hello {{ Auth::user()->username }}</span> <b class="caret"></b>
				</a>
				<ul class="dropdown-menu animated fadeInLeft">
					<li class="arrow"></li>
					<li><a href="{{ route ('account_home') }}">Dashboard</a></li>
					<li><a href="{{ route ('about') }}">About Us</a></li>
					<li><a href="{{ route ('pricing') }}">Pricing</a></li>
					<li><a href="{{ route ('howtouse') }}">How it works</a></li>
					<li><a href="{{ route ('career') }}">Career</a></li>
					<li><a href="{{ route ('contact') }}">Contact Us</a></li>
					<!--<li><a href="javascript:;">Setting</a></li>-->
					<li class="divider"></li>
					<li><a href="{{ route ('user_logout') }}">Log Out</a></li>
				</ul>
			  </li>
              @endif
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="{{ route('post_ads') }}"><span class="fa fa-plus-circle"></span> Post Ad</a>
              </li>
              
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>
      
      
    </div>
    <!-- Header Section End -->

  
 @yield('content')
  <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info pull-left">
                <p>All copyrights reserved @ 2017 - Powered by <a href="http://9jamade.ng">Naija Made</a></p>
              </div>              
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                <a class="youtube" target="_blank" href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->      
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>
      
    <!-- Main JS  -->
    <script type="text/javascript" src="../assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/material.min.js"></script>
    <script type="text/javascript" src="../assets/js/material-kit.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../assets/js/wow.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="../assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="../assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="../assets/js/contact-form-script.js"></script>    
    <script type="text/javascript" src="../assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="../assets/js/bootstrap-select.min.js"></script>
    
      @yield('extrajs')
  </body>
</html>