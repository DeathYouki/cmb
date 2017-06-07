$(document).ready(function() {
	var productsCount = 0;
	$('#j-product-script-injection').bind("DOMSubtreeModified", function() {
	/*******DOM blocks and elements creation*******/
		if(productsCount == 0){
			productsCount++;
		}else{
			var section = $('#j-product-section').clone();	
			$('#j-products-container').append(section);
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

		//Codes of chosen variants
		if(variantsData.hashCode.length){
			var chosenVariants = variantsData.hashCode.match(/:[0-9]*/g);
			for(var i = 0; i < chosenVariants.length; i++){
				chosenVariants[i] = chosenVariants[i].match(/[0-9]+/g);
			}
			//Finding html of chosen variants
			var variantsTab = [];
			var chosenVariantsContent = [];
			for(var i = 0; i < variantsData.variantContent.length; i++){
				variantsTab[i] = [];
				for(var j = 0; j < variantsData.variantContent[i].length; j++){
					variantsTab[i][j] = $.parseHTML(variantsData.variantContent[i][j]);
					var skuId = variantsTab[i][j][0].getAttribute("data-sku-id");
					if(skuId == chosenVariants[i]){
						chosenVariantsContent[i] = variantsTab[i][j][0].innerHTML;
					}
				}
			}
			//Inserting the variants
			$('#j-product-section:last-child #j-product-chosenvariants').html(chosenVariantsContent[0]);
			for(var i = 1; i < chosenVariantsContent.length; i++){
				$('#j-product-section:last-child #j-product-chosenvariants').append(chosenVariantsContent[i]);
			}
			//Show variants label
			$('#j-product-section:last-child #j-product-chosenvariants-label').removeClass('informations__label--hidden');
		}else{
			//Hide the variants label
			$('#j-product-section:last-child #j-product-chosenvariants-label').addClass('informations__label--hidden');
		}
		

		//Price
		var price = variantsData.finalPrice.match(/[0-9,.]+/g);
		price = price[0].replace(".", "");
		price = price.replace(",", ".");
		var commission = 10; //To be retrieved from database
		var deviseExchange = 10;
		finalPrice = (parseFloat(price) * deviseExchange ) + commission;
		finalPrice = Math.ceil( finalPrice * 10) / 10;
		$('#j-product-section:last-child #j-product-price').html("<h2>" + finalPrice + "DH</h2>");

		//Quantity
		var shippingPrice = variantsData.shippingPrice.match(/[0-9,.]+/g);
		if(shippingPrice){
			shippingPrice = shippingPrice[0].replace(".", "");
			shippingPrice = shippingPrice.replace(",", ".");
			shippingPrice = parseFloat(shippingPrice);
			var unshippedPrice = price - shippingPrice;
			unshippedPrice = Math.ceil(unshippedPrice * 100) / 100;
		}else{
			var shippingPrice = 0;
			var unshippedPrice = price;
		}

		if(variantsData.hashCode.length){
			for(var i = 0; i < variantsData.productVariantsInfo.length; i++){
				var variantsBuffer = variantsData.productVariantsInfo[i].skuPropIds.match(/[0-9]+/g);
				var counter = 0;
				var j = 0;
				while(variantsBuffer[j] == chosenVariants[j] && j < variantsBuffer.length){
					counter++;
					j++
				}			

				if(counter == variantsBuffer.length){
					reducedPrice = variantsData.productVariantsInfo[i].skuVal.actSkuMultiCurrencyCalPrice;
				}
			}
		}else{
			reducedPrice = variantsData.productVariantsInfo[0].skuVal.actSkuMultiCurrencyCalPrice;
		}
		var quantity = parseInt(unshippedPrice / reducedPrice);
		$('#j-product-section:last-child #j-product-quantity').html(quantity);
	});
});

