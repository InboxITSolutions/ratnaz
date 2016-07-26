<?php
session_start();

if($_SESSION['loggedIn']){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gallery Management| Ratnaz</title>
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
			<h2 class="heading"><u class="head">Gallary Management</u></h2>
			<form class="addItem"action="addGallery.php" method="post" enctype="multipart/form-data" style="width: 26%;text-align: -moz-center;">
				<h2 class="add">Add New Image</h2>
				<table class="artist_table table_data" style="padding: 10px 0px; width: 100%;">
					<tr>
						<td>
							Tatto Image
						</td>
						<td>
							<input type="file" name="image">
						</td>
					</tr>
					<tr>
						<td>Artist&nbsp;Name
						</td>
						<td>
							<input type="text" name="artist_name">
						</td>
					</tr>
					<tr>
						<td>Caption
						</td>
						<td>
							<input type="text" name="caption">
						</td>
					</tr>
					</table>
				<input class="btn_Add" type="submit" name="addGallery" value="Submit" style="padding: 10px 132px; margin: 10px auto;">
			</form>
		<table class="data_container" style="width:70%">
		<tr class="head">
			<th>SN</th>
			<th>Gallery Image</th>
			<th>Delete</th>
		</tr>
		<?php  require '../includes/function.php'; getGalleryAdmin();?>
		<table>
		</div>
	</div>
</body>
<script type="text/javascript" src="../js/jquery.js"></script>
	<script src="../js/sidebar.js"></script>
</html>
<?php 
}
else{
	header('Location:index.php');
}
?>