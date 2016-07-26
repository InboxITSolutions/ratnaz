<?php
session_start();

if($_SESSION['loggedIn']){

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Contact Management</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
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
				<li><a href="#">Online Order Management</a></li>
				<li><a href="logout.php">Sign Out</a></li>

			</ul>
			<div id="sidebar-btn">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="user">
			<b><?php echo $_SESSION['user']; ?></b>
		</div>
		<div class="user">
			<b><a href="#" style="color"> Visit Site</a></b>
		</div>
	</header>
	<div class="wrapper" class="container_move">
		<div class="container">
		<?php
		require '../includes/connect.php';
		$query=mysql_query("SELECT * FROM contact") or die(mysql_error());
		while ($row=mysql_fetch_array($query)) {
		$companyname=$row['companyname'];
		$address=$row['address'];
		$cell_phone=$row['cell_phone'];
		$landline_phone=$row['landline_phone'];
		$email=$row['email'];

		?>
		<form action="updateContact.php" method="post" enctype="multipart/form-data" style="text-align:center;padding:10px;">
			<h2 style="margin: 10px 0px 3px 0px; border-bottom: 1px groove #222; padding-bottom: 4px;">Contact Info</h2>
			 <label>Company Name:</label>
			 <input type="text" name="companyname" value="<?php echo $companyname; ?>">
			 <label>Address:</label>
			 <input type="text" name="address" value="<?php echo $address;?>" >
			 <label>Cell phone:</label>
			 <input type="number" name="cell_phone" value="<?php echo $cell_phone;?>">
			 <label>landline phone:</label>
			 <input type="number" name="landline_phone" value="<?php echo $landline_phone; ?>">
			 <label>E-mail</label>
			 <input type="text" name="email" value="<?php echo $email; ?>">
			 <input type="submit" value="add" name="addContact">
		</form>
		<?php
	}
		?>



		</div>
	</div>
</body>
<script type="text/javascript" src="../js/jquery-1.12.3.js"></script>
	<script src="../js/sidebar.js"></script>
</html>
<?php 
}
else{
	header('Location:index.php');
}
?>