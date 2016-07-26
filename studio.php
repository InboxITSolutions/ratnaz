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
    <script type="text/javascript" src="js/studio-animate.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
</head>
<body>

   <?php include 'includes/navigation.php';?>
    <section class="studio">
      <div class="container">
        <div class="row studio-section-1">
          <div class="col-xs-12 col-sm-12 col-md-12 ">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
            <h1 style="margin-left:12px;text-align:center;"><span class="title-bar">Tour Our Ratnaz Tattoo Shop</span></h1><br/>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="col-xs-12 col-sm-6 col-md-6 studio-image">
                <!-- <img src="images/dummyimage.png" class="animated fadeInLeft"> -->
                <?php 
                require 'includes/connect.php';
                $query = mysql_query("SELECT * FROM studio " ) or die(mysql_error());
                 while($row = mysql_fetch_array($query)){ 
                   
                   echo '<img src="data:image;base64,'.$row['image1'].'" class="animated fadeInLeft" />';
                  
                  
                  }
                ?>     
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 studio-description">
               <?php 
                require 'includes/connect.php';
                $query = mysql_query("SELECT * FROM studio " ) or die(mysql_error());
                 while($row = mysql_fetch_array($query)){ 
                   $content=$row['content1'];
                   echo "<p>". $content."</p>";
                  
                  
                  }
                  ?>
              </div>
            
            </div>
            <img src="images/divider.png" style="width:100%;">
          </div>
          
          </div>
          <div class="row studio-section-2">
          <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="col-xs-12 col-sm-6 col-md-6 studio-description">
            <br/>
            <?php 
                require 'includes/connect.php';
                $query = mysql_query("SELECT * FROM studio " ) or die(mysql_error());
                 while($row = mysql_fetch_array($query)){ 
                   $content=$row['content1'];
                   echo "<p>". $content."</p>";
                    }
                  ?>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 studio-image">
            <br/>
            <?php 
                require 'includes/connect.php';
                $query = mysql_query("SELECT * FROM studio " ) or die(mysql_error());
                 while($row = mysql_fetch_array($query)){ 
                   
                   echo '<img src="data:image;base64,'.$row['image2'].'" class="animated fadeInLeft" style="margin-bottom:50px;" />';
                  
                  
                  }
                ?>     
          </div>
        </div>
        </div>
      </div>
  </section>
  <?php include'includes/footer.php';?>
  </body>
  </html>