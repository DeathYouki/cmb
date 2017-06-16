$(document).ready(function() {
	var productsCount = 0;
	$('#j-section-haouta-suspendus-scripts').bind("DOMSubtreeModified", function() {
	/*******DOM blocks and elements creation*******/
		//Verifiying if a product has been added
		if(productsCount == 0){
			productsCount++;
			$('#j-content-section-haouta-suspendus').css("display", "block");
		}else{
			//Cloning the product section in case the 1st product has been added
			var section = $('#j-content-section-haouta-suspendus').clone();	
			$('#j-haouta-en-attente').append(section);
			//Deleting content of new element
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
		img.setAttribute("src", variantsData.productImages[0]);
		img.setAttribute("class", "image image--sm");
		$('#j-content-section-haouta-suspendus:last-child #j-haouta-en-attente-images').html(img);
		//Thumbnails
		for(var i = 0; i < variantsData.productImages.length; i++){
			img = document.createElement('img');
			img.setAttribute("src", variantsData.productImages[i]);
			img.setAttribute("class", "image image--xs");
			$('#j-content-section-haouta-suspendus:last-child #j-haouta-en-attente-thumbnails').append(img);
		}
		//Product name
		$('#j-content-section-haouta-suspendus:last-child #j-haouta-suspendus-product-name').html("<h4>" + variantsData.productName + "</h4>");

		if(variantsData.variantContent.length){
			var chosenVariantsTab = [];
			for(var i = 0; i < variantsData.variantContent.length; i++){
				//Creating a container for each variant row
				var variantCategorie = document.createElement('div');
				variantCategorie.setAttribute("style", "margin-bottom: 5px;");
				variantCategorie.setAttribute("id", "j-variant-categorie-" + i);
				$('#j-content-section-haouta-suspendus:last-child #j-haouta-en-attente-variants').append(variantCategorie);
				//Create each variant and puts it in its rightful place
				chosenVariantsTab[i] = [];
				for(var j = 0; j < variantsData.variantContent[i].length; j++){
					var productVariant = variantsData.variantContent[i][j];
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
			$('#j-content-section-haouta-suspendus:last-child #j-haouta-suspendus-product-variants-grp').attr("class", "data-grp data-grp--hidden");
		}
			
		//var chosenVariantId;
		//var hashCode;

		$("[data-sku-id]").on("click", function(e){
			// $(this) is equivalent of e.target in jqery
			$(this).children().addClass("variant--active");
			$(this).siblings().children().removeClass("variant--active");
			chosenVariantId = e.target.parentElement.getAttribute("data-sku-id");
			for(var i = 0; i < variantsData.variantsTable.length; i++){
				for(var j = 0; j < variantsData.variantsTable[i].length; j++){
					if(chosenVariantId == variantsData.variantsTable[i][j]){
						chosenVariantsTab[i][0] = chosenVariantId;
					}
				}
			}
			//var variantsInfo = variantsData.productVariantsInfo;
			/*for(var i = 0; i < variantsInfo.length; i++){
				var variantsFoundNum = 0;
				for(var j = 0; j < chosenVariantsTab.length; j++){
					if(chosenVariantsTab[j].length && variantsInfo[i].skuPropIds.includes(chosenVariantsTab[j][0])){
						variantsFoundNum++;
					}
				}
				if(variantsFoundNum == chosenVariantsTab.length){
					if(variantsInfo[i].skuVal.availQuantity > 0 && variantsInfo[i].skuVal.inventory > 0){
						console.log(i);
						$('#price').html(variantsInfo[i].skuVal.actSkuMultiCurrencyDisplayPrice);
						hashCode = variantsInfo[i].skuAttr;
						commandLink = "https://shoppingcart.aliexpress.com/order/confirm_order.htm?objectId=";
						commandLink += variantsData.productId.match(/[0-9]+/g);
						commandLink += "&skuAttr=";
						commandLink += hashCode.replace(/:|#|\s|;/g, function(cara) {
							switch(cara){
								case ":" : return "%3A"; break;
								case "#" : return "%23"; break;
								case " " : return "%2520"; break;
								case ";" : return "%3B"; break;
								default : return "error"; break;
							}
						});
						console.log(commandLink);
						$('#errMessage').html("");
					}
					else{
						$('#price').html("");
						$('#errMessage').html("Ce produit n'est plus disponible dans le stock");
					}
				}
			}*/
		});

	});
});

