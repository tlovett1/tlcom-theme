( function( $ ) {

	$('.preview-notice').append('<a class="getpremium" target="_blank" href="' + diarjolite_details.url + '">' + diarjolite_details.label + '</a>'); 
	$('.preview-notice').on("click",function(a){a.stopPropagation()});

} )( jQuery );   