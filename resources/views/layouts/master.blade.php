<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>KOP Calculation</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{asset('assets/img/logo/icon.jpg')}}" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="{{asset('assets/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/fontawesome-free-5.1.0-web/css/all.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/animate/animate.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/default/style.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/default/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/default/theme/default.css')}}" rel="stylesheet" id="theme" />
	<link href="{{asset('assets/css/vendor.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/default/app.min.css')}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<link href="{{asset('assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/parsley/src/parsley.css')}}" rel="stylesheet" />
	 <link href="{{asset('assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/ionRangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/password-indicator/css/password-indicator.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/jquery-tag-it/css/jquery.tagit.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/extensions/KeyTable/css/keyTable.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/default/invoice-print.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/powerange/powerange.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	
	<link href="{{asset('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/powerange/powerange.min.css')}}" rel="stylesheet" />
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script>

	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show d-none"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-without-sidebar show page-header-fixed page-with-top-menu ">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="calc.php?kop=dashboard" class="navbar-brand"><img src="{{asset('assets/img/logo/logo-admin.png')}}"></a>
				<button type="button" class="navbar-toggle" data-click="top-menu-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
				
			<!-- begin header navigation right -->
			<ul class="navbar-nav navbar-right">
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline">
						{{Session::get('name')}}
						</span> <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li class="arrow"></li>
						<li><a href="?kop=profile">Edit Profile</a></li>
						<li class="divider"></li>
						<li><a href="/kalkulasi/logout" class="dropdown-item" onclick="return confirm('Are you sure to logout?');">Log Out</a></li>
					</ul>
				</li>
			</ul>
			<!-- end header navigation right -->
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #top-menu -->
		<div id="top-menu" class="top-menu">
            <!-- begin top-menu nav -->
			<ul class="nav">
				<li>
					<a href="/kalkulasi" title='Dasboard'>
							<b><i class="fa fa-th-large"></i>
						    <span>DASHBOARD </span> </b>
						</a>
				</li>
				<li class="has-sub">
					<a href="javascript:;">
						<b>
						<b class="caret"></b><i class="fa fa-cart-arrow-down"></i>
						<span>TRANSACTION</span></b>
					</a>
					<ul class="sub-menu">
						<li><a href="/kalkulasi/purchaserequset" title='Generate Purchase Request'><b>PURCHASE REQUEST</b></a></li>
				
						<li><a href="/kalkulasi/purchaseorder" title='Generate Purchase Order'><b>PURCHASE ORDER</b></a></li>
                    </ul>
				</li> 
			
				<li class="has-sub">
					<a href="javascript:;">
						<b>
						<b class="caret"></b><i class="fa fa-percent"></i>
						<span>CALCULATE</span></b>
					</a>
					<ul class="sub-menu">
						<li><a href="/kalkulasi/gocalculate" title='Calculate Process'><b>GO CALCULATE</b></a></li>
						<li><a href="/kalkulasi/recalculate" title='Re-Calculate Process'><b>RE CALCULATE</b></a></li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="javascript:;">
						<b>
						<b class="caret"></b><i class="fa fa-table"></i>
						<span>MASTER</span></b>
					</a>
					<ul class="sub-menu">
							
							
							<li><a href="calc.php?kop=machine" title='Master Machine'><b>MACHINE</b></a></li>
						
					</ul>
					
				</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b>
							<b class="caret"></b><i class="fa fa-table"></i>
							<span>MASTER</span></b>
						</a>
					<ul class="sub-menu">
							<li><a href="calc.php?kop=customer" title='Master Customer'><b>CUSTOMER</b></a></li>
							<!-- <?php
							//if($_SESSION[level]=='admin' || $_SESSION[level]=='purchasing'){
							?> -->
							<li class="has-sub">
							<a href="javascript:;"><b class="caret pull-right" title='Master Paper Type'></b><b>PAPER</b></a>
							<ul class="sub-menu">
								<li class="has-sub">
									<a href="javascript:;"><b class="caret pull-right" title='Master Paper Type'></b>&nbsp;&nbsp;&nbsp;<b><i class="fa fa-angle-double-right"> </i>&nbsp; PAPER GROUP</b></a>
									<ul class="sub-menu">
										<li><a href="{{url('kalkulasi/paper/group1')}}" title='Master Paper Group1'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"> </i>&nbsp; GROUP 1</b></a></li>
										<li><a href="{{url('kalkulasi/paper/group2')}}" title='Master Paper Group 2'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"> </i>&nbsp; GROUP 2</b></a></li>
									</ul>
								</li>
								<li><a href="{{url('kalkulasi/paper/gramature')}}" title='Master Paper Gramature'>&nbsp;&nbsp;&nbsp;<b><i class="fa fa-angle-double-right"> </i>&nbsp; PAPER GSM</b></a></li>
								<li><a href="{{url('kalkulasi/paper/size')}}" title='Master Paper Size'>&nbsp;&nbsp;&nbsp;<b><i class="fa fa-angle-double-right"> </i>&nbsp; PAPER SIZE</b></a></li>
							</ul>
							</li>
							<li><a href="{{url('kalkulasi/ink')}}" title='Master Ink'><b>INK TYPE</b></a></li>
							<li><a href="{{url('kalkulasi/plat')}}" title='Master Plate Type'><b>PLATE TYPE</b></a></li>
							<li><a href="{{url('kalkulasi/foil')}}" title='Master Foil Type'><b>FOIL TYPE</b></a></li>
							<li><a href="{{url('kalkulasi/klise')}}" title='Master Klise Type'><b>KLISE TYPE</b></a></li>
							<li><a href="{{url('kalkulasi/glue')}}" title='Master Glue Type'><b>GLUE TYPE</b></a></li>
							<li><a href="{{url('kalkulasi/plastic')}}" title='Master Plastics Type'><b>PLASTICS TYPE</b></a></li>
							<li><a href="{{url('kalkulasi/inline')}}" title='Master Varnish Type'><b>VARNISH TYPE</b></a></li>
							<li><a href="{{url('kalkulasi/machine')}}" title='Master Machine'><b>MACHINE</b></a></li>
							<li><a href="{{url('kalkulasi/mica')}}" title='Master Mica Type'><b>MICA</b></a></li>
							<li><a href="{{url('kalkulasi/board')}}" title='Master Board Type'><b>BOARD</b></a></li>
							<li class="has-sub">
							<a href="javascript:;"><b class="caret pull-right"></b><b>LASER</b></a>
							<ul class="sub-menu">
								<li><a href="{{url('kalkulasi/laser')}}" title='Master Laser'>&nbsp;&nbsp;&nbsp;<b><i class="fa fa-angle-double-right"> </i>&nbsp; LASER</b></a></li>
								<li><a href="{{url('kalkulasi/pertinax')}}" title='Master Pertinax'>&nbsp;&nbsp;&nbsp;<b><i class="fa fa-angle-double-right"> </i>&nbsp; PERTINAX</b></a></li>
								<li><a href="{{url('kalkulasi/laserpertinax')}}" title='Master Laser Pertinax'>&nbsp;&nbsp;&nbsp;<b><i class="fa fa-angle-double-right"> </i>&nbsp; LASER PERTINAX</b></a></li>
							</ul>
							</li>
					</ul>
					
				</li>
				<li class="has-sub">
						<a href="calc.php?kop=order" title='Report'>
							<b><i class="fa fa-print"></i>
						    <span>REPORT </span> </b>
						</a>
				</li>
					<li class="has-sub">
					<a href="javascript:;">
						<b>
						<b class="caret"></b><i class="fa fa-laptop"></i>
						<span>SYSTEM MANAGEMENTS</span></b>
					</a>
					<ul class="sub-menu">
						<li><a href="{{url('kalkulasi/setting')}}" title='Master Setting'><b>&nbsp; MASTER SETTING</b></a></li>
						<li><a href="{{url('kalkulasi/approval')}}" title='Master Approval'><b>&nbsp; MASTER APPROVAL</b></a></li>
						<li><a href="{{url('kalkulasi/user')}}" title='User Management'><b>&nbsp; USER MANAGEMENT</b></a></li>
					</ul>
				</li>
                <li class="menu-control menu-control-left">
                    <a href="javascript:;" data-click="prev-menu"><i class="fa fa-angle-left"></i></a>
                </li>
                <li class="menu-control menu-control-right">
                    <a href="javascript:;" data-click="next-menu"><i class="fa fa-angle-right"></i></a>
                </li>
            </ul>
            <!-- end top-menu nav -->
        </div>
		<!-- end #top-menu -->
		
		<!-- ISI NYA -->
		<div id="content" class="content">
            @yield('content')
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-theme-file="{{asset('assets/css/default/theme/default.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="{{asset('assets/css/default/theme/red.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="{{asset('assets/css/default/theme/blue.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="{{asset('assets/css/default/theme/purple.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="{{asset('assets/css/default/theme/orange.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="{{asset('assets/css/default/theme/black.css')}}" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage">Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('assets/plugins/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js')}}"></script>
	<!--[if lt IE 9]>
		<script src="{{asset('assets/crossbrowserjs/html5shiv.js')}}"></script>
		<script src="{{asset('assets/crossbrowserjs/respond.min.js')}}"></script>
		<script src="{{asset('assets/crossbrowserjs/excanvas.min.js')}}"></script>
	<![endif]-->
	<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('assets/plugins/js-cookie/js.cookie.js')}}"></script>
	<script src="{{asset('assets/js/theme/default.min.js')}}"></script>
	<script src="{{asset('assets/js/apps.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('assets/plugins/highlight/highlight.common.js')}}"></script>
	<script src="{{asset('assets/js/demo/render.highlight.js')}}"></script>
	<script src="{{asset('assets/plugins/parsley/dist/parsley.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js')}}"></script>
	<script src="{{asset('assets/js/demo/form-wizards-validation.demo.min.js')}}"></script>
	
	<script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
	<script src="{{asset('assets/plugins/masked-input/masked-input.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
	<script src="{{asset('assets/plugins/password-indicator/js/password-indicator.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-tag-it/js/tag-it.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-daterangepicker/moment.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-show-password/bootstrap-show-password.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js')}}"></script>
    <script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
	<script src="{{asset('assets/js/demo/form-plugins.demo.min.js')}}"></script>
	
	<script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('assets/js/demo/table-manage-select.demo.min.js')}}"></script>
	
	<script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js')}}"></script>
	<script src="{{asset('assets/js/demo/table-manage-combine.demo.min.js')}}"></script>
	
	<script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
	<script src="{{asset('assets/js/demo/ui-modal-notification.demo.min.js')}}"></script>
	<script src="{{asset('assets/js/demo/table-manage-default.demo.min.js')}}"></script>
	<script src="{{asset('assets/js/demo/table-manage-buttons.demo.min.js')}}"></script>
	
	<script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>
	<script src="{{asset('assets/plugins/powerange/powerange.min.js')}}"></script>
	<script src="{{asset('assets/js/demo/form-slider-switcher.demo.min.js')}}"></script>
	<script src="{{asset('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('assets/js/demo/table-manage-responsive.demo.min.js')}}"></script>
	
	<script src="{{asset('assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js')}}"></script>
	<script src="{{asset('assets/js/demo/form-wizards.demo.min.js')}}"></script>

	<script src="{{asset('assets/js/vendor.min.js')}}" type="ee45e9f98fa701b1f5862f0e-text/javascript"></script>
	<script src="{{asset('assets/js/app.min.js')}}" type="ee45e9f98fa701b1f5862f0e-text/javascript"></script>
	<script src="{{asset('assets/js/theme/default.min.js')}}" type="ee45e9f98fa701b1f5862f0e-text/javascript"></script>

	<script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}" type="a210e5a933ef4c270c04b281-text/javascript"></script>
	<script src="{{asset('assets/plugins/sweetalert/dist/sweetalert.min.js')}}" type="a210e5a933ef4c270c04b281-text/javascript"></script>
	<script src="{{asset('assets/js/demo/ui-modal-notification.demo.js')}}" type="a210e5a933ef4c270c04b281-text/javascript"></script>
	<script src="{{asset('assets/plugins/%40highlightjs/cdn-assets/highlight.min.js')}}" type="ee45e9f98fa701b1f5862f0e-text/javascript"></script>
	<script src="{{asset('assets/js/demo/render.highlight.js')}}" type="ee45e9f98fa701b1f5862f0e-text/javascript"></script>
	
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		var dt= "";
		$(document).ready(function() {
			App.init();
			Highlight.init();
			FormWizardValidation.init();
			FormWizard.init();
			FormPlugins.init();
			FormSliderSwitcher.init();
			TableManageTableSelect.init();
			Notification.init();
			TableManageCombine.init();
			TableManageDefault.init();
			TableManageButtons.init();
			TableManageResponsive.init();
			dt = $('#data-table-responsive1').DataTable();
		});
	</script>
	<script type="text/javascript">
		$("#pil_tax").change(function(){
			var ppn 	= parseFloat($("#p_tax").val());
			var tmpgross 	= parseInt($("#tmpgross").val());
			var tax 	= parseInt($("#tax").val());
			if ($("#pil_tax").val() == "Exclude") {

				var total_ppn = parseInt((tmpgross*ppn)/100 );
				var total = tmpgross + total_ppn;
				$("#h_gross").val(tmpgross);
				$("#b_gross").val(total_ppn);
				$("#h_tax").val(total_ppn);
				$("#h_netto").val(total);
				$("#hb_netto").val(total);
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+total_ppn, success: function(result){
				    $("#tax").val(result);
				  }});
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+total, success: function(result){
				    $("#netto").val(result);
				    $("#b_netto").val(result);
				  }});
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+tmpgross, success: function(result){
					    $("#gross").val(result);
					    $("#b_gross").val(result);
					  }});
				console.log("Exclude tax "+ ppn + " netto" + total);
			}
			else if($("#pil_tax").val() == "Include")
			{
				  	var total_ppn = tmpgross/1.1;
					var tax= tmpgross - total_ppn;
					$("#h_gross").val(total_ppn);
					$("#b_gross").val(total_ppn);
					$("#h_tax").val(tax);
					$("#h_netto").val(tmpgross);
					$("#hb_netto").val(tmpgross);
					$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+tax, success: function(result){
					    $("#tax").val(result);
					  }});
					$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+tmpgross, success: function(result){
					    $("#netto").val(result);
					    $("#b_netto").val(result);
					  }});
					$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+total_ppn, success: function(result){
					    $("#gross").val(result);
					    $("#b_gross").val(result);
					  }});
				console.log("include tax "+ tax + " netto " + tmpgross+" gross "+ total_ppn);
			}
			else
			{
				$("#tax").val("0");
				$("#h_tax").val("0");
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+tmpgross, success: function(result){
				    $("#netto").val(result);
				    $("#b_netto").val(result);
				  }});
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+tmpgross, success: function(result){
					    $("#gross").val(result);
					    $("#b_gross").val(result);
					  }});
				$("#h_netto").val(tmpgross);
				$("#hb_netto").val(tmpgross);
				$("#h_gross").val(tmpgross);
					$("#b_gross").val(total_ppn);
			}
			
			console.log(gross);
		});
		
		$("#p_tax").change(
			function(){
			var ppn 	= parseFloat($("#p_tax").val());
			var gross 	= parseInt($("#gross").val());
			var tax 	= parseInt($("#tax").val());
			if ($("#pil_tax").val() == "Exclude") {

				var total_ppn = parseInt((tmpgross*ppn)/100 );
				var total = tmpgross + total_ppn;
				$("#h_tax").val(total_ppn);
				$("#h_netto").val(total);
				$("#hb_netto").val(total);
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+total_ppn, success: function(result){
				    $("#tax").val(result);
				  }});
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+total, success: function(result){
				    $("#netto").val(result);
				    $("#b_netto").val(result);
				  }});
				console.log("Exclude tax "+ total_ppn + " netto" + total);
			}
			else if($("#pil_tax").val() == "Include")
			{
				var total_ppn = tmpgross/1.1;
				var tax= tmpgross - total_ppn;
				$("#h_gross").val(total_ppn);
				$("#b_gross").val(total_ppn);
				$("#h_tax").val(tax);
				$("#h_netto").val(tmpgross);
				$("#hb_netto").val(tmpgross);
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+tax, success: function(result){
				    $("#tax").val(result);
				  }});
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+tmpgross, success: function(result){
				    $("#netto").val(result);
				    $("#b_netto").val(result);
				  }});
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+total_ppn, success: function(result){
				    $("#gross").val(result);
				    $("#b_gross").val(result);
				  }});
				console.log("include tax "+ total_ppn + " netto" + tmpgross);
			}
			else
			{
				$("#tax").val("0");
				$("#h_tax").val("0");
				$.ajax({url: "modul_sod/m_rupiah.php?kop=rupiah&val="+tmpgross, success: function(result){
				    $("#netto").val(result);
				    $("#b_netto").val(result);
				  }});
				$("#h_netto").val(tmpgross);
				$("#hb_netto").val(tmpgross);
			}
			
			console.log(tmpgross);
		});
	</script>

	<script type="text/javascript">
		var series = $("#series").val();
		var tableMaterial = $('#data-table-material').DataTable({
			"processing": true,
            "serverSide": true,
            "stateDuration": 60 * 24,
            "lengthMenu": [[5,10, 25, 50], [5,10, 25, 50]],
			"ajax": {
					    "url": "modul_sod/get_item.php?series="+series,
					    "dataType": "json",
                  		"type" : "POST"
					},
			"columns" : [
				            { "data" : "Code" },
				            { "data" : "Code" },
				            { "data" : "Name" },
				            { "data" : "Group1" },
				            { "data" : "SmallestUnit" },
				            { "data" : "SoldUnit" },
				            { "data" : "SKUUnit" }
				        ],
			"columnDefs": [
				            {
				                "render": function ( data, type, row ) {
				                    return "<input type='radio' name='matcode' value='"+data+"'/>";
				                },
				                "targets": 0
				            }
				            ]
		});
		//var customercode = $('#customer').val()||"<?php //echo $_REQUEST['c1'];?>";
		var tableCustomer = $('#data-table-customer').DataTable({
			"processing": true,
            "serverSide": true,
            "lengthMenu": [[5,10, 25, 50], [5,10, 25, 50]],
			"ajax": {
					    "url": "modul_sod/get_customer.php?customercode="+series,
					    "dataType": "json",
                  		"type" : "POST"
					},
			"columns" : [
				            { "data" : "Code" },
				            { "data" : "Code" },
				            { "data" : "Name" },
				            { "data" : "Currency" },
				        ],
			"columnDefs": [
				            {
				                "render": function ( data, type, row ) {
				                    return "<input type='radio' name='cust_nm' value='"+data+"'/>";
				                },
				                "targets": 0
				            }
				            ]
		});
		var tableCustomership = $('#data-table-customership').DataTable({
			"processing": true,
            "serverSide": true,
            "lengthMenu": [[5,10, 25, 50], [5,10, 25, 50]],
			"ajax": {
					    "url": "modul_sod/get_customer_ship.php?customercode="+customercode,
					    "dataType": "json",
                  		"type" : "POST"
					},
			"columns" : [
				            { "data" : "Code" },
				            { "data" : "Code" },
				            { "data" : "Name" },
				            { "data" : "Currency" },
				        ],
			"columnDefs": [
				            {
				                "render": function ( data, type, row ) {
				                    return "<input type='radio' name='shipto' value='"+data+"'/>";
				                },
				                "targets": 0
				            }
				            ]
		});
		var tableCustomertax = $('#data-table-customertax').DataTable({
			"processing": true,
            "serverSide": true,
            "lengthMenu": [[5,10, 25, 50], [5,10, 25, 50]],
			"ajax": {
					    "url": "modul_sod/get_customer_tax.php?customercode="+customercode,
					    "dataType": "json",
                  		"type" : "POST"
					},
			"columns" : [
				            { "data" : "Code" },
				            { "data" : "Code" },
				            { "data" : "Name" },
				            { "data" : "Currency" },
				        ],
			"columnDefs": [
				            {
				                "render": function ( data, type, row ) {
				                    return "<input type='radio' name='taxto' value='"+data+"'/>";
				                },
				                "targets": 0
				            }
				            ]
		});

