<?php 
session_start();
 if(!isset($_SESSION['name']) || !isset($_SESSION['email'])){
  header("Location: Login.php");
  exit();
 }
$_SESSION['event']=$_POST['event'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <title><?php echo $_SESSION['event']; ?> - Eventally</title>
  <link rel="icon" href="logo1.png">
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
          border: 0;
          cursor: pointer;
          font-size: 2em;
          font-weight: bold;
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
  z-index: 99;
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

.container form input:not(:nth-child(8))
        {
          display: none;
        }

</style>
</head>
<body style="position: static;">
<!--<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <center><h1 style="color: red; font-family: sans-serif; padding-top: 20px;">NOTICE</h1></center>
    <p class="texts">Stable Update v 1.0.1 has been released.</p>
  </div>
</div>-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
<section>
    <div class="heading heading-center">
        <div class="div1">
            <img src="../logo1.png" class="rotate" width="70px">
        </div>
        <div class="div2">
            <p>Eventally</p>
        </div>
    </div>
</section><br>
<div id="All" class="tabcontent" style="display: block;">
<?php
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
          $name=$_SESSION['name'];
  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);  
  $result=mysqli_query($conn,"SELECT * from post where title='".$_SESSION['event']."'"); 
       while($row = mysqli_fetch_assoc($result))
       {
        echo'<div class="container container-center">';
        echo'    <h2 style="color: red;"> '.$row['club'].'</h2>';
        echo'    <a href="img/post/'.$row['image'].'"><img src="img/post/'.$row['image'].'"></a>';
        echo'    <h2 style="color: green;"> '.$row['title'].'</h2>';
        echo'    <h3 style="color: blue;"> '.$row['dates'].' </h3>';
        echo'    <p> '.$row['venue'].' </p>';
        echo'<form action="register.php" method="POST">';
             echo'<input type="text" name="names" value="'.$_SESSION['name'].'">';
             echo'<input type="text" name="abc" value="'.$_SESSION['email'].'">';
             echo'<input type="text" name="club" value="'.$row['club'].'">';
             $res=mysqli_query($conn,"SELECT college, ybs, wnum from prof WHERE name ='$name'"); 
             if($col = mysqli_fetch_assoc($res))
             {
                echo'<input type="text" name="college" value="'.$col['college'].'">';
                echo'<input type="text" name="ybs" value="'.$col['ybs'].'">';
                echo'<input type="text" name="num" value="'.$col['wnum'].'">';
             }
             echo'<input type="text" name="title" value="'.$row['title'].'">';
             if($row['ended']=='True')
             {
                 echo '<h2 style="color: red">Event has Ended.</h2>';
             }
             else
             {
             echo'<input type="submit" class="btn" style="" name="submit" onclick="abc()" value="Register">';
             }
        echo'</form>';?>
        
<p style='text-align: center;'><button style="background-color: green; color: white; padding: 8px; border-radius: 10px; cursor: pointer; font-size: 18px;" class='hat'>
&#10149; Share</button></p>
<script>
    const shareData = {
    title: 'Eventally',
    text: 'Event : <?php echo $row['title']; ?>\nDate : <?php echo $row['dates']; ?>\n',
    url: '<?php echo 'https://eventally.in/share.php?id='.$row['scode'].'&title='.$row['title'].'';?>'
  }
  const btn = document.querySelector('.hat');
  btn.addEventListener('click', async () => {
      await navigator.share(shareData)
  });
</script>
        
        <?php echo'</div>';
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

function def()
{
    window.location.href = "reg.php";
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
/*var modal = document.getElementById("myModal");
var spand = document.getElementsByClassName("close")[0];
spand.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}*/
function abc()
{
  alert("Registered Successfully");
}
</script>

</html>