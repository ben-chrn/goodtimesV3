
$(document).ready(function() {

  var nav = $('.left_proposer');

  $('#hamb').click( function() {
  
	  $(this).toggleClass('animate');
	    
	});
	   
    // Scroll
  $('a[href^="#"]').click(function(){
      var the_id = $(this).attr("href");
      $('html, body').animate({
          scrollTop:$(the_id).offset().top
        }, 'slow');
        return false;
  });

  $('.slider').slick({
       slidesToShow: 1,
       slidesToScroll: 1,
       arrows: false,
       fade: true,
       autoplay: true,
       speed: 3000,
       infinite: true,
       adaptiveHeight: true
  });

  $h_header = $('header').height() -1;
  $(window).scroll(function () {

    if ($(this).scrollTop() > $h_header) {
      nav.addClass("fixed_background");
    } else {
      nav.removeClass("fixed_background");
    }
  }); 
 
});

