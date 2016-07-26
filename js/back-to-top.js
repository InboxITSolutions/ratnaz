 $(document).ready(function() {
	$(window).scroll(function(event){
         var Position= $(this).scrollTop();
            //alert( Position);
		if(Position>=254){
            /* jQuery(".animateslider").addClass("fadeInUp animated");*/
            $(".go-top").fadeIn(200);
         }
         else{
         	$(".go-top").fadeOut(200);
         }
     });

	$(".go-top").click(function(event){
		event.preventDefault();

		$('html,body').animate({scrollTop:0},300);
	});
    
    });