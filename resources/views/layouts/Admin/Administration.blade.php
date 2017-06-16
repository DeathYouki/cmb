@extends('templates.admin-template')

@section('pageTitle')
	Administration
@endsection

@section('content')
<!-- **************** Commandes **************** -->
	<!-- ***** Berra ***** -->
	<!-- Suspendus -->
	<div class="page-content" id="j-commandes-berra-suspendus">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">
					<label class="data-grp__label">Quantité : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">
					<label class="grp__label">Montant à payer : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">
					<label class="grp__label">Source : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">
					<label class="grp__label">Client : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">
					<label class="grp__label">Status : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">
					<label class="grp__label">Adresse : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">
					<label class="grp__label">Date de commande : </label>
					<span class="data-grp__info"></span>
				</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- Payés -->
	<div class="page-content" id="j-commandes-berra-payes" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">
					<label class="data-grp__label">Quantité : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">	
					<label class="data-grp__label">Montant payé : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">	
					<label class="data-grp__label">Source : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">	
					<label class="data-grp__label">Client : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">	
					<label class="data-grp__label">Status : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">	
					<label class="data-grp__label">Adresse : </label>
					<span class="data-grp__info"></span>
				</div>
				<div class="data-grp">	
					<label class="data-grp__label">Date de commande : </label>
					<span class="data-grp__info"></span>
				</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- Achetés -->
	<div class="page-content" id="j-commandes-berra-achetes" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
					<div class="data-grp">
						<label class="data-grp__label">Quantité : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Source : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Client : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Status : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Adresse : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Date de commande : </label>
						<span class="data-grp__info"></span>
					</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- Rejetés -->
	<div class="page-content" id="j-commandes-berra-rejetes" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
					<div class="data-grp">
						<label class="data-grp__label">Quantité : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Source : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Client : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Status : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Adresse : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Date de commande : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Commentaire : </label>
						<span class="data-grp__info"></span>
					</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- ***** Hna ***** -->
	<!-- Commandés -->
	<div class="page-content" id="j-commandes-hna-commandes" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
					<div class="data-grp">
						<label class="data-grp__label">Quantité : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Montant à payer : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Client : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Status : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Adresse : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Date de commande : </label>
						<span class="data-grp__info"></span>
					</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- Livrés(payés) -->
	<div class="page-content" id="j-commandes-hna-livres" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
					<div class="data-grp">
						<label class="data-grp__label">Quantité : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Montant payé : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Client : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Status : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Adresse : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Date de commande : </label>
						<span class="data-grp__info"></span>
					</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- Rejetés -->
	<div class="page-content" id="j-commandes-hna-rejetes" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
					<div class="data-grp">
						<label class="data-grp__label">Quantité : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Client : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Status : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Adresse : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Date de commande : </label>
						<span class="data-grp__info"></span>
					</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>
