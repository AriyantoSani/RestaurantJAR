<!doctype html>
<html lang="en">

<head>
	<title>Admin Page</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('vendors/adminpage/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet"
		href="{{asset('vendors/adminpage/admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/adminpage/admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('vendors/adminpage/admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('vendors/adminpage/admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('vendors/adminpage/admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('vendors/adminpage/admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" href="{{ asset('./images/logo.jpg') }}" />
	<link rel="stylesheet" type="text/css"
		href="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />

	@yield('header')
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
		rel="stylesheet" />
</head>

<body>

	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
				<div class="brand">
					<a href="#"><img src="{{ asset('./images/logo.png') }}" width="30px" height="30px" class="img-responsive logo"></a>
				</div>
				<div class="container-fluid">
					
					<div id="navbar-menu">
						<ul class="nav navbar-nav navbar-right">	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="{{asset('logout')}}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a class="{{ request()->is('transaction') ? 'active' : '' }}" href="transaction"><i
									class="lnr-file-empty"></i> <span>Report</span></a></li>
						<li><a class="{{ request()->is('account') ? 'active' : '' }}" href="account"></i><i
									class="lnr lnr-user"></i> <span>Account</span></a></li>
						<li><a class="{{ request()->is('menuMaster') ? 'active' : '' }}" href="menuMaster"></i><i
									class="lnr-plus-circle"></i> <span>Menu</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<strong>Copyright &copy; Ariyanto Sani , Roy Parsaoran , Jonathan Bernad</strong>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('vendors/adminpage/admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendors/adminpage/admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	{{-- <script src="{{asset('vendors/adminpage/admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}">
	</script>
	<script src="{{asset('vendors/adminpage/admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}">
	</script> --}}
	<script src="{{asset('vendors/adminpage/admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script type="text/javascript"
		src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
	@yield('js')
	
</body>

</html>