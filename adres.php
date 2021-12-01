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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo1.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>Publish the events result - Eventally</title>
	<style>
         body
         {
            background-color: #000000;
            font-family: sans-serif;
         }
        section
        {
            font-family: sans-serif;
            background-color: red;
            color: white;
            margin-top: -2em;
            margin-left: -0.6em;
            margin-right: -0.5em;
        }
        .heading
        {
            font-family: sans-serif;
            color: white;
            display: flex;
            background-color: red;
            margin-top: -2em;
            padding-bottom: 0.5em;
            margin-left: -0.6em;
        }
        .heading p
        {
            font-size: 2em;
            padding-top: 2%;
            font-weight: bold;
        }

        .div1
        {
            margin-top: 2.3em;
            margin-left: 40%;
            padding-right: 1em;
        }
        @media only screen and (max-width: 1200px)
        {
            .div1
            {
                margin-left: 35%;
            }
        }
        @media only screen and (max-width: 800px)
        {
            .div1
            {
                margin-left: 20%;
            }
            .div2
            {
                margin-top: 1em;
            }
        }
        @media only screen and (max-width: 400px)
        {
            .div1
            {
                margin-left: 15%;
            }
        }
        .div2
        {
            margin-left: 1%;
            margin-top: 1em;
        }

    .rotate {
  animation: rotation 3s infinite linear;
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}

        ul 
        {
            list-style-type: none;
            padding: 0;
            overflow: hidden;
            border: 1px solid #e7e7e7;
            background-color: #c7d3d4ff;
        }

        li a 
        {
            display: block;
            color: #666666;
            text-align: center;
            font-size: 20px;
            padding: 14px 22px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
        }

        li a:hover:not(.active)
        {
            background-color: red;
            color: white;
            font-weight: bold;
        }

        li a.active 
        {
            color: white;
            background-color: #4CAF50;
        }

        li button 
        {
            display: block;
            color: #666666;
            text-align: center;
            font-size: 20px;
            padding: 14px 22px;
            text-decoration: none;
            font-family: sans-serif;
            border: 0px;
        }

        li button:hover:not(.active)
        {
            background-color: #a35709;
            color: white;
            font-weight: bold;
        }

        li button.active 
        {
            color: white;
            background-color: #4CAF50;
        }
            input,button,select{
          outline: none;
        }

        .container
        {
          width: 800px;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        .container-center
        {
          left: 50%;
          transform: translate(-50%, 0%);
        }

        .container .head2
        {
          color: red;
        }

        input,select{
          border: 1px solid black;
          font-size: 18px;
          width: 35em;
          text-indent: 10px;
          border-radius: 10px;
          height: 40px;
        }
        input:focus,select:focus {
          border: 3px solid red;
        }

        .topnav .icon {
          display: none;
        }

      .sec2
      {
        font-family: sans-serif;
        background-color: darkred;
        color: white;
        margin-left: -0.6em;
        margin-right: -0.5em;
        margin-bottom: -2em;
        text-align: center;
      }
      .sec2 p
      {
        text-align: center;
        font-size: 2em;
        padding-top: 2%;
      }
        .sec2 .fa 
        {
            padding: 15px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            text-align: center;
        }

        .sec2 .fa:hover 
        {
            opacity: 0.8;
        }

        .sec2 .fa-facebook 
        {
            background: #3B5998;
            color: white;
            margin-right: 1%;
        }

        .sec2 .fa-google 
        {
           background: #dd4b39;
           color: white;
           margin-right: 1%;
        }

        .sec2 .fa-linkedin 
        {
           background: #007bb5;
           color: white;
           margin-right: 1%;
        }
        
        .sec2 .fa-youtube 
        {
           background: #bb0000;
           color: white;
           margin-right: 1%;
        }

        .sec2 .fa-instagram 
        {
           background: #125688;
           color: white;
           margin-right: 1%;
        }
        .sec2 h2
        {
            cursor: default;
        }

        .sec2 h2 a
        {
            text-decoration: none;
            color: white;
        }

        .sec2 h2 a:hover
        {
            text-decoration: underline;
        }

        .topnav .icon {
          display: none;
        }

        .main 
        {
            width: 90px;
            margin-top: 3em;
            margin-left: 27%;
        }

        .col2
        {
            margin-top: -9.5em;
        }

        @media only screen and (max-width: 1200px)
        {
            .col1
            {
                top: 0;
            }
            .main 
            {
                margin-left: auto;
                margin-right: auto;
                display: block;
                margin-top: 2em;
                padding-top: 1em;
            }

            .col2
            {
                margin-top: -2em;
            }
        }

        @media screen and (max-width: 950px) {
          .topnav li:not(:nth-child(3)) {display: none;}
          .topnav li.icon {
            float: right;
            display: block;
            position: relative;
          }
        }

        @media screen and (max-width: 950px) {
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          .topnav.responsive li{
            float: left;
            display: block;
            width: 100%;
            text-align: left;
          }
          .topnav.responsive li:first-child
          {
              margin-top: 10%;
          }
          .icon i
          {
            float: right;
            cursor: pointer;
            font-size: 24px;
            margin-right: 0.5em;
            margin-top: 0.5em;
            color: black;
          }
        } li{ width:20%;}
        @media only screen and (orientation: landscape) and (max-width: 950px) {
        .topnav.responsive li:first-child
        {
            margin-top: 6%;
        }}
        @media only screen and (max-width: 710px)
        {
        .container
        {
          width: 30em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        input,select
        {
          width: 25em;
        }
        }
        @media only screen and (max-width: 880px)
        {
        .container
        {
          width: 35em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        input,select
        {
          width: 25em;
        }
        }

        @media only screen and (max-width: 670px)
        {
        .container
        {
          width: 25em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        input,select
        {
          width: 20em;
        }
        }

        @media only screen and (max-width: 500px)
        {
        .container
        {
          width: 20em;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0px 0px 8px solid grey;
          padding: 30px;
          text-align: center;
          font-family: sans-serif;
          position: relative;
          margin-top: 3em;
          margin-bottom: 2em;
        }
        input,select
        {
          width: 15em;
        }
        }

.sub
{
    width: 40%;
    color: white;
    background-color: red;
    border: 0;
    cursor: pointer;
}
       .prof
        {
            float: right;
            color: white;
            font-size: 32px;
            border-radius: 25px;
            margin-right: 3%;
            margin-top: -1em;
            cursor: pointer;
        }
    </style>
</head>
<body style="position: static;">
<section class="sec1">
    <div class="heading heading-center">
        <div class="div1">
            <img src="logo1.png" class="rotate" width="70px">
        </div>
        <div class="div2">
            <p>Eventally</p>
        </div>
    </div>
  <?php /*
  $dbserver="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="mydb";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from users");
  while($row = mysqli_fetch_assoc($result))
  {
    if($_SESSION['name']==$row['name'])
    {
     echo '<a href="profile.php"><img class="prof" src="'.$row['img'].'"></a>';
    }
 } */
  ?><a href="alogout.php" class="prof"><i class="fa fa-power-off"></i></a>
	<div class="table">
	    <ul class="topnav" id="myTopnav">
            <li style="float:left;" class="active"><a href="adclub.php">Clubs</a></li>
            <li style="float: left;"><a href="create.php">Events</a></li>
            <li style="float: left;"><a href="adres.php">Results</a></li>
            <li style="float: left;"><a href="print.php">Print</a></li>
            <li style="float: left;"><a href="adgallery.php">Gallery</a></li>
            <li href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
            </li>
        </ul>
    </div>
</section>
<p id="size"></p>
<br>
  <div class="container container-center">
    <h2 class="head2" style="text-align:center;">Add Results</h2>
    <form action="cr.php" enctype="multipart/form-data" method="POST">
        <select name="clubs" id="club" required>
            <option value="" disabled selected>Select Event</option>
            <?php
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
              $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
              $result=mysqli_query($conn,"SELECT * from post WHERE creator ='".$_SESSION['name']."'");
              while($row = mysqli_fetch_assoc($result))
              {
                echo '<option value="'.$row['title'].'">'.$row['title'].'</option>';
              }
            ?>
        </select><br><br>
      <input type="text" name="date" placeholder="Event Date and Time" required><br><br>
      <input type="text" name="winners" placeholder="Winner 1" required><br><br>
      <input type="text" name="winner2" placeholder="Winner 2"><br><br>
      <input type="text" name="winner3" placeholder="Winner 3"><br><br>
      <input type="file" name="image" id="image" style="padding-top: 1%;" onchange="Filevalidation()"><br><br>
      <!--<button type="submit" name="submit"> Post Chat</button>-->
      <input type="submit" name="submit" class="sub" value="POST">
    </form>
  </div>
<br>
<section class="sec2">
  <p>Follow Us!</p>
    <a href="https://www.facebook.com/sinehan.s.9" target="_blank" class="fa fa-facebook"></a>
    <a href="http://sbmhss.000webhostapp.com" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UCDtWAZckJG5-HONoPi1oENQ" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/vecchennai/" target="_blank" class="fa fa-instagram"></a>
    <h2>Registered &#174; 2021.</h2><br>
</section>

</body>
<script>
	  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    Filevalidation = () => {
        const fi = document.getElementById('image');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 1024) {
                    alert(
                      "File too Big, please select a file less than 1MB");
                } else if (file < 24) {
                    alert(
                      "File too small, please select a file greater than 24KB");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
    }
</script>
</html>