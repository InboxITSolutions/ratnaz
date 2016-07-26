<?php
require'../includes/connect.php';
if($_POST['addContact']){

	if(isset($_POST['addContact'])){
		$cname=$_POST['companyname'];
		$address=$_POST['address'];
		$cphone=$_POST['cell_phone'];
		$lphone=$_POST['landline_phone'];		
		$email=$_POST['email'];
		$query=mysql_query("UPDATE contact SET companyname='$cname',address='$address',cell_phone='$cphone',landline_phone='$lphone',email='$email' ") or die(mysql_query());
		header('location:contact.php');

	}	
	else{
		header('location:contact.php');
	}


}



?>