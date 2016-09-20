//Projects and Sectors mobile nav menu

(function($) {
var sectorNav = $('.sector-mobile ul');

$('body').on('click', function(event) {
        if ($(event.target).hasClass('fa-angle-down') && sectorNav.is(":hidden")) {
            sectorNav.slideDown('slow');
            $('.project-nav-list ul').slideDown('slow');
            $('body').css("background-color", "rgba(0,0,0,0.4)");
        } else if ($(window).width() < 582) {
            sectorNav.slideUp('slow');
            $('.project-nav-list ul').slideUp('slow');
            $('body').css("background-color", "rgba(0,0,0,0)");
        }
      });


})(jQuery);