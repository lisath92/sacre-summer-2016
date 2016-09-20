(function($) {

//Toggle sub-sector lists
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


//Add specific class to Oil-Gas sector
  if ($('body').hasClass('postid-67')) {
    $('.read-more').toggleClass('style-1');
  }

  var count = $('section.development').length,
  button = $('.read-more-button');

//Show read-more button condition
  if (count > 1) {
    button.show();
    $('.read-more').hide();
  };

//Show more info section
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

//Projects click show more info

  var projectTitle = $('.mobile-project-title');

projectTitle.click(function() {
    var currentDiv = $(this).parent('.entry-header').next('div');
    currentDiv.slideDown('slow');
    $('.fa-times').click(function(){
      currentDiv.slideUp('slow');
    });
  });


})(jQuery);