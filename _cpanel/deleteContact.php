<?php
include '../includes/connect.php';
	$id=$_GET['id'];
	mysql_query("Delete from contact where c_id='".$id."'") or die(mysql_error());
	header('Location:contact.php');

?>