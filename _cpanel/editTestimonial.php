<?php
session_start();

if($_SESSION['loggedIn']){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slider Management</title>
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
		<?php
		require '../includes/connect.php';
		$id=$_GET['id'];
		$query=mysql_query("SELECT * FROM testimonial where t_id='".$id."' ") or die(mysql_error());
		while ($row=mysql_fetch_array($query)) {
		$personname=$row['personname'];
		$position=$row['bio'];
		$opinion=$row['view'];
		?>
		<h2 class="heading"><u class="head">Testimonials Management</u></h2>
        <form action="updateTestimonials.php" method="post" enctype="multipart/form-data"
            class="addItem" style="width: 97%;text-align: -moz-center;">
            <h2 class="add" style="margin: 0px;">Edit Testimonial Information</h2>
         <table class="artist_table" style="padding: 10px; width: 50%;">
            <tr>
                <td>Name
                </td>
                <td>
                    <input type="text" name="personname" value="<?php echo $personname; ?>" />
                </td>
            </tr>
            <tr>
                <td>Position
                </td>
                <td>
                    <input type="text" name="bio" value="<?php echo $position;?>"/>
                </td>
            </tr>
             <tr>
                <td>
                   Opinion 
                </td>
                <td>
                    <textarea name="view" style="width: 91%; box-shadow: -1px -1px 5px 0px rgb(204, 204, 204); height: 80px; padding: 5px;">
                    	<?php echo $opinion;?>
                    </textarea>
                </td>
            </tr>
           <input type="hidden" name="id" value="<?php echo $id;?>"/>
        </table>
        <input class="btn_Add" type="submit" value="Update" name="addtestimonial" style="padding: 10px 132px; margin: 10px auto;">
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