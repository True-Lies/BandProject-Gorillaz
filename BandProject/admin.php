
<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>ADMIN</title>
	  <link rel="stylesheet" href="css/admin.css?version=12">

</head>

<body>
<h1 style= "text-align:center;"> ADMIN AREA</h1> <br>
	<hr style="height:3px;color:black;background-color:black;"><br><br>

<?php
if (isset($_SERVER['PHP_AUTH_USER'])) {
  ?>
  <a href ="home.php?logout=true" style="float:right;"><h3>LOGOUT</h3></a>
<?php
} else{
  ?>
  <a href ="home.php" style="float:right;"><h2>Home</h2></a>
  
  <?php
}
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SERVER['PHP_AUTH_USER'])){
	  	header("www-Authenticate: Basic realm=\"Restricted Access\"");
	  	header("HTTP/1.0 401 unauthorized");
      echo '<h1 style="color:red;">You are not authorized to view this page.</h1>';
      exit;
}	
	//Get username and password from user
	    $username = md5($_SERVER['PHP_AUTH_USER']);
	    $password = md5($_SERVER['PHP_AUTH_PW']);
	
	    $sql = "SELECT * FROM admin_user where user_name = '$username'";
      $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $db_username = $row["user_name"];
        $db_password = $row["pass_word"];
    }
} else {
       echo "0 results";
}

 
	if($username != $db_username && $password != $db_password){
	 
       if (isset($_SERVER['PHP_AUTH_USER'])&& isset($_SERVER['PHP_AUTH_PW']) ){
       unset( $_SERVER['PHP_AUTH_USER']);
       unset( $_SERVER['PHP_AUTH_PW']);
  

    } 
		    header("www-Authenticate: Basic realm=\"Restricted Access\"");
		    header("HTTP/1.0 401 unauthorized");
        exit;
	} 
?>






                                     <!-- HOME PAGE-->


<h2 id="home">Home</h2><br>
<form action="settings.php" method="post" enctype="multipart/form-data">
  Update Band Logo Image:
  <input class = "buttons" type="file" name="fileUpload">
  <input class = "buttons" type="submit" name="upload">
</form><br><br>

<form action="settings.php" method="post" enctype="multipart/form-data">
  Update Band Image 1:
  <input class = "buttons" type="file" name="fileUpload1">
  <input class = "buttons" type="submit" name="upload1">
</form><br><br>

<form action="settings.php" method="post">
<label for="abouthome">Update Description:</label>
<textarea id="abouthome" name="about" rows="10" cols="120"><?php

        $sql = "select web_text from home_text where id = 1";
        $textarea_result = $conn->query($sql);

    while($textarea_details_row = $textarea_result->fetch_array())
{
    echo $textarea_details_row["web_text"];
}
?>

</textarea><br><br>
<input class = "buttons" type="submit" name="submit">
</form>

<hr style="height:3px;color:black;background-color:black;"><br><br>



                                        <!--ABOUT-->


<h2 id="about">ABOUT</h2><br>

<form action="settings.php" method="post" enctype="multipart/form-data">
  <h4>2-D:</h4>
       <input type="file" name="twodimage">
       <input type="submit" name="twodimagesubmit">
</form><br><br>

<form action="settings.php" method="post">
<label for="twodbioo">Update Bio for 2-D:</label>
<textarea id="twodbioo" name="twodbio" rows="6" cols="70"><?php

        $sql = "select bio from about where id = 1";
        $twodbio_result = $conn->query($sql);

        while($twodbio_details_row = $twodbio_result->fetch_array())
{
        echo $twodbio_details_row["bio"];    
}
?>

</textarea><br><br>
<input type="submit" name="twodbiosubmit">
</form> <br><br><br>

<hr style="height:3px;color:black;background-color:#d9d9d9;"><br><br>

<form action="settings.php" method="post" enctype="multipart/form-data">
  
<h4>Murdoc:</h4>
  <input type="file" name="murdocimage">
  <input type="submit" name="murdocimagesubmit">
</form><br><br>

<form action="settings.php" method="post">
<label for="aboutmu">Update Bio:</label>
<textarea id="aboutmu" name="murdocbio" rows="6" cols="70"><?php

       $sql = "select bio from about where id = 2";
       $murdocbio_result = $conn->query($sql);

    while($murdocbio_details_row = $murdocbio_result->fetch_array())
{
       echo $murdocbio_details_row["bio"];
}
?>
</textarea><br><br>
<input type="submit" name="murdocbiosubmit">
</form> <br><br><br>

<hr style="height:3px;color:black;background-color:#d9d9d9;"><br><br>

<form action="settings.php" method="post" enctype="multipart/form-data">
  <h4>Russel:</h4>
  <input type="file" name="russelimage">
  <input type="submit" name="russelimagesubmit">
</form><br><br>

<form action="settings.php" method="post">
<label for="aboutrus">Update Bio:</label>
<textarea id="aboutrus" name="russelbio" rows="6" cols="70"><?php

        $sql = "select bio from about where id = 3";
        $russelbio_result = $conn->query($sql);

    while($russelbio_details_row = $russelbio_result->fetch_array())
{
        echo $russelbio_details_row["bio"];
}
?></textarea><br><br>
<input type="submit" name="russelbiosubmit">
</form> <br><br><br>

