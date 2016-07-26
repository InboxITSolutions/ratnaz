<?php 
session_start();

if($_SESSION['loggedIn']){

?>
<html>
<head>
<meta charset="utf-8">
    <title>Testimonials Management| Ratnaz</title>
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
    <div class="wrapper" class="container_move">
    <div class="container">
        <h2 class="heading"><u class="head">Testimonials Management</u></h2>
        <form action="addtestimonial.php" method="post" enctype="multipart/form-data"
            class="addItem" style="width: 97%;text-align: -moz-center;">
            <h2 class="add" style="margin: 0px;">Add New Testimonial Information</h2>
         <table class="artist_table" style="padding: 10px; width: 50%;">
            <tr>
                <td>Name
                </td>
                <td>
                    <input type="text" name="personname" />
                </td>
            </tr>
            <tr>
                <td>Position
                </td>
                <td>
                    <input type="text" name="bio" />
                </td>
            </tr>
            <tr>
                <td>Image
                </td>
                <td>
                    <input type="file" name="image"/>
                    <span><i style="color:rgba(255, 0, 0, 0.7); font-size:13px;">*required (450 X 450) px</i></span>
                </td>
            </tr>
            <tr>
                <td>
                   Opinion 
                </td>
                <td>
                    <textarea name="view" style="width: 91%; box-shadow: -1px -1px 5px 0px rgb(204, 204, 204); height: 80px; padding: 5px;">
                    </textarea>
                </td>
            </tr>
        </table>
        <input class="btn_Add" type="submit" value="Add" name="addtestimonial" style="padding: 10px 132px; margin: 10px auto;">
    </form>
    
    <table class="data_container" style="width:100%;">
        <tr class="head">
            <th>No</th>
            <th>Personame</th>
            <th>Bio</th>
            <th>Opinion</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php require '../includes/function.php'; getTestimonialAdmin();?>
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
