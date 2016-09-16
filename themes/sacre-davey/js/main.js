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
      console.log($(event.target));
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
            console.log('hey');
            projectDescription.css("display", "none");
        }

        if($(event.target).hasClass('read-more-button')) {
          $('.read-more').show();
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

  var count = $('section.development').length,
  button=$('.read-more-button');
 


  if(count< 2) {
    button.hide();
    $('.read-more').show();
  } 




})(jQuery);