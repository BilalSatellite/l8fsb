// bootstrap
require('./bootstrap');
// ==========my costom js ============
$( '.navbar .navbar-nav a' ).on( 'click', function () {
	$( '.navbar .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
   });
   /* ========= navbar-toggler ======= */
   $(document).ready(function () {
    $(document).on('click', '.navbar-toggler', function () {
        $(this).toggleClass('active')
      })
});
// ===================


