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
	<meta charset="utf-8">
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<style>
    body
    {
    	background-color: #000000;
    	font-family: sans-serif;
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

        .container-center
        {
          left: 50%;
          transform: translate(-50%, 25%);
        }

	.prof{
		width: 20%;
		height: 20%;
		border-radius: 20px;
		padding-top: 2%;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	.link
	{
		background-color: red;
		border-radius: 15px;
		color: white;
		text-decoration: none;
		padding: 15px;
	}
	@media only screen and (max-width: 750px)
	{
		.container
		{
			width: 25em;
		}
		.prof
		{
			width: 30%;
		}
	}
	@media only screen and (max-width: 500px)
	{
		.container
		{
			width: 18em;
		}
		.prof
		{
			width: 40%;
		}
		.container-center
		{
		    transform: translate(-50%,20%);
		}
	}
	@media only screen and (max-width: 400px)
	{
		.container
		{
			width: 16em;
		}
		.prof
		{
			width: 60%;
		}

		h1
		{
			word-break: break-all;
		}
		
		h2
		{
			display: flex;
			flex-wrap: wrap;
			word-break: break-all;
		}
		.container-center
		{
		    transform: translate(-50%, 20%);
		}
	}
	@media only screen and (orientation: landscape)
	{
	    .container-center
	    {
	       transform: translate(-50%, 20%);   
	    }
	}
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]
    {
        display: none;
    }
</style>
<body>
  <div class="container container-center">
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
     echo '<img class="prof" src="'.$row['photo'].'"><br>';
     echo '<h1>'.$row['name'].'</h1>';
     echo '<h2>'.$row['email'].'</h2><br>';
     echo '<a href="editpro.php" class="link">Set Profile Image</a>&nbsp;&nbsp;';
     echo '<a class="link" href="logout.php">Logout</a>';
     echo '<br><br><br><br>';
     echo '<span> Go Back? <a href="clubs.php">Back</a></span>';
    }
 }
  ?>
  </div>
</body>
</html>