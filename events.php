<?php
ob_start();
session_start();

 if(!isset($_SESSION['name']) || !isset($_SESSION['email'])){
  header("Location: Login.php");
  exit();
 }
 else if(isset($_GET['seen']))
 {
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
    $sqld = "UPDATE messages SET received = 'True' WHERE email = '".$_SESSION['email']."'"; 
    mysqli_query($conn,$sqld);
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <title>Events - Eventally</title>
  <link rel="icon" href="logo1.png">
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#All div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $("#myInp").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#Joined div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $("#myIn").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#Intra div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
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
    background-image: url('front.jpg');
    height: 600px;
    background-size: 100% 100%;
    width: auto;
    color: white;
}
.con1 h1
{
    margin-left: 60%;
    padding-top: 8em;
}

.container img
{
   width: 100%;
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
          .topnav li:not(:nth-child(2)) {display: none;}
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

              @media only screen and (orientation: landscape) and (max-width: 950px) {
        .topnav.responsive li:first-child
        {
            margin-top: 6%;
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
            li 
            {
                width: 25%;
            }
            .div2
            {
                margin-top: 1em;
            }
            .con1
            {
                height: 400px;
            }
            .con1 h1
            {
                padding-top: 3em;
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

            input,button{
          outline: none;
        }
        input{
          border: 1px solid black;
          font-size: 18px;
          width: 35em;
          text-indent: 10px;
          border-radius: 10px;
          height: 40px;
        }
        input:focus {
          border: 3px solid red;
        }
        @media only screen and (max-width: 880px)
        {
        input
        {
          width: 25em;
        }
        }
        @media only screen and (max-width: 670px)
        {
        input
        {
          width: 20em;
        }
        }
        @media only screen and (max-width: 500px)
        {
        input
        {
          width: 15em;
        }
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
        @media only screen and (max-width: 550px)
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
        }
        
        @media only screen and (max-width: 420px)
        {
        .container
        {
          width: 18em;
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
    #myBtn {
  display: none;
  position: fixed;
  bottom: 10px;
  left: 48%;
  z-index: 1;
  font-size: 24px;
  border: none;
  outline: none;
  background-color: #FF7F50;
  color: white;
  font-weight: bold;
  cursor: pointer;
  padding-left: 13px;
  padding-right: 13px;
  padding-top: 10px;
  padding-bottom: 1px;
  border-radius: 25px;
}
#myBtn:hover {
  background-color: white;
  color: black;
}

.tab {
  overflow: hidden;
  background-color: black;
  color:  white;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: #3f3f3f;
  color:  white;
  width: 33.33%;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: red;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border-top: none;
}


.modal {
  display: none;
  position: fixed; 
  z-index: 2; 
  left: 0;
  top: 0;
  <?php 
  $conn=mysqli_connect("sg2plzcpnl462821","sinehan001","sinehan001","eventally");
  $a=false;
     $res=mysqli_query($conn,"SELECT * from prof where email='".$_SESSION['email']."'");
     while($row=mysqli_fetch_assoc($res))
     {
         if(!$row['college'])
         {
             echo 'display: block;';
             $a=true;
         }
     }
     if($a==false)
     {
         echo 'display: none;';
     }
  ?>
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
  }
  .modal-content {
  background-color: #fefefe;
  margin: auto;
  border: 1px solid #888;
  height: 99.5%;
  width: 99.5%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  border: 2px solid black;
  padding-left: 6px;
  padding-right: 6px;
  margin-right: 10px;
  border-radius: 30px;
}

@media only screen and (max-width: 600px)
{
    .close
    {
        padding-left: 9px;
        padding-right: 9px;
    }
}

.texts
{
  padding-top: 20px;
  text-align: center;
  font-size: 22px;
  font-family: arial;
  font-weight: bold;
}
.close:hover,.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


         .container1
         {
	      background-color: #ffffff;
	      text-align: center;
	      border-radius: 15px;
	      box-shadow: 0px 0px 12px grey;
	      width: 400px;
         }

    	    .container-center1
         {
	     position: absolute;
	     top: 60%;
	     left: 50%;
	     transform: translate(-50%, -50%);
	     /*position: static;
	     margin-left: 37%;
	     margin-top: 5%;
	     margin-bottom: 5%;*/
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
	    		margin-left: 25%;
	    	}
	    	.div2
	    	{
	    		margin-top: 1em;
	    	}
	    }
	    @media only screen and (max-width: 650px)
	    {
	    	.div1
	    	{
	    		margin-left: 20%;
	    	}
	    }
	    @media only screen and (max-width: 550px)
	    {
            .container1
            {
                width: 350px;
            }
	    }
	    @media only screen and (max-width: 400px)
	    {
	    	.div1
	    	{
	    		margin-left: 10%;
	    	}
            .container1
            {
                width: 250px;
            }
	    }
	    .div2
	    {
	    	margin-left: 1%;
	    	margin-top: 1em;
	    }

    	    .container1 h1
    	    {
    	    	background-color: red;
    	    	margin-top: -0.05em;
    	    	color: white;
    	    	border-top-left-radius: 15px;
    	    	border-top-right-radius: 15px;
    	    	padding-top: 0.4em;
    	    	padding-bottom: 0.4em;
    	    }
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
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

input,select
{
    border-radius: 25px;
    margin: 18px;
    outline: none;
}
input,select
{
	height: 30px;
	width: 250px;
	border: 1px solid;
	text-indent: 10px;
	font-size: 18px;
	background-color: white;
}
input:focus,input:focus
{
	border: 2.5px solid red;
}
.sub
{
	height: 40px;
	width: 130px;
	border: 0px;
	background-color: red;
	color: white;
	font-size: 20px;
	cursor: pointer;
}
label
{
	color: black;
	font-size: 22px;
}
span
{
	color: white;
}
span a
{
	color: antiquewhite;
}

@media only screen and (max-width: 425px)
{
    .container1
    {
        width: 90%;
    }
	input,select
	{
		width: 200px;
	}
}


</style>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
<div id="myModal" class="modal">
  <div class="modal-content"><br>
    <span class="close">&times;</span>
    <center><h1 style="color: red; font-family: sans-serif; padding-top: 18px;">NOTICE</h1></center>
    <p class="texts" style="margin-top: -28px;">Please Complete the profile to Register on Events.</p>
	<div class="container1 container-center1">
		<h1> Set Profile </h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
			      			<!--<input type="text" name="college" placeholder="College" required>-->
			      			<select name="college">
			      			    <option selected disabled>Select College</option>
			      			    <option value="Velammal Engineering College">Velammal Engineering College</option>
			      			</select>
			<input type="text" name="ybs" placeholder="Year/Branch/Section" required>
			<input type="number" name="wnum" placeholder="Whatsapp Number" required>
			<input type="url" name="smedia" placeholder="Social Media URL(optional)" optional>
			    	<br>
			    	<label for="images">Upload Image(jpg/png)</label>
			    	<input type="file" id="images" accept="image/*" name="images" style="padding-top: 3px;" required>
			    <input type="submit" name="submit" class="sub" value="Complete">
            <br>
		</form>
	</div>
	<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
     	  $name = $_SESSION['name'];
     	  $email = $_SESSION['email'];
     	  $college = $_POST['college'];
     	  $ybs = $_POST['ybs'];
     	  $wnum = $_POST['wnum'];
     	  $smedia = $_POST['smedia'];
       if (isset($_POST['submit'])) {
 
        $filename = $_FILES["images"]["name"];
        $tempname = $_FILES["images"]["tmp_name"];
        $folder = "img/profile/".$filename;

  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from prof"); 
       while($row = mysqli_fetch_assoc($result))
       {
           if($folder == $row['photo'])
           {
               header("Location: renaming.php");
               exit();
           }
       }
     
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
     	  $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
     	  	/*$sql = "INSERT into prof (name, email, college, ybs, wnum, smedia, photo) VALUES('$name', '$email', '$college', '$ybs', '$wnum', '$smedia', 'img/profile/$filename')";*/
     	  	$sql = "UPDATE prof SET college='".$college."' where email='".$email."'";
     	  	$sql1 = "UPDATE prof SET ybs='".$ybs."' where email='".$email."'";
     	  	$sql2 = "UPDATE prof SET wnum = '".$wnum."' where email='".$email."'";
     	  	$sql3 = "UPDATE prof SET smedia='".$smedia."' where email='".$email."'";
     	  	$sql4 = "UPDATE prof SET photo='img/profile/$filename' where email='".$email."'";
     	  	mysqli_query($conn,$sql);
     	  	mysqli_query($conn,$sql1);
     	  	mysqli_query($conn,$sql2);
     	  	mysqli_query($conn,$sql3);
     	  	mysqli_query($conn,$sql4);
     	    $_SESSION['college'] = $college;
     	    $_SESSION['ybs'] = $ybs;
     	    $_SESSION['num'] = $wnum;

            header("Location: clubs.php");
            exit();
        }else{
            $msg = "Failed to upload image";
      }
  }
     }?>
  </div>
</div>
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
  /*$dbserver="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="mydb";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from users");
  while($row = mysqli_fetch_assoc($result))
  {
    if($_SESSION['name']==$row['name'])
    {
     echo '<a href="index.html"><img class="prof" src="logo1.png"></a>';
    }
}*/
  ?>
<?php 
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT * from prof");
  $hat=mysqli_query($conn,"SELECT received from messages where email='".$_SESSION['email']."'");
  $col=mysqli_fetch_assoc($hat);
  while($row = mysqli_fetch_assoc($result))
  {
    if($_SESSION['name']==$row['name'])
    {
     echo '<a href="profile.php"><img class="prof" src="'.$row['photo'].'"></a>';
    }
}
  ?>
  <div class="table">
      <ul class="topnav" id="myTopnav">
            <li style="float: left;" class="active"><a href="clubs.php">Clubs</a></li>
            <li style="float: left;"><a href="events.php">Events</a></li>
            <li style="float: left;"><a href="result.php">Results</a></li>
            <li style="float: left;"><a href="gallery.php">Gallery</a></li>
            <li style="float: left;"><a href="about.php">About</a></li>
            <li href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
            </li>
        </ul>
    </div>
</section>
<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'All')">Inter</button>
  <button class="tablinks" onclick="openCity(event, 'Intra')">Intra</button>
  <button class="tablinks" onclick="openCity(event, 'Joined')">Joined</button>
  
