<?php
include '../includes/connect.php';
	$id=$_GET['id'];
	mysql_query("Delete from tattoo_artist where ta_id='".$id."'") or die(mysql_error());
	header('Location:tattooArtist.php');

?>