<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/contact.css?version=22">

 
    	<title>Contact</title>
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
        <li><a href="gallery.php">Gallery</a></li>
        <li><a style="color: #b30086;" href="contact.php">Contact</a></li>
        <li><a href="admin.php">Admin</a></li>
</ul>
</nav>
<?php

          $sql = "select quote from quotes where id = 1";
          $quote_result = $conn->query($sql);

while($quote_details_row = $quote_result->fetch_array())
{
          echo '<div class="quote"><p>'.$quote_details_row["quote"].'</p></div>';
}
?>

<h2 style="font-size: 34px;margin-top:70px;margin-left:50px;">Contact Us</h2><br><br>

<div style="margin-left:60px;">
<form action="contact_action.php" method="post">
      <label for="fname" class = "contact-text">First name:</label><br>
      <input type="text" class = "contact-field" name="firstname" id="fname" required><br><br>

      <label for="lname" class = "contact-text">Last name:</label><br>
      <input type="text" class = "contact-field" id="lname" name="lastname"><br><br>

      <label for="email" class = "contact-text">Email:</label><br>
      <input type="email" class = "contact-field" id="email" name="email" required><br><br>

  
      <label for="message" class = "contact-text">Message:</label><br>
      <textarea name="message" required rows="6" cols="70" id="message" placeholder="Your message here" ></textarea><br><br>

  <button name="contact-us" id="btn-contact">Submit</button>
</form>

</div>
<br><br>

<div class="sociale">

<div id="facebook">
      <a href="https://www.facebook.com/Gorillaz" target="_blank"><img src="social-icons/facebook.png" alt="facebook_gorillaz" width="35" height="35"></a>
</div>
<div id="instagram">
      <a href="https://www.instagram.com/gorillaz/" target="_blank"><img src="social-icons/Instagram.png" alt="instagram_gorillaz" width="35" height="35"></a>
</div>

<div id="twitter">
      <a href="https://twitter.com/gorillaz" target="_blank"><img src="social-icons/Twitter.png" alt="twitter_gorillaz" width="35" height="35"></a>
</div>

<div id="youtube">
      <a href="https://www.youtube.com/c/Gorillaz/videos" target="_blank"><img src="social-icons/Youtube.png" alt="youtube_gorillaz" width="35" height="35"></a>
</div>
 

</div>



</body>
</html>