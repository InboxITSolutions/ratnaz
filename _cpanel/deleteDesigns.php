<?php
include '../includes/connect.php';
	$id=$_GET['id'];

	mysql_query("Delete from designs where d_id='".$id."'") or die(mysql_error());
	header('Location:designs.php');

?>