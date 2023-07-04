<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	   <meta charset="UTF-8">
	   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <link rel="stylesheet" href="css/about.css?version=28">
       <title>About</title>
</head>
<body>
<?php
       $sql = "select image from home_images where id = 1";
       $logo_result = $conn->query($sql);

while($logo_details_row = $logo_result->fetch_array())
{
          echo '<img id = "logo-image" src = "uploads/'.$logo_details_row["image"].'" alt ="Gorillaz band image"/>';
}
?>

<nav>
<ul>
            <li><a href="home.php">Home</a></li>
            <li><a style="color: #b30086;" href="about.php">About</a></li>
            <li><a href="discography.php">Discography</a></li>
            <li><a href="music.php">Music</a></li>
            <li><a href="tours.php">Tours</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="admin.php">Admin</a></li>
</ul>
</nav>
<br><br><br>
            <p id="about-quote">You know, there are many alter-egos and Gorillaz is a collective of alter-egos, really. I think anyone who gets involved in it has to sort of accept that nothing is really as it seems.	
<span style="color:#8B008B;">~ Damon Albarn</span></p> <br><br>

                           
                              <!--2-D-->

<h1>2-D</h1>
<div>

<?php
          $sql = "select image from about where id = 1";
          $twodimage_result = $conn->query($sql);
while($twodimage_details_row = $twodimage_result->fetch_array())
{
          echo '<div class = "twod">
	     <img class="bioimage" src="uploads/'.$twodimage_details_row["image"].'" height="600" width="300" alt ="2-D image">
    </div>';
}	
?>	

<?php

          $sql = "select bio from about where id = 1";
          $twodbio_result = $conn->query($sql);

while($twodbio_details_row = $twodbio_result->fetch_array())
{
          echo '<div class="twodbio"><p>'.$twodbio_details_row["bio"].'</p></div>';
}
?>	
</div>
  
        

                             <!--Murdoc-->


<h1>Murdoc</h1>
<div>	
<?php
          $sql = "select image from about where id = 2";
          $murdocimage_result = $conn->query($sql);
while($murdocimage_details_row = $murdocimage_result->fetch_array())
{
          echo '<div class="murdoc">
	<img class="bioimage" src="uploads/'.$murdocimage_details_row["image"].'" height="600" width="500" alt ="Murdoc image">
    </div>';
}	
?>	
    
<?php

          $sql = "select bio from about where id = 2";
          $murdocbio_result = $conn->query($sql);

while($murdocbio_details_row = $murdocbio_result->fetch_array())
{
          echo '<div class="murdocbio"><p>'.$murdocbio_details_row["bio"].'</p></div>';
}
?>

</div>




                                   <!--Russel-->


<h1>Russel</h1>
<div>	

<?php
         $sql = "select image from about where id = 3";
         $russelimage_result = $conn->query($sql);
while($russelimage_details_row = $russelimage_result->fetch_array())
{
         echo '<div class="russel">
	    <img class="bioimage" src="uploads/'.$russelimage_details_row["image"].'" height="600" width="300" alt ="Russel image">
    </div>';
}	
?>
	
<?php

         $sql = "select bio from about where id = 3";
         $russelbio_result = $conn->query($sql);

while($russelbio_details_row = $russelbio_result->fetch_array())
{
         echo '<div class="russelbio"><p>'.$russelbio_details_row["bio"].'</p></div>';
}
?>
</div>




                                    <!--Noodle-->



<h1>Noodle</h1> 
<div>

<?php
         $sql = "select image from about where id = 4";
        $noodleimage_result = $conn->query($sql);
while($noodleimage_details_row = $noodleimage_result->fetch_array())
{
        echo '<div class="russel">
	    <img class="bioimage" src="uploads/'.$noodleimage_details_row["image"].'" height="600" width="500" alt ="Noodle image">
        </div>';
}	
?>

<?php

        $sql = "select bio from about where id = 4";
        $noodlebio_result = $conn->query($sql);

while($noodlebio_details_row = $noodlebio_result->fetch_array())
{
        echo '<div class="noodlebio"><p>'.$noodlebio_details_row["bio"].'</p></div>';
}
?>

</div> 

</body>
</html>