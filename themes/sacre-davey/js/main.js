(function($) {

//Toggle hamburger menu
  var mainMenu = $('.menu-main-navigation-container');

  $('.fa-bars').on('click', function(){
    event.preventDefault();
    if (mainMenu.is(":hidden")) {
      mainMenu.slideDown('slow');
  } else {
    mainMenu.slideUp('slow');
  }
})
  
//Show Menu if more than 600px view width
  $(window).resize(function(){
    console.log($(window).width());
    if($(window).width()>582) {
      mainMenu.show();
    } else {
      mainMenu.hide();
    }
  })

})(jQuery);