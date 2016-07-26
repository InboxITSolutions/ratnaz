<?php
session_start();

if($_SESSION['loggedIn']){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Management| Ratnaz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<header>
		<div id="sidebar">
			<img src="../images/logo.png"/>
			<ul>
				<li><a href="slider.php">Slider Management</a></li>
				<li><a href="designs.php">Designs Management</a></li>
				<li><a href="TattooArtist.php">Artist Management</a></li>
				<li><a href="newsmanagement.php">News Management</a></li>
				<li><a href="aboutManagement.php">About Us Management</a></li>
				<li><a href="studioManagement.php">Studio Management</a></li>
				<li><a href="gallerymanagement.php">Gallery Management</a></li>
				<li><a href="contact.php">Contact Management</a></li>
				<li><a href="testimonials.php">Testimonials Management</a></li>
				
				<li><a href="logout.php">Sign Out</a></li>

			</ul>
			<div id="sidebar-btn">
				<i class="fa fa-bars" aria-hidden="true"></i>
				<div class="bar">

				</div>

			</div>
		</div>
		<div class="info">
		<ul>
		<li class="user">
			<i class="fa fa-user" aria-hidden="true"></i>&nbsp;
			<b><?php echo $_SESSION['user']; ?></b>
		</li>
		<li class="link">
			<b><a href="http://localhost/ratnaz/"> 
				<i class="fa fa-external-link" aria-hidden="true"></i>&nbsp;
				Visit Site
			</a></b>
		</li>
		</ul>
	</div>
	</header>
	<div class="wrapper" class="container_move">
		<div class="container">
			<h2 class="heading"><u class="head">Contact Management</u></h2>
			<?php
			require '../includes/connect.php';
			$query=mysql_query("SELECT * FROM contact") or die(mysql_error());
			while($row=mysql_fetch_array($query)){
				$companyname=$row['companyname'];
				$address=$row['address'];
				$cell_phone=$row['cell_phone'];
				$landline_phone=$row['landline_phone'];
				$email=$row['email'];
			?>
			<form class="addItem" action="addContact.php" method="post" enctype="multipart/form-data" 
				style="width: 97%; margin-bottom: 10px; text-align: -moz-center;">
				<h2 class="add" style="margin: 0px 0px 10px 0px;">Add Contact Information</h2>
				<table class="artist_table" style="padding: 10px; width: 60%; text-align: center;">
					<tr>
						<td style="width: inherit;">
							Company Name
						</td>
						<td style="width: inherit;">
							<input type="text" name="companyname" value=" <?php echo $companyname; ?> ">
						</td>
					</tr>
					<tr>
						<td style="width: inherit;">
							Address
						</td>
						<td style="width: inherit;">
							 <input type="text" name="address" value="<?php echo $address; ?>">
						</td>
					</tr>
					<tr>
						<td style="width: inherit;">
							Mobile Number
						</td>
						<td style="width: inherit;">
							<input type="number" name="cell_phone" value="<?php echo $cell_phone; ?>" >
						</td>
					</tr>
					<tr>
						<td style="width: inherit;">
							Phone Number
						</td>
						<td style="width: inherit;">
							<input type="number" name="landline_phone" value="<?php echo $landline_phone; ?>" >
						</td>
					</tr>
					<tr>
						<td style="width: inherit;">
							E-mail Address
						</td>
						<td style="width: inherit;">
							<input type="text" name="email" value="<?php echo $email; ?>" >
						</td>
					</tr>

				</table>
				<input class="btn_Add" style="margin: 20px 0px 0px 0px; color: rgb(100, 24, 24);"
				 type="submit" value="Update" name="addContact">	 
			</form>
		</div>
	</div>
</body>
<script type="text/javascript" src="../js/jquery.js"></script>
	<script src="../js/sidebar.js"></script>
</html>
<?php 
}
}
else{
	header('Location:index.php');
}
?>