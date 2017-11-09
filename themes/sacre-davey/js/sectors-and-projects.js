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
  });
});


//Add specific class to Mining sector
if ($('body').hasClass('postid-69')) {
  $('.sub-sector-lists').addClass('mining-lists');
}



var count = $('section.development').length,
button = $('.read-more-button');

//Show read-more button condition
for (var i = 1; i <= count; i++) {
  var dev = $('.development:nth-of-type('+i+')');
  if(dev.next('.read-more').children().first().hasClass('jp-relatedposts')) {
    dev.next('.read-more').css('margin', '0px');
  } else {
    dev.find('.read-more-button').show();
    dev.next('.read-more').hide();
  }
}


//Show more info section
button.click(function() {
  var currentDiv = $(this).parent('.development').next('div');
  console.log(currentDiv.find('div').length);
  currentDiv.slideDown('slow');
  if (currentDiv.find('div').length < 1) {
    console.log(currentDiv.find('div').length);
    currentDiv.append('<div class="read-less-button">Read Less</div>');
    $('.read-less-button').click(function() {
      $(this).parent('div').slideUp('slow');
    });
  }
});


//Projects click show more info

var projectTitle = $('.entry-header');

projectTitle.click(function() {
  var currentDiv = $(this).next('div');
  var singleModal = $(this).nextAll('section');

  if($(window).width()<582) {
    currentDiv.slideDown('slow');

    $('.fa-times').click(function(){
      currentDiv.slideUp('slow');
    });
  } else {
    $('.desktop-entry-content').hide();
    singleModal.css('display','flex').hide().fadeIn('slow');
    
  $('.fa-times').click(function(){
      singleModal.fadeOut('fast');
    });

  }
});

})(jQuery);