$(document).ready(function() {
	var productsCount = 0;
	$('#j-product-script-injection').bind("DOMSubtreeModified", function() {
	/*******DOM blocks and elements creation*******/
		//Verifiying if a product has been added
		if(productsCount == 0){
			productsCount++;
			$('#j-product-section').css("display", "block");
		}else{
			//Cloning the product section in case the 1st product has been added
			var section = $('#j-product-section').clone();	
			$('#j-products-container').append(section);
			$('#j-product-section:last-child #j-product-variants').html('');
		}

	/*******Filling the page*******/
		/*****Product Images*****/
		//Active Image
		var img = document.createElement('img');
		img.setAttribute("src", variantsData.productImages[0]);
		img.setAttribute("class", "product__image--active");
		$('#j-product-section:last-child #j-product-image-main').html(img);
		//Thumbnails
		$('#j-product-section:last-child #j-product-thumbnails').html("");
		for(var i = 0; i < variantsData.productImages.length; i++){
			img = document.createElement('img');
			img.setAttribute("src", variantsData.productImages[i]);
			img.setAttribute("class", "thumbnails__element");
			$('#j-product-section:last-child #j-product-thumbnails').append(img);
		}
		//Product name
		$('#j-product-section:last-child #j-product-name').html("<h4>" + variantsData.productName + "</h4>");

		console.log(variantsData);
		var chosenVariantsTab = [];
		for(var i = 0; i < variantsData.variantContent.length; i++){
			var variantCategorie = document.createElement('div');
			variantCategorie.setAttribute("style", "margin-bottom: 5px;");
			variantCategorie.setAttribute("id", "j-variant-categorie-container"+i);
			chosenVariantsTab[i] = [];
			$('#j-product-section:last-child #j-product-variants').append(variantCategorie);
			for(var j = 0; j < variantsData.variantContent[i].length; j++){
				var productVariant = variantsData.variantContent[i][j];
				productVariant = $.parseHTML(productVariant);
				var variantContainer = document.createElement('div');
				variantContainer.setAttribute("style", "margin: 5px;display: inline-block;");
				variantContainer.setAttribute("id", "variantContainer"+i+""+j);
				$('#j-product-section:last-child #j-product-variants #j-variant-categorie-container'+i).append(variantContainer);
				$('#j-product-section:last-child #j-product-variants #variantContainer'+i+""+j).append(productVariant);
				$("[data-role]").attr("href", "javascript:;");
				$("[data-role]").removeAttr("id");
				$("[data-role]").removeAttr("data-role");
			}
		}
		var chosenVariantId;
		var hashCode;

		$("[data-sku-id]").on("click", function(e){
			// $(this) is equivalent of e.target in jqery
			$(this).parent().css("border" , "1px solid aqua");
			$(this).parent().siblings().css("border" , "none");
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

