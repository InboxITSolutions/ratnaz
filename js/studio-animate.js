 $(document).ready(function() {
	$(window).scroll(function(event){
         var scrollPos= $(this).scrollTop();
            /*alert( scrollPos);*/
		if(scrollPos>=820){
           /* jQuery(".studio-description p").addClass("animated fadeInLeft");*/
            jQuery(".studio-image img").addClass("animated fadeInRight");
         }
     });
	
    });