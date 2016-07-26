<?php
require '../includes/connect.php';
if($_POST['addTattooArtistInfo']){
	if(isset($_POST['addTattooArtistInfo'])){
		if(getimagesize($_FILES['artist_image']['tmp_name']) == FALSE){
			echo 'Please select an image';
			 /*header("Refresh:0.1,addTattooArtist.php");*/
		}else{
		$image = addslashes($_FILES['artist_image']['tmp_name']);
            $image = file_get_contents($image);
            $image = base64_encode($image);
            $name = addslashes($_FILES['artist_image']['name']);
			
		$cover_image = addslashes($_FILES['artist_cover_image']['tmp_name']);
            $cover_image = file_get_contents($cover_image);
            $cover_image = base64_encode($cover_image);
            $cover_name = addslashes($_FILES['artist_cover_image']['name']);

            $artist_name=$_POST['artist_name'];
            $artist_role=$_POST['artist_role'];
            $artist_phone=$_POST['artist_phone'];
            $artist_phone=$_POST['artist_phone'];
            $artist_email=$_POST['artist_email'];
            $artist_fbprofile=$_POST['artist_fbprofile'];
            $artist_info=$_POST['artist_info'];
            mysql_query("INSERT INTO tattoo_artist VALUES ('','$artist_name','$image','$cover_image','$artist_role','$artist_phone','$artist_email','$artist_fbprofile','$artist_info') ") or die(mysql_error());
            header('Location:TattooArtist.php');
            }
}
else{
	header('Location:TattooArtist.php');
}


}

?>