<?php
require '../includes/connect.php';

	if(isset($_POST['updateimage1'])){
		if(getimagesize($_FILES['updateimage1']['tmp_name']) == FALSE){
			echo 'Please select an image';
			header("studiomanagemant.php");
		}else{
			$image = addslashes($_FILES['updateimage1']['tmp_name']);
            $image = file_get_contents($image);
            $image = base64_encode($image);
           mysql_query("UPDATE studio SET image1 ='".$image."' ") or die(mysql_error());
            header('Location:studiomanagement.php');
		}
	}


	if(isset($_POST['updateimage2'])){
		if(getimagesize($_FILES['updateimage2']['tmp_name']) == FALSE){
			echo 'Please select an image';
			header("studiomanagemant.php");
		}else{
			$image = addslashes($_FILES['updateimage2']['tmp_name']);
            $image = file_get_contents($image);
            $image = base64_encode($image);
           mysql_query("UPDATE studio SET image2 ='".$image."' ") or die(mysql_error());
            header('Location:studiomanagement.php');
		}
	}


?>