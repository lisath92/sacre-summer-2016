(function($) {


    var mainMenu = $('.nav-mobile'),
        $carousel = $('.carousel').flickity({
            cellAlign: 'center',
            contain: true,
            prevNextButtons: false
        }),
        projectDescription = $(this).next('.entry-content');
        projectMenu = $('project-nav-list')

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

        if($(event.target).hasClass('') && projectMenu.is(":hidden")) {
                mainMenu.slideDown('slow');
            $('body').css("background-color", "rgba(0,0,0,0.4)");
            mainMenu.submit();
        } else if ($(window).width() < 582) {
            mainMenu.slideUp('slow');   
        }

        if ($(event.target).hasClass('entry-header') && $(window).width() < 582) {
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

    if ($('body').hasClass('postid-67')) {
        $('.read-more').toggleClass('style-1');
    }

    var count = $('section.development').length,
        button = $('.read-more-button');

    if (count < 2) {
        button.hide();
        $('.read-more').show();
    };

    button.click(function() {
        var currentDiv = $(this).parent('.development').next('div');
        currentDiv.slideDown('slow');
        if (currentDiv.find('div').length === 0) {
            currentDiv.append('<div class="read-less-button">Read Less</div>');

            $('.read-less-button').click(function() {
                $(this).parent('div').slideUp('slow');
            });
        }
    });
})(jQuery);