<!DOCTYPE html>
<html lang="eng">
<head>
  <title>Ratnaz Tattoo Inn</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/animate.css"><!-- for animation -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
    <script type="text/javascript" src="js/about-animate.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
</head>
<body>
<?php include 'includes/navigation.php';?>
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 top-about">
          <div class="col-xs-12 col-sm-6 col-md-6 about-image">
            <img src="images/final-about.png" class="animated fadeInLeft"><br/>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 about-desc">
              <h1 style="margin-bottom:30px;"><span class="title-bar">About Ratnaz Tattoo</span></h1>

             
                <?php 
                require 'includes/connect.php';
                $query = mysql_query("SELECT * FROM about_ratnaz  " ) or die(mysql_error());
                 while($row = mysql_fetch_array($query)){ 
                    $about = $row['content'];
                    ?>
                    <?php echo "<p class='animated fadeInLeft'>".$about."</p>"; ?>
                  
                  <?php
                  }
                ?>
             
              <br/><br/>
          </div>
          </div>
        </div>
      </div>
    </section>
   <?php include'includes/footer.php';?>
</body>
</html>
