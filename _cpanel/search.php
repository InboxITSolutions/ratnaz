<?php
require('../includes/connect.php');
$output="";
if(isset($_POST['search'])){
	$searchq=$_POST['search-value'];
	$searchq=preg_replace("#[^0-9a-z]#i", "", $searchq);
	$query=mysql_query("SELECT * FROM news WHERE news LIKE '%$searchq%' ") or die(mysql_error());
	$count=mysql_num_rows($query);

if($count==0){
	$output= "No match found";
}else{
	while ($row =mysql_fetch_array($query)) {
		$news =$row['news'];
		$output .='<div>'.$news.'</div>';
	}
}

echo $output;



}


?>