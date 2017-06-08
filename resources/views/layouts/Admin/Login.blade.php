@extends('templates.adminlogin-template')

@section('pageTitle')
	Connexion d'administrateur
@endsection

@section('content')
<form class="col-md-6 col-md-offset-3" method="POST" action=" {{ route('adminlogin.post') }} ">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="email">Email :</label>
		<input type="email" class="form-control" id="email">
	</div>
	<div class="form-group">
		<label for="pwd">Mot de pass :</label>
		<input type="password" class="form-control" id="pwd">
	</div>
	<button type="submit" class="btn btn-default">Se connecter</button>
</form>
@endsection