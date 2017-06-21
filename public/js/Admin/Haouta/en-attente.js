var houtaEnAttenteProductsDisplayInitalized = false;
var houtaVitrineProductsDisplayInitalized = false;

$(document).ready(function() {
	//Highlights a variant when clicked
	$("#j-haouta-en-attente").on("click", "[data-sku-id]", function() {
		variantHighlight($(this));
	});
	$("#j-haouta-vitrine").on("click", "[data-sku-id]", function() {
		variantHighlight($(this));
	});
});


function variantHighlight(e) {
	// $(this) is equivalent of e.target in jqery
	e.children().addClass("variant--active");
	e.siblings().children().removeClass("variant--active");
}


//Displays products in Haouta en attente; Called whenever there is a new productsTable
function haoutaEnAttenteDisplayProduct_Admin(variantsData) {
	/*******DOM blocks and elements creation*******/
	//Verifiying if a product has been added
	if(!houtaEnAttenteProductsDisplayInitalized){
		houtaEnAttenteProductsDisplayInitalized = true;
		$('#j-content-section-haouta-en-attente').css("display", "block");
	}
	else{
		//Cloning the product section in case the 1st product has been added
		var section = $('#j-content-section-haouta-en-attente').clone();	
		$('#j-haouta-en-attente').append(section);
		//Deleting content of the copy
		$('#j-content-section-haouta-en-attente:last-child').contents().filter(function() {
			return this.nodeType === 3;
		}).remove();
		$('#j-content-section-haouta-en-attente:last-child #j-haouta-en-attente-variants').contents().filter(function() {
			return this.nodeType === 1;
			}).remove();
		$('#j-content-section-haouta-en-attente:last-child .image').remove();
	}

	/*******Filling the page*******/
	/*****Product Images*****/
	//Main Image
	var img = document.createElement('img');
	img.setAttribute("src", variantsData.images[0]);
	img.setAttribute("class", "image image--sm");
	$('#j-content-section-haouta-en-attente:last-child #j-haouta-en-attente-images').prepend(img);
	//Thumbnails
	for(var i = 0; i < variantsData.images.length; i++){
		img = document.createElement('img');
		img.setAttribute("src", variantsData.images[i]);
		img.setAttribute("class", "image image--xxs");
		$('#j-content-section-haouta-en-attente:last-child #j-haouta-en-attente-thumbnails').append(img);
	}

	/*****Product Name*****/
	$('#j-content-section-haouta-en-attente:last-child #j-haouta-en-attente-product-name').html("<h4>" + variantsData.name + "</h4>");

	/*****Product variants*****/
	if(variantsData.variants_html && variantsData.variants_html.length){
		//If the product has variants
		var chosenVariantsTab = [];
		for(var i = 0; i < variantsData.variants_html.length; i++){
			//Creating a container for each variant row
			var variantCategorie = document.createElement('div');
			variantCategorie.setAttribute("style", "margin-bottom: 5px;");
			variantCategorie.setAttribute("id", "j-variant-categorie-" + i);
			$('#j-content-section-haouta-en-attente:last-child #j-haouta-en-attente-variants').append(variantCategorie);
			//Create each variant and puts it in its rightful place
			chosenVariantsTab[i] = [];
			for(var j = 0; j < variantsData.variants_html[i].length; j++){
				var productVariant = variantsData.variants_html[i][j];
				//console.log(productVariant);
				productVariant = $.parseHTML(productVariant);
				$('#j-content-section-haouta-en-attente:last-child #j-variant-categorie-' + i).append(productVariant);
				$("[data-role]").attr("href", "javascript:void(0)");
				$("[data-role] img").attr("class", "image image--xs");
				$("[data-role]").removeAttr("id");
				$("[data-role]").removeAttr("data-role");
				$('#j-content-section-haouta-en-attente:last-child #j-haouta-en-attente-product-variants-grp').attr("class", "data-grp");
			}
		}
	} else{
		//If the product has no variants, we hide variants section
		$('#j-content-section-haouta-en-attente:last-child #j-haouta-en-attente-product-variants-grp').attr("class", "data-grp data-grp--hidden");
	}
}




//Displays products in Haouta vitrine; Called whenever there is a new productsTable
function haoutaVitrineDisplayProduct_Admin(variantsData) {
	/*******DOM blocks and elements creation*******/
	//Verifiying if a product has been added
	if(!houtaVitrineProductsDisplayInitalized){
		houtaVitrineProductsDisplayInitalized = true;
		$('#j-content-section-haouta-vitrine').css("display", "block");
	}
	else{
		//Cloning the product section in case the 1st product has been added
		var section = $('#j-content-section-haouta-vitrine').clone();	
		$('#j-haouta-vitrine').append(section);
		//Deleting content of the copy
		$('#j-content-section-haouta-vitrine:last-child').contents().filter(function() {
			return this.nodeType === 3;
		}).remove();
		$('#j-content-section-haouta-vitrine:last-child #j-haouta-vitrine-variants').contents().filter(function() {
			return this.nodeType === 1;
			}).remove();
		$('#j-content-section-haouta-vitrine:last-child .image').remove();
	}

	/*******Filling the page*******/
	/*****Product Images*****/
	//Main Image
	var img = document.createElement('img');
	img.setAttribute("src", variantsData.images[0]);
	img.setAttribute("class", "image image--sm");
	$('#j-content-section-haouta-vitrine:last-child #j-haouta-vitrine-images').prepend(img);
	//Thumbnails
	for(var i = 0; i < variantsData.images.length; i++){
		img = document.createElement('img');
		img.setAttribute("src", variantsData.images[i]);
		img.setAttribute("class", "image image--xxs");
		$('#j-content-section-haouta-vitrine:last-child #j-haouta-vitrine-thumbnails').append(img);
	}

	/*****Product Name*****/
	$('#j-content-section-haouta-vitrine:last-child #j-haouta-vitrine-product-name').html("<h4>" + variantsData.name + "</h4>");

	/*****Product variants*****/
	if(variantsData.variants_html && variantsData.variants_html.length){
		//If the product has variants
		var chosenVariantsTab = [];
		for(var i = 0; i < variantsData.variants_html.length; i++){
			//Creating a container for each variant row
			var variantCategorie = document.createElement('div');
			variantCategorie.setAttribute("style", "margin-bottom: 5px;");
			variantCategorie.setAttribute("id", "j-variant-categorie-" + i);
			$('#j-content-section-haouta-vitrine:last-child #j-haouta-vitrine-variants').append(variantCategorie);
			//Create each variant and puts it in its rightful place
			chosenVariantsTab[i] = [];
			for(var j = 0; j < variantsData.variants_html[i].length; j++){
				var productVariant = variantsData.variants_html[i][j];
				//console.log(productVariant);
				productVariant = $.parseHTML(productVariant);
	console.log(productVariant);
				$('#j-content-section-haouta-vitrine:last-child #j-variant-categorie-' + i).append(productVariant);
				$("[data-role]").attr("href", "javascript:void(0)");
				$("[data-role] img").attr("class", "image image--xs");
				$("[data-role]").removeAttr("id");
				$("[data-role]").removeAttr("data-role");
				$('#j-content-section-haouta-vitrine:last-child #j-haouta-vitrine-product-variants-grp').attr("class", "data-grp");
			}
		}
	} else{
		//If the product has no variants, we hide variants section
		$('#j-content-section-haouta-vitrine:last-child #j-haouta-en-attente-product-variants-grp').attr("class", "data-grp data-grp--hidden");
	}
}
