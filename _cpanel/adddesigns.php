<?php
require '../includes/connect.php';
if ($_POST['adddesigns']) {
    if (isset($_POST['adddesigns'])){
        if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
                echo "Please select an image";
                header("Refresh:0.1,designs.php");
            }
            else{
                $image = rand(1000,100000)."-".$_FILES['image']['name'];
                $name = addslashes($_FILES['image']['name']);
                $file_loc = $_FILES['image']['tmp_name'];
                $file_size = $_FILES['image']['size'];
                $file_type = $_FILES['image']['type'];
                $folder ="../designs/";
                $d_name=$_POST['d_name'];
                $tag=$_POST['designs'];
                $description=$_POST['description'];
                move_uploaded_file($file_loc, $folder.$image) or die(mysql_error());
            mysql_query("INSERT INTO designs VALUES ('','$image','$d_name','$tag','$description','$name')") or die(mysql_error());
                header('Location:designs.php');
    }
}
else{
    header("Location:designs.php");
}
}


?>