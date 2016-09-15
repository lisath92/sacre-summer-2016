(function($) {


  var mainMenu = $('.nav-mobile'),
  $carousel = $('.carousel').flickity({
    cellAlign: 'center',
    contain: true,
    prevNextButtons: false
  }),
  projectDescription = $('.entry-content');


//Toggle hamburger menu
$('body').on('click', function(event){
  if($(event.target).hasClass('fa-bars') && mainMenu.is(":hidden")){ 
    mainMenu.slideDown('slow');
    $('body').css("background-color","rgba(0,0,0,0.4)");
    mainMenu.submit();
  } else if($(window).width()<582){
    mainMenu.slideUp('slow');
    $('body').css("background-color","rgba(0,0,0,0)");

  }

  if($(event.target).hasClass('entry-title') && $(window).width()<582){ 
    projectDescription.css("display", "block");

  } else if($(event.target).hasClass('fa-times')){
    projectDescription.css("display", "none");
  } 
});

//Show Menu if more than 600px view width
$(window).resize(function(){
  if($(window).width()>582) {
    mainMenu.hide();
  }
});

//Show Sub Sectors Lists
var subSector = $('.sub-sector-title');
subSector.on('click', function(){
  if($(this).next('div').is(':hidden')){
    $(this).next('div').slideToggle('fast');  
    $(this).addClass('new-sub-sector-title');
  } else {
    $(this).next('div').slideToggle('fast');
    $(this).removeClass('new-sub-sector-title');
  }
  

});



})(jQuery);