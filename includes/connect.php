<?php
$host = 'localhost';
$user = 'tattoodi_ratnaz';
$pass = 'ratnaz123!@#';
$db = 'tattoodi_ratnaz';
/*$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ratnaz';
*/
mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($db)or die(mysql_error());


?>