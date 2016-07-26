<?php
include'../includes/connect.php';
if($_POST['addGallery']){
	if(isset($_POST['addGallery']))
		if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
                echo "Please select an image";
                header("Refresh:0.1,gallerymanagement.php");
            }
            else{
            $file = rand(1000,100000)."-".$_FILES['image']['name'];
            $name = addslashes($_FILES['image']['name']);
            $file_loc = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];
            $file_type = $_FILES['image']['type'];
            $folder ="../gallery/";
            $ArtistName=$_POST['artist_name'];
            $Caption=$_POST['caption'];
            move_uploaded_file($file_loc, $folder.$file) or die(mysql_error());
            mysql_query("INSERT INTO tattoo_gallery VALUES ('','$file','$ArtistName','$Caption','$name')") or die(mysql_error());
            header('Location:gallerymanagement.php');
    }



}
else{
	header('Location:gallerymanagement.php');
}

?>

<?php
/*require '../includes/connect.php';
    if(isset($_POST['addGallery'])){
        $file = rand(1000,100000)."-".$_FILES['image']['name'];
        $name = addslashes($_FILES['image']['name']);
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder ="../gallery/";
        $ArtistName=$_POST['artist_name'];
        $Caption=$_POST['caption'];
        
        move_uploaded_file($file_loc, $folder.$file) or die(mysql_error());
        mysql_query("INSERT INTO tattoo_gallery VALUES ('','$file','$ArtistName','$Caption','$name')") or die(mysql_error());
    }
    */
?>
