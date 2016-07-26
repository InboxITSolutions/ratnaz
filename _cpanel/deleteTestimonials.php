<?php
include '../includes/connect.php';
$id=$_GET['id'];
mysql_query("Delete from testimonial where t_id='".$id."'") or die(mysql_error());
header('Location:testimonials.php');

?>