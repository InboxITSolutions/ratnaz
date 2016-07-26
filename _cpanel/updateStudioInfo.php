<?php
require '../includes/connect.php';
if($_POST['addstudio']){
	if(isset($_POST['addstudio'])){
            $id=$_POST['id'];
            $content1=$_POST['editor1'];
		$content2=$_POST['editor2'];
            
                  
            mysql_query("UPDATE studio set content1='$content1', content2='$content2' ") or die(mysql_error());
            header('Location:studiomanagement.php');
            }
      
else{
	header('Location:studiomanagement.php');
}

}


?>
