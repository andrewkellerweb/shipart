$(document).ready(function() {
	$("#button").click(function() {
	  $(this).toggleClass("is-open");
	  $(".slidebar").toggleClass("active");
	});
});