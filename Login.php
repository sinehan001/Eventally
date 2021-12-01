<?php
ob_start();
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
	header("Location: clubs.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

	    .div1
	    {
	    	margin-top: 2.3em;
	    	margin-left: 40%;
	    	padding-right: 1em;
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

         .container
         {
             position: fixed;
	      background-color: #020202;
	      text-align: center;
	      border-radius: 15px;
	      box-shadow: 0px 0px 8px grey;
	      width: 400px;
	      height: 410px;
         }

    	.container-center
         {
	     position: absolute;
	     top: 50%;
	     left: 50%;
	     transform: translate(-50%, -50%);
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
}
input:focus
{
	border: 2.5px solid red;
}
input:nth-child(2) {

background-image: url('img/lock-icon.png');

background-repeat: no-repeat;

background-position: 230px;

}
input:nth-child(1) {

background-image: url('img/email-icon.png');

background-repeat: no-repeat;

background-position: 230px;

}
button
{
	height: 40px;
	width: 130px;
	border: 0px;
	background-color: red;
	color: white;
	font-size: 20px;
	cursor: pointer;
}

@media only screen and (max-width: 425px)
{
	.container
	{
		width: 330px;
		height: 420px;
	}

	input
	{
		width: 200px;
	}
}
@media only screen and (max-width: 900px)
{
    .col1
    {
        margin-bottom: 8.5em;
        margin-left: 23vw;
    }
    .container
    {
        top: 55%;
    }
}
@media only screen and (max-width: 600px)
{
    .col1
    {
        margin-left: 13vw;
    }
    .container
    {
        top: 55%;
    }
}
      @media only screen and (orientation: landscape) and (max-width: 900px) and (max-height: 500px) {
      .container-center
      {
          margin-top: 12%;
      }
      .container
      {
          top:100%;
      }
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

@media only screen and (max-width: 425px)
{
    .div1
    {
    	margin-left: 15%;
    }
}

</style>
</head>
<body style="position:static;">
	<div class="heading heading-center">
		<div class="div1">
            <img src="logo1.png" class="rotate" width="70px">
        </div>
        <div class="div2">
        	<p>Eventally</p>
	    </div>
	</div>
	<div class="container container-center">
		<h1> Login </h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<?php
			    if(isset($_POST['email'])){
			    	echo '<input type="email" name="email" value="'.$_POST['email'].'" required>';
			    }
			    else{
			        echo  '<input type="email" name="email" placeholder="Email" required>'; }?>
			<?php 
			if(isset($_POST['pwd']))
				{
					echo '<input type="password" name="pwd" value="'.$_POST['pwd'].'" required>';
				}
				else 
				{
					echo '<input type="password" name="pwd" placeholder="Password" required>';
				}
				?>

			<button type="submit">Login</button>
            <br>
            <span style="color: white;"> New User? <a style="color: red;" href="Signup.php">SignUp</a></span>
            <br><br>
            <span style="color: white;"> Forget Password? <a style="color: red;" href="reset.php">Reset</a></span><br><br>
            <span style="color: white;"><a style="color: white;" href="index.php">Go to Home</a></span><br><br>
		</form>
	</div><br>
    <br>
<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){

     	  $email = $_POST['email'];
     	  $pwd = $_POST['pwd'];
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
     	  $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

     	  $sql = "SELECT * from users where email = '$email'; ";
     	  $result = mysqli_query($conn,$sql);

     	  if(mysqli_num_rows($result) != 1)
     	  {
     	  	echo '<script> alert("Email is not yet registered!"); </script> ';
     	  }
     	  else
     	  {
     	  	$row = mysqli_fetch_assoc($result);

            if($pwd != $row['pwd']){
                 echo '<script> alert("Email or Password is wrong!"); </script> ';
            }
            else{

     	        $_SESSION['name'] = $row['name'];
     	        $_SESSION['email'] = $row['email'];  
                header("Location: clubs.php");
                exit();
             }
           }
     	}
 ?>
</body>
</html>