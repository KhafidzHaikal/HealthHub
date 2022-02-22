$( '.nav-link' ).on( 'click', function () {
	$( '.nav-link' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});