<?php
include "connect.php";
ob_start();
session_start();

if(isset($_POST['submit']))
{		
          $name = $_POST['clubs'];
          $date = $_POST['date'];
          $winners = $_POST['winners'];
          $winner2 = $_POST['winner2'];
          $winner3 = $_POST['winner3'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];   
    $folder = "img/result/".$filename;
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
        $insert = "INSERT into result(title,dates,winners,image,winner1,winner2) VALUES('$name','$date','$winners','$filename','$winner2','$winner3')";
    if(!$insert)
    {
        echo mysqli_error($link);
    }
    else
    {
        mysqli_query($link, $insert);
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
           echo '<h1>Result published successfully!!!</h1>';
           echo '</div>';
        echo '</body>';
        echo '</html>';
    }
}

mysqli_close($link); // Close connection
?>
      <script>
         setTimeout(function(){
            window.location.href = 'adres.php';
         }, 3000);
      </script>