jQuery(document).ready(function($) {
	
	$('.chosen-select').chosen( {
		'width': '200px'
	} );

	if ( $( ".pagebox-form" ).length ) {
		$('.pagebox-form').pagebox_form();
	}

});