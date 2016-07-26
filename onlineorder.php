<?php
require 'includes/function.php';
?>
<!DOCTYPE html>
<html lang="eng">
<head>
  <title>Ratnaz Tattoo Inn</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/animate.css"><!-- for animation -->
    <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
    <link rel="icon" href="images/fav.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/500px.css">
    <link rel="stylesheet" type="text/css" href="css/responsive-slider.css">
    <script type="text/javascript" src="js/responsive-slider.js"></script>
    <script type="text/javascript" src="js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="js/animate.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/back-to-top.js"></script>
    <script type="text/javascript" src="js/intense.min.js"></script>
    <script type="text/javascript" src="js/intense.js"></script>
    <script type="text/javascript" src="js/tattoo-animate.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
    
</head>
<body>

  <?php include 'includes/navigation.php';?>
    <section id="gallery">
      <div class="container">
        <div class="row">
          
          <div class="col-xs-12 col-md-12 col-sm-12">
            
            <div class="col-xs-12 col-md-12 col-sm-12">
              <h2 style="text-align:center;font-family:san-serif;color:#fff;"><span class="title-bar">Book Online<span></h2>
              <div class="col-xs-12 col-md-12 col-sm-12 gallery-1 ">
                   <?php
                    getOnlineOrder();
                  
                  ?>
              </div>
          </div>
        </div>
          <script type="text/javascript" src="js/zoomin.js"></script>
           <div class="col-xs-12 col-md-5 col-sm-5 "></div>
           <div class="col-xs-12 col-md-3 col-sm-3 pagination-section">
            <br/><br/>
           <!--  <ul class="pagination">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"> >> </a></li>
                </ul> -->
           </div>
           <div class="col-xs-12 col-md-4 col-sm-4 "></div>
        </div>
      </div>
    </section>
   <?php include'includes/footer.php';?>
      </section>
<script type="text/javascript">
$(function() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
 
        e.preventDefault();
    });
 
    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
 
        e.preventDefault();
    });
});
</script>
</body>
</html>
