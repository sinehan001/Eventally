<?php
include "connect.php";
ob_start();
session_start();

if(isset($_POST['submit']))
{		
    $cn = $_POST['cname'];
    $username = $_SESSION['name'];

    $insert = mysqli_query($link,"DELETE from clubs WHERE club = '$cn'");

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
           echo '<h1>'.$cn.' has been Deleted successfully!!!</h1>';
           echo '</div>';
        echo '</body>';
        echo '</html>';
    }
}

mysqli_close($link); // Close connection
?>
      <script>
         setTimeout(function(){
            window.location.href = 'adclub.php';
         }, 3000);
      </script>