function calculateMaterial(){
	var qty = $('#qty_material_input').val() || 0;
	var price = $('#price_material_input').val() || 0;
	var gross = 0;
	var netto = 0;
	gross = qty*price;
	netto = gross;
	$('#gross_material_input').val(gross);
	$('#tmpgross').val(gross);
	$('#gross').val(gross);
	$('#t_gross').val(gross);
	$('#gross_material_input_span').val(gross);
	$('#netto_material_input').val(netto);
	console.log("netto console "+netto);
	$('#netto_material_input_span').val(netto);
	$("#pil_tax").trigger('change');
} 

$(function(){
	$('#qty_material_input').change(function(){
		calculateMaterial();

	});
});
</script>
<script type="text/javascript">
		
		$('#data-table-paper').DataTable({
		"lengthMenu": [[5,10, 25, 50], [5,10, 25, 50]],
		"stateSave": true
	})
		
</script>

<script>
  
$('#edit_papergroup1').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var title = button.data('paperg1_papername') 
      var description = button.data('paperg1_info') 
      var cat_id = button.data('paperg1_id_pg1') 
      var modal = $(this)
      modal.find('.modal-body #paper_name').val(title);
      modal.find('.modal-body #info').val(description);
      modal.find('.modal-body #id_pg1').val(cat_id);
});
  $('#delete_paperg1').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('paperg1_id_pg1') 
      var modal = $(this)
      modal.find('.modal-body #id_pg1').val(cat_id);
});

