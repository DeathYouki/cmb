<!DOCTYPE html>
<html lang="fr">
<head>
	<title>@yield('pageTitle')</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles/app.css') }}">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	{{-- <script type="text/javascript" src="{{ URL::asset('js/externalproduct.js') }}"></script> --}}
	<script type="text/javascript" src="{{ URL::asset('js/adminexternalproduct.js') }}"></script>
</head>
<body>
	<div class="container-full container-full--background">
		@include('includes.header')
		@include('includes.linkinput')
		<div class="col-md-8 col-md-offset-2 content" id="j-products-container">
			@yield('content')
		</div>
	</div>
</body>
</html>