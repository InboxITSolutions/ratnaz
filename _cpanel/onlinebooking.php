<?php
require 'includes/connect.php';
if($_POST['onlinebook']){
 if(isset($_POST['onlinebook'])){
 	$name=$_POST['bookername'];
 	$email=$_POST['bookeremail'];
 	$phone=$_POST['phone'];
 	$date=$_POST['date'];
 	$subject="Book the time for tattoo";
 	$recipent="thaparatna2@gmail.com";
 	$mailBody="Name: $name\nPhone No. : $phone\n Email: $email\nDate: $date\nDate: $date";
 	mail($recipient, $subject, $mailBody, "From: $name <$email>");
 	?>
 </div>
        <div class="popup" data-popup="popup-1">
          <div class="popup-inner">
            <table align="center" cellpadding="5">
            <form action="onlinebooking.php" method="post">
              <tr>
              <td><i class="fa fa-user" aria-hidden="true"></i></td>
              <td><input type="text" name="booker_name" placeholder="Name"></td>
              </tr>
              
                <tr>
                  <td><i class="fa fa-phone-square" aria-hidden="true"></i></td>
                  <td><input type="text" name="booker_phone" placeholder="Phone"> </td> 
                </tr>
              <tr>
              <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
              <td><input type="text" name="booker_email" placeholder="E-mail"></td>
              </tr>

              <tr>
                <td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
                <td><input type="text" name="booker_date" placeholder="Date"></td>
              </tr>

              <tr><td></td><td><input type="submit" value="Book" name="onlinebook" class="book"></td></tr>
              <tr><td><?php    
              	echo "<p>Your booking has been suceessfull.We will follwoup shortly.</p>";
              ?></td></tr>
            </form>
          </table>
            <p><a data-popup-close="popup-1" href="#">Close</a></p>
            <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
          </div>
        </div>
<?php 	
 }	
 else{

 }
}
?>