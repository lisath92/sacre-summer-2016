(function($){ 

var mainMenu = $('.nav-mobile'),
sectorNav = $('.sector-mobile ul'),
projectNav = $('.mobile-project-nav-list ul');

//Toggle menus
$('body').on('click', function(event){
  
  //Main mobile nav menu
  if($(event.target).hasClass('fa-bars')&&mainMenu.is(":hidden")) {
    mainMenu.slideDown('slow');
    $('body').css("background-color", "rgba(0,0,0,0.4)");
  } else {
    mainMenu.slideUp('slow');
    $('body').css("background-color", "rgba(0,0,0,0)");
  }

  //Sector mobile sub menu
  if($('body').hasClass('single-sector') && $(event.target).hasClass('fa-angle-down') && sectorNav.is(":hidden")) {
    sectorNav.slideDown('slow');
  } else {
    sectorNav.slideUp('slow');
    $('body').css("background-color", "rgba(0,0,0,0)");
  }

  //Projects mobile sub menu
   if($('body').hasClass('archive')&&projectNav.is(':hidden')||$('body').hasClass('single-projects') && $(event.target).hasClass('fa-angle-down')&& projectNav.is(":hidden")) {
    projectNav.slideDown('slow');
  } else {
    projectNav.slideUp('slow');
    $('body').css("background-color", "rgba(0,0,0,0)");
  }
});

})(jQuery);