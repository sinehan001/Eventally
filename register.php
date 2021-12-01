<?php
include "connect.php";
ob_start();
if(isset($_POST['submit']))
{		
    $fullname = $_POST['names'];
    $abc = $_POST['abc'];
    $title = $_POST['title'];
    $college = $_POST['college'];
    $ybs = $_POST['ybs'];
    $num = $_POST['num'];
    $club = $_POST['club'];
    $res = mysqli_query($link,"SELECT * from {$title}");
    while($row = mysqli_fetch_assoc($res))
    {
        if($abc == $row['email'])
        {
            echo 'Success!!!';
            header( "Location: redirect.php",true,303);
            exit();
        }
    }

    $insert = mysqli_query($link,"INSERT INTO {$title} (email,name,college,ybs,num,title,club)VALUES('$abc','$fullname','$college','$ybs','$num','$title','$club')");

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
           echo '<h1>Thank you for Registering!!!</h1>';
           echo '</div>';
        echo '</body>';
        echo '</html>';
    }
}

mysqli_close($link); // Close connection
?>
      <script>
         setTimeout(function(){
            window.location.href = 'events.php';
         }, 3000);
      </script>