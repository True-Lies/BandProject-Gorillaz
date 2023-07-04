<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/discography.css?version=6">
	<title>Discography</title>
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
 <li><a style="color: #b30086;" href="discography.php">Discography</a></li>
 <li><a href="music.php">Music</a></li>
 <li><a href="tours.php">Tours</a></li>
 <li><a href="gallery.php">Gallery</a></li>
 <li><a href="contact.php">Contact</a></li>
 <li><a href="admin.php">Admin</a></li>
</ul>
</nav>
<br>

<p style="font-family:Apple Chancery;margin:50px;font-size:18px;text-align:center;color:#86b300;"><b>Being in Blur has allowed me to travel and hear the music that's being made all over the world.<span style="color:#8B008B;">~ Damon Albarn</span></b></p>


<h1>Albums</h1>

	<table style="margin-left:40px;">
	<tr>
    <th>Album</th>
	<th>Year</th>
	</tr>
<?php
	$sql = "select album_name,year from discography";
    $album_result = $conn->query($sql);


while ($row = $album_result->fetch_array()){
    echo "<tr><td>".$row["album_name"]."</td>"."<td>".$row["year"]."</td></tr>";
	

}
?>
	</table>


</body>
</html>