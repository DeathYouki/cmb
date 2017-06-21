$(window).focus(function() {
	if(activeMainId == "j-main-menu-link-commandes"){
		//Tests which sub naav-bar in concerned by the triggered event
		switch(activeSubId["j-nav-bar-commandes"]){
			//Berra
			case "j-sub-menu-link-suspendus" : ;
				break;
			case "j-sub-menu-link-payes" : ;
				break;
			case "j-sub-menu-link-achetes" : ;
				break;
			case "j-sub-menu-link-rejetes-berra" : ;
				break;
			//Hna
			case "j-sub-menu-link-commandes" : ;
				break;
			case "j-sub-menu-link-livres" : ;
				break;
			case "j-sub-menu-link-rejetes-hna" : ;
				break;
			default : 
				console.log("Target is none of the known sub menu buttons cmd");
				break;
		}
	} 
	/*Haouta*/
	else if(activeMainId == "j-main-menu-link-haouta") {
		//Tests which sub naav-bar in concerned by the triggered event
		switch(activeSubId["j-nav-bar-haouta"]){
			case "j-sub-menu-link-vitrine-haouta" : 
				break;
			case "j-sub-menu-link-en-attente" : 
				getHaoutaEnAttent();
				break;
			case "j-sub-menu-link-ajout-lien" : 
				break;
			default : 
				console.log("Target is none of the known sub menu buttons ht");
				break;
		}
	}
	/*CMH*/
	else if(activeMainId == "j-main-menu-link-cmh") {
		//Tests which sub naav-bar in concerned by the triggered event
		switch(activeSubId["j-nav-bar-cmh"]){
			case "j-sub-menu-link-vitrine-cmh" : ;
				break;
			case "j-sub-menu-link-stock" : ;
				break;
			case "j-sub-menu-link-ajout-produit" : ;
				break;
			default : 
				console.log("Target is none of the known sub menu buttons ch");
				break;
		}
	}
	/*Utilisateurs*/
	else if(activeMainId == "j-main-menu-link-utilisateurs") {
		//Tests which sub naav-bar in concerned by the triggered event
		switch(activeSubId["j-nav-bar-utilisateurs"]){
			case "j-sub-menu-link-comptes" : ;
				break;
			case "j-sub-menu-link-plaintes" : ;
				break;
			default : 
				console.log("Target is none of the known sub menu buttons us");
				break;
		}
	}
});