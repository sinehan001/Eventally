<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eventally is a social-entrepreneurship, start-up endeavour. We aim to bring hassle-free experience for both event creators as well as promoters and event participants and other members.">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<link rel="icon" href="logo1.png">
    <meta name="description" content="Signup your Eventally and make use of various events and join clubs.">
	<title>Home - Eventally</title>
	<style>
        body
        {
            font-family: sans-serif;
        }
	    section
	    {
	    	font-family: sans-serif;
	    	background: red;
	    	color: white;
	    	margin-top: -2em;
	    	margin-left: -0.6em;
	    	margin-right: -0.5em;
	    }

         body
         {
            background-color: #000000;
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
.con1
{
    display: flex;
    /*background-color: #013DC4;*/
    background: linear-gradient(to bottom,red,#ff5412,blue);
    height: 550px;
    margin-left: -1%;
    padding-top: 3em;
    background-size: auto;
    width: 101.5%;
    color: white;
    text-align: center;
}

.con12 h3
{
    margin-left: 15%;
    margin-right: 15%;
}

.con11
{
    width: 49.8%;
    margin: auto;
}

.con12
{
    width: 50%;
    text-align: center;
}

.con2
{
    display: flex;
    /*background-color: #DB4437;*/
    background: linear-gradient(to bottom,blue,#3D91E0,gold);
    height: 370px;
    margin-top: -1em;
    margin-left: -1%;
    padding-top: 3em;
    background-size: auto;
    width: 101.5%;
    color: white;
    text-align: center;
}
.con2 p
{
    margin-left: 30%;
    margin-right: 30%;
}

.con22 img
{
    width: 60%;
    height: 80%;
    margin: auto;
}

.con21
{
    width: 50%;
    text-align: center;
}

.con22
{
    width: 45%;
}

.con3
{
    display: flex;
    /*background-color: #F4B400;*/
    background: linear-gradient(to bottom,gold,#f4b400,#44ee77);
    height: 250px;
    margin-top: -1em;
    margin-left: -1%;
    padding-top: 3em;
    background-size: auto;
    width: 101.5%;
    color: white;
    text-align: center;
}

.con31
{
    width: 49.8%;
    margin: auto;
}

.con32
{
    width: 50%;
    text-align: center;
}

.con31 img
{
    width: 50%;
}

.con4
{
    display: flex;
    /*background-color: #0F9D58;*/
    background: linear-gradient(to bottom,#44ee77,#008d7c,green);
    height: 250px;
    margin-top: -1em;
    margin-left: -1%;
    padding-top: 3em;
    background-size: auto;
    width: 101.5%;
    color: white;
    text-align: center;
}

.con42
{
    width: 34.8%;
    margin: auto;
}

.con4 p
{
    margin-left: 10%;
    margin-right: 10%;
}

.con41
{
    width: 65%;
    text-align: center;
}

.con42 img
{
    width: 30%;
    margin-top: -10%;
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

        @media only screen and (max-width: 500px)
        {
            .prof
            {
                display: none;
            }
        }

        .heading
        {
            font-family: sans-serif;
            color: white;
            display: flex;
            background-color: red;
            margin-top: -2em;
            padding-bottom: 1em;
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
        @media only screen and (max-width: 1000px)
        {
            .con11
            {
                display: none;
            }
            .con12
            {
                width: 100%;
            }

            .con21
            {
                width: 100%;
            }
            .con22
            {
                display: none;
            }

            .con31
            {
                display: none;
            }
            .con32
            {
                width: 100%;
            }
            .con42
            {
                display: none;
            }
            .con41
            {
                width: 100%;
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
            .con1
            {
                margin-left: -2%;
                height: 580px;
                width: 103.5%;
            }
            .con2
            {
                margin-top: 0%;
                margin-left: -2%;
                width: 103.5%;
                height: 350px;
            }
            .con3
            {
                margin-top: 0%;
                margin-left: -2%;
                width: 103.5%;
                height: 250px;
            }
            .con4
            {
                margin-top: 0%;
                margin-left: -2%;
                width: 103.5%;
                height: 250px;
            }
            .con1 p,.con2 p,.con3 p
            {
                margin-left: 10%;
                margin-right: 10%;
            }
        }
        @media only screen and (max-width: 485px)
        {
            .con1
            {
                height: 700px;
            }
        }
        @media only screen and (max-width: 430px)
        {
            .con1
            {
                height: 650px;
            }
        }
        @media only screen and (max-width: 400px)
        {
            .div1
            {
                margin-left: 15%;
            }
            .con1
            {
                margin-left: -2%;
                height: 770px;
                width: 103.5%;
            }
            .con2
            {
                margin-top: 0%;
                margin-left: -2%;
                width: 103.5%;
                height: 380px;
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

    button
    {
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 8px;
        padding-bottom: 8px;
        margin-right: 10px;
        margin-left: 10px;
        border-radius: 25px;
        font-size: 32px;
        border: 0px;
        cursor: pointer;
    }

   .btn 
   {
    text-align: center;
   }

    .blue
    {
        background-color: #013DC4;
    }
    .blue a
    {
        color: white;
        text-decoration: none;
    }
    .blue:hover
    {
        background-color: darkblue;
    }
    .red 
    {
        background-color: #0F9D58;
    }
    .red a
    {
        color: white;
        text-decoration: none;
    }

    .red:hover
    {
        background-color: darkgreen;
    }

    .yellow
    {
        background-color: red;
    }
    .yellow:hover
    {
        background-color: darkred;
    }
    .yellow a
    {
        color: white;
        text-decoration: none;
    }
    .middle
    {
        margin-left: -0.5em;
        margin-right: -0.5em;
    }
.counting-sec{
  padding: 40px 0;
  width: 100%;
  background: linear-gradient(90deg,red,blue);
}
.inner-width{
  max-width: 1200px;
  margin: auto;
  display: flex;
}
.col{
  flex: 1;
  text-align: center;
  padding: 20px;
  color: #fff;
  text-transform: uppercase;
}
.col i{
  font-size: 40px;
  color: #333;
}
.num{
  font-size: 40px;
  margin: 20px 0;
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
  width: 50%;
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
  border-bottom: 2px solid red;
  color: white;
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
  z-index: 1; 
  padding-top: 250px;
  left: 0;
  top: 0;
  display: block;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
  }
  @media only screen and (orientation: landscape) and (max-height: 500px)
  {
      .modal
      {
          padding-top: 35px;
      }
  }
  .modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  border: 2px solid black;
  padding-left: 6px;
  padding-right: 6px;
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
</style>
</head>
<body style="position: static;">
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <center><h1 style="color: red; font-family: sans-serif; padding-top: 20px;">NOTICE</h1></center>
    <p class="texts">Stable Update v 1.0.1 has been released.</p>
  </div>
</div>
<section>
    <div class="heading heading-center">
        <div class="div1">
            <img src="img/profile/logo1.webp" class="rotate" width="70px">
        </div>
        <div class="div2">
            <p>Eventally</p>
        </div>
    </div>
</section>
<div class="con1">
    <div class="con11">
        <img src="img/profile/gd.webp" alt="Event Creators">
    </div>
    <div class="con12">
     <h1>Welcome to Eventally family!</h1>
     <h2>Event Creators</h2>
     <h3>Here in Eventally, you can create your club, create and post your events, check out all registrations at one place and announce the results of the events for FREE.</h3>
        <p>Besides you can </p>
        <p>&#10022; Download the registered candidates list for FREE.</p>
        <p>&#10022; View and download enrolled club members list.</p>
        <h2>To Create your Clubs & Events as Admin, email us at <span class="mailing" style="color: yellow; cursor: pointer;">eventally001@gmail.com</span></h2>
        <div class="btn">
            <span style="font-size: 24px;">Already an Admin ? </span><button class="yellow"><a href="adlog.php">Admin Login</a></button>
        </div>
    </div>
</div>
<div class="con2">
    <div class="con21">
    <h1>Event Participants</h1>
    <p>Here in Eventally, you can find interesting clubs and join them. You can participate in the events that are open for you. You will get notifications and reminders about the events you are interested in so that you won’t miss them in your busy schedule.</p>
    <div class="btn">
     <button class="blue"><a href="Login.php">Login</a></button>
     <button class="red"><a href="Signup.php">Signup</a></button>
  </div><br>
</div>
    <div class="con22">
        <img src="img/profile/part.webp" alt="event participants">
    </div>
</div>
<div class="con3">
    <div class="con31">
        <img src="img/profile/mission.webp" alt="Mission">
    </div>
    <div class="con32">
    <h1>Mission</h1>
    <p>&#10022; Bringing world-class website/app experience.</p>
    <p>&#10022; Reach 1 million subscribers by 2023.</p>
</div>
</div>

<div class="con4">
    <div class="con41">
        <h1>Vision</h1>
        <p>&#10022; Make life easy for event organizers and participants.</p>
        <p>&#10022; Connecting innovative clubs and potential members meet at one place. </p>
    </div>
<div class="con42">
    <img src="img/profile/vision.webp" alt="vision">
</div>
</div>
  <div class="middle">
    <div class="counting-sec">
        <h1 style="text-align: center; color: white;">Enrollment</h1>
      <div class="inner-width">
        <div class="col">
          <i class="fas fa-users" style="color:white;"></i>
  <?php 
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT count(name) from users");
  while($row = mysqli_fetch_assoc($result))
  {
          echo '<br><br><span class="num">'.$row["count(name)"].'</span><span style="font-size:30px;">+<span><br><br>';}?>
          <span style="font-size: 24px;">Students</span>
        </div>

        <div class="col">
          <i class="fas fa-chalkboard-teacher" style="color:white;"></i>
  <?php 
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  $result=mysqli_query($conn,"SELECT count(name) from admin");
  while($row = mysqli_fetch_assoc($result))
  {
          echo '<br><br><span class="num">'.$row["count(name)"].'</span><span style="font-size:30px;">+<span><br><br>';}?>
          <span style="font-size: 24px;">Teachers</span>
        </div>
      </div>
    </div>
  </div>
<section class="sec2">
  <p>Follow Us!</p>
    <a href="https://www.facebook.com/sinehan.s.9" target="_blank" class="fa fa-facebook"></a>
    <a href="http://sbmhss.000webhostapp.com" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UCDtWAZckJG5-HONoPi1oENQ" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/sinehan001/" target="_blank" class="fa fa-instagram"></a>
    <h2>Registered &#174; 2021.</h2>
    <span>v 1.0.1</span><br><br>
</section>
  <script type="text/javascript">
    $(".num").counterUp({delay:20,time:1000});
    const span = document.querySelector(".mailing");

span.onclick = function() {
  document.execCommand("copy");
  alert("eventally001@gmail.com is copied to Clipboard.")
}

span.addEventListener("copy", function(event) {
  event.preventDefault();
  if (event.clipboardData) {
    event.clipboardData.setData("text/plain", span.textContent);
    console.log(event.clipboardData.getData("text"))
  }
});
var modal = document.getElementById("myModal");
var spand = document.getElementsByClassName("close")[0];
spand.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>
</body>
</html>