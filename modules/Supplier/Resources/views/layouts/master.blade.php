<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Fast Card - Supplier - @yield('title')</title>

	<link href="{{elixir('css/app.css')}}" rel="stylesheet">

	<!-- Animation library for notifications   -->
	<link href="assets/css/animate.min.css" rel="stylesheet"/>

	<!--  Paper Dashboard core CSS    -->
	<link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!--  Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
	<link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

		<!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

		<div class="sidebar-wrapper">
			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					FastCard
				</a>
			</div>

			<ul class="nav">
				<li class="active">
					<a href="/">
						<i class="ti-panel"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li>
					<a href="user.html">
						<i class="ti-user"></i>
						<p>Users Management</p>
					</a>
				</li>
				<li>
					<a href="table.html">
						<i class="ti-view-list-alt"></i>
						<p>Cards Management</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar bar1"></span>
						<span class="icon-bar bar2"></span>
						<span class="icon-bar bar3"></span>
					</button>
					<a class="navbar-brand" href="#">@yield('title')</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="ti-bell"></i>
								<p class="notification">5</p>
								<p>Notifications</p>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Notification 1</a></li>
								<li><a href="#">Notification 2</a></li>
								<li><a href="#">Notification 3</a></li>
								<li><a href="#">Notification 4</a></li>
								<li><a href="#">Another notification</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
							</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>


		<div class="content">
			<div class="container-fluid">
				@yield('content')
			</div>
		</div>
	</div>
</div>
</body>
<footer>
	<script src="{{elixir('js/app.js')}}"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			demo.initChartist();

//			$.notify({
//				icon: 'ti-gift',
//				message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."
//
//			},{
//				type: 'success',
//				timer: 4000
//			});

		});
	</script>
</footer>
</html>