$('#edit_papergroup2').on('show.bs.modal', function (event) {
      var button 	= $(event.relatedTarget) 
      var pg1 		= button.data('paperg2_id_pg1') 
      var pg2_name	= button.data('paperg2_pg2_name') 
	  var pg2_info 	= button.data('paperg2_info') 
      var cat_id 	= button.data('paperg2_id_pg2') 
      var modal 	= $(this)

	  modal.find('.modal-body #id_pg1').val(pg1);
      modal.find('.modal-body #pg2_name').val(pg2_name);
      modal.find('.modal-body #info_pg2').val(pg2_info);
      modal.find('.modal-body #id_pg2').val(cat_id);
});
  $('#delete_paperg2').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('paperg2_id_pg2') 
      var modal = $(this)
      modal.find('.modal-body #id_pg2').val(cat_id);
});

$('#edit_papergsm').on('show.bs.modal', function (event) {
      var button 	= $(event.relatedTarget) 
      var pg2 		= button.data('papergsm_id_pg2') 
      var gramature	= button.data('papergsm_gramature') 
	  var tumpukan 	= button.data('papergsm_tumpukan') 
      var gsm_id 	= button.data('papergsm_gsm') 
      var modal 	= $(this)

	  modal.find('.modal-body #id_pg2').val(pg2);
      modal.find('.modal-body #gramature').val(gramature);
      modal.find('.modal-body #tumpukan').val(tumpukan);
      modal.find('.modal-body #id_gsm').val(gsm_id);
});
  $('#delete_papergsm').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var gsm_id = button.data('papergsm_gsm') 
      var modal = $(this)
      modal.find('.modal-body #id_gsm').val(gsm_id);
});

