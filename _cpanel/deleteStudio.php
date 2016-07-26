<?php
include '../includes/connect.php';
$id=$_GET['id'];
mysql_query("Delete from studio where s_id='".$id."'") or die(mysql_error());
header('Location:studioManagement.php');

?>