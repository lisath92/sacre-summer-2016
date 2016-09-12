(function($) {

//Toggle hamburger menu
  var mainMenu = $('.menu-main-navigation-container');

  $('body').on('click', function(event){
  // $('.fa-bars').on('click', function(){
    event.preventDefault();
    if($(event.target).hasClass('fa-bars') && mainMenu.is(":hidden")){ 
    // if (mainMenu.is(":hidden")) {
      mainMenu.slideDown('slow');
      $('body').css("background-color","rgba(0,0,0,0.4)");
  } else {
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
  })

})(jQuery);