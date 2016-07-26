 $(document).ready(function() {
	$(window).scroll(function(event){
         var scrollPos= $(this).scrollTop();
           /* alert(scrollPos);*/
		if(scrollPos>=255){
            jQuery(".gallery-2 img").addClass("animated fadeInLeft ");

         }
         if(scrollPos>=535){
         	jQuery(".gallery-3 img").addClass("animated fadeInLeft ");

         }
     });
	
    });