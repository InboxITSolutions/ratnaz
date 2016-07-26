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
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
</head>
<body>

   <?php include'includes/navigation.php';?>
    
    <section id="readmore">
        <div class="container">
            <div class="row">
                
                    
                    <div class="col-xs-12 col-md-1 col-sm-1 a"></div>
                    
                    <div class="col-xs-12 col-md-7 col-sm-7 ">
                        <div class="col-xs-12 col-md-12 col-sm-12" style="height:40px;"></div>
                        <div class="col-xs-12 col-md-12 col-sm-12 readmore">
                            <?php
                            getReadmoreNews();

                            ?>
                           
                        </div> 
                    </div>
                   <div class="col-xs-12 col-md-4 col-sm-4 " >
                    <div class="col-xs-12 col-md-12 col-sm-12" style="height:40px;"></div>
                    <div class="col-xs-12 col-md-12 col-sm-12 recent-news">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-btn">
                            <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div> 
                        <br/>
                        <h3><span class="title-bar" style="font-size:35px;border-bottom:none;color:#333;">Recent News</span></h3>
                        <?php getRecentNews();?>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <?php include'includes/footer.php';?>
</body>
</html>