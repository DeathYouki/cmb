//Defines the active navigation tab in the main and sub nav-bar
var activeMainId = "j-main-menu-link-commandes";
var activeSubId = {
	"j-commandes-nav-bar" : "j-sub-menu-link-suspendus",
	"j-haouta-nav-bar" : "j-sub-menu-link-vitrine-haouta",
	"j-cmh-nav-bar" : "j-sub-menu-link-vitrine-cmh",
	"j-utilisateurs-nav-bar" : "j-sub-menu-link-utilisateurs",
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
	$('#j-commandes-nav-bar').css("display", "block");
}
function Haouta(triggerId) {
	activeMainId = triggerId;
	$('.j-sub-nav-bar').css("display", "none");
	$('#j-haouta-nav-bar').css("display", "block");
}
function CMH(triggerId) {
	activeMainId = triggerId;
	$('.j-sub-nav-bar').css("display", "none");
	$('#j-cmh-nav-bar').css("display", "block");
}
function Utilisateurs(triggerId) {
	activeMainId = triggerId;
	$('.j-sub-nav-bar').css("display", "none");
	$('#j-utilisateurs-nav-bar').css("display", "block");
}


//Function that defines which page content is to be displayed depending on sub nav-bar active tab on active main nav-bar tab
function ActiveSubNavBar(trigger) {
	//Tests which main nav-bar is concerned
	/*Commandes*/
	if(activeMainId == "j-main-menu-link-commandes"){
		switch(trigger){
			//Berra
			case "j-sub-menu-link-suspendus" : ChangePageContent("");
				break;
			case "j-sub-menu-link-payes" : ChangePageContent("");
				break;
			case "j-sub-menu-link-achetes" : ChangePageContent("");
				break;
			case "j-sub-menu-link-rejetes-berra" : ChangePageContent("");
				break;
			//Hna
			case "j-sub-menu-link-commandes" : ChangePageContent("");
				break;
			case "j-sub-menu-link-livres" : ChangePageContent("");
				break;
			case "j-sub-menu-link-rejetes-hna" : ChangePageContent("");
				break;
			default : console.log("Target is none of the known sub menu buttons");
				break;
		}
	} 
	/*Haouta*/
	else if(activeMainId == "j-main-menu-link-haouta") {
		switch(trigger){
			case "j-sub-menu-link-vitrine-haouta" : ChangePageContent("");
				break;
			case "j-sub-menu-link-en-attente" : ChangePageContent("j-haouta-en-attente");
				break;
			case "j-sub-menu-link-ajout-lien" : ChangePageContent("");
				break;
			default : console.log("Target is none of the known sub menu buttons");
				break;
		}
	}
	/*CMH*/
	else if(activeMainId == "j-main-menu-link-cmh") {
		switch(trigger){
			case "j-sub-menu-link-vitrine-cmh" : ChangePageContent("");
				break;
			case "j-sub-menu-link-stock" : ChangePageContent("");
				break;
			case "j-sub-menu-link-ajout-produit" : ChangePageContent("");
				break;
			default : console.log("Target is none of the known sub menu buttons");
				break;
		}
	}
	/*Utilisateurs*/
	else if(activeMainId == "j-main-menu-link-utilisateurs") {
		switch(trigger){
			case "j-sub-menu-link-utilisateurs" : ChangePageContent("");
				break;
			case "j-sub-menu-link-plaintes" : ChangePageContent("");
				break;
			default : console.log("Target is none of the known sub menu buttons");
				break;
		}
	}
	/*Other*/
	else{
		default : console.log("Target is none of the known main menu buttons");
	}
		
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

//ChangePageContents the body of the page
function ChangePageContent(targgetPage) {
	$("#page-content").css("displays", "none");
	$("#"+ targgetPage).css("display", "block");
}
//Functions that displays and hide page content depending on which tab in sub nav-bar is active
function EnAttent() {
	//
}