$('#edit_papersize').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var idpg2 = button.data('papersize_id_pg2')
      var idgsm = button.data('papersize_id_gsm') 
      var length = button.data('papersize_length')
      var width = button.data('papersize_width')
      var price = button.data('papersize_price') 
      var idsize = button.data('papersize_size') 
      var modal = $(this)
      modal.find('.modal-body #id_pg21').val(idpg2);
      modal.find('.modal-body #id_gsm2').val(idgsm);
      modal.find('.modal-body #length').val(length);
      modal.find('.modal-body #width').val(width);
      modal.find('.modal-body #price_per_kg').val(price);
      modal.find('.modal-body #id_size').val(idsize);
});
  $('#delete_papersize').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('papersize_size') 
      var modal = $(this)
      modal.find('.modal-body #id_size').val(cat_id);
});

$('#edit_inkgroup').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id_t = button.data('inkgroup_id')
      var name_t = button.data('inkgroup_name') 
      var info_t = button.data('inkgroup_info')
      var modal = $(this)
      modal.find('.modal-body #id_inkgroup').val(id_t);
      modal.find('.modal-body #name_tinta').val(name_t);
      modal.find('.modal-body #info').val(info_t);
});
  $('#delete_inkgroup').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('inkgroup_id') 
      var modal = $(this)
      modal.find('.modal-body #id_inkgroup').val(cat_id);
});

