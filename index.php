<?php
require'includes/function.php';
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
    <link rel="stylesheet" type="text/css" href="css/responsive-slider.css">
    <script type="text/javascript" src="js/responsive-slider.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="js/animate.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/back-to-top.js"></script>
    <script type="text/javascript" src="js/hovereffect.js"></script><!--for designs hover-->
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php include 'includes/navigation.php';?>
    <section id="slider">
      <div class="container animateslider">
        <div class="row">
              <ul class="rslides">
                 
                  <?php getIndexSlider(); ?>
              </ul>
        </div>
      </div>
     </section>
     <section id="our design">
      <div class="container animatedesigns">
        <div class="row designs">
            <br/>
            <div class="col-xs-12 col-md-3 col-sm-6 design-2">
                
                  <?php  getDesignsOne();    ?> 
                
                 <br/>
            </div>
            <div class="col-xs-12 col-md-3 col-sm-6 design-2">
                
                
                  <?php  getDesignsTwo();    ?> 
                  
                 <br/>
            </div>
            <div class="col-xs-12 col-md-3 col-sm-6 top-design">
              
              
                  <?php  getTopDesigns();    ?> 
                  
              <br/>
            </div>
            <div class="col-xs-12 col-md-3 col-sm-6 most-viewed">
                
                
                  <?php  getMostViewed();    ?> 
                  
                 <br/>
            </div>
           
        </div>
      </div>
    </section>
   <section id="testimonial">
      <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-7 col-md-7">
          <div class="testimonials-slider" style="font-family:sans-serif;color:#fff;">
            <?php getTestimonial();?>
              
          </div>
        </div>
        <div class="col-xs-12 col-md-5 col-sm-5 facebook">
            <div class="fb-page" data-href="https://www.facebook.com/Ratnaztattooinn/?fref=nf" data-width="400" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Ratnaztattooinn/?fref=nf"><a href="https://www.facebook.com/Ratnaztattooinn/?fref=nf">Ratnaz Tattoo Inn, Biratnagar</a></blockquote></div></div>
            <br/><br/>
        </div>
        </div>
              </div>
            </section>
      <?php include'includes/footer.php';?>
      <script type="text/javascript">
      $('.testimonials-slider').bxSlider({
       slideWidth: 800,
       minSlides: 1,
       maxSlides: 1,
       slideMargin: 32,
       auto: true,
       autoControls: true,
     });
      </script>
</body>

