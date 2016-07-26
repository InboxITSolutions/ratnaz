<?php
require '../includes/connect.php';
if($_POST['addPost']){
    if (isset($_POST['addPost'])&& $_POST['addPost']="Add") {
    	if($_POST['heading']!=""&&$_POST['content']!=""){
    		if(getimagesize($_FILES['image']['tmp_name'])== FALSE){
                    echo "Please select an image";
                    header("Refresh:0.5,addnews.php");
                }
                else{
                    $image = addslashes($_FILES['image']['tmp_name']);
                    $name = addslashes($_FILES['image']['name']);
                    $image = file_get_contents($image);
                    $image = base64_encode($image);

                    $heading = $_POST['heading'];
                    $content = $_POST['content'];

                    mysql_query("INSERT INTO news(heading,news,name,image) VALUES ('$heading','$content','$name','$image')") or die(mysql_error());
                    header("Location:addnews.php");
    	}
    	}
    	else{
    		echo "No news";
    		header("Refresh:0.5,addnews.php");
    	}
    }
    else{
    	header("Location:addnews.php");
    }
}