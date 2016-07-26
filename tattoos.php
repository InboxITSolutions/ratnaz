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
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="icon" href="images/fav.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/500px.css">
    <script type="text/javascript" src="js/animate.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/back-to-top.js"></script>
    <script type="text/javascript" src="js/intense.min.js"></script>
    <script type="text/javascript" src="js/intense.js"></script>
    <script type="text/javascript" src="js/tattoo-animate.js"></script>
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
</head>
<body>
  <?php include 'includes/navigation.php';?>
    <section id="gallery">
      <div class="container">
        <div class="row">
          
          <div class="col-xs-12 col-md-12 col-sm-12">
            
            <div class="col-xs-12 col-md-12 col-sm-12">
              <h2 style="text-align:center;font-family:san-serif;color:#fff;"><span class="title-bar">GALLARIES<span></h2>
              <div class="col-xs-12 col-md-12 col-sm-12 gallery-1 ">
                   <?php
                    getTattooGallery();
                  
                  ?>
              </div>
          </div>
        </div>
          <script type="text/javascript" src="js/zoomin.js"></script>
          <!--  <div class="col-xs-12 col-md-5 col-sm-5 "></div>
           <div class="col-xs-12 col-md-3 col-sm-3 pagination-section">
            <br/><br/>
            <ul class="pagination">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"> >> </a></li>
                </ul>
           </div>
           <div class="col-xs-12 col-md-4 col-sm-4 "></div> -->
        </div>
      </div>
   <?php include'includes/footer.php';?>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

  $('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-img-mobile',
    image: {
      verticalFit: true
    }
    
  });

  $('.image-popup-fit-width').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    image: {
      verticalFit: false
    }
  });

  $('.image-popup-no-margins').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

});
</script>
</body>
</html>
