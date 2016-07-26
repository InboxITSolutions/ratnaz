<?php
include '../includes/connect.php';
	$id=$_GET['id'];

	mysql_query("Delete from index_slider where s_id='".$id."'") or die(mysql_error());
	header('Location:slider.php');

?>