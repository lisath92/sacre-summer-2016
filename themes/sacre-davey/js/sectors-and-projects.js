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


//Add specific class to Oil-Gas sector
if ($('body').hasClass('postid-67')) {
  $('.read-more').toggleClass('style-1');
}

var count = $('section.development').length,
button = $('.read-more-button');

//Show read-more button condition
for (var i = 1; i<=count; i++) {
  var dev = $('.development:nth-of-type('+i+')');
  console.log(dev);
  // console.log(dev.next('.read-more').html());
  if (dev.next('.read-more').text().trim()) {
    dev.find('.read-more-button').show();
    dev.next('.read-more').hide();
  } else {
    dev.next('.read-more').css('margin', '0px');
   
    
  }
}
//     if(dev.children('.read-more').text()) {
//       console.log(dev);
//       console.log(dev.children('.read-more').text());

//   //     $('.read-more').html()) {
//   //   console.log('there are nothing here!');
//   // } else {
//     
//   }
// }
  // if($('.read-more').html()) {
  //   console.log('there are nothing here!');
  // } else {
  //   button.show();
  //   $('.read-more').hide();
  // }

  // if (count > 0 && $('.read-more').text()) {
  //   button.show();
  //    console.log($('.read-more').text());
  //   $('.read-more').hide();
  // }

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
  var currentDiv = $(this).parents('.entry-header').next('div');
  if($(window).width()<582) {
    currentDiv.slideDown('slow');

    $('.fa-times').click(function(){
      currentDiv.slideUp('slow');
    });
  }
});


})(jQuery);