var productsCount = 0;
$(document).ready(function() {
	//Highlights a variant when clicked
	$("[data-sku-id]").on("click", function(e){
		// $(this) is equivalent of e.target in jqery
		$(this).children().addClass("variant--active");
		$(this).siblings().children().removeClass("variant--active");
		chosenVariantId = e.target.parentElement.getAttribute("data-sku-id");
		for(var i = 0; i < variantsData.variants_ids.length; i++){
			for(var j = 0; j < variantsData.variants_ids[i].length; j++){
				if(chosenVariantId == variantsData.variants_ids[i][j]){
					chosenVariantsTab[i][0] = chosenVariantId;
				}
			}
		}
	});
});



//Displays products in Haouta; Called whenever there is a new productsTable
function haoutaDisplayProduct_Admin(variantsData) {
	/*******DOM blocks and elements creation*******/
	//Verifiying if a product has been added
	if(productsCount == 0){
		productsCount++;
		$('#j-content-section-haouta-suspendus').css("display", "block");
	}
	else{
		//Cloning the product section in case the 1st product has been added
		var section = $('#j-content-section-haouta-suspendus').clone();	
		$('#j-haouta-en-attente').append(section);
		//Deleting content of the copy
		$('#j-content-section-haouta-suspendus:last-child').contents().filter(function() {
			return this.nodeType === 3;
		}).remove();
		$('#j-content-section-haouta-suspendus:last-child #j-haouta-en-attente-variants').contents().filter(function() {
			return this.nodeType === 1;
			}).remove();
		$('#j-content-section-haouta-suspendus:last-child .image').remove();
	}

	/*******Filling the page*******/
	/*****Product Images*****/
	//Main Image
	var img = document.createElement('img');
	img.setAttribute("src", variantsData.images[0]);
	img.setAttribute("class", "image image--sm");
	$('#j-content-section-haouta-suspendus:last-child #j-haouta-en-attente-images').prepend(img);
	//Thumbnails
	for(var i = 0; i < variantsData.images.length; i++){
		img = document.createElement('img');
		img.setAttribute("src", variantsData.images[i]);
		img.setAttribute("class", "image image--xxs");
		$('#j-content-section-haouta-suspendus:last-child #j-haouta-en-attente-thumbnails').append(img);
	}

	/*****Product Name*****/
	$('#j-content-section-haouta-suspendus:last-child #j-haouta-suspendus-product-name').html("<h4>" + variantsData.name + "</h4>");

	/*****Product variants*****/
	if(variantsData.variants_html && variantsData.variants_html.length){
		//If the product has variants
		var chosenVariantsTab = [];
		for(var i = 0; i < variantsData.variants_html.length; i++){
			//Creating a container for each variant row
			var variantCategorie = document.createElement('div');
			variantCategorie.setAttribute("style", "margin-bottom: 5px;");
			variantCategorie.setAttribute("id", "j-variant-categorie-" + i);
			$('#j-content-section-haouta-suspendus:last-child #j-haouta-en-attente-variants').append(variantCategorie);
			//Create each variant and puts it in its rightful place
			chosenVariantsTab[i] = [];
			for(var j = 0; j < variantsData.variants_html[i].length; j++){
				var productVariant = variantsData.variants_html[i][j];
				//console.log(productVariant);
				productVariant = $.parseHTML(productVariant);
				$('#j-content-section-haouta-suspendus:last-child #j-variant-categorie-' + i).append(productVariant);
				$("[data-role]").attr("href", "javascript:void(0)");
				$("[data-role] img").attr("class", "image image--xs");
				$("[data-role]").removeAttr("id");
				$("[data-role]").removeAttr("data-role");
				$('#j-content-section-haouta-suspendus:last-child #j-haouta-suspendus-product-variants-grp').attr("class", "data-grp");
			}
		}
	} else{
		//If the product has no variants, we hide variants section
		$('#j-content-section-haouta-suspendus:last-child #j-haouta-suspendus-product-variants-grp').attr("class", "data-grp data-grp--hidden");
	}
}