$('#edit_inklist').on('show.bs.modal', function (event) {
      var button 	= $(event.relatedTarget) 
      var id_tt 	= button.data('inklist_id')
	  var id_tinta 		= button.data('inklist_id_t')
      var name_tinta_t 	= button.data('inklist_name') 
      var info_tinta_t 	= button.data('inklist_info')
	  var harga_tinta_t 	= button.data('inklist_harga')
	  var begda 	= button.data('inklist_begda')
	  var endda 	= button.data('inklist_endda')
      var modal 	= $(this)
      modal.find('.modal-body #id_inklist').val(id_tt);
	  modal.find('.modal-body #id_tinta').val(id_tinta);
      modal.find('.modal-body #name_tinta_t').val(name_tinta_t);
      modal.find('.modal-body #info_t').val(info_tinta_t);
	  modal.find('.modal-body #harga_tinta_t').val(harga_tinta_t);
	  modal.find('.modal-body #begda').val(begda);
	  modal.find('.modal-body #endda').val(endda);
});
  $('#delete_inklist').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('inklist_id') 
      var modal = $(this)
      modal.find('.modal-body #id_inktype').val(cat_id);
});

$('#edit_platgroup').on('show.bs.modal', function (event) {
      var button 		  = $(event.relatedTarget) 
      var id_plat_group	  = button.data('platgroup_id')
      var plat_group_name = button.data('platgroup_name')
	  var info_plat_group = button.data('platgroup_info')
	  var jumlah_lbr 	  = button.data('platgroup_jumlahlbr')
      var modal 	= $(this)
      modal.find('.modal-body #id_plat_group').val(id_plat_group);
	  modal.find('.modal-body #plat_group_name').val(plat_group_name);
      modal.find('.modal-body #info_plat_group').val(info_plat_group);
      modal.find('.modal-body #jumlah_lbr').val(jumlah_lbr);
});
  $('#delete_platgroup').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('platgroup_id') 
      var modal = $(this)
      modal.find('.modal-body #id_plat_group').val(cat_id);
});

