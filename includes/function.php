<?php
require'connect.php';

  function getSliderImage(){
    $query = mysql_query("SELECT * FROM index_slider") or die(mysql_error());
    $sn =0;
    while($row = mysql_fetch_array($query)){ 
      $id = $row['s_id'];
     ?>

    <tr>
      <td><?php echo ++$sn; ?></td>
      <td><?php echo '<img src="data:image;base64,'.$row[1].'"/>'; ?></td>
      <td>
        <a href="editSlider.php?id=<?php echo $id;  ?> " >Edit</a> 
        <a href="deleteSlider.php?id=<?php echo $id;  ?> " >Delete</a>
      </td>
    </tr>
    <?php
    }
  }

function getIndexSlider(){
    $query = mysql_query("SELECT * FROM index_slider") or die(mysql_error());
    while($row = mysql_fetch_array($query)){  ?>
    <li>
        
         <?php echo '<img src="data:image;base64,'.$row[1].'"/>'; ?>
        
      </li>
   <?php
    }
  }

 function getTestimonial(){

  $query=mysql_query("SELECT * FROM testimonial  ") or die(mysql_error());
  while($row=mysql_fetch_array($query)){ ?>
            <div class="slide">
            <div class="testimonials-carousel-thumbnail"><?php echo '<img width="120" src="data:image;base64,'.$row['image'].'"/>';?></div>
                <div class="testimonials-carousel-context">
                <div class="testimonials-name"><?php echo  $row['personname'];?><span><?php echo $row['bio'];?></span></div>
                <div class="testimonials-carousel-content"><p><?php echo $row['view'];?></p></div>
            </div>
          </div>
<?php
}

}

function getTestimonialAdmin(){
 $query=mysql_query("SELECT * FROM testimonial ORDER BY t_id ASC  ") or die(mysql_error());
  while($row=mysql_fetch_array($query)){ 
    $sn=0;
    $id=$row['t_id'];
  ?>
        <tr>
          <td><?php echo ++$sn; ?></td>
          <td><?php echo $row['personname']; ?></td>
          <td><?php echo $row['bio']; ?></td>
          <td><?php echo $row['view']; ?></td>
          <td><?php echo '<img src="data:image;base64,'.$row['image'].' "  width="120" >'; ?></td>
          <td><a href="editTestimonial.php?id=<?php echo $id;?>">Edit</a></td>
          <td><a href="deleteTestimonials.php?id=<?php echo $id;?>">Delete</a></td>
        </tr>


<?php 
}
}



function getDesignsOne(){
  
  $design1="d1";
  $query=mysql_query("SELECT * FROM designs where tag='".$design1."' ") or die(mysql_query());
  while($row=mysql_fetch_array($query)){
      $row['image'];
      $row['description'];
      ?>
      <h2>Design One</h2>
      <div class="wrapper">
          <img src="designs/<?php echo $row['image'];?>">
         <div class="desc">
                    <div class="desc_content"><p><?php echo $row['description'];?></p></div>
            </div>
      </div>
      
<?php

  }
}
function getDesignsTwo(){
  $design2="d2";
  $query=mysql_query("SELECT * FROM designs where tag='".$design2."' ") or die(mysql_query());
  while($row=mysql_fetch_array($query)){
      $row['image'];
      $row['description'];
      ?>
      <h2>Design Two</h2>
      <div class="wrapper">
          <img src="designs/<?php echo $row['image'];?>">
         <div class="desc">
                    <div class="desc_content"><p><?php echo $row['description'];?></p></div>
            </div>
      </div>       
<?php

  }
}

function getTopDesigns(){
  
  $TopDesigns="td";
$query=mysql_query("SELECT * FROM designs where tag='".$TopDesigns."' ") or die(mysql_query());
  while($row=mysql_fetch_array($query)){
      $row['image'];
      $row['description'];
      ?>
      <h2>Top Designs</h2>
      <div class="wrapper">
          <img src="designs/<?php echo $row['image'];?>">
         <div class="desc">
                    <div class="desc_content"><p><?php echo $row['description'];?></p></div>
            </div>
      </div>     
<?php

  }
}

function getMostViewed(){
  $MostViewed="mv";
  $query=mysql_query("SELECT * FROM designs where tag='".$MostViewed."' ") or die(mysql_query());
  while($row=mysql_fetch_array($query)){
      $row['image'];
      $row['description'];
      ?>
      <h2>Most Viewed</h2>
      <div class="wrapper">
          <img src="designs/<?php echo $row['image'];?>">
         <div class="desc">
                    <div class="desc_content"><p><?php echo $row['description'];?></p></div>
            </div>
      </div>     
<?php

  }
}



