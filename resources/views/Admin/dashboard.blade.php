<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>9jaMade | Admin Dashoard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../asset/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="../asset/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../asset/css/animate.min.css" rel="stylesheet" />
	<link href="../asset/css/style.min.css" rel="stylesheet" />
	<link href="../asset/css/style-responsive.min.css" rel="stylesheet" />
	<link href="../asset/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../asset/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="../asset/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="../asset/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../asset/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="#" class="navbar-brand"><span> <img src="../asset/img/9m.png" width="40px" height="40px"></span> 9jaMade</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="../asset/img/fill.jpg" alt="" width="40px" />
							<span class="hidden-xs">{{ Auth::user()->username }}</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="{{ route('logout') }}">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="../asset/img/fill.jpg" alt="" width="40px" /></a>
						</div>
						<div class="info">
							{{Auth::user()->username}}
							<small>Admin</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="">
						    <i class="fa fa-laptop"></i>
						    <span>Dashboard</span>
					    </a>					
					</li>
					<li class="has-sub">
						<a href="{{ route('admincategory')}}">
						    <i class="fa fa-folder"></i>
						    <span>Categories</span>
					    </a>					
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret pull-right"></b>
							<i class="fa fa-renren"></i> 
							<span>Ads</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="{{ route('Admin_pending_ads') }}">Pending Ads</a></li>
						    <li><a href="{{ route('Ads') }}">Total Ads</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="{{ route('Admin_user')}}">
						    <i class="fa fa-users"></i>
						    <span>Users</span>
					    </a>					
					</li>
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>9jaMade Admin Dashboard</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-green">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>TOTAL USERS role_id: {{Auth::user()->role_id}}</h4>
							<p>{{ $allusers }}</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->

				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-refresh"></i></div>
						<div class="stats-info">
							<h4>PENDING ADS</h4>
							<p>{{ $ads }}</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-renren"></i></div>
						<div class="stats-info">
							<h4>TOTAL ADS</h4>
							<p>{{ $ad }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{ route('Ads') }}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-purple">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>TOTAL VISITORS</h4>
							<p>0</p>	
						</div>
						<div class="stats-link">
							<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-folder"></i></div>
						<div class="stats-info">
							<h4>CATEGORIES</h4>
							<p>{{ $categories }}</p>	
						</div>
						<div class="stats-link">
							<a href="{{ route('admincategory')}}">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				
			</div>
			<!-- end row -->
			
			<!-- end row -->
		</div>
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../asset/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="../asset/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="../asset/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="../asset/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../asset/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../asset/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../asset/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../asset/plugins/flot/jquery.flot.min.js"></script>
	<script src="../asset/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="../asset/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="../asset/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="../asset/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="../asset/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="../asset/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../asset/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="../asset/js/dashboard.min.js"></script>
	<script src="../asset/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
<!--<script>-->
<!--  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
<!--  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
<!--  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
<!--  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');-->

<!--  ga('create', 'UA-53034621-1', 'auto');-->
<!--  ga('send', 'pageview');-->

<!--</script>-->
</body>
</html>
