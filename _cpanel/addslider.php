<?php
require '../includes/connect.php';
if ($_POST['addslider']) {
    if (isset($_POST['addslider'])){
		if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
                echo "Please select an image";
                header("Refresh:0.1,slider.php");
            }
            else{
                $image = addslashes($_FILES['image']['tmp_name']);
                $name = addslashes($_FILES['image']['name']);
                $image = file_get_contents($image);
                $image = base64_encode($image);
                mysql_query("INSERT INTO index_slider VALUES ('','$image','$name')") or die(mysql_error());
                header('Location:slider.php');
    }
}
else{
	header("Location:slider.php");
}
}
/*else if ($_POST['addimage']) {
    if (isset($_POST['addimage'])){
        if($_POST['caption']!=""){
            if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
                    echo "Please select an image";
                    header("Refresh:0.1,gallerymanagement.php");
                }
                else{
                    $image = addslashes($_FILES['image']['tmp_name']);
                    $name = addslashes($_FILES['image']['name']);
                    $image = file_get_contents($image);
                    $image = base64_encode($image);

                    $caption = $_POST['caption'];

                    mysql_query("INSERT INTO gallery(caption,name,image) VALUES ('$caption','$name','$image')") or die(mysql_error());
                    header("Location:gallerymanagement.php");
        }
        }
        else{
            echo "No Caption";
            header("Refresh:0.1,gallerymanagement.php");
        }
    }
    else{
        header("Location:gallerymanagement.php");
    }
}*/

?>
