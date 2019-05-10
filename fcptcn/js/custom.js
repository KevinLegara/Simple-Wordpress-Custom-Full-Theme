$(document).ready(function(){

	$('.content-area-site .entry-header').append('<hr class="hrUnderTitleBlue">');

	$('.search-form .search-submit').val('');


	var url = document.location.toString();
	if (url.match('#')) {
	    $('.nav-pills a[href="#' + url.split('#')[1] + '"]').tab('show');
	} 

	// Change hash for page-reload
	// $('.nav-pills a').on('shown.bs.tab', function (e) {
	//     window.location.hash = e.target.hash;
	// })
	
});