<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<title>Create Admin - Eventally</title>
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
	      height: 500px;
         }

    	.container-center
         {
	     position: absolute;
	     top: 55%;
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
		height: 500px;
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
          margin-top: 15%;
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
            <img src="../logo1.png" class="rotate" width="70px">
        </div>
        <div class="div2">
        	<p>Eventally</p>
	    </div>
	</div>
	<div class="container container-center">
    <h1> Create Admin </h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<?php
			    if(isset($_POST['uname'])){
			        echo '<input type="text" name="name" value="'.$_POST['name'].'" required>';
			    }
			    else{
			        echo '<input type="text" name="name" placeholder="Name then initial" required>'; }?>
			<?php
			    if(isset($_POST['email'])){
			    	echo '<input type="email" name="email" value="'.$_POST['email'].'" required>';
			    }
			    else{
			        echo  '<input type="email" name="email" placeholder="Email" required>'; }?>
			<?php
			    if(isset($_POST['pwd'])){
			    	echo '<input type="password" name="pwd" value="'.$_POST['pwd'].'" required>';
			    }
			    else{
			    	echo '<input type="password" name="pwd" placeholder="Set Password" required>'; }?>
			<?php
			    if(isset($_POST['college'])){
			        echo '<input type="text" name="college" value="'.$_POST['college'].'" required>';
			    }
			    else{
			        echo '<input type="text" name="college" placeholder="College" required>'; }?>			    	
			<button>Create</button>
            <br>
            <span style="color: white;"> Go to Home? <a style="color: red;" href="../index.php">Home</a></span>
            <br><br>
		</form><br><br>
	</div>
<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){
     	  $name = $_POST['name'];
     	  $email = $_POST['email'];
     	  $pass = $_POST['pwd'];
     	  $college = $_POST['college'];

          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";

     	  $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
     	  $sql = "SELECT name from admin where name = '$name'; ";
     	  $result = mysqli_query($conn,$sql);

     	  if(mysqli_num_rows($result) > 0)
     	  {
     	  	echo '<script> alert("Admin Name already available!"); </script> ';
     	  }
     	  else
     	  {
     	  	$sql = "SELECT * from admin where email = '$email'; ";
     	    $result = mysqli_query($conn,$sql);
     	  }

     	  if(mysqli_num_rows($result) > 0)
     	  {
     	  	echo '<script> alert("Email already been registered!"); </script> ';
     	  }
     	  else
     	  {
     	  	$sql = "INSERT into admin (name, email, pass, college) VALUES('$name', '$email', '$pass', '$college')";
     	    mysqli_query($conn,$sql);

     	    $_SESSION['name'] = $name;
     	    $_SESSION['email'] = $email;
              
            header("Location: crtadmin.html");
            exit();
     	  }

     }?>
</body>
</html>