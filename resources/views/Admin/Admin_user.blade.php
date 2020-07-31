<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Managed Tables - Extension Combination</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="../asset/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="../asset/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../asset/css/animate.min.css" rel="stylesheet" />
	<link href="../asset/css/style.min.css" rel="stylesheet" />
	<link href="../asset/css/style-responsive.min.css" rel="stylesheet" />
	<link href="../asset/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../asset/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../asset/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="../asset/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<link href="../asset/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css" rel="stylesheet" />
	<link href="../asset/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="../asset/plugins/DataTables/extensions/KeyTable/css/keyTable.bootstrap.min.css" rel="stylesheet" />
	<link href="../asset/plugins/DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="../asset/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
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
							<img src="assets/img/fill.jpg" alt="" width="40px" />
							<span class="hidden-xs">Ifeanyi Obi</span> <b class="caret"></b>
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
							Ifeanyi Obi
							<small>Admin</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="{{ route('dashboard')}}">
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
						    <li><a href="pending_Ads.html">Pending Ads</a></li>
						    <li><a href="email_inbox_v2.html">Total Ads</a></li>
						</ul>
					</li>
					<li class="has-sub active">
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
				<li class="active">Users</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Users <small>9jaMade Categories</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Users Table</h4>
                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50px" nowrap>S/N</th>
                                        <th width="100px" nowrap>Full Name</th>
                                        <th width="100px" nowrap>Email</th>
                                        <th width="100px" nowrap>Business Name</th>
                                        <th width="50px" nowrap>Deactivate</th>
                                        <th width="50px" nowrap>Delete</th>


                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $user)
                                    <tr class="odd gradeX">
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->full_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->business_name }}</td>
                                        <td><a href="javascript:;" class="btn btn-primary btn-xs m-r-5">Deactivate</a></td>
                                        <td><a href="#" class="btn btn-danger btn-xs m-r-5" data-toggle="modal" data-target="#delete{{ $user->id }}">Delete</a>
                                            <!-- sample modal content -->
                                            <div id="delete{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" id="myModalLabel">Delete {{ $user->title }} User</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4>Confirm Delete</h4>
                                                            <p>Are you sure you want to delete {{ $user->title }} User</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                            <a href="{{ route('deleteads',$user->id) }}" class="btn btn-danger waves-effect waves-light">Yes</a>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
			    </div>
			    <!-- end col-10 -->
			</div>
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
	<script src="../asset/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../asset/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js"></script>
	<script src="../asset/plugins/DataTables/extensions/Select/js/dataTables.select.min.js"></script>
	<script src="../asset/js/table-manage-combine.demo.min.js"></script>
	<script src="../asset/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageCombine.init();
		});
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
