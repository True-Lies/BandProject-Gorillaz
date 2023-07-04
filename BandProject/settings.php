<?php
include 'connection.php';
?>


<?php

                                         /*   LOGO IMAGE   */


if(isset($_POST["upload"])){
//Get file name
       $image_filename = $_FILES['fileUpload']['name'];

//Get temporary location or folder
       $temp_dir = $_FILES['fileUpload']['tmp_name'];

//appending timestamp to the above file and assign to a new variable for a new filename
       $image_newfilename = time().$image_filename;

// move the file from temporay location to the 'uploads' folder 
       move_uploaded_file($temp_dir,"uploads/".$image_newfilename);

// update the image in the DB with the uploaded image
       $sql = "update home_images set image = '".$image_newfilename."' where id = 1";
       $conn->query($sql);
       header("Location: admin.php#home");

}
 

                /*BAND IMAGE 1 - HOME*/


if(isset($_POST["upload1"])){
        $image_filename = $_FILES['fileUpload1']['name'];
        $temp_dir = $_FILES['fileUpload1']['tmp_name'];
        $image1_newfilename = time().$image1_filename;
        move_uploaded_file($temp_dir,"uploads/".$image1_newfilename);
        $sql = "update home_images set image = '".$image1_newfilename."' where id = 2";
        $conn->query($sql);
        header("Location: admin.php#home");
        
        }





                /* DESCREPTION - HOME*/

if(isset($_POST["submit"])){
        $about = $conn->real_escape_string($_POST['about']);

        $sql = "update home_text set web_text = '".$about."' where id = 1";
if($conn->query($sql)){
	echo "Text Updated"; 
        header("Location: admin.php#home");
}


}



                                       

                                         /*ABOUT PAGE*/

/*Band Member 1 - 2-D*/

if(isset($_POST["twodimagesubmit"])){                              
        $twod_image_filename = $_FILES['twodimage']['name'];                              
        $temp_dir = $_FILES['twodimage']['tmp_name'];                              
        $twod_image_newfilename = time().$twod_image_filename;                               
        move_uploaded_file($temp_dir,"uploads/".$twod_image_newfilename);
                                
        $sql = "update about set image = '".$twod_image_newfilename."' where id = 1";
        $conn->query($sql);     
        header("Location: admin.php#about");                           
}

/*2-D Bio*/

if(isset($_POST["twodbiosubmit"])){
        $twodbio = $conn->real_escape_string($_POST['twodbio']);
        
        $sql = "update about set bio = '".$twodbio."' where id = 1";
        if($conn->query($sql)){
                echo "Bio Updated"; 
                header("Location: admin.php#about");
                
        }
}




/*Band Member 2 - Murdoc*/

if(isset($_POST["murdocimagesubmit"])){                              
$murdoc_image_filename = $_FILES['murdocimage']['name'];                              
        $temp_dir = $_FILES['murdocimage']['tmp_name'];                              
        $murdoc_image_newfilename = time().$murdoc_image_filename;                               
        move_uploaded_file($temp_dir,"uploads/".$murdoc_image_newfilename);
                                   
        $sql = "update about set image = '".$murdoc_image_newfilename."' where id = 2";
        $conn->query($sql);  
        header("Location: admin.php#about");                              
   }
   
/*Murdoc Bio*/
   
if(isset($_POST["murdocbiosubmit"])){
        $murdocbio = $conn->real_escape_string($_POST['murdocbio']);
           
        $sql = "update about set bio = '".$murdocbio."' where id = 2";
        if($conn->query($sql)){
                   echo "Bio Updated"; 
                   header("Location: admin.php#about");
                   
           }
   }


 
/*Band Member 3 - Russel*/


if(isset($_POST["russelimagesubmit"])){                              
       $russel_image_filename = $_FILES['russelimage']['name'];                              
        $temp_dir = $_FILES['russelimage']['tmp_name'];                              
        $russel_image_newfilename = time().$russel_image_filename;                               
           
        move_uploaded_file($temp_dir,"uploads/".$russel_image_newfilename);
                                           
        $sql = "update about set image = '".$russel_image_newfilename."' where id = 3";
        $conn->query($sql);  
        header("Location: admin.php#about");                              
           }

           
/*Russel Bio*/
           
if(isset($_POST["russelbiosubmit"])){
        $russelbio = $conn->real_escape_string($_POST['russelbio']);
                   
        $sql = "update about set bio = '".$russelbio."' where id = 3";
        if($conn->query($sql)){
        echo "Bio Updated"; 
        header("Location: admin.php#about");
                           
        }
 }                            


/*Band Member 4 - Noodle*/

