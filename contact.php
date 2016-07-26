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
    <script type="text/javascript" src="js/parsley.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
</head>
<body>

   <?php include 'includes/navigation.php';?>
    <section id="contact">
      <div class="container contactcontainer">
        <div class="row contactinfo">
            <div class="col-xs-12 col-md-12 col-sm-12 info">
                  <div class="col-xs-12 col-md-4 col-sm-4 infoleft animated fadeInLeft">
                      <br/>
                     <!-- <span style="color: #fff;font-size: 21px;background-color: #484848 !important;padding: 5px 20px 5px 30px !important;display: block !important;">Contact</span> 
                     <span style="display: block !important;position: absolute !important;width: 0px !important;height: 0px !important;border-top: 40px solid #484848 !important;border-right: 40px solid transparent !important;right: -25px;top: 29px;"></span><br/> -->
                      <h3><span class="title-bar" style="color:#fff;">Contact</span></h3>
                        <?php getContactDetails(); ?>
                      <!-- <company class="company">Ratnaz Tattoo Inn</company>
                      <add class="address"><i class="fa fa-map-marker"></i> Biratnagar,Nepal</add>
                      <phone class="phone"> <i class="fa fa-phone"></i> 021-2222222</phone>
                      <mobile class="mobile"> <i class="fa fa-mobile"></i> 984-2189570</mobile>
                      <mail class="mail"><i class="fa fa-envelope"></i> info@ratnaztattoo.com.np</mail> -->
                  </div>
                  
                  <div class="col-xs-12 col-md-6 col-sm-6 feedback animated fadeInRight">
                    <!-- <span style="color: #FFF;font-size: 21px;background-color: #484848 !important;padding: 5px 20px 5px 30px !important;display: block !important;text-align:left;">Leave us a Feedback</span> 
                     <span style="display: block !important;position: absolute !important;width: 0px !important;height: 0px !important;border-top: 40px solid #484848 !important;border-right: 40px solid transparent !important;right: -25px;top: 0px;"></span><br/> -->
                    <h3><span class="title-bar" style="float:left;margin:0px;margin-bottom:6px;">Leave us a Feedback</span></h3>
                    <form action="feedback.php" method="post" data-validate="" id="demo-form" name= "frmLogin"> 
                      <table cellpadding="5" >
                        <tr><td align="left">Full Name:</td></tr>
                        <tr><td><input class="form-control input" name="fullname" required="" type="text" data-message="Please enter a first name"/></td></tr>
                        <tr><td align="left">E-mail:</td></tr>
                        <tr><td><input class="form-control input" name="email" data-parsley-trigger="change" required="" type="email" data-error-message="Please enter a E-mail"></td></tr>
                        <tr><td align="left">Share your idea</td></tr>
                        <tr><td><textarea id="message" class="form-control textarea" name="message" data-parsley-trigger="keyup" 
                          data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="You need to enter at least a 20 character" data-parsley-validation-threshold="10">
                        </textarea></td></tr>
                        <tr><td><hr></td></tr>
                      </table>
                      
                      <input class="buttons" type="submit" value="Submit" name="feedback" style="width:30%;">
                      <br/>
                    </form>  
                  </div>
                  <script type="text/javascript">
                  $(function () {
                  $('#demo-form').parsley().on('field:validated', function() {
                    var ok = $('.parsley-error').length === 0;
                      $('.bs-callout-info').toggleClass('hidden', !ok);
                      $('.bs-callout-warning').toggleClass('hidden', ok);
                      })
                  .on('form:submit', function() {
                  return false; // Don't submit form for this demo
                        });   
                });
                    </script>
                 
            </div>
        </div>
        <div class="row googlemap">
            <div class="col-xs-12 col-md-12 col-sm-12 map">
              <br/>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14285.470612989448!2d87.2693396!3d26.4761048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3fb74f4f0e73618!2sRatnaz+Tattoo+Shop!5e0!3m2!1sen!2s!4v1461860873137" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br/>
            </div>

        </div>
      </div>
    </section>
    <?php include'includes/footer.php';?>
</body>
</html>