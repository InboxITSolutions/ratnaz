<?php
require'../includes/connect.php';
if($_POST['addAbout']){
	if(isset($_POST['addAbout'])){
	$content=$_POST['editor'];
	$query=mysql_query("INSERT into about_ratnaz VALUES ('','$content')") or die(mysql_query());
	header('location:aboutManagement.php');

	}	
	else{	
		header('Location:aboutManagement.php');
	}
}
?>

