 $(document).ready(function() {
	$(window).scroll(function(event){
         var scrollPos= $(this).scrollTop();
            //alert( scrollPos);
		if(scrollPos>=594){
            /* jQuery(".animateslider").addClass("fadeInUp animated");*/
            jQuery(".animatedesigns").addClass("pulse animated");
         }
     });
	
    });