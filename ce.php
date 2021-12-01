<?php
include "connect.php";
ob_start();
session_start();

        $club = $_POST['clubs']; 
        $uname = $_SESSION['name'];   
        $des = $_POST['description'];
        $name = $_POST['title'];
        $date = $_POST['date'];
        $venue = $_POST['venue'];

          function generateRandomString($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$scode=generateRandomString();

if(isset($_POST['submit']))
{		
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];   
        $folder = "img/post/".$filename;
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
      $call=mysqli_query($link,"SELECT * from users");
      while($col=mysqli_fetch_assoc($call))
      {
                $msg="INSERT INTO messages (message,received,name,email) VALUES ('".$scode."','False','".$col['name']."','".$col['email']."') ";
                mysqli_query($link,$msg);
      }

      $res=mysqli_query($link,"SELECT * from admin where name='".$uname."'"); 
       while($col = mysqli_fetch_assoc($res))
       {
           $ucollege=$col['college'];
       }

    $insert = "INSERT into post(title,dates,venue,image,club,creator,description,scode,college) VALUES('$name','$date','$venue','$filename','$club','$uname','$des','$scode','$ucollege')";
    mysqli_query($link, $insert);
    $sql2 = "CREATE TABLE $name ( sno int(11) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(512), email VARCHAR(512), ybs VARCHAR(512), college VARCHAR(512), num VARCHAR(512), signature VARCHAR(0),title varchar(512),club varchar(512));";
          mysqli_query($link, $sql2);

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
           echo '<h1>'.$name.' has been created successfully!!!</h1>';
           echo '</div>';
        echo '</body>';
        echo '</html>';
    }
}

mysqli_close($link); // Close connection
?>
      <script>
         setTimeout(function(){
            window.location.href = 'create.php';
         }, 3000);
      </script>