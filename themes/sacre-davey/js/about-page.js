(function($) {

//About page flickity


  var $gallery = $('.carousel-main').flickity({
  cellAlign: 'left',
  pageDots: false
}),
  $flkty=$gallery.data('flickity'),

  $nav = $('.carousel-nav').flickity({
  asNavFor: $('.carousel-main'),
  prevNextButtons: false,
  pageDots: false,
  cellAlign: 'left',
  contain: true
}),

  $navGroup = $('.carousel-nav'),
  $navCells = $navGroup.find('.carousel-cell');


$('.carousel-nav').on( 'click', '.carousel-cell', function() {
  var index = $(this).index();
  $gallery.flickity( 'select', index );
  $nav.flickity('select', index);
});

$('.carousel-main').on( 'select.flickity', function() {
  $navCells.filter('.is-selected')
    .removeClass('is-selected');
  $navCells.eq( $flkty.selectedIndex )
    .addClass('is-selected');
});




})(jQuery);