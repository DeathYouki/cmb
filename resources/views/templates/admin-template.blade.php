<!DOCTYPE html>
<html lang="fr">
<head>
	<title>@yield('pageTitle')</title>

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles/app.css') }}">

	<!-- Scripts -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/Admin/nav-bar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/Admin/Haouta/en-attente.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/Admin/administration.js') }}"></script>
</head>
<body>
	<div class="container-fluid container-fluid--grey-bg">
		@include('includes.Admin.Menus.MainMenu')
		@include('includes.Admin.Menus.SubMenu')
		@yield('nav-bar')
		<div class="col-md-12" id="j-content-container">
			@yield('content')
		</div>
	</div>	
</body>
</html>