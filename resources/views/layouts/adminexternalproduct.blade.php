@extends('templates.coreTemplate')

@section('pageTitle')
	CMB
@endsection
	
@section('content')
	<div id="j-product-script-injection"></div>
	<section class="col-md-12" id="j-product-section" style="display: none;">
		<div class="col-md-6">
			<div class="main-image" id="j-product-image-main"></div>
			<div class="thumbnails" id="j-product-thumbnails"></div>
		</div>
		
		<div class="col-md-6">
			<div class="informations">
				<div class="informations__info" id="j-product-name"></div>

				<div class="clearfix"></div>
				<label class="informations__label informations__label--hidden" id="j-product-chosenvariants-label">Variantes : </label>
				<div class="informations__info" id="j-product-variants"></div>

			</div>
		</div>
	</section class="col-md-12">

@endsection