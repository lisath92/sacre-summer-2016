(function($) {

//Toggle hamburger menu
var mainMenu = $('.menu-main-navigation-container'),
$carousel = $('.carousel').flickity({
  cellAlign: 'center',
  contain: true,
  prevNextButtons: false
});

$('body').on('click', function(event){
  if($(event.target).hasClass('fa-bars') && mainMenu.is(":hidden")){ 
    mainMenu.slideDown('slow');
    $('body').css("background-color","rgba(0,0,0,0.4)");
    mainMenu.submit();
  } else if($(window).width()<582){
    mainMenu.slideUp('slow');
    $('body').css("background-color","rgba(0,0,0,0)");

  } 
});

//Show Menu if more than 600px view width
$(window).resize(function(){
  if($(window).width()>582) {
    mainMenu.show();
  } else {
    mainMenu.hide();
  }
});



$('.button-group').on( 'click', '.button', function() {
  var index = $(this).index();
  $carousel.flickity( 'select', index );
});

})(jQuery);