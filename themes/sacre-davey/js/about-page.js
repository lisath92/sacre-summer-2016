(function($) {

var $gallery = $('.gallery').flickity({
  cellAlign: 'left',
  pageDots: false
});

$('.button-group').on( 'click', '.button', function() {
  var index = $(this).index();
  $gallery.flickity( 'select', index );
});





})(jQuery);