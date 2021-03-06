<!DOCTYPE html>
<html lang="fr">
<head>
	<title>@yield('pageTitle')</title>

	<!-- Styles -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles/app.css') }}">

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/Admin/nav-bar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/Admin/Haouta/en-attente.js') }}"></script>
</head>
<body>
	<div class="container-full container-full--background">
		@include('includes.Admin.Menus.MainMenu')
		@include('includes.Admin.Menus.SubMenu')
		@yield('nav-bar')
		<div class="col-md-12 content" id="j-core-container">
			@yield('content')
		</div>
	</div>	
	<!-- Script -->
</body>
</html>