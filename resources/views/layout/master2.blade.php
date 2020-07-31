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


    
  </head>
  <body> 
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
            <a class="navbar-brand logo" href="{{ route('homepage') }}"><img src="../assets/img/logo1.png" alt="" height="55px"></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <div class="dropdown nav navbar-nav navbar-right">
                <button class="btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span style="text-transform: capitalize;">{{ Auth::user()->username }}</span>
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="{{ route('homepage') }}">Home</a></li>
                  <li><a href="#">Settings</a></li>
                  <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
            
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