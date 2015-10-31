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

  $(".slider").owlCarousel({
 
      autoPlay: true,
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
  });
 
});