function getDesignsOneAdmin(){
    $design1='d1';
    $query = mysql_query("SELECT * FROM designs where tag='".$design1."' ") or die(mysql_error());
    $sn =0;
    while($row = mysql_fetch_array($query)){ 
      $id = $row['d_id'];
      $description=$row['description'];
     ?>

    <tr>
      <td><?php echo ++$sn; ?></td>
      <td><img src="../designs/<?php echo $row['image'];?>"/></td>
      <td><?php echo $description; ?></td>
      <td>
      
        <a href="deleteDesigns.php?id=<?php echo $id;  ?> " >Delete</a>
      </td>
    </tr>
<?php
    }
  }
function getDesignsTwoAdmin(){
    $design2='d2';
   $query = mysql_query("SELECT * FROM designs where tag='".$design2."' ") or die(mysql_error());
    $sn =0;
    while($row = mysql_fetch_array($query)){ 
      $id = $row['d_id'];
      $description=$row['description'];
     ?>

    <tr>
      <td><?php echo ++$sn; ?></td>
      <td><img src="../designs/<?php echo $row['image'];?>"/></td>
      <td><?php echo $description; ?></td>
      <td>
      
        <a href="deleteDesigns.php?id=<?php echo $id;  ?> " >Delete</a>
      </td>
    </tr>
    <?php
    }
  }
  function getTopDesignsAdmin(){
    $TopDesigns='td';
    $query = mysql_query("SELECT * FROM designs where tag='".$TopDesigns."' ") or die(mysql_error());
    $sn =0;
    while($row = mysql_fetch_array($query)){ 
      $id = $row['d_id'];
      $description=$row['description'];
     ?>

    <tr>
      <td><?php echo ++$sn; ?></td>
      <td><img src="../designs/<?php echo $row['image'];?>"/></td>
      <td><?php echo $description; ?></td>
      <td>
      
        <a href="deleteDesigns.php?id=<?php echo $id;  ?> " >Delete</a>
      </td>
    </tr>
    <?php
    }
  }

  function getMostViewedAdmin(){
    $MostViewed='mv';
   $query = mysql_query("SELECT * FROM designs where tag='".$MostViewed."' ") or die(mysql_error());
    $sn =0;
    while($row = mysql_fetch_array($query)){ 
      $id = $row['d_id'];
      $description=$row['description'];
     ?>

    <tr>
      <td><?php echo ++$sn; ?></td>
      <td><img src="../designs/<?php echo $row['image'];?>"/></td>
      <td><?php echo $description; ?></td>
      <td>
      
        <a href="deleteDesigns.php?id=<?php echo $id;  ?> " >Delete</a>
      </td>
    </tr>
    <?php
    }
  }

function getAllArtist(){
$query=mysql_query("SELECT * FROM tattoo_artist ") or die(mysql_query());
while ($row=mysql_fetch_array($query)) {
$name=$row['name'];
$id=$row['ta_id'];
?>

  <div class="col-xs-12 col-md-4 col-sm-4">
    
  <li>
  <a href="artists.php?id=<?php  echo $id; ?>">
  <?php echo '<img class="artist-cover-image" src="data:image;base64,'.$row['cover_image'].'  ">';?><br/>
  <?php echo '<img class="artist-image" src="data:image;base64,'.$row['image'].'"/>';  ?><br/>
   <name><h4><?php echo $name; ?><h4></name><br/></br>
  </a>    
  </li>
  </div>   
<?php
}
}


function getTatooArtistName(){
    $id=$_GET['id'];
    $query=mysql_query("SELECT * FROM tattoo_artist where ta_id ='".$id."' " ) or die(mysql_error());
    while($row=mysql_fetch_array($query)){
        echo $row['name'];
    }
}

function getTatooArtistCover(){
    $id=$_GET['id'];
    $query=mysql_query("SELECT * FROM tattoo_artist where ta_id ='".$id."'") or die(mysql_error());
    while($row=mysql_fetch_array($query)){
        echo '<img src="data:image;base64,'.$row['cover_image'].'"/>';
    }
}