$('#edit_plat').on('show.bs.modal', function (event) {
      var button 		= $(event.relatedTarget) 
      var id_plat 		= button.data('plat_id')
	  var id_mesin 		= button.data('plat_mesin')
      var plat_name 	= button.data('plat_name') 
      var harga_plat 	= button.data('plat_harga')
	  var info_plat 	= button.data('plat_info')
	  var id_plat_group	= button.data('plat_id_group')
	  var begda 		= button.data('plat_begda')
	  var endda 		= button.data('plat_endda')
	  var length_plat 	= button.data('plat_length')
	  var width_plat 	= button.data('plat_width')
      var modal 	= $(this)
      modal.find('.modal-body #id_plat').val(id_plat);
	  modal.find('.modal-body #id_mesin').val(id_mesin);
      modal.find('.modal-body #id_plat_group').val(id_plat_group);
      modal.find('.modal-body #plat_name').val(plat_name);
	  modal.find('.modal-body #harga_plat').val(harga_plat);
	  modal.find('.modal-body #length_plat').val(length_plat);
	  modal.find('.modal-body #width_plat').val(width_plat);
	  modal.find('.modal-body #info_plat').val(info_plat);
	  modal.find('.modal-body #begda').val(begda);
	  modal.find('.modal-body #endda').val(endda);
});
  $('#delete_plat').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('plat_id') 
      var modal = $(this)
      modal.find('.modal-body #id_plat').val(cat_id);
});

$('#edit_machinegroup').on('show.bs.modal', function (event) {
      var button 	 = $(event.relatedTarget) 
      var id_group   = button.data('machinegroup_id')
      var group_name = button.data('machinegroup_name')
	  var info_group = button.data('machinegroup_info')
      var modal 	 = $(this)
      modal.find('.modal-body #id_group').val(id_group);
	  modal.find('.modal-body #group_name').val(group_name);
      modal.find('.modal-body #ket_group').val(info_group);
});
  $('#delete_machinegroup').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('machinegroup_id') 
      var modal = $(this)
      modal.find('.modal-body #id_group').val(cat_id);
});

$('#edit_machine').on('show.bs.modal', function (event) {
      var button 		= $(event.relatedTarget) 
      var id_mesin 		= button.data('mesin_id')
	  var group_id 		= button.data('group_id')
      var mesin_name 	= button.data('mesin_name') 
      var mesin_jumwarna 	= button.data('mesin_jumwarna')
	  var mesin_maxpanjang 	= button.data('mesin_maxpanjang')
	  var mesin_maxlebar	= button.data('mesin_maxlebar')
	  var mesin_kapasitas 	= button.data('mesin_kapasitas')
	  var mesin_harga 		= button.data('mesin_harga')
	  var mesin_inline 	= button.data('mesin_inline')
	  var mesin_maxpplat 	= button.data('mesin_maxpplat')
	  var mesin_maxlplat 	= button.data('mesin_maxpplat')
	  var mesin_aktif 	= button.data('mesin_aktif')
      var modal 	= $(this)
      modal.find('.modal-body #id_mesin').val(id_mesin);
	  modal.find('.modal-body #id_group').val(group_id);
      modal.find('.modal-body #name_mesin').val(mesin_name);
      modal.find('.modal-body #jum_warna').val(mesin_jumwarna);
	  modal.find('.modal-body #max_panjang').val(mesin_maxpanjang);
	  modal.find('.modal-body #max_lebar').val(mesin_maxlebar);
	  modal.find('.modal-body #kapasitas').val(mesin_kapasitas);
	  modal.find('.modal-body #harga_p_jam').val(mesin_harga);
	  modal.find('.modal-body #inline').val(mesin_inline);
	  modal.find('.modal-body #max_pjg_plat').val(mesin_maxpplat);
	  modal.find('.modal-body #max_lbr_plat').val(mesin_maxlplat);
	  modal.find('.modal-body #aktif').val(mesin_aktif);
});
  $('#delete_machine').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('mesin_id') 
      var modal = $(this)
      modal.find('.modal-body #id_machine').val(cat_id);
});

$('#edit_foilgroup').on('show.bs.modal', function (event) {
      var button 	 = $(event.relatedTarget) 
      var id_foilgroup   = button.data('foilgroup_id')
      var foilgroup_name = button.data('foilgroup_name')
	  var info  		 = button.data('foilgroup_info')
      var modal 	 	 = $(this)
      modal.find('.modal-body #id_foilgroup').val(id_foilgroup);
	  modal.find('.modal-body #foilgroup_name').val(foilgroup_name);
      modal.find('.modal-body #info').val(info);
});
  $('#delete_foilgroup').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('foilgroup_id') 
      var modal = $(this)
      modal.find('.modal-body #id_foilgroup').val(cat_id);
});

