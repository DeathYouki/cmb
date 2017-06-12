//Defines the active navigation tab in the main and sub nav-bar
var activeMainId = "j-main-menu-link-commandes";
var activeSubId = {
	"j-commandes-nav-bar" : "j-sub-menu-link-suspendus",
	"j-haouta-nav-bar" : "j-sub-menu-link-vitrine-haouta",
	"j-cmh-nav-bar" : "j-sub-menu-link-vitrine-cmh",
	"j-utilisateurs-nav-bar" : "j-sub-menu-link-utilisateurs"
};

$(document).ready(function() {
/**** Highlights the clicked button on the nav bars ****/
	//On main nav-bar
	$('.j-main-menu-link').on("click", function(event) {
		//Highlights active page
		$('.j-main-menu-link').removeClass("active");
		$(this).addClass("active");
		switch(event.target.id){
			case "j-main-menu-link-commandes" : Commandes(event.target.id);
				break;
			case "j-main-menu-link-haouta" : Haouta(event.target.id);
				break;
			case "j-main-menu-link-cmh" : CMH(event.target.id);
				break;
			case "j-main-menu-link-utilisateurs" : Utilisateurs(event.target.id);
				break;
			default : console.log("Target is none of the known main menu buttons");
				break;
		}
	});
	//On sub nav-bars
	$('.j-sub-menu-link').on("click", function(event) {
		//get the clicked tab <nav> parent
		var tabNavBar = $(this).closest("nav");
		activeSubId[tabNavBar[0].id] = event.target.id; 
		tabNavBar.find(".j-sub-menu-link").removeClass("active");
		$(this).addClass("active");
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