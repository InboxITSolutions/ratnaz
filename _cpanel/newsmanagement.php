<?php 
session_start();

if($_SESSION['loggedIn']){

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>News Management| Ratnaz</title>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
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
	<div class="wrapper">
		<div class="container">
		<?php 
			$sn =0;
		?>
			<h2 class="heading"><u class="head">News Management</u></h2>
			 <div class="addnews"><a href="addnews.php" >Add News</a></div>
			<table class="data_container" style="width:99%;">
				<tr>
					<th>SN</th>
					<th>Heading</th>
					<th>Content</th>
					<th>Image</th>
					<th>Edit/Delete</th>
				</tr>
				<?php
		          require '../includes/function.php';
		            getNews();
              ?>
			</table>
		</div>
	</div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/sidebar.js"></script>
</html>
<?php 
}
else{
	header('Location:index.php');
}
?>