$('#edit_foil').on('show.bs.modal', function (event) {
      var button 		= $(event.relatedTarget) 
      var id_foil 		= button.data('foil_id')
	  var foilgroup_id 	= button.data('foilgroup_id')
      var foil_name 	= button.data('foil_name') 
      var f_length 		= button.data('foil_panjang')
	  var f_width 		= button.data('foil_lebar')
	  var f_harga		= button.data('foil_harga')
	  var f_ket 		= button.data('foil_ket')
	  var begda 		= button.data('foil_begda')
	  var endda 		= button.data('foil_endda')
      var modal 		= $(this)
      modal.find('.modal-body #id_foil').val(id_foil);
	  modal.find('.modal-body #id_foilgroup').val(foilgroup_id);
      modal.find('.modal-body #foil_name').val(foil_name);
      modal.find('.modal-body #f_panjang').val(f_length);
	  modal.find('.modal-body #f_lebar').val(f_width);
	  modal.find('.modal-body #f_harga').val(f_harga);
	  modal.find('.modal-body #f_ket').val(f_ket);
	  modal.find('.modal-body #begda').val(begda);
	  modal.find('.modal-body #endda').val(endda);
});
  $('#delete_foil').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('foil_id') 
      var modal = $(this)
      modal.find('.modal-body #id_foil').val(cat_id);
});

$('#edit_klise').on('show.bs.modal', function (event) {
      var button 		= $(event.relatedTarget) 
      var id_klise 		= button.data('klise_id')
      var klise_name 	= button.data('klise_name')
	  var klise_tipe	= button.data('klise_tipe') 
      var klise_harga	= button.data('klise_harga')
	  var klise_ket		= button.data('klise_ket')
      var modal 		= $(this)
      modal.find('.modal-body #id_klise').val(id_klise);
      modal.find('.modal-body #klise_name').val(klise_name);
      modal.find('.modal-body #klise_tipe').val(klise_tipe);
	  modal.find('.modal-body #klise_harga').val(klise_harga);
	  modal.find('.modal-body #klise_ket').val(klise_ket);
});
  $('#delete_klise').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id_klise 		= button.data('klise_id')
      var modal = $(this)
      modal.find('.modal-body #id_klise').val(id_klise);
});

$('#edit_glue').on('show.bs.modal', function (event) {
      var button 		= $(event.relatedTarget) 
      var id_glue 		= button.data('glue_id')
      var glue_name 	= button.data('glue_name')
	  var glue_variable	= button.data('glue_variable') 
      var glue_ket		= button.data('glue_ket')
	  var glue_harga	= button.data('glue_harga')
	  var glue_proses	= button.data('glue_proses')
      var modal 		= $(this)
      modal.find('.modal-body #id_glue').val(id_glue);
      modal.find('.modal-body #glue_name').val(glue_name);
      modal.find('.modal-body #glue_variable').val(glue_variable);
	  modal.find('.modal-body #glue_ket').val(glue_ket);
	  modal.find('.modal-body #glue_harga').val(glue_harga);
	  modal.find('.modal-body #glue_proses').val(glue_proses);
});
  $('#delete_glue').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id_glue 		= button.data('glue_id')
      var modal = $(this)
      modal.find('.modal-body #id_glue').val(id_glue);
});

$('#edit_plasticgroup').on('show.bs.modal', function (event) {
      var button 	 		= $(event.relatedTarget) 
      var id_plasticgroup   = button.data('plasticgroup_id')
      var plasticgroup_name = button.data('plasticgroup_name')
	  var info_plasticgroup	= button.data('plasticgroup_info')
      var modal 	 = $(this)
      modal.find('.modal-body #id_laminating_group').val(id_plasticgroup);
	  modal.find('.modal-body #laminating_group_name').val(plasticgroup_name);
      modal.find('.modal-body #info_laminating_group').val(info_plasticgroup);
});
  $('#delete_plasticgroup').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('plasticgroup_id') 
      var modal = $(this)
      modal.find('.modal-body #id_laminating_group').val(cat_id);
});

$('#edit_plastic').on('show.bs.modal', function (event) {
      var button 			= $(event.relatedTarget) 
      var id_plastic		= button.data('plastic_id')
	  var plasticgroup_id 	= button.data('plasticgroup_id')
      var plastic_name 		= button.data('plastic_name') 
      var plastic_tampertype= button.data('plastic_tampertype')
	  var plastic_panjang 	= button.data('plastic_panjang')
	  var plastic_lebar		= button.data('plastic_lebar')
	  var plastic_harga 	= button.data('plastic_harga')
	  var plastic_info 		= button.data('plastic_info')
	  var plastic_begda 	= button.data('plastic_begda')
	  var plastic_endda 	= button.data('plastic_endda')
      var modal 			= $(this)
      modal.find('.modal-body #id_laminate').val(id_plastic);
	  modal.find('.modal-body #id_laminating_group').val(plasticgroup_id);
      modal.find('.modal-body #laminate_name').val(plastic_name);
      modal.find('.modal-body #tamper_type').val(plastic_tampertype);
	  modal.find('.modal-body #panjang_laminate').val(plastic_panjang);
	  modal.find('.modal-body #lebar_laminate').val(plastic_lebar);
	  modal.find('.modal-body #laminate_harga').val(plastic_harga);
	  modal.find('.modal-body #ket_laminate').val(plastic_info);
	  modal.find('.modal-body #begda').val(plastic_begda);
	  modal.find('.modal-body #endda').val(plastic_endda);
});
  $('#delete_plastic').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('plastic_id') 
      var modal = $(this)
      modal.find('.modal-body #id_laminate').val(cat_id);
});