function getTatooArtistImage(){
    $id=$_GET['id'];
    $query=mysql_query("SELECT * FROM tattoo_artist where ta_id ='".$id."'") or die(mysql_error());
    while($row=mysql_fetch_array($query)){
        echo '<img src="data:image;base64,'.$row['image'].'"/>';
    }
}

function getTatooArtistRole(){
    $id=$_GET['id'];
    $query=mysql_query("SELECT * FROM tattoo_artist where ta_id ='".$id."'") or die(mysql_error());
    while($row=mysql_fetch_array($query)){
        echo $row['role'];
    }
}

function getTatooArtistPhone(){
    $id=$_GET['id'];
    $query=mysql_query("SELECT * FROM tattoo_artist where ta_id ='".$id."'") or die(mysql_error());
    while($row=mysql_fetch_array($query)){
        ?>
        0
<?php
        echo $row['phone'];
    }
}

function getTatooArtistEmail(){
    $id=$_GET['id'];
    $query=mysql_query("SELECT * FROM tattoo_artist where ta_id ='".$id."'") or die(mysql_error());
    while($row=mysql_fetch_array($query)){
        echo $row['email'];
    }
}

function getTatooArtistfbprofile(){
    $id=$_GET['id'];
    $query=mysql_query("SELECT * FROM tattoo_artist where ta_id ='".$id."'") or die(mysql_error());
    while($row=mysql_fetch_array($query)){
        echo $row['fb_profile'];
    }
}

function getTatooArtistAbout(){
    $id=$_GET['id'];
    $query=mysql_query("SELECT * FROM tattoo_artist where ta_id ='".$id."'") or die(mysql_error());
    while($row=mysql_fetch_array($query)){
        echo $row['about'];
    }
}


function getContactDetails(){
  $query=mysql_query("SELECT * FROM contact") or die(mysql_query());
  while($row=mysql_fetch_array($query)){ ?>
      <company class="company"><?php echo  $row['companyname'];  ?></company>
      <add class="address"><i class="fa fa-map-marker"></i> <?php echo $row['address'];  ?></add>
      <phone class="phone"> <i class="fa fa-phone"></i> <?php echo $row['cell_phone'];  ?></phone>
      <mobile class="mobile"> <i class="fa fa-mobile"></i> 021-<?php echo  $row['landline_phone'];  ?></mobile>
      <mail class="mail"><i class="fa fa-envelope"></i> <?php echo $row['email'];  ?></mail>
<?php  
  }

}

function getContactAdmin(){
    $query=mysql_query("SELECT * FROM contact") or die(mysql_query());
    while($row=mysql_fetch_array($query)){ 
      $id=$row['c_id'];
      ?>

      <company><?php echo  $row['companyname'];  ?></company><br/>
      <add> <?php echo $row['address'];  ?></add><br/>
      <phone><?php echo $row['cell_phone'];  ?></phone><br/>
      <mobile> 021<?php echo  $row['landline_phone'];  ?></mobile><br/>
      <mail> <?php echo $row['email'];  ?></mail><br/>
      <a href="editContact.php?id=<?php echo $id;  ?> " >Edit</a> /
      <a href="deleteContact.php?id=<?php echo $id;  ?> " >Delete</a>
<?php  
  }

}

function getArtistTattooGallery(){
  $id=$_GET['id'];
  $query=mysql_query("SELECT * FROM tattoo_artist where ta_id ='".$id."'") or die(mysql_error());
    while($row=mysql_fetch_array($query)){
          global $artistname;
          $artistname=$row['name'];
         
      }
  $query=mysql_query("SELECT * FROM tattoo_gallery where artist_name='".$artistname."'  ") or die(mysql_query());
  ?>
  
    <h3 align="center"><span class="title-bar">Tattos by <?php echo $artistname;?></span></h3>
  
  <?php
  while($row=mysql_fetch_array($query)){
      $row['image'];
      $row['artist_name'];
      $row['caption'];
      ?>

  <div class="col-xs-12 col-sm-3 col-md-3">
      <?php echo '<img src="data:image;base64,'.$row['image'].'" class="demo-image firstimage animated fadeInLeft" data-title="'.$row['artist_name'].'"  data-caption="'.$row['caption'].'"  />';?>
  </div>
  <?php      
      }
  }