<!-- **************** Haouta **************** -->
	<!-- Vitrine -->
	<div class="page-content" id="j-haouta-vitrine" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
					<div class="data-grp">
						<label class="data-grp__label">Quantité en stock : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Status : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Date d'ajout : </label>
						<span class="data-grp__info"></span>
					</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- En attente -->
	<div class="page-content" id="j-haouta-en-attente" style="display: none;">
		<div id="j-section-haouta-suspendus-scripts"></div>
		<section class="col-md-12 content-section" id="j-content-section-haouta-suspendus" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images" id="j-haouta-en-attente-images">
				{{-- <div class="j-product-image-main-image" id="j-product-suspendus-image-main"></div>
				<div c content-section__datala
					<div class="data-grp">ails"></div> --}}
				<div class="thumbnails" id="j-haouta-en-attente-thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="informations">
					<div class="data-grp">
						<span class="data-grp__info" id="j-haouta-suspendus-product-name"></span>
					</div>
					<div class="data-grp" id="j-haouta-suspendus-product-variants-grp">
						<label class="data-grp__label">Variantes : </label>
						<div class="data-grp__block" id="j-haouta-en-attente-variants"></div>
					</div>
				</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- Ajout par lien -->
	<div class="page-content" id="j-haouta-ajout-par-lien" style="display: none;">
		<section class="col-md-12 content-section" id="">
			<div class="form-group">
				<label for="" class="control-label col-sm-8 col-sm-offset-2 data-grp__label">Ajoutez des liens (séparés par des retours chariots) :</label>
				<div class=" col-sm-8 col-sm-offset-2">
					<textarea class="form-control informations__input" rows="5" id=""></textarea>
				</div>
			</div>
			<div class="form-group"> 
				<div class="col-sm-offset-5 col-sm-2">
					<button type="submit" class="btn btn-default">Ajouter par lien</button>
				</div>
			</div>
		</section>
	</div>

<!-- **************** CMH **************** -->
	<!-- Vitrine -->
	<div class="page-content" id="j-cmh-vitrine" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
					<div class="data-grp">
						<label class="data-grp__label">Quantité en stock : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Date d'ajout : </label>
						<span class="data-grp__info"></span>
					</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- Stock -->
	<div class="page-content" id="j-cmh-stock" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<span class="data-grp__info"></span>
				</div>
					<div class="data-grp">
						<label class="data-grp__label">Quantité en stock : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Date d'ajout : </label>
						<span class="data-grp__info"></span>
					</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- Ajout de produit -->
	<div class="page-content" id="j-cmh-ajout-de-produit" style="display: none;">
		<section class="col-md-12 content-section" id="">
			<form class="form-horizontal col-sm-8 col-sm-offset-2">
				<div class="form-group">
					<label class="control-label col-sm-3 data-grp__label" for="">Nom du produit :</label>
					<div class="col-sm-8">
						<input type="" class="form-control informations__input" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 data-grp__label" for="">Images :</label>
					<div class="col-sm-8">
						<input type="file" class="form-control informations__input" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 data-grp__label" for="">Prix :</label>
					<div class="col-sm-8">
						<input type="" class="form-control informations__input" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 data-grp__label" for="">Quantité :</label>
					<div class="col-sm-8">
						<input type="" class="form-control informations__input" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 data-grp__label" for="">Tags :</label>
					<div class="col-sm-8">
						<input type="" class="form-control informations__input" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 data-grp__label" for="">Catégorie :</label>
					<div class="col-sm-8">
						<select class="form-control" id="">
							<option>1</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 data-grp__label" for="">Sous-catégorie :</label>
					<div class="col-sm-8">
						<select class="form-control" id="">
							<option>1</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 data-grp__label" for="">Lien vidéo :</label>
					<div class="col-sm-8">
						<input type="" class="form-control informations__input" id="" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-3 data-grp__label">Description :</label>
					<div class="col-sm-8">
						<textarea class="form-control informations__input" rows="5" id=""></textarea>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-3 col-sm-3">
						<button type="submit" class="btn btn-default">Ajouter au stock</button>
					</div>
				</div>
			</form>
		</section>
	</div>

<!-- **************** Utilisateurs **************** -->
	<!-- Utilisateurs -->
	<div class="page-content" id="j-utilisateurs-comptes" style="display: none;">
		<section class="col-md-12 content-section" style="display: none;">
			<!-- Images area -->
			<div class="col-md-2 content-section__images">
				<div class="thumbnails">
				</div>
			</div>
			<!-- Informations area -->
			<div class="col-md-5 content-section__data">
				<div class="data-grp">
					<label class="informations__labdata-grp__info">
				</div>
				<span class="data-grp__info"></span>
					<div class="data-grp">
						<label class="data-grp__label">Prenom : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Email : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Tel : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Status : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Ville : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Adresse : </label>
						<span class="data-grp__info"></span>
					</div>
					<div class="data-grp">
						<label class="data-grp__label">Date d'enregistrement : </label>
						<span class="data-grp__info"></span>
					</div>
			</div>
			<!-- Control buttons area -->
			<div class="col-md-3 content-section__control">
			</div>
		</section>
	</div>

	<!-- Pleintes -->
	<div class="page-content" id="j-utilisateurs-pleintes" style="display: none;">
		<section class="col-md-12" id="">Machakiiiiil
		</section>
	</div>

@endsection