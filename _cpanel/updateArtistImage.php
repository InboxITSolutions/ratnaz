<?php
require '../includes/connect.php';

	if(isset($_POST['update_image'])){
		if(getimagesize($_FILES['updateimage']['tmp_name']) == FALSE){
			echo 'Please select an image';
			header("TattooArtist.php");
		}else{
			$image = addslashes($_FILES['updateimage']['tmp_name']);
            $image = file_get_contents($image);
            $image = base64_encode($image);
           mysql_query("UPDATE tattoo_artist SET image ='".$image."' ") or die(mysql_error());
            header('Location:TattooArtist.php');
		}
	}


	if(isset($_POST['update_cover_image'])){
		if(getimagesize($_FILES['updatecoverimage']['tmp_name']) == FALSE){
			echo 'Please select an image';
			header("TattooArtist.php");
		}else{
			$image = addslashes($_FILES['updatecoverimage']['tmp_name']);
            $image = file_get_contents($image);
            $image = base64_encode($image);
            mysql_query("UPDATE tattoo_artist SET cover_image ='".$image."' ") or die(mysql_error());
            header('Location:TattooArtist.php');
		}
	}


?>