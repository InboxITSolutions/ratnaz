 $(document).ready(function() {
	$(window).scroll(function(event){
         var scrollPos= $(this).scrollTop();
            //alert( scrollPos);
		if(scrollPos>=594){
            jQuery(".about-image").addClass("pulse animated");
            jQuery(".about-desc").addClass("pulse animated");
         }
     });
	
    });