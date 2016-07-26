<?php 
require '../includes/connect.php';
if($_POST['addtestimonial']){
    if (isset($_POST['addtestimonial'])&& $_POST['addtestimonial']="Update") {
        if($_POST['personname']!=""&&$_POST['bio']!=""&&$_POST['view']!=""&&$_POST['rating']!=""){
                    $id=$_POST['id'];
                    echo $id;
                    $personname = $_POST['personname'];
                    $bio = $_POST['bio'];
                    $view = $_POST['view'];
                    $rate = $_POST['rating'];
                    mysql_query("UPDATE testimonial SET personname='$personname',bio='$bio',view='$view',rating='$rate' where t_id='".$id."' ") or die(mysql_error());
                    header("Location:testimonials.php");
                   
        }
        }
        
    }
    else{
        header("Location:testimonials.php");
    }


?>