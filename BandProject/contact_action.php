
<?php
include 'connection.php';
?>
<?php

echo "<h2>Thank you for contacting us! We will be in touch. </h2>";

echo "<h3 style='color:red;font-family:verdana;'>Redirecting to Contact page</h3>";



      /*   CONTACT DETAILS   */	  

if(isset($_POST["contact-us"])){

       $contact_firstname = $_POST['firstname'];
       $contact_email = $_POST['email'];
       $contact_message= $_POST['message'];

  if(empty($_POST['lastname'])){
	    $contact_lastname = 'NULL';
  }else{
	    $contact_lastname = $_POST['lastname'];
  }

  
// insert data into contact table
        $sql = "insert INTO contact (first_name,last_name,email_address,message_text) VALUES ('".$contact_firstname."','".$contact_lastname."','".$contact_email."','".$contact_message."')";

$conn->query($sql);
       sleep(2);
       header("Location: contact.php");


}
?>