function getTattooGallery(){
  $query=mysql_query("SELECT * FROM tattoo_gallery ORDER BY t_id  ") or die(mysql_query());
  while($row=mysql_fetch_array($query)){
      $row['image'];
      $row['artist_name'];
      $row['caption'];
      ?>
      <a href="gallery/<?php 
        echo $row['image'];
      ?>" class="image-popup-vertical-fit">
      <div class="col-xs-12 col-sm-3 col-md-3">
        <img src="gallery/<?php echo $row['image']; ?>" class="demo-image firstimage animated fadeInLeft">
      </div> 
      </a>
      

<?php
      }
  }

function getNews(){
    $query = mysql_query("SELECT *,LEFT(news,50) FROM news") or die(mysql_error());
    $sn =0;
    while($row = mysql_fetch_array($query)){ 
      $id = $row['n_id'];
      ?>

    <tr>
      <td><?php echo ++$sn; ?></td>
      <td><?php echo $row['heading']; ?></td>
      <td><p><?php echo $row['LEFT(news,50)']; ?></p></td>
      <td><?php echo '<img src="data:image;base64,'.$row['image'].'"/>'; ?></td>
      <td>
        <a href="editNews.php?id=<?php echo $id;  ?> " >Edit</a> /
        <a href="deleteNews.php?id=<?php echo $id;  ?> " >Delete</a>
      </td>
    </tr>
    <?php
    }
  }

  function getReadmoreNews(){
  $id = $_GET['id'];
  $query = mysql_query("SELECT * ,date(pubdate) FROM news WHERE n_id='".$id."' ") or die(mysql_error());
  while ($row = mysql_fetch_assoc($query)) {
    $sno = $row['n_id'];
    $heading = $row['heading'];
    $content = $row['news'];
    $pubdate = $row['date(pubdate)'];
    ?>
    <h1 class="news-title"> <?php echo $heading?></h1>
    <author>by lorem ipsum |</author>  
    <date><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $pubdate?></date><br/>  <br/>                   
    <?php echo '<img src="data:image;base64,'.$row['image'].'"/>';  ?>
                             <br/><br/>
    <p><?php echo $content;?></p> <br/><br/>                            
                               
<?php
  }
}

function getIndexNews(){
  $query = mysql_query("SELECT *,LEFT(news,250),date(pubdate) FROM news ORDER BY pubdate DESC LIMIT 3 ") or die(mysql_error());
  while ($row = mysql_fetch_assoc($query)) {
    $id = $row['n_id'];
    $heading = $row['heading'];
    $content = $row['LEFT(news,250)'];
    $pubdate = $row['date(pubdate)'];
    ?>
    <div class="col-xs-12 col-sm-12 col-md-12 news-1">
      <li>
      <?php echo '<img class="news-image" src="data:image;base64,'.$row['image'].'"/>';  ?><br/>
      <heading><b><?php echo $heading;?></b></heading><br/>
      <date><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $pubdate;?></date><br/>
      <news><?php echo $content;?>...</news><br/><br/>
      <a class="buttons" href="readmore.php?id=<?php echo $id;?>"><span >Read more</span></a>
      <img src="images/divider.png" style="width:100%;">
    </li>
  </div>
<?php
  }
}
function getRecentNews(){
  $query = mysql_query("SELECT *,LEFT(news,250),date(pubdate) FROM news ORDER BY pubdate DESC LIMIT 6 ") or die(mysql_error());
  while ($row = mysql_fetch_assoc($query)) {
    $id = $row['n_id'];
    $heading = $row['heading'];
    $content = $row['LEFT(news,250)'];
    $pubdate = $row['date(pubdate)'];
    ?>
    <ul>
      <li><a href="readmore.php?id=<?php echo $id;?>"><i class="fa fa-long-arrow-right recent-news-list" aria-hidden="true"><b> <?php echo $heading;?></b></i></a></li>
    </ul>
    
<?php
  }
}


function getGalleryAdmin(){
  $query=mysql_query("SELECT * FROM tattoo_gallery ") or die(mysql_error());
  $sn=0;
  while ($row=mysql_fetch_array($query)) {
  $id=$row['t_id'];
  $imagename=$row['name'];
  ?>
  <tr>
      <td><?php echo ++$sn; ?></td>
      <td><img src="../gallery/<?php echo $row['image'];
      ?>"></td>
      <td>
        <a href="deleteGallery.php?id=<?php echo $id;  ?>">Delete</a>
      </td>
    </tr>

<?php
  }

}