</div>
<div id="All" class="tabcontent" style="display: block;">
    <center><h2 style="color: white;">Inter College Events</h2>
    <br><input id="myInput" type="text" placeholder="&#x1F50D;&nbsp;&nbsp;Search.."></center>
    
<?php
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
  $name = $_SESSION['name'];
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);  
  $result=mysqli_query($conn,"SELECT * from post ORDER by id DESC"); 
       while($row = mysqli_fetch_assoc($result))
       {
        date_default_timezone_set("Asia/Kolkata");
        echo'<div class="container container-center">';
        echo'    <h2 style="color: red; font-family: arial;"> '.$row['club'].'</h2>';
        echo'    <a href="img/post/'.$row['image'].'"><img style="border-radius: 20px;" src="img/post/'.$row['image'].'"></a>';
        echo'    <h2 style="color: green; font-family: arial;"> '.$row['title'].'</h2>';
        echo '<form action="eventinfo.php" method="POST">';
        echo '<input type="text" name="event" value="'.$row['title'].'" style="display: none; font-family: arial;">';
        echo '<input type="submit" name="submit" value="Show Details" style="color: white; background-color: red; cursor:pointer; border: 0;">';
        echo '</form><br></div>';
       }
?>
</div>
<div id="Intra" class="tabcontent">
    <center><h2 style="color: white;">Intra College Events</h2>
    <br><input id="myIn" type="text" placeholder="&#x1F50D;&nbsp;&nbsp;Search.."></center>
    
