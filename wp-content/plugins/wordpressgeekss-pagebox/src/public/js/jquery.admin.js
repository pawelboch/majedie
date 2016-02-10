jQuery(document).ready(function($) {

	$('.chosen-select').chosen( {
		'width': '200px'
	} );

	$('.pagebox-form').pagebox_form();

});

jQuery( function ( $, undefined ) {
	var toggle_fields = function ( event, context ) {
		context = context || document;

		$( context ).find( '[data-conditions]' ).each( function ( index, element ) {
			var $this = $( this ),
				conditions = $this.data( 'conditions' ),
				visible = true;

			if ( ! conditions || ! conditions.fields ) {
				return;
			}

			$.each( conditions.fields, function ( index, element ) {
				var repeater = -1 < index.indexOf( '_self/' ),
					name = repeater
						? $this.closest( '.element-repeater' ).data( 'name' ) + '[' + $this.closest( 'table' ).index() + '][' + index.replace( /^_self\//, '' ) + ']'
						: index;

				if ( -1 === $.inArray( $( '[name="' + name + '"]' ).val(), element.values ) ) {
					visible = false;
					return false;
				}
			});

			if ( visible ) {
				$this.show();
			} else {
				$this.hide();
			}
		});
	};

	$( document ).on( 'pagebox/repeater/added pagebox/form/loaded', toggle_fields );
	$( document ).on( 'change', '.pagebox-form :input', toggle_fields );
});
