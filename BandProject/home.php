<?php
include 'connection.php';

if(isset($_GET['logout'])){

$_SERVER['PHP_AUTH_USER'] = 'logout';
 $_SERVER['PHP_AUTH_PW'] = 'logout';

 header("www-Authenticate: Basic realm=\"Restricted Access\"");
 header("HTTP/1.0 401 unauthorized");
echo '<script>location.href="home.php"</script>';
exit;
echo 'tester77';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/home.css?version=16">
       <title>Gorillaz</title>
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
      <li><a style="color: #b30086;" href="home.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="discography.php">Discography</a></li>
      <li><a href="music.php">Music</a></li>
      <li><a href="tours.php">Tours</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="admin.php">Admin</a></li>
</ul>
</nav>
<br>
<br>

<?php
        $sql = "select image from home_images where id = 2";
        $image1_result = $conn->query($sql);

while($image1_details_row = $image1_result->fetch_array())
{
        echo '<img id = "bandimage1" src = "uploads/'.$image1_details_row["image"].'" alt ="Gorillaz band image2"/>';
}
?>



<div class = "home-bio">
<p style="font-family:Apple Chancery;margin:50px;font-size:20px;">

<?php

       $sql = "select web_text from home_text where id = 1";
       $textarea_result = $conn->query($sql);

while($textarea_details_row = $textarea_result->fetch_array())
{
       echo $textarea_details_row["web_text"];
}
?>

</p> <br>
            
<img id="bandimage2" src ="images/damon-grou.jpeg" alt="gorillaz band image2">

</div>


</body>
</html>