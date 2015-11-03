
$(document).ready(function() {

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
     adaptiveHeight: true
     });
 
});

