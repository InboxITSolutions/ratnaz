<?php
include '../includes/connect.php';
if($_POST['updatePost']){
    if (isset($_POST['updatePost'])&& $_POST['updatePost']="Add") {
    	if($_POST['heading']!=""&&$_POST['content']!=""){
                    $heading = $_POST['heading'];
                    $content = $_POST['content'];
                    $id = $_POST['id'];
                    mysql_query("UPDATE news SET heading='".$heading."', news='".$content."' WHERE n_id='$id' ")or die(mysql_error());
                    header("Location:newsmanagement.php");
    	}
    	else{
    		echo "No news";
    		header("Refresh:0.5,newsmanagement.php");
    	}
    }
    else{
    	header("Location:newsmanagement.php");
    }
}
?>