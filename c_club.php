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
    <title>Create your Club - Eventally</title>
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
            input,button{
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

        input{
          border: 1px solid black;
          font-size: 18px;
          width: 35em;
          text-indent: 10px;
          border-radius: 10px;
        }
        input{
          height: 40px;
        }
        input:focus {
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

        .prof
        {
            float: right;
            width: 47px;
            height: 50px;
            border-radius: 25px;
            margin-right: 2%;
            margin-top: -4em;
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
          .topnav li:not(:first-child) {display: none;}
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
        input
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
        input
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
        input
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
        input
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
            width: 50px;
            height: 50px;
            border-radius: 25px;
            margin-right: 2%;
            margin-top: -4em;
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
            <p>Literary Club</p>
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
  ?><a href="logout.php"><img class="prof" src="logo1.png"></a>
    <div class="table">
        <ul class="topnav" id="myTopnav">
            <li style="float:left;" class="active"><a href="adclub.php">Clubs</a></li>
            <li style="float: left;"><a href="create.php">Events</a></li>
            <li style="float: left;"><a href="adres.php">Results</a></li>
            <li style="float: left;"><a href="reg.php">Registeration</a></li>
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
    <h2 class="head2" style="text-align:center;">Add Club</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
        <h2>Your Club Name must be Unique!</h2>
        <h3>Use underscore instead of Space!</h3>
      <input type="text" name="club" placeholder="Club Name" required><br><br>
      <br>
      <!--<button type="submit" name="submit"> Post Chat</button>-->
      <input type="submit" name="submit" class="sub" value="CREATE">

    </form>
  </div>
<br>
<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){

          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
          $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);            
          $club = $_POST['club'];
          $college = '';
          $uname = $_SESSION['name'];
          $dql = mysqli_query($conn,"SELECT * from admin where name = '".$_SESSION['name']."' ");
          if($tab = mysqli_fetch_assoc($dql))
          {
            $college = $tab['college'];
          }

          $sql = "SELECT * from clubs where club = '$club' AND college = '$college'; ";
          $result = mysqli_query($conn,$sql);

          if(mysqli_num_rows($result) > 0)
          {
            echo '<script> alert("Club already available for this College!"); </script> ';
          }
          else
          {
          $sqla = "INSERT into clubs(club,college,members,creator) VALUES('$club','$college','0','$uname')";
          mysqli_query($conn, $sqla);
          $sqlb = "ALTER TABLE users ADD COLUMN {$club} VARCHAR(255)";
          mysqli_query($conn, $sqlb);
          $sqlc = "UPDATE users SET {$club} = 'False'";
          mysqli_query($conn, $sqlc);
          header("Location: sc.php");
          }
         /* $sql2 = "CREATE TABLE $name ( id int(11) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(512), email VARCHAR(512), ybs VARCHAR(512), college VARCHAR(512), num VARCHAR(512), signature VARCHAR(0) );";
          mysqli_query($conn, $sql2);*/
}

?>
<section class="sec2">
  <p>Follow Us!</p>
    <a href="https://www.facebook.com/sinehan.s.9" target="_blank" class="fa fa-facebook"></a>
    <a href="http://sbmhss.000webhostapp.com" target="_blank" class="fa fa-google"></a>
    <a href="https://www.linkedin.com/in/sinehan-s-9576961b2/" target="_blank" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/channel/UCDtWAZckJG5-HONoPi1oENQ" target="_blank" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/vecchennai/" target="_blank" class="fa fa-instagram"></a>
    <h2>Registered &#174; 2021. Powered By <a href="http://sbmhss.000webhostapp.com">Sinehan.</a></h2><br>
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
</script>
</html>