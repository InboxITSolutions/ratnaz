<?php
require '../includes/connect.php';
if ($_POST['addstudio']) {
    if (isset($_POST['addstudio'])){
		if(getimagesize( $_FILES['studio-pic1']['tmp_name'] )== FALSE){
                echo "Please select an image";
                header("Refresh:2,studioManagement.php");
            }
            else{
                $std1 = addslashes($_FILES['studio-pic1']['tmp_name']);
                $std1 = file_get_contents($std1);
                $std1 = base64_encode($std1);
                $std2 = addslashes($_FILES['studio-pic2']['tmp_name']);
                $std2 = file_get_contents($std2);
                $std2 = base64_encode($std2);
                
                $content1=$_POST['editor1'];
                $content2=$_POST['editor2'];
                mysql_query("INSERT INTO studio VALUES ('','$std1','$content1','$std2','$content2')") or die(mysql_error());
                header('Location:studioManagement.php');
    }
}
else{
	header("Location:studioManagement.php");
}

}