<?php
	session_start();
	if(isset($_POST['btn_login'])){
		if($_POST['username']!=""&&$_POST['password']!=""){
			require('../includes/connect.php');
			$btn_login = $_POST['btn_login'];
			$_SESSION['loggedIn']=$btn_login;
			$uname = $_POST['username'];
			$pass = $_POST['password'];
			//to protexct form mysql injection
			$uname = stripslashes($uname);
			$pass = stripslashes($pass);
			$uname = mysql_real_escape_string($uname);
			$pass = mysql_real_escape_string($pass);
			$res = mysql_query("SELECT * FROM admin_login WHERE uname='".$uname."' and password='".$pass."' ") or die(mysql_error());
			$row = mysql_fetch_assoc($res);
			$dbuname = $row['uname'];
			$dbpass = $row['password'];
			$admin_name = $row['admin_name'];


			if($dbuname == $uname && $dbpass ==  $pass){
				$_SESSION['user']= $admin_name;
				header('Location:slider.php');
			}
			else{
				/*header("Refresh:2,index.php");*/
				/*echo "<h1 style='color:red;text-align:Center;'>Incorrect Username or Password</h1>";*/
				?>
<!DOCTYPE html>
<html>
<head>
	<title>Cpanel Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>	
<body>	
	<section id="login">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 a"></div>
			<div class="col-xs-12 col-sm-4 col-md-4 login">
				<img src="../images/logoCMS.png" title="Inbox IT solutions">
				<form action="login.php" method="post" enctype="multipart/form-data">
					<label>Username:</label>
					<input type="text" name="username" placeholder="Username"/>
            		<!-- <label>Password:<span><a href="forget_password.php">Forgot your password?</a></span></label> -->
            		<label>Password:</label>
            		<input type="password" name="password" placeholder="Password"/>
            		<input type="submit" value="Login" class="btn_admin_login" name="btn_login"/>
            		<p style="color:red;">Incorrect username or password</p>
				</form>
				<br/><br/><br/><br/><br/><br/><br/><br/>
			</div>
			<div class="col-xs-12 col-md-4 col-sm-4 c"></div>
		</div>
	</div>
	</section>
</body>
</html>
		<?php
			}
		}
		else{
			/*header("Refresh:2,index.php");
			echo "Please Enter username or password. ";*/
			?>
<!DOCTYPE html>
<html>
<head>
	<title>Cpanel Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>	
<body>	
	<section id="login">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 a"></div>
			<div class="col-xs-12 col-sm-4 col-md-4 login">
				<img src="../images/logoCMS.png" title="Inbox IT solutions">
				<form action="login.php" method="post" enctype="multipart/form-data">
					<label>Username:</label>
					<input type="text" name="username" placeholder="Username"/>
            		<!-- <label>Password:<span><a href="forget_password.php">Forgot your password?</a></span></label> -->
            		<label>Password:</label>
            		<input type="password" name="password" placeholder="Password"/>
            		<input type="submit" value="Login" class="btn_admin_login" name="btn_login"/>
            		<p style="color:red;">Please enter username or password</p>
				</form>
				<br/><br/><br/><br/><br/><br/><br/><br/>
			</div>
			<div class="col-xs-12 col-md-4 col-sm-4 c"></div>
		</div>
	</div>
	</section>
</body>
</html>
<?php
		}
	}
	else{
		header('Location:index.php');
	}


?>