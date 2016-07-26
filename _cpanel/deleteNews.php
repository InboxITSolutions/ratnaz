<?php
include '../includes/connect.php';
	$id=$_GET['id'];

	mysql_query("Delete from news where n_id=$id") or die(mysql_error());
	header('Location:newsmanagement.php');

?>