<hr style="height:3px;color:black;background-color:#d9d9d9;"><br><br>

<form action="settings.php" method="post" enctype="multipart/form-data">
  <h4>Noodle:</h4>
        <input type="file" name="noodleimage">
        <input type="submit" name="noodleimagesubmit">
</form><br><br>

<form action="settings.php" method="post">
<label for="aboutnoo">Update Bio:</label>
<textarea id="aboutnoo" name="noodlebio" rows="6" cols="70"><?php

          $sql = "select bio from about where id = 4";
          $noodlebio_result = $conn->query($sql);

    while($noodlebio_details_row = $noodlebio_result->fetch_array())
{
          echo $noodlebio_details_row["bio"];
}
?></textarea><br><br>
<input type="submit" name="noodlebiosubmit">
</form><br><br><br>

<hr style="height:3px;color:black;background-color:black;"><br><br>
                             
							 
							 
							                             <!-- DISCOGRAPHY --> 


<h2 id="discography">Discography</h2><br><br>

        <form action="settings.php" method="post">
        <label for="discogra">Enter Album name:</label>
        <input type="text" id="discogra" name="disco"><br><br>
        <label for="discoyea">Enter the year (YYYY):</label>
        <input type="text" id="discoyea" name="discoyear"><br><br>
        <input type="submit" name="discosubmit" value = "ADD">
</form>

<hr style="height:3px;color:black;background-color:black;"><br><br>



                                         <!-- MUSIC --> 

<h2 id="music">MUSIC</h2><br>

<h2>Audio</h2><br>

<form action="settings.php" method="post" enctype="multipart/form-data">

  <h4>Upload Audio file:</h4>
        <input type="file" name="musicfileUpload">
        <input type="submit" name="songUpload" value="UPLOAD">
</form>


<hr style="height:3px;color:black;background-color:#D8D8D8;"><br><br>



<h2>Video</h2><br>

<form action="settings.php" method="post" enctype="multipart/form-data">

  <h4>Upload Video file:</h4>
        <input type="file" name="videofileUpload">
        <input type="submit" name="videoUpload" value="UPLOAD">
</form>


<hr style="height:3px;color:black;background-color:black;"><br><br>


                                
                                             <!-- TOURS --> 



<h2 id="tours">Tours</h2><br><br>

<h4>Add New Event:</h4><br>

<form action="settings.php" method="post">
       <label for="venues">Venue:</label><br>
       <input type="text" id="venues" name="venue"><br><br>

       <label for="venue-da">Date:</label><br>
       <input id="venue-da" type="date" name="venue-date">  

       <input type="submit" name="add-venue" value ="ADD">
</form><br><br><br><br>


<h4>Delete Events:</h4><br>
      <table style="margin-left: 40px;">
	<tr>
    <th>Venue</th>
	  <th>Delete Event</th>
	</tr>
    
	<?php
	       $sql = "select * from tours";
         $tours_result = $conn->query($sql);


		 while ($row = $tours_result->fetch_array()){
         echo "<tr><td>".$row["venue"]."</td>";
    
         echo "<td>".'<a href="settings.php?deletevenue='.$row["id"].'">DELETE</a>'."</td></tr>";
         }
       
    ?>
</table>


<hr style="height:3px;color:black;background-color:black;"><br><br>


                        
						                             <!-- ADMIN GALLERY --> 

<h2 id="gallery"> Gallery</h2><br>

<h3>Add image to the Gallery</h3>
<form action="settings.php" method="post" enctype="multipart/form-data">
        <input type="file" class = "buttons" name="galleryUpload">
        <input type="submit" class = "buttons" name="galleupload" value="ADD">
</form><br>


<h3>Delete image from Gallery</h3>

<table>

<?php

$sql = "select id,gallery_image from gallery";
$gallery_result = $conn->query($sql);

while($gallery_details_row = $gallery_result->fetch_array())
{

		echo "<tr>";
		echo "<td>";
		echo '<img src = "uploads/'.$gallery_details_row["gallery_image"].'" alt ="Gorillaz Gallery images" style="width:80px;height:40px;"/>';
		echo "</td>";
    echo "<td>".'<a href="settings.php?img_id='.$gallery_details_row["id"].'&filename='.$gallery_details_row["gallery_image"].'">DELETE</a>'."</td>";
    echo "</tr>";
}
?>


</table>



<hr style="height:3px;color:black;background-color:black;"><br><br>
<h2 id="contact">Contact</h2><br>

<h4>Update Quote:</h4><br>
<form action="settings.php" method="post">
<label for="quotee">Edit the text here:</label>
<textarea id="quotee" name="quotea" rows="5" cols="40">

<?php

        $sql = "select quote from quotes where id = 1";
        $quote_result = $conn->query($sql);

    while($quote_details_row = $quote_result->fetch_array())
{
    echo $quote_details_row["quote"];
}

?>
</textarea><br><br>
<input class = "buttons" type="submit" name="quoteaa">
</form>
<hr style="height:3px;color:black;background-color:black;"><br><br>



</body>
</html>