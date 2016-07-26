<?php
require '../includes/connect.php';
if($_POST['addTattooArtistInfo']){
	if(isset($_POST['addTattooArtistInfo'])){
            $id=$_POST['id'];
		$artist_name=$_POST['artist_name'];
            $artist_role=$_POST['artist_role'];
            $artist_phone=$_POST['artist_phone'];
            $artist_email=$_POST['artist_email'];
            $artist_fbprofile=$_POST['artist_fbprofile'];
            $artist_info=$_POST['artist_info'];
            $query=mysql_query("SELECT * FROM tattoo_artist where ta_id='".$id."' ") or die(mysql_query());
            while ($row=mysql_fetch_array($query)) {
                  $image =  '<img src="data:image;base64,'.$row['image'].'"/>';
                  $cover_image ='<img src="data:image;base64,'.$row['cover_image'].'"/>';      
            mysql_query("UPDATE tattoo_artist set name='$artist_name',role='$artist_role',phone='$artist_phone',email='$artist_email',fb_profile='$artist_fbprofile',about='$artist_info'        ") or die(mysql_error());
            header('Location:TattooArtist.php');
            }
      }
else{
	header('Location:TattooArtist.php');
}

}


?>