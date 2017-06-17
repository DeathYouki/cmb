//Defines the active navigation tab in the main and sub nav-bar
var activeMainId = "j-main-menu-link-commandes";
var activeSubId = {
	"j-nav-bar-commandes" : "j-sub-menu-link-suspendus",
	"j-nav-bar-haouta" : "j-sub-menu-link-vitrine-haouta",
	"j-nav-bar-cmh" : "j-sub-menu-link-vitrine-cmh",
	"j-nav-bar-utilisateurs" : "j-sub-menu-link-comptes",
};

$(document).ready(function() {
/**** Highlights the clicked button on the nav bars ****/
	//On main nav-bar
	$('.j-main-menu-link').on("click", function(event) {
		//Highlights active page
		$('.j-main-menu-link').removeClass("active");
		$(this).addClass("active");
		ActiveMainNavBar(event.target.id);
	});
	//On sub nav-bars
	$('.j-sub-menu-link').on("click", function(event) {
		//get the clicked tab <nav> parent
		var tabNavBar = $(this).closest("nav");
		activeSubId[tabNavBar[0].id] = event.target.id; 
		tabNavBar.find(".j-sub-menu-link").removeClass("active");
		$(this).addClass("active");
		ActiveSubNavBar(event.target.id);
	});
});

//Functions that displays and hide sub menus
function Commandes(triggerId) {
	activeMainId = triggerId;
	$('.j-sub-nav-bar').css("display", "none");
	$('#j-nav-bar-commandes').css("display", "block");
	ActiveSubNavBar(activeSubId["j-nav-bar-commandes"]);

}
function Haouta(triggerId) {
	activeMainId = triggerId;
	$('.j-sub-nav-bar').css("display", "none");
	$('#j-nav-bar-haouta').css("display", "block");
	ActiveSubNavBar(activeSubId["j-nav-bar-haouta"]);
}
function CMH(triggerId) {
	activeMainId = triggerId;
	$('.j-sub-nav-bar').css("display", "none");
	$('#j-nav-bar-cmh').css("display", "block");
	ActiveSubNavBar(activeSubId["j-nav-bar-cmh"]);
}
function Utilisateurs(triggerId) {
	activeMainId = triggerId;
	$('.j-sub-nav-bar').css("display", "none");
	$('#j-nav-bar-utilisateurs').css("display", "block");
	ActiveSubNavBar(activeSubId["j-nav-bar-utilisateurs"]);
}


//Function that defines which page content is to be displayed depending on main nav-bar active tab
function ActiveMainNavBar(trigger) {
	switch(trigger){
		case "j-main-menu-link-commandes" : Commandes(trigger);
			break;
		case "j-main-menu-link-haouta" : Haouta(trigger);
			break;
		case "j-main-menu-link-cmh" : CMH(trigger);
			break;
		case "j-main-menu-link-utilisateurs" : Utilisateurs(trigger);
			break;
		default : console.log("Target is none of the known main menu buttons");
			break;
	}
}

//Function that defines which page content is to be displayed depending on the clicked sub nav-bar button, or on last active sub nav-bar when changing active main nav-bar
function ActiveSubNavBar(trigger) {
	//Tests which main nav-bar is concerned
	/*Commandes*/
	if(activeMainId == "j-main-menu-link-commandes"){
		switch(trigger){
			//Berra
			case "j-sub-menu-link-suspendus" : ChangePageContent("j-commandes-berra-suspendus");
				break;
			case "j-sub-menu-link-payes" : ChangePageContent("j-commandes-berra-payes");
				break;
			case "j-sub-menu-link-achetes" : ChangePageContent("j-commandes-berra-achetes");
				break;
			case "j-sub-menu-link-rejetes-berra" : ChangePageContent("j-commandes-berra-rejetes");
				break;
			//Hna
			case "j-sub-menu-link-commandes" : ChangePageContent("j-commandes-hna-commandes");
				break;
			case "j-sub-menu-link-livres" : ChangePageContent("j-commandes-hna-livres");
				break;
			case "j-sub-menu-link-rejetes-hna" : ChangePageContent("j-commandes-hna-rejetes");
				break;
			default : console.log("Target is none of the known sub menu buttons");
				break;
		}
	} 
	/*Haouta*/
	else if(activeMainId == "j-main-menu-link-haouta") {
		switch(trigger){
			case "j-sub-menu-link-vitrine-haouta" : ChangePageContent("j-haouta-vitrine");
				break;
			case "j-sub-menu-link-en-attente" : ChangePageContent("j-haouta-en-attente");
				break;
			case "j-sub-menu-link-ajout-lien" : ChangePageContent("j-haouta-ajout-par-lien");
				break;
			default : console.log("Target is none of the known sub menu buttons");
				break;
		}
	}
	/*CMH*/
	else if(activeMainId == "j-main-menu-link-cmh") {
		switch(trigger){
			case "j-sub-menu-link-vitrine-cmh" : ChangePageContent("j-cmh-vitrine");
				break;
			case "j-sub-menu-link-stock" : ChangePageContent("j-cmh-stock");
				break;
			case "j-sub-menu-link-ajout-produit" : ChangePageContent("j-cmh-ajout-de-produit");
				break;
			default : console.log("Target is none of the known sub menu buttons");
				break;
		}
	}
	/*Utilisateurs*/
	else if(activeMainId == "j-main-menu-link-utilisateurs") {
		switch(trigger){
			case "j-sub-menu-link-comptes" : ChangePageContent("j-utilisateurs-comptes");
				break;
			case "j-sub-menu-link-plaintes" : ChangePageContent("j-utilisateurs-pleintes");
				break;
			default : console.log("Target is none of the known sub menu buttons");
				break;
		}
	}
	/*Autres*/
	else{
		console.log("Target is none of the known main menu buttons");
	}
		
}


//ChangePageContents the body of the page
function ChangePageContent(targgetPage) { 
	$(".page-content").css("display", "none");
	$("#" + targgetPage).css("display", "block");
}

//Functions that displays and hide page content depending on which tab in sub nav-bar is active
function EnAttent() {
	//
}