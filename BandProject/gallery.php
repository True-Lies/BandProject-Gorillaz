<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/gallery.css?version=11">
	<title>Gallery</title>
    
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
 <li><a href="about.php">About</a></li>
 <li><a href="discography.php">Discography</a></li>
 <li><a href="music.php">Music</a></li>
 <li><a href="tours.php">Tours</a></li>
 <li><a style="color: #b30086;" href="gallery.php">Gallery</a></li>
 <li><a href="contact.php">Contact</a></li>
 <li><a href="admin.php">Admin</a></li>
</ul>
</nav>

<div>

<h1 style= "text-align:center;"> GALLERY </h1> <br>

<hr style="height:3px;color:black;background-color:#595959;"><br><br>

<?php
// fetch image from the DB
$sql = "select gallery_image from gallery";
$gallery_result = $conn->query($sql);

while($gallery_details_row = $gallery_result->fetch_array())
{
	    echo '<div class="image-container">';
        echo '<img src = "uploads/'.$gallery_details_row["gallery_image"].'" alt ="Gorillaz Gallery images" style="width:360px;height:240px;"/>';
		echo '<a href="download.php?file='.urlencode($gallery_details_row["gallery_image"]).'">DOWNLOAD</a>';
		echo '</div>';
		

}

?>
</div>

</body>
</html>