if(isset($_POST["noodleimagesubmit"])){                              
        $noodle_image_filename = $_FILES['noodleimage']['name'];                              
        $temp_dir = $_FILES['noodleimage']['tmp_name'];                              
        $noodle_image_newfilename = time().$noodle_image_filename;     

        move_uploaded_file($temp_dir,"uploads/".$noodle_image_newfilename);
                                                   
        $sql = "update about set image = '".$noodle_image_newfilename."' where id = 4";
        $conn->query($sql);    
        header("Location: admin.php#about");                            
                   }
                   
/*Noodle Bio*/
                   
if(isset($_POST["noodlebiosubmit"])){
        $noodlebio = $conn->real_escape_string($_POST['noodlebio']);
                           
        $sql = "update about set bio = '".$noodlebio."' where id = 4";
if($conn->query($sql)){
        echo "Bio Updated"; 
        header("Location: admin.php#about");
                                   
        }
}  




                                              /*DISCOGRAPHY*/

							  
if(isset($_POST["discosubmit"])){
						
        $disco_album = $_POST['disco'];
        $disco_year = $_POST['discoyear'];

        $sql = "insert into discography (album_name,year) values ('".$disco_album."','".$disco_year."')";
        $conn->query($sql);
        header("Location: admin.php#discography");
 }




                                                 /*MUSIC*/

                               

 if(isset($_POST["songUpload"])){                              

        $song_filename = $_FILES['musicfileUpload']['name'];
        $song_name = basename(($_FILES['musicfileUpload']['name']),".mp3");      

        $song_temp_dir = $_FILES['musicfileUpload']['tmp_name'];                              
        $song_newfilename = time().$song_filename;     
                                
        move_uploaded_file($song_temp_dir,"audio/".urlencode($song_newfilename));
            
        $sql = "insert into audio (song_name,song_file_name) values ('".$song_name."','".urlencode($song_newfilename)."')";
        $conn->query($sql);    
        header("Location: admin.php#music");                            

}                           



if(isset($_POST["videoUpload"])){                              

        $video_filename = $_FILES['videofileUpload']['name'];
        $video_name = basename(($_FILES['videofileUpload']['name']),".mp4");      
        
        $video_temp_dir = $_FILES['videofileUpload']['tmp_name'];                              
        $video_newfilename = time().$video_filename;     
                                        
        move_uploaded_file($video_temp_dir,"video/".urlencode($video_newfilename));
                    
        $sql = "insert into video (video_name,video_file_name) values ('".$video_name."','".urlencode($video_newfilename)."')";
        $conn->query($sql);  
        header("Location: admin.php#music");                              
        
        }   


                                                
                                              /* GALLERY */ 



if(isset($_POST["galleupload"])){

        $gallery_image_filename = $_FILES['galleryUpload']['name'];
        $gallery_temp_dir = $_FILES['galleryUpload']['tmp_name'];
        $gallery_image_newfilename = time().$gallery_image_filename; 
        move_uploaded_file($gallery_temp_dir,"uploads/".$gallery_image_newfilename);
	
        $sql = "insert into gallery (gallery_image) values ('".$gallery_image_newfilename."')";
	$conn->query($sql);
        header("Location: admin.php#gallery");
	
}


if(isset($_REQUEST["img_id"])&& isset($_REQUEST["filename"])) {
      
        $image_id = $_GET['img_id'];
       

        
        $sql = "DELETE FROM gallery WHERE id = $image_id";
        $result = $conn->query($sql);   
       if($result){

        $file_to_delete = 'uploads/'.$_REQUEST["filename"];
        unlink($file_to_delete);     
        header("Location: admin.php#gallery");
       }
        

}
                            

                                                 /* TOURS */


if(isset($_POST["add-venue"])){

      $venue = $_POST["venue"];
      $venue_date = $_POST["venue-date"];

      $date = date_create($venue_date);
      $venue_to_insert = date_format($date,"l, d  F  Y");

      $sql = "insert into tours (venue,date) values ('".$venue."','".$venue_to_insert."')";
      $conn->query($sql);
      echo 'venue inserted';
      header("Location: admin.php#tours"); 
}

              /*DELETE VENUE*/

if(isset($_GET["deletevenue"])){
      $venue_id = $_GET['deletevenue'];


      $sql = "DELETE FROM tours WHERE id = $venue_id";
      $conn->query($sql);
      echo 'venue deleted';
      header("Location: admin.php#tours");   

}

                                       /*CONTACT*/


if(isset($_POST["quoteaa"])){
        $quote = $conn->real_escape_string($_POST['quotea']);
       // var_dump($quote);

        $sql = "update quotes set quote = '".$quote."' where id = 1";
if($conn->query($sql)){
	echo "Text Updated"; 
        header("Location: admin.php#contact");
}


}

?> 

