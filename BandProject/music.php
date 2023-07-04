<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/music.css?version=16">
	<title>Music</title>
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
 <li><a style="color: #b30086;" href="music.php">Music</a></li>
 <li><a href="tours.php">Tours</a></li>
 <li><a href="gallery.php">Gallery</a></li>
 <li><a href="contact.php">Contact</a></li>
 <li><a href="admin.php">Admin</a></li>
</ul>
</nav>


<h1 style= "text-align:center;"> MUSIC </h1> <br>


                               <!--AUDIO -->




<?php
$sql = "select song_name,song_file_name from audio";
$song_result = $conn->query($sql);

while($song_details_row = $song_result->fetch_array())
{
	//echo '<audio controls src = "audio/'.$song_details_row["song_file_name"].'">
//</audio>';

//echo "<tr><td>".$row["venue"]."</td>"."<td>".$row["date"]."</td></tr>";

echo '<div class = "song-name">';
echo $song_details_row["song_name"];
 echo '</div>';

 echo '<br>';
 echo '<br>';

echo '<div class = "file-pos">';
echo "<audio controls src = 'audio/".$song_details_row["song_file_name"]."'></audio>";
echo "</div>";

echo "<br>";

}
?>							   

	<br><br>		

                               <!--VIDEO-->



<?php

$sql = "select video_name,video_file_name from video";
$video_result = $conn->query($sql);

while($video_details_row = $video_result->fetch_array())
{

echo '<div class = "video-name">';
echo $video_details_row["video_name"];
 echo '</div>';

 echo '<br>';
 echo '<br>';

echo '<div class = "video-pos">';
echo "<video controls src = 'video/".$video_details_row["video_file_name"]."'></video>";
echo "</div>";

echo "<br>";

}


?>


</body>
</html>