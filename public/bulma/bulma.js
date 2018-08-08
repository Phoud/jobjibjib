
// Dropdown menu

$(document).ready(function(){
	$('button.dropdown').hover(function(e) {
		$(this).addClass('is-open');
	});
});
// Mouse Leave
$(document).ready(function(){
	$('button.dropdown').mouseleave(function(e) {
		$(this).removeClass('is-open');
	});
});