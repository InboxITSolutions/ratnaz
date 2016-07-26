<?php
session_start();

if($_SESSION['loggedIn']){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Artist Management| Ratnaz</title>
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
				<li><a href="#">Online Order Management</a></li>
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
			<h2 class="heading"><u class="head">Artist Management</u></h2>
		<?php
		require '../includes/connect.php';
		$query=mysql_query("SELECT * FROM tattoo_artist") or die(mysql_error());
		while ($row=mysql_fetch_array($query)) {
			$id=$row['ta_id'];
  			$name=$row['name'];
  			$image=$row['image'];
  			$cover_image=$row['cover_image'];
  			$role=$row['role'];
  			$phone=$row['phone'];
  			$email=$row['email'];
  			$fb_profile=$row['fb_profile'];
  			$about=$row['about'];		
		
		?>
		<form class="addItem" action="updateTattooArtist.php" method="post" enctype="multipart/form-data" style="width: 97%;text-align: -moz-center;">
			<h2 class="add" style="margin: 0px;">Update Tattoo Artist Information</h2>
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<table class="artist_table" style="padding: 10px; width: 45%;">
			<tr>
				<td>Name
				</td>
				<td>
					<input type="text" name="artist_name" value="<?php echo $name; ?>">
				</td>
			</tr>
			<tr>
				<td>Artist Role
				</td>
				<td>
					<input type="text" name="artist_role" value="<?php echo $role; ?>">
				</td>
			</tr>
			<tr>
				<td>Artist Phone
				</td>
				<td>
					<input type="number" name="artist_phone" value="<?php echo $phone; ?>">
				</td>
			</tr>
			<tr>
				<td>Artist Email
				</td>
				<td>
					<input type="text" name="artist_email" value="<?php echo $email; ?>">
				</td>
			</tr>
			<tr>
				<td>Artist Facebook-profile
				</td>
				<td>
					<input type="text" name="artist_fbprofile" value="<?php echo $fb_profile; ?>">
				</td>
			</tr>
			<tr>
				<td>About Artist
				</td>
				<td>
					<textarea name="artist_info" style="width: 91%; box-shadow: -1px -1px 5px 0px rgb(204, 204, 204);">
						<?php echo $about; ?>
					</textarea>
				</td>
			</tr>	
			</table>
			<input class="btn_Add" type="submit" value="Update" name="addTattooArtistInfo" style="padding: 10px 132px; margin: 10px auto;">	
		</form>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/sidebar.js"></script>
</html>
<?php 
}
	}
else{
	header('Location:index.php');
}
?>