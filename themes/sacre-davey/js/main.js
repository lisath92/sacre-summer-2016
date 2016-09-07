(function($) {

  var mainMenu = $('.menu-main-navigation-container');
   $('.fa-bars').on('click', function(){
    event.preventDefault();
    mainMenu.slideToggle('slow');
   })
})(jQuery);