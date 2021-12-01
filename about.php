<?php
session_start();

 if(!isset($_SESSION['name']) || !isset($_SESSION['email'])){
  header("Location: Login.php");
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
  <title>About - Eventally</title>
  <style>
        body
        {
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

    ul 
    {
            list-style-type: none;
            padding: 0;
            overflow: hidden;
            border: 1px solid #e7e7e7;
            background-color: #c7d3d4ff;
        }

        li 
        {
            width: 20%;
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

         body
         {
            background-color: #000000;
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

       .prof
        {
            float: right;
            width: 50px;
            height: 50px;
            border-radius: 25px;
            margin-right: 2%;
            margin-top: -4em;
            cursor: pointer;
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
.con1{
    width: auto;
    text-align: center;
    color: white;
}
.con1 p
{
	margin-left: 30%;
	margin-right: 30%;
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
          .topnav li:not(:nth-child(5)) {display: none;}
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
              margin-top: 12%;
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
          .icon i:hover
          {
            color: red;
          }
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
            .con1 p
            {
                margin-left: 15%;
                margin-right: 15%;
            }
            li 
            {
                width: 25%;
            }
        }
        @media only screen and (orientation: landscape) and (max-width: 950px) {
        .topnav.responsive li:first-child
        {
            margin-top: 6%;
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

        .container
        {
          width: 40em;
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
        .container button
        {
          float: right;
          background-color: white;
          border: 0;
          color: black;
          cursor: pointer;
          font-size: 2em;
          font-weight: bold;
          margin-top: -0.4em;
          padding: 0px;
        }

        .container form input:not(:nth-child(7))
        {
          display: none;
        }

        .container-center
        {
          left: 50%;
          transform: translate(-50%, 0%);
        }

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
        }
        @media only screen and (max-width: 550px)
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
        }

.btn
{
    width: 40%;
    color: white;
    background-color: red;
    border: 0;
    border-radius: 40px;
    font-size: 24px;
    padding: 15px;
    cursor: pointer;
}
		.col1
		{
			text-align: center;
            color: white;
		}
		.col11
		{
			text-align: center;
			background: red;
			margin: 0 auto;
			border-radius: 20px;
			color: white;
			padding: 1px;
			width: 200px;
		}
		.col21
		{
			text-align: center;
			background: red;
			margin: 0 auto;
			border-radius: 20px;
			color: white;
			padding: 1px;
			width: 250px;			
		}
</style>
</head>
<body style="position: static;">
<section>
    <div class="heading heading-center">
        <div class="div1">
            <img src="logo1.png" class="rotate" width="70px">
        </div>
        <div class="div2">
            <p>Eventally</p>
        </div>
    </div>
    <?php 
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from prof");
  while($row = mysqli_fetch_assoc($result))
  {
    if($_SESSION['name']==$row['name'])
    {
     echo '<a href="profile.php"><img class="prof" src="'.$row['photo'].'"></a>';
    }
}

//event counter
$counter=0;
$res=mysqli_query($conn,"SELECT count(name) from messages where name='".$_SESSION['name']."' and received='False'");
while($col=mysqli_fetch_assoc($res))
{
    $counter=$col["count(name)"];
}

  ?>
  <div class="table">
      <ul class="topnav" id="myTopnav">
            <li style="float: left;" class="active"><a href="clubs.php">Clubs</a></li>
            <li style="float: left;"><a href="events.php?seen=True">Events<?php  $hat=mysqli_query($conn,"SELECT received from messages where email='".$_SESSION['email']."'");
  while($column=mysqli_fetch_assoc($hat))
  {
  if($column['received']=='False')
  {
  echo '&nbsp;<span style="border-radius:13px; background-color: red; color: white;padding-left: 7px; padding-top: 1px; padding-bottom: 1px; padding-right:7px;">'.$counter.'</span>';
  }
  }?>
  </a></li>
            <li style="float: left;"><a href="result.php">Results</a></li>
            <li style="float: left;"><a href="gallery.php">Gallery</a></li>
            <li style="float: left;"><a href="about.php">About</a></li>
            <li href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
            </li>
        </ul>
    </div>
</section>
<br>
<div class="con1">
   <h1>About</h1>
   <p>Eventally is a social-entrepreneurship, start-up endeavour. We aim to bring hassle-free experience for both event creators as well as promoters and event participants and other members.</p>
</div>
<div class="col1">
	<h1>Developer</h1>
	<div class="col11">
		<h2><a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank" style="text-decoration:none; color:white;">Sinehan S</a></h2>
	</div>
</div>
<div class="col1">
	<h1>Content Creators</h1>
	<div class="col21">
		<h2><a href="https://www.linkedin.com/in/balaji-alagurajan-43390536/" target="_blank" style="text-decoration:none; color:white;">Balaji Alagurajan</a></h2>
	</div><br>
<!--</div>
<div class="col1">
	<h1>Supporters</h1>-->
	<div class="col21">
		<h2></h2.><a href="https://www.linkedin.com/in/hari-krishna-s-b07286214/" target="_blank" style="text-decoration:none; color:white;">Hari Krishna S</a></h2>
	</div><br>
	<div class="col21">
		<h2><a href="https://www.linkedin.com/in/lalith-kumar-373bbb214/" target="_blank" style="text-decoration:none; color:white;">Lalith Kumar V</a></h2>
	</div>
</div><br>
<section class="sec2">
  <p>Follow Us!</p>
    <a href="https://www.facebook.com/sinehan.s.9" target="_blank" class="fa fa-facebook"></a>
    <a href="http://sbmhss.000webhostapp.com" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UCDtWAZckJG5-HONoPi1oENQ" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/sinehan001/" target="_blank" class="fa fa-instagram"></a>
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

function abc()
{
  alert("Registered Successfully");
}
</script>

</html>