@extends('templates.admin-template')

@section('pageTitle')
	Administration
@endsection

@section('content')
<!-- **************** Commandes **************** -->
	<!-- ***** Berra ***** -->
	<!-- Suspendus -->
	<div class="page-content" id="j-commandes-berra-suspendus" style="display: none;">
		<section class="col-md-12" id="">sus
		</section>
	</div>

	<!-- Payés -->
	<div class="page-content" id="j-commandes-berra-payes" style="display: none;">
		<section class="col-md-12" id="">pay
		</section>
	</div>

	<!-- Achetés -->
	<div class="page-content" id="j-commandes-berra-achetes" style="display: none;">
		<section class="col-md-12" id="">ach
		</section>
	</div>

	<!-- Rejetés -->
	<div class="page-content" id="j-commandes-berra-rejetes" style="display: none;">
		<section class="col-md-12" id="">rej
		</section>
	</div>

	<!-- ***** Hna ***** -->
	<!-- Commandés -->
	<div class="page-content" id="j-commandes-hna-commandes" style="display: none;">
		<section class="col-md-12" id="">cmd
		</section>
	</div>

	<!-- Livrés(payés) -->
	<div class="page-content" id="j-commandes-hna-livres" style="display: none;">
		<section class="col-md-12" id="">liv
		</section>
	</div>

	<!-- Rejetés -->
	<div class="page-content" id="j-commandes-hna-rejetes" style="display: none;">
		<section class="col-md-12" id="">rej
		</section>
	</div>
<!-- **************** Haouta **************** -->
	<!-- Vitrine -->
	<div class="page-content" id="j-haouta-vitrine" style="display: none;">
		<section class="col-md-12" id="">vit
		</section>
	</div>

	<!-- En attente -->
	<div class="page-content" id="j-haouta-en-attente" style="display: none;">
		<div id="j-product-script-injection"></div>
		<section class="col-md-12" id="j-product-section" style="display: none;">
			<div class="col-md-2">
				<div class="main-image" id="j-product-image-main"></div>
				<div class="thumbnails" id="j-product-thumbnails"></div>
			</div>
			
			<div class="col-md-5">
				<div class="informations">
					<div class="informations__info" id="j-product-name"></div>

					<div class="clearfix"></div>
					<label class="informations__label informations__label--hidden" id="j-product-chosenvariants-label">Variantes : </label>
					<div class="informations__info" id="j-product-variants"></div>

				</div>
			</div>
		</section>
	</div>

	<!-- Ajout par lien -->
	<div class="page-content" id="j-haouta-ajout-par-lien" style="display: none;">
		<section class="col-md-12" id="">link
		</section>
	</div>

<!-- **************** CMH **************** -->
	<!-- Vitrine -->
	<div class="page-content" id="j-cmh-vitrine" style="display: none;">
		<section class="col-md-12" id="">vitcmh
		</section>
	</div>

	<!-- Stock -->
	<div class="page-content" id="j-cmh-stock" style="display: none;">
		<section class="col-md-12" id="">stock
		</section>
	</div>

	<!-- Ajout de produit -->
	<div class="page-content" id="j-cmh-ajout-de-produit" style="display: none;">
		<section class="col-md-12" id="">aj
		</section>
	</div>

<!-- **************** Utilisateurs **************** -->
	<!-- Utilisateurs -->
	<div class="page-content" id="j-utilisateurs-comptes" style="display: none;">
		<section class="col-md-12" id="">cmpt
		</section>
	</div>

	<!-- Pleintes -->
	<div class="page-content" id="j-utilisateurs-pleintes" style="display: none;">
		<section class="col-md-12" id="">ple
		</section>
	</div>

@endsection