<?php
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
  $name = $_SESSION['name'];
  $res=mysqli_query($conn,"SELECT * from prof where name='".$_SESSION['name']."'"); 
       while($col = mysqli_fetch_assoc($res))
       {
           $ucollege=$col['college'];
       }
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname); 
  $result=mysqli_query($conn,"SELECT * from post where college='".$ucollege."' ORDER by id DESC"); 
       while($row = mysqli_fetch_assoc($result))
       {
        date_default_timezone_set("Asia/Kolkata");
        echo'<div class="container container-center">';
        echo'    <h2 style="color: red; font-family: arial;"> '.$row['club'].'</h2>';
        echo'    <a href="img/post/'.$row['image'].'"><img src="img/post/'.$row['image'].'"></a>';
        echo'    <h2 style="color: green; font-family: arial;"> '.$row['title'].'</h2>';
        echo '<form action="eventinfo.php" method="POST">';
        echo '<input type="text" name="event" value="'.$row['title'].'" style="display: none;">';
        echo '<input type="submit" name="submit" value="Show Details" style="color: white; background-color: red; cursor:pointer; border: 0;">';
        echo '</form><br></div>';
       }
?>
</div>
<div id="Joined" class="tabcontent">
    <center><h2 style="color: white;">Joined Club Events</h2><br><input id="myInp" type="text" placeholder="&#x1F50D;&nbsp;&nbsp;Search.."></center>
<?php
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
  $name = $_SESSION['name'];
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);  
  $result=mysqli_query($conn,"SELECT * from post ORDER by id DESC"); 
       while($row = mysqli_fetch_assoc($result))
       {
        $likes = $row['club'];
        if($rem = mysqli_fetch_assoc(mysqli_query($conn,"SELECT $likes FROM users WHERE {$likes} = 'True' AND name = '".$_SESSION['name']."'"))){
        echo'<div class="container container-center">';
        echo'    <h2 style="color: red; font-family: arial;"> '.$row['club'].'</h2>';
        echo'    <a href="img/post/'.$row['image'].'"><img src="img/post/'.$row['image'].'"></a>';
        echo'    <h2 style="color: green; font-family: arial;"> '.$row['title'].'</h2>';
        echo '<form action="eventinfo.php" method="POST">';
        echo '<input type="text" name="event" value="'.$row['title'].'" style="display: none;">';
        echo '<input type="submit" name="submit" value="Show Details" style="color: white; background-color: red; cursor:pointer; border: 0;">';
        echo '</form><br></div>';
       }
   }
?> 
</div>
<br>
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

var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function abc()
{
  alert("Registered Successfully");
}

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
</html>