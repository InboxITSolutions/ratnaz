<?php
session_start();

if($_SESSION['loggedIn']){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Studio Management| Ratnaz</title>
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
		<h2 class="heading"><u class="head">Studio Management</u></h2>
		<form class="addItem" style="width: 97%; margin-bottom: 10px; text-align: -moz-center;" action="addStudio.php" method="post" enctype="multipart/form-data">
			
			<table class="new_item" 
					style="width: 618px; float: left; color: rgb(60, 47, 47);
			 		padding: 5px; border: 1px solid rgb(194, 194, 194);
			  		box-shadow: 0px 0px 3px 0px rgb(204, 204, 204);">
				<tr>
					<td colspan="2">
						<h2 class="add" style="margin: 0px 0px 10px 0px;">About Studio-1</h2>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea class="ckeditor" name="editor1"></textarea>
					</td>
				</tr>
				<tr style="height: 40px; text-align: right;">
					<td>
						Select Picture for Studio-1
					</td>
					<td>
						<input type="file" name="studio-pic1">
					</td>
				</tr>
			</table>
			
			<table class="new_item" style="width: 618px; float: right; color: rgb(60, 47, 47); 
					padding: 5px; border: 1px solid rgb(194, 194, 194); 
					box-shadow: 0px 0px 3px 0px rgb(204, 204, 204);">
				<tr>
					<td colspan="2">
						<h2 class="add" style="margin: 0px 0px 10px 0px;">About Studio-2</h2>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea class="ckeditor" name="editor2"></textarea>
					</td>
				</tr>
				<tr style="height: 40px; text-align: right;">
					<td>
						Select Picture for Studio-2
					</td>
					<td>
						<input type="file" name="studio-pic2">
					</td>
				</tr>
			</table>
			<input class="btn_Add" style="margin: 20px 0px 0px 0px; color: rgb(100, 24, 24);" type="submit" name="addstudio" value="Submit">
		</form>
		<?php 
			$sn =0;
		?>
			<table class="data_container" style="width: 100%;">
				
				<tr>
					<th>Image for Studio-1</th>
					<th>About Studio-1</th>
					<th>Image for Studio-1</th>
					<th>About Studio-1</th>
					<th>Edit/Delete</th>
				</tr>
				<?php
		          require '../includes/function.php';
		            getStudioAdmin();
              ?>
			</table>
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
