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
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
</head>
<body>
<?php include 'includes/navigation.php';?>
    <section id="artistportfolio">
      <div class="container">
        <div class="row artist-cover">
          <div class="col-xs-12 col-sm-1 col-md-1"></div>
          <div class="col-xs-12 col-sm-10 col-md-10">
              <?php getTatooArtistCover();?>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1"></div>
          
        </div>
        
        <div class="row artist-info">
          <div class="col-xs-12 col-sm-1 col-md-1"></div>
          <div class="col-xs-12 col-sm-1 col-md-1 artist-display-picture">
            <?php getTatooArtistImage(); ?>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 artist-name">
              <h3><?php getTatooArtistName();?></h3>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6"></div>
        </div>
        <div class="row artist-navigation">
          <div class="col-xs-12 col-sm-1 col-md-1 "></div>
          <div class="col-xs-12 col-sm-10 col-md-10 artist-nav" >
          <ul>
            <li><a href="#link1content" id="link1" > <i class="fa fa-user" aria-hidden="true"></i> About</a></li>
            <li><a href="#link2content" id="link2"> <i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</a></li>
          </ul>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 "></div>

        </div>
        <div class="row description">
          <div class="col-xs-12 col-md-1 col-sm-1"></div>
          <div class="col-xs-12 col-md-10 col-sm-10 artist-description">
            <div id="link1content" style="padding:15px;">
              <div class="col-xs-12 col-md-6 col-sm-6">
                <i class="fa fa-info" aria-hidden="true"></i>&nbsp;&nbsp;Role<br/><hr style="margin:0;box-shadow: 0px 0px 0px 2px rgb(71, 67, 60);">
                <p style="margin-top:5px;"><?php  getTatooArtistRole(); ?></p>
              <i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;Phone<hr style="margin:0;box-shadow: 0px 0px 0px 2px rgb(71, 67, 60);">
              <p style="margin-top:5px;"><?php getTatooArtistPhone();?></p>
              </div>
              <div class="col-xs-12 col-md-6 col-sm-6">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;E-mail<hr style="margin:0;box-shadow: 0px 0px 0px 2px rgb(71, 67, 60);">
              <p style="margin-top:5px;"><?php getTatooArtistEmail();?></p>
              <i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp;&nbsp;Facebook<hr style="margin:0;box-shadow: 0px 0px 0px 2px rgb(71, 67, 60);">
              <a href="#" style="color:#fff;"><p style="margin-top:5px;"><?php getTatooArtistfbprofile();?></p></a>
              
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;About me<hr style="margin:0;box-shadow: 0px 0px 0px 2px rgb(71, 67, 60);">
              <p id="link1content" style="font-size:16px;margin-top:5px;text-align:justify;"><?php getTatooArtistAbout(); ?></p><br/>
              </div>
            </div>
           </div>        
          <div class="col-xs-12 col-md-1 col-sm-1"></div>
          
          <script type="text/javascript" src="js/contenthideshow.js"></script>
          
          <div id="link2content">

            <div class="col-xs-12 col-md-1 col-sm-1 "></div>
            <div class="col-xs-12 col-md-10 col-sm-10 artist-gallery">
             
                
              <?php getArtistTattooGallery();?>
                
            </div>
            <div class="col-xs-12 col-md-1 col-sm-1"></div>
            
            
            
          
          </div>
      </div>
    </section>
    <?php include'includes/footer.php';?>
</body>
</html>
