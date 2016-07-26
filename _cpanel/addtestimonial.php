<?php 
require '../includes/connect.php';
if($_POST['addtestimonial']){
    if (isset($_POST['addtestimonial'])&& $_POST['addtestimonial']="Add") {
        if($_POST['personname']!=""&&$_POST['bio']!=""&&$_POST['view']!=""&&$_POST['rating']!=""){
            if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
                    echo "Please select an image";
                    
                }
                else{
                    $image = addslashes($_FILES['image']['tmp_name']);
                    $image = file_get_contents($image);
                    $image = base64_encode($image);
                    $name = addslashes($_FILES['image']['name']);

                    $personname = $_POST['personname'];
                    $bio = $_POST['bio'];
                    $view = $_POST['view'];
                   mysql_query("INSERT INTO testimonial VALUES ('','$personname','$bio','$view','$image','$name') ") or die(mysql_error());
                    header("Location:testimonials.php");
                   
        }
        }
        
    }
    else{
        header("Location:testimonials.php");
    }
}

?>