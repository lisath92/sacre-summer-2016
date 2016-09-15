(function($) {


    var mainMenu = $('.nav-mobile'),
        $carousel = $('.carousel').flickity({
            cellAlign: 'center',
            contain: true,
            prevNextButtons: false
        }),
        projectDescription = $('.entry-content');


    //Toggle hamburger menu
    $('body').on('click', function(event) {
        if ($(event.target).hasClass('fa-bars') && mainMenu.is(":hidden")) {
            mainMenu.slideDown('slow');
            $('body').css("background-color", "rgba(0,0,0,0.4)");
            mainMenu.submit();
        } else if ($(window).width() < 582) {
            mainMenu.slideUp('slow');
            $('body').css("background-color", "rgba(0,0,0,0)");

        }

        if ($(event.target).hasClass('entry-title') && $(window).width() < 582) {
            projectDescription.css("display", "block");

        } else if ($(event.target).hasClass('fa-times')) {
            projectDescription.css("display", "none");
        }
    });

    //Show Sub Sectors Lists
    $('.sub-sector-title').on('click', function() {
        var subSectorList = $(this).next('div');
        subSectorList.slideToggle('fast', function() {
            if (subSectorList.is(':visible')) {
                $(this).prev('div').addClass('new-sub-sector-title');
            } else {
                $(this).prev('div').removeClass('new-sub-sector-title');
            }
        })
    });

 if($('body').hasClass('postid-67')) {
  $('.read-more').toggleClass('style-1');
 }
})(jQuery);