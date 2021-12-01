<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="icon" href="logo1.png">
	<title>Complete Your Profile - Eventally</title>
	<style>
         body
         {
         	background-color: #000000;
         	font-family: sans-serif;
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
	    	margin-right: -0.5em;
	    }
	    .heading p
	    {
	    	font-size: 2em;
	    	padding-top: 2%;
	    	font-weight: bold;
	    }

         .container
         {
	      background-color: #ffffff;
	      text-align: center;
	      border-radius: 15px;
	      box-shadow: 0px 0px 12px grey;
	      width: 400px;
         }

    	    .container-center
         {
	     position: absolute;
	     top: 55%;
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
            .container
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
            .container
            {
                width: 250px;
            }
	    }
	    .div2
	    {
	    	margin-left: 1%;
	    	margin-top: 1em;
	    }

    	    .container h1
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

input,button
{
    border-radius: 25px;
    margin: 18px;
    outline: none;
}
input
{
	height: 30px;
	width: 250px;
	border: 1px solid;
	text-indent: 10px;
	font-size: 18px;
	background-color: white;
}
input:focus
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
    .container
    {
        width: 90%;
    }
	input
	{
		width: 200px;
	}
}
	</style>
</head>
<body>
	<div class="heading heading-center">
		<div class="div1" id="div1">
            <img src="logo1.png" class="rotate" width="70px">
        </div>
        <div class="div2">
        	<p>Eventally</p>
	    </div>
	</div>
	<div class="container container-center">
		<h1> Set Profile </h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
            <input type="text" name="name" placeholder="Name then initial" required>
            <input type="text" name="email" placeholder="Email" required>
			<input type="text" name="college" placeholder="College" required>
			<input type="text" name="ybs" placeholder="Year/Branch/Section" required>
			<input type="number" name="wnum" placeholder="Whatsapp Number" required>
			    	<br>
			    <input type="submit" name="submit" class="sub" value="Register">
            <br>
		</form>
	</div>
	<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
          $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
     	  $name = $_POST['name'];
     	  $email = $_POST['email'];
     	  $college = $_POST['college'];
     	  $ybs = $_POST['ybs'];
           $title=$_SESSION['title'];
     	  $wnum = $_POST['wnum'];
           $club=$_SESSION['clubs'];
       if (isset($_POST['submit'])) {
           
        $sql="INSERT INTO ".$title." (name,email,college,ybs,num,title,club) VALUES ('$name','$email','$college','$ybs','$wnum','$title','$club')";
        mysqli_query($conn,$sql);
        echo '<script>alert("Successfully Registered.");window.location.href="share.php";</script>';
  }
     }?>
</body>
</html>