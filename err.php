<?php
ob_start(); 
session_start();

 if(!isset($_SESSION['name']) || !isset($_SESSION['email'])){
  header("Location: adlog.php");
  exit();
 }
 ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Registration</title>
            <style>
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
            </style>
        </head>
        <body>
           <div class="abc">
           <h1>Image not uploaded. Rename the image and upload.</h1>
           </div>
        </body>
      <script>
         setTimeout(function(){
            window.location.href = 'adgallery.php';
         }, 3000);
      </script>
        </html>