function getTattooArtistAdmin(){
  $query=mysql_query("SELECT * FROM tattoo_artist ") or die(mysql_error());
  $sn=0;
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
  <tr>
      <td><?php echo ++$sn; ?></td>
      <td><?php echo $name; ?></td>
      <td><?php echo '<img src="data:image;base64,'.$row['image'].'"/>'; ?>
        <form action="updateArtistImage.php" method="post" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $id; ?>" name="id">
          <input type="file" name="updateimage">
          <input type="submit" value="Change" name="update_image">
        </form>
      </td>
      <td><?php echo '<img src="data:image;base64,'.$row['cover_image'].'"/>'; ?>
        <form action="updateArtistImage.php" method="post" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $id; ?>" name="id">
          <input type="file" name="updatecoverimage">
          <input type="submit" value="Change" name="update_cover_image">
        </form>
      </td>
      <td><?php echo $role; ?></td>
      <td><?php echo $phone; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $fb_profile; ?></td>
      <td><?php echo $about; ?></td>
      <td>
        <a href="editArtist.php?id=<?php echo $id;  ?>">Edit </a><br/><br/>
        <a href="deleteArtist.php?id=<?php echo $id;  ?>">Delete</a>
      </td>
    </tr>
<?php
  }
}
function getOnlineOrder(){
  $query=mysql_query("SELECT * FROM tattoo_gallery ORDER BY t_id  ") or die(mysql_query());
  while($row=mysql_fetch_array($query)){
      $selectedimage=$row['t_id'];
      $row['image'];
      $row['artist_name'];
      $row['caption'];
      ?>
      <div class="col-xs-12 col-sm-3 col-md-3 online-order">
        <?php echo '<img src="data:image;base64,'.$row['image'].'" class="animated fadeInLeft"   />';
              
        ?>
        <br/><br/>
          <a data-popup-open="popup-1" href="#" class="animated fadeInLeft buttons"><span>Book now</span></a>
        </div>
        <div class="popup" data-popup="popup-1">
          <div class="popup-inner">
            <h3>Book Us</h3><hr style="margin:0;">
            <?php
           $query1=mysql_query("SELECT * FROM tattoo_gallery where t_id='".$selectedimage."' ") or die(mysql_error());
              while($row=mysql_fetch_array($query1)){
             /*echo '<img src="data:image;base64,'.$row['image'].'" />';*/
              echo $selectedimage;
  ?>
            <table align="center" cellpadding="5">
            <form action="onlinebooking.php" method="post">
              <tr>
              <td><i class="fa fa-user" aria-hidden="true"></i></td>
              <td><input type="text" name="booker_name" placeholder="Name"></td>
              </tr>
              
                <tr>
                  <td><i class="fa fa-phone-square" aria-hidden="true"></i></td>
                  <td><input type="text" name="booker_phone" placeholder="Phone"> </td> 
                </tr>
              <tr>
              <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
              <td><input type="text" name="booker_email" placeholder="E-mail"></td>
              </tr>

              <tr>
                <td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
                <td><input type="text" name="booker_date" placeholder="Date"></td>
              </tr>

              <tr><td></td><td><input type="submit" value="Book" name="onlinebook" class="book"></td></tr>
            </form>
          </table>
            <p><a data-popup-close="popup-1" href="#">Close</a></p>
            <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
          </div>
        </div>
<?php
    }
      }
  }
  
function getStudioAdmin(){
   $query = mysql_query("SELECT * FROM studio") or die(mysql_error());
    while($row = mysql_fetch_array($query)){ 
      $id = $row['s_id'];
      $content1=$row['content1'];
      $content2=$row['content2'];
     ?>

    <tr>
      <td>
        <?php echo '<img src="data:image;base64,'.$row['image1'].'"/>'; ?> 
        <form action="updateStudioImage.php" method="post" enctype="multipart/form-data">
          <input type="file" name="updateimage1">
          <input type="submit" value="Change" name="updateimage1">
        </form>
      </td>
      <td><?php echo $content1;?></td>
       <td><?php echo '<img src="data:image;base64,'.$row['image2'].'"/>';?> 
        <form action="updateStudioImage.php" method="post" enctype="multipart/form-data">
          <input type="file" name="updateimage2">
          <input type="submit" value="Change" name="updateimage2">
        </form>
       </td>
      <td><?php echo $content2;?></td>
      <td>
        <a href="editStudio.php?id=<?php echo $id;  ?> " >Edit</a> 
        <a href="deleteStudio.php?id=<?php echo $id;  ?> " >Delete</a>
      </td>

    </tr>

<?php
}

}
?>