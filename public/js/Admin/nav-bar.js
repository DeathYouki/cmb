$(document).ready(function() {
	$('.j-main-menu-link').on("click", function() {
		$('.j-main-menu-link').removeClass("active");
		$(this).addClass("active");
	});
	$('.j-sub-menu-link').on("click", function() {
		$('.j-sub-menu-link').removeClass("active");
		$(this).addClass("active");
	});
});