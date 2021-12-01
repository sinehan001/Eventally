<?php
include "connect.php";
ob_start();
session_start();

if(isset($_POST['submit']))
{		
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];   
    $folder = "img/gallery/".$filename;

          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);  
  $result=mysqli_query($conn,"SELECT * from gallery ORDER by id DESC"); 
       while($row = mysqli_fetch_assoc($result))
       {
           if($filename == $row['images'])
           {
               header("Location: err.php");
               exit();
           }
       }
 
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }
        else{
            $msg = "Failed to upload image";
        }
        $insert = "INSERT into gallery(images) VALUES('$filename')";
        mysqli_query($link, $insert);

    if(!$insert)
    {
        echo mysqli_error($link);
    }
    else
    {
        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<head>';
            echo '<meta charset="utf-8">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
            echo '<title>Registration</title>';
            echo '<style>
              body 
              {
                background-color: black;
                color: white;
              }
              .abc 
              {
                position: absolute;
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
              }
              h1
              {
                text-align: center;
                font-family: sans-serif;
              }
            </style>';
        echo '</head>';
        echo '<body>';
           echo'<div class="abc">';
           echo '<h1>Image uploaded successfully!!!</h1>';
           echo '</div>';
        echo '</body>';
        echo '</html>';
    }
}

mysqli_close($link); // Close connection
?>
      <script>
         setTimeout(function(){
            window.location.href = 'adgallery.php';
         }, 3000);
      </script>