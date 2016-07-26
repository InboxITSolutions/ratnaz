<?php 
require '../includes/connect.php';
if($_POST['addTattooArtistInfo']){
    if (isset($_POST['addTattooArtistInfo'])&& $_POST['addTattooArtistInfo']="Update") {
        if($_POST['artist_name']!=""&&$_POST['artist_role']!=""&&$_POST['artist_phone']!=""&&$_POST['artist_email']!=""&&$_POST['artist_fbprofile']!=""&&$_POST['artist_info']!=""){
                    $id=$_POST['id'];
                    echo $id;
                   $artistname=$_POST['artist_name'];
                   $role=$_POST['artist_role'];
                   $phone=$_POST['artist_phone'];
                   $email=$_POST['artist_email'];
                   $fbprofile=$_POST['artist_fbprofile'];
                   $about=$_POST['artist_info'];
                    mysql_query("UPDATE tattoo_artist SET name='$artistname',role='$role',phone='$phone',email='$email',fb_profile='$fbprofile',about='$about' where ta_id='".$id."' ") or die(mysql_error());
                    header("Location:TattooArtist.php");
                   
        }
        }
        
    }
    else{
        header("Location:TattooArtist.php");
    }


?>