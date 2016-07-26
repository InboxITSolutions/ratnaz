<?php 
session_start();

if($_SESSION['loggedIn']){
include '../includes/connect.php';
$id = $_GET['id'];
  $query = mysql_query("SELECT * ,date(pubdate) FROM news WHERE n_id='".$id."' ") or die(mysql_error());
  while ($row = mysql_fetch_assoc($query)) {
    $sno = $row['n_id'];
    $heading = $row['heading'];
    $content = $row['news'];
    $pubdate = $row['date(pubdate)'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slider Management</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="../js/sidebar.js"></script>
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
		<div class="wrapper" >
			<div class="container">
				<h2 class="heading"><u class="head">News Management</u></h2>
				<form class="addItem" action="update.php" method="post" enctype="multipart/form-data" style="width: 97%; text-align: -moz-center;">
				<!-- <input type="hiddden" name="id" value="<?php echo $id; ?>"></input> -->
				<h2 class="add" style="margin: 0px 0px 10px 0px;"> Edit News</h2>
				<table class="new_item" style="width: 90%;color: rgb(60, 47, 47);">
					<tr>
						<td>
							Heading
						</td>
						<td>
							<input type="text" name="heading" id="heading" value="<?php echo $heading; ?>" />
						</td>
					</tr>
					<tr>
						<td>
							Content
						</td>
						<td>
							 <textarea name="content" class="ckeditor"><?php echo $content; ?></textarea>
						</td>
					</tr>
					<tr>
						<td>
							News Image
						</td>
						<td style="height: 40px;">
							<input type="file" name="image"/>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td style="text-align: center;">
							 <input class="btn_Add" type="submit" name="updatePost" value="Add" style="margin: 12px auto; color: rgb(100, 24, 24);" />
						</td>
					</tr>
				</table>
			</form>

			</div>
		</div>
	</div>
</body>

</html>
<?php 
}
else{
	header('Location:index.php');
}
?>