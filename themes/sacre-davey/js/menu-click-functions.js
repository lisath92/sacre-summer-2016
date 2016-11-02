(function($){ 

var mainMenu = $('.nav-mobile'),
sectorNav = $('.sector-mobile ul'),
projectNav = $('.project-mobile ul');

//Toggle menus
$('body').on('click', function(event){
  
  //Main mobile nav menu
  if($(event.target).hasClass('fa-bars')&&mainMenu.is(':hidden')) {
    mainMenu.slideDown('slow');

  } else {
    mainMenu.slideUp('slow');
  }

  //Sector mobile sub menu
  if($('body').hasClass('single-sector') && $(event.target).hasClass('fa-angle-down') && sectorNav.is(':hidden')) {
    sectorNav.slideDown('slow');
  } else {
    sectorNav.slideUp('slow');
  }

  //Projects mobile sub menu
   if(($('body').hasClass('archive')||$('body').hasClass('single-projects')) && $(event.target).hasClass('fa-angle-down')&& projectNav.is(':hidden')) {
    projectNav.slideDown('slow');
  } else {
    projectNav.slideUp('slow');
  }
});

})(jQuery);