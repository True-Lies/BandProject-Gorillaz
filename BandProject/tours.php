<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tours</title>
	<link rel="stylesheet" href="css/tours.css?version=17">
	
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
 <li ><a style="color: #b30086;" href="tours.php">Tours</a></li>
 <li><a href="gallery.php">Gallery</a></li>
 <li><a href="contact.php">Contact</a></li>
 <li><a href="admin.php">Admin</a></li>
</ul>
</nav>

<h1 style= "text-align:center;"> UPCOMING EVENTS </h1> <br>
<hr style="height:3px;color:black;background-color:#595959;"><br><br>

<table style="margin-left: 40px;">
	<tr>
    <th>Venue</th>
	<th>Date</th>
	</tr>
    
	<?php
	     $sql = "select venue,date from tours";
         $tours_result = $conn->query($sql);


		 while ($row = $tours_result->fetch_array()){
         echo "<tr><td>".$row["venue"]."</td>"."<td>".$row["date"]."</td></tr>";
         }
    ?>
</table>
	
</body>
</html>