$('#edit_inline').on('show.bs.modal', function (event) {
      var button 			= $(event.relatedTarget) 
      var id_inline			= button.data('inline_id')
	  var name_inline 		= button.data('inline_name')
      var kategori_inline 	= button.data('inline_kategori') 
      var harga_inline 		= button.data('inline_harga')
	  var keterangan 		= button.data('inline_ket')
	  var inline_variable	= button.data('inline_var')
      var modal 			= $(this)
      modal.find('.modal-body #id_inline').val(id_inline);
	  modal.find('.modal-body #name_inline').val(name_inline);
      modal.find('.modal-body #kategori_inline').val(kategori_inline);
      modal.find('.modal-body #harga_inline').val(harga_inline);
	  modal.find('.modal-body #keterangan').val(keterangan);
	  modal.find('.modal-body #inline_variable').val(inline_variable);
});
  $('#delete_inline').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('inline_id') 
      var modal = $(this)
      modal.find('.modal-body #id_inline').val(cat_id);
});

$('#edit_mica').on('show.bs.modal', function (event) {
      var button 			= $(event.relatedTarget) 
      var id_mika			= button.data('mica_id')
	  var mika_name 		= button.data('mica_name')
      var tamper_mika_type 	= button.data('mica_tamper') 
      var mika_harga 		= button.data('mica_harga')
	  var panjang_mika 		= button.data('mica_panjang')
	  var lebar_mika 		= button.data('mica_lebar')
	  var mika_ket			= button.data('mica_ket')
      var modal 			= $(this)
      modal.find('.modal-body #id_mika').val(id_mika);
	  modal.find('.modal-body #mika_name').val(mika_name);
      modal.find('.modal-body #tamper_mika_type').val(tamper_mika_type);
      modal.find('.modal-body #mika_harga').val(mika_harga);
	  modal.find('.modal-body #panjang_mika').val(panjang_mika);
	  modal.find('.modal-body #lebar_mika').val(lebar_mika);
	  modal.find('.modal-body #mika_ket').val(mika_ket);
});
  $('#delete_mica').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('mica_id') 
      var modal = $(this)
      modal.find('.modal-body #id_mika').val(cat_id);
});

$('#edit_board').on('show.bs.modal', function (event) {
      var button 			= $(event.relatedTarget) 
      var id_papan			= button.data('board_id')
	  var papan_name 		= button.data('board_name')
      var harga_papan	 	= button.data('board_harga') 
      var ket_papan 		= button.data('board_ket')
      var modal 			= $(this)
      modal.find('.modal-body #id_papan').val(id_papan);
	  modal.find('.modal-body #papan_name').val(papan_name);
      modal.find('.modal-body #harga_papan').val(harga_papan);
      modal.find('.modal-body #ket_papan').val(ket_papan);
});
  $('#delete_board').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('board_id') 
      var modal = $(this)
      modal.find('.modal-body #id_papan').val(cat_id);
});

$('#edit_laser').on('show.bs.modal', function (event) {
      var button 			= $(event.relatedTarget) 
      var id_laser			= button.data('laser_id')
	  var laser_name 		= button.data('laser_name')
      var harga_laser	 	= button.data('laser_harga') 
      var modal 			= $(this)
      modal.find('.modal-body #id_laser').val(id_laser);
	  modal.find('.modal-body #laser_name').val(laser_name);
      modal.find('.modal-body #harga_laser').val(harga_laser);
});
  $('#delete_laser').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('laser_id') 
      var modal = $(this)
      modal.find('.modal-body #id_laser').val(cat_id);
});

$('#edit_pertinax').on('show.bs.modal', function (event) {
      var button 			= $(event.relatedTarget) 
      var id_pertinax			= button.data('pertinax_id')
	  var pertinax_name 		= button.data('pertinax_name')
      var harga_pertinax	 	= button.data('pertinax_harga') 
      var modal 			= $(this)
      modal.find('.modal-body #id_pertinax').val(id_pertinax);
	  modal.find('.modal-body #pertinax_name').val(pertinax_name);
      modal.find('.modal-body #harga_pertinax').val(harga_pertinax);
});
  $('#delete_pertinax').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('pertinax_id') 
      var modal = $(this)
      modal.find('.modal-body #id_pertinax').val(cat_id);
});

$('#edit_laser_pertinax').on('show.bs.modal', function (event) {
      var button 			= $(event.relatedTarget) 
      var id_laser_pertinax			= button.data('laser_pertinax_id')
	  var laser_pertinax_name 		= button.data('laser_pertinax_name')
      var harga_laser_pertinax	 	= button.data('laser_pertinax_harga') 
      var modal 			= $(this)
      modal.find('.modal-body #id_laser_pertinax').val(id_laser_pertinax);
	  modal.find('.modal-body #laser_pertinax_name').val(laser_pertinax_name);
      modal.find('.modal-body #harga_laser_pertinax').val(harga_laser_pertinax);
});
  $('#delete_laser_pertinax').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var cat_id = button.data('laser_pertinax_id') 
      var modal = $(this)
      modal.find('.modal-body #id_laser_pertinax').val(cat_id);
});

</script>

</body>
</html>

