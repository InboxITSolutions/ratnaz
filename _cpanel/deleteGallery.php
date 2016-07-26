<?php
include '../includes/connect.php';
	$id=$_GET['id'];
	mysql_query("Delete from tattoo_gallery where t_id='".$id."'") or die(mysql_error());
	header('Location:gallerymanagement.php');

?>