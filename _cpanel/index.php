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
				</form>
				<br/><br/><br/><br/><br/><br/><br/><br/>
			</div>
			<div class="col-xs-12 col-md-4 col-sm-4 c"></div>
		</div>
	</div>
	</section>
</body>
</html>