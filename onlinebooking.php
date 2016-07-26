<?php
require 'includes/connect.php';
if($_POST['onlinebook']){
 if(isset($_POST['onlinebook'])){
 	$name=$_POST['booker_name'];
 	$email=$_POST['booker_email'];
 	$phone=$_POST['booker_phone'];
 	$date=$_POST['booker_date'];
 	$subject="Book the time for tattoo";
 	$recipient="thaparatna2@gmail.com";
 	$mailBody="Name: $name\nPhone No. : $phone\n Email: $email\nDate: $date\n";
 	mail($recipient, $subject, $mailBody);
 	echo 'booking sucessfull';
 	header("location:onlineorder.php");

 }	
 else{
  header("location:onlineorder.php");
 }
}
?>