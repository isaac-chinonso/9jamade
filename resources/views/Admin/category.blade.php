@extends('layout.header')    
@section('title')
Admin || Naija Made
@endsection

@section('content')

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active"><a href="ui_modal_notification.html#modal-dialog" class="btn btn-sm btn-success" data-toggle="modal">Add Category</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- #modal-dialog -->
							<div class="modal fade" id="modal-dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h4 class="modal-title">Add Category</h4>
										</div>
									<form class="form-horizontal" method="post" action="{{ route('adminsavecategory') }}">
										<div class="modal-body">
											<div class="form-group">
		                                        <label class="col-md-1 control-label">Title</label>
		                                        <div class="col-md-11">
		                                            <input type="text" class="form-control" name="title" placeholder="Enter Category Title" />
		                                        </div>
		                                    </div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Add</button>
                                            </div>
                                            <input type="hidden" name="_token" value="{{ Session::token() }}">
									</form>
									</div>
								</div>
							</div>
			<!-- begin page-header -->
			<h1 class="page-header">Categories <small>9jaMade Categories</small></h1>
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
                            <h4 class="panel-title">Category Table</h4>
                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50px" nowrap>S/N</th>
                                        <th width="500px" nowrap>Category Title</th>
                                        <th width="75px" nowrap>Edit</th>
                                        <th width="75px" nowrap>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($categories as $category)
                                    <tr class="odd gradeX">
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td><a href="javascript:;" class="btn btn-primary btn-xs m-r-5">Edit</a></td>
                                        <td><a href="javascript:;" class="btn btn-danger btn-xs m-r-5">Delete</a></td>
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
