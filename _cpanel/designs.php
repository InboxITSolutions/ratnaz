<?php
session_start();

if($_SESSION['loggedIn']){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Designs Management| Ratnaz</title>
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
		<h2 class="heading"><u class="head">Designs Management</u></h2>
		<div class="table" style="float:left; width:70%">
			<table class="data_container" style="width: 100%; margin-bottom: 10px;">
				<tr></tr>
				<tr>
					<td colspan="4" style="background-color: rgb(247, 247, 247);">
						<h2 class="add">Design One</h2>
					</td>
				</tr>
				<tr >
					<th>No.</th>
					<th>Design One</th>
					<th>Description</th>
					<th>Edit/Delete</th>
				</tr>
				
				<?php
		          require '../includes/function.php';
		            getDesignsOneAdmin();
		        ?>
			</table><br/>
			<table class="data_container" style="width: 100%; margin-bottom: 10px;">
				<tr></tr>
				<tr style="background-color: rgb(247, 247, 247);">
					<td colspan="4">
						<h2 class="add">Design Two</h2>
					</td>
				</tr>
				<tr>
					<th>No.</th>
					<th>Design Two</th>
					<th>Description</th>
					<th>Edit/Delete</th>
				</tr>
				<?php
					getDesignsTwoAdmin();	

				?>
			</table><br/>
			<table class="data_container" style="width: 100%; margin-bottom: 10px;">
				<tr></tr>
				<tr style="background-color: rgb(247, 247, 247);">
					<td colspan="4">
						<h2 class="add">Top Design</h2>
					</td>
				</tr>
				<tr>
					<th>No.</th>
					<th>Top Design</th>
					<th>Description</th>
					<th>Edit/Delete</th>
				</tr>
				<?php
					getTopDesignsAdmin();	

				?>
			</table><br/>
			<table class="data_container" style="width: 100%; margin-bottom: 10px;">
				<tr></tr>
				<tr style="background-color: rgb(247, 247, 247);">
					<td colspan="4">
						<h2 class="add">Most Viewed Designs</h2>
					</td>
				</tr>
				<tr>
					<th>No.</th>
					<th>Most Viewed</th>
					<th>Description</th>
					<th>Edit/Delete</th>
				</tr>
				<?php
					getMostviewedAdmin();	

				?>
			</table>
		</div>
		<form class="addItem" action="adddesigns.php" method="post" enctype="multipart/form-data" style="float:right; width:25%" >
			<h2 class="add">Add New Design</h2>
			<table class="artist_table table_data" style="padding: 10px 0px; width: 100%;">
				<tr>
					<td>
						Category
					</td>
					<td>
						<select name="designs">
							<option value="d1">Design One</option>
							<option value="d2">Design Two</option>
							<option value="td">Top Design</option>
							<option value="mv">Most viewed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Design&nbsp;Title  
					</td>
					<td>
						<input type="name" name="d_name"  style="display:block;"/>
					</td>
				</tr>
				<tr>
					<td>
						Description
					</td>
					<td>
						<input type="text" name="description">
					</td>
				</tr>
				<tr>
					<td>
						Image
					</td>
					<td>
						<input type="file" name="image"  style="display:block;"/>
						<span><i style="color:rgba(255, 0, 0, 0.7); font-size:13px;">*required (450 X 450) px</i></span>
					</td>
				</tr>
			</table>
			<input class="btn_Add" type="submit" value="Add" name="adddesigns" style="padding: 10px 132px; margin: 10px auto;">
		</form>
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