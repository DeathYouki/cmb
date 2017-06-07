@extends('templates.coreTemplate')

@section('pageTitle')
	CMB
@endsection
	
@section('content')
	<div id="j-product-script-injection"></div>
	<section class="col-md-12" id="j-product-section">
		<div class="col-md-6">
			<div class="main-image" id="j-product-image-main"></div>
			<div class="thumbnails" id="j-product-thumbnails"></div>
		</div>
		
		<div class="col-md-6">
			<div class="informations">
				<div class="informations__info" id="j-product-name"></div>

				<div class="clearfix"></div>
				<label class="informations__label informations__label--hidden" id="j-product-chosenvariants-label">Variantes Choisi : </label>
				<div class="informations__info" id="j-product-chosenvariants"></div>

				<div class="clearfix"></div>
				<label class="informations__label">Quantité : </label>
				<div class="informations__info" id="j-product-quantity"></div>

				<div class="clearfix"></div>
				<label class="informations__label">Prix : </label>
				<div class="informations__info" id="j-product-price"></div>
			</div>
			<div class="order col-md-offset-4">
				<button class="btn btn-lg btn-success" id="j-product-order">Commander</button>
			</div>
		</div>
	</section class="col-md